<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
use OpenTok\OpenTok;
use OpenTok\MediaMode;
class Auth extends   CI_Controller {
	 public $opentok;
	function __construct() {
	parent::__construct();
	//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	$this->load->library(array('session', 'upload','form_validation','facebook'));
	$this->load->helper(array('url', 'html', 'form','cookie'));
	 $this->load->model('Users_model', 'obj_model', TRUE);  
   $this->load->helper('date');    
    }
	
	public function index(){
		$data['tab'] = 'index';
		$data['authURL'] =  $this->facebook->login_url();
		if($this->input->post("submit")){
			$this->form_validation->set_rules('username','User name','required');
			$this->form_validation->set_rules('password','Password','required');
			if($this->form_validation->run() == TRUE){
				$uname = stripslashes($this->input->post("username"));
				$paswrd = stripslashes(md5($this->input->post("password")));
				$result = $this->users_model->getUserLogin($uname, $paswrd);
				if(!$result || $result == FALSE)
				{
					$this->session->set_flashdata('err_msg','Incorrect Username/Password');
					redirect('/',"refresh");
				} else {
                    if(null !== $this->input->post("remeberme")){
						$dataremeber['series_identifier']   = $this->generateToken(20);
						$dataremeber['token']   = $this->generateToken(20);
						
						$resrember=$this->obj_model->setUserToken($dataremeber,$result['user_id']);
                        if($resrember){
							$cookie= array(
								'name'   => 'serialidetifier',
								'value'  => "".$dataremeber['series_identifier'],                            
								'expire' => '300',                                                                                   
								'secure' => FALSE
							);
							$this->input->set_cookie($cookie);
							$cookie = array(
								'name'   => "token",
								'value'  => "".$dataremeber['token'],                            
								'expire' => '300',                                                                                   
								'secure' => FALSE
								);
							$this->input->set_cookie($cookie);
						}
					}
					$this->doLogin($result);
				}
			}
			
		} else if(null != $this->input->cookie('serialidetifier',true) && null !=  $this->input->cookie('token',true)){
			$user_remeber = $this->users_model->getUserByToken($this->input->cookie('token',true),$this->input->cookie('serialidetifier',true));
			if(null != $user_remeber){
				$this->doLogin($user_remeber);
			}else {
				$this->load->view('auth/sign-in', $data);
			}
		}
		$this->load->view('auth/sign-in', $data);
	}
    function doLogin($result){
		$users_id = $result['user_id'];
		$users_name = $result['user_name'];
		$session_array = array('user_id'=>$users_id,'user_name'=>$users_name);
		$this->session->set_userdata($session_array);
		$param['user_id']=$users_id;
		$uid=$users_id;
		$res=$this->obj_model->check_session($uid);
		$sessionId;
		$opentok = new OpenTok($this->config->item('opentok_key'), $this->config->item('opentok_secret'));
		foreach($res as $row){
			if($row==null){
				$session = $opentok->createSession(array('mediaMode' => MediaMode::ROUTED));
				$sessionId = $session->getSessionId();
			}else{
				$sessionId=$row;
			}
		}
		$data['tokenid'] = $opentok->generateToken($sessionId);	
		$this->obj_model->insert_session($uid,$sessionId);
		$session_array = array('user_id'=>$users_id,'user_name'=>$users_name,'token' => $data['tokenid'],'openSessionId' =>$sessionId );
		$this->session->set_userdata($session_array);
		$unameTest=$this->users_model->checkUserOnline($users_id);
		if(!empty($unameTest)){
			$unameTest=$this->users_model->UpdateOnline($users_id,1);
		}else{
			$result = $this->users_model->InsertOnline($param);
		}
		redirect('user/profile',"refresh");
	}
	function generateToken($length = 20)
	{
       return bin2hex(random_bytes($length));
	}

	
	
    public function startVideo()
    {               
        $opentok = new OpenTok($this->config->item('opentok_key'), $this->config->item('opentok_secret'));

        $session = $opentok->createSession();

        $data = array(
            'apiKey' => $this->config->item('opentok_key'),
            'sessionId' => $session->getSessionId(),
            'token' => $session->generateToken()
        );
        echo "<pre />"; print_r($data);
       // $this->load->view('video_11', $data);       
    }       
	
	
	//public function validate_age($dob) {
		
		
		// $dob=date('Y-m-d', strtotime($dob))   ;
       //$dob = new DateTime($dob);
       //$dob=setTimestamp($dob);
        // $now = new DateTime();
	
       // return ($now->diff($dob)->y < 18) ? false : true;
    //}
	public function register(){
		$data['tab'] = 'register';
		$data['authURL'] =  $this->facebook->login_url();
		
		
			
					if(isset($_POST['register'])){
				$first=$this->input->post("fname");
				$last=$this->input->post("lastname");
				$full_name = $first. " " . $last;
                $dob = $this->input->post("dob"); 
				$nick = $this->input->post("nick_name");
                $dob=date('Y-m-d', strtotime($dob))   ;
				$from = new DateTime($dob);
				$to   = new DateTime('today');
				$age= $from->diff($to)->y;
				
				$insertData=array('full_name'=>$full_name,'email'=>$this->input->post("email"),'gender'=>$this->input->post("gender"),'dob'=>$dob,'age'=>$age,'user_name'=>$this->input->post("u_name"),'password'=>md5($this->input->post("u_pass")));
					$result_data = $this->users_model->InsertUser($insertData,$nick);
				
				if($result_data['success'])
				{
					$this->session->set_flashdata("success",'Successfully registered..Please login to continue !!');
					redirect('/', "refresh");
				}
			}
		
		$this->load->view('auth/sign-in', $data);
	}

	public function checkEmail(){
		$params =$this->input->post('email');
		$emailTest=$this->users_model->checkEmail($params);
		if(!empty($emailTest)){echo json_encode(array('status'=>1));}else{echo json_encode(array('status'=>0));}
	}
	
	public function resetpass(){
		$params =$this->input->post('reemail');
		$unameTest=$this->users_model->checkmail($params);
		
		$str	=	 '';
		if(count($unameTest)==0)
				{
					echo "no data";
				}
				else
				{
					foreach($unameTest as $uname)
					{
						$user=$uname['user_id'];
						
					}
					
					 $token = md5(uniqid(rand(), true ));
					
					$token_set=$this->users_model->insert_token($token,$user);
					
					
					/////////////////////
					
					
					$this->load->library('email');

					$config = Array(
					'protocol' => 'MAIL_DRIVER',
					'MAIL_HOST' => 'mail.codefacetech.com',
					'MAIL_PORT' => 26,
					'MAIL_USERNAME' => 'cfemp08d@gmail.com',
					'MAIL_PASSWORD' => 'J9#PPxLep1pO',
					'mailtype'  => 'html', 
					'charset'   => 'utf-8'
				);

			$this->email->initialize($config);
			$this->email->set_newline("\r\n");

			$clean = $this->security->xss_clean($this->input->post(NULL, TRUE));

			$qstring = base64_encode($token);                    
			$url = site_url() .'/Auth/newpass/'.$token.'/'.$user;
			$link = '<a href="' . $url . '">Activation Link</a>'; 

			$message = '';                     

			$message .= '<strong>please click the link for change the password:</strong> '. $link;                        

			$toEmail = $this->input->post('reemail');
			$to = $toEmail; # undefine 
			$this->email->clear();
			$this->email->from('info@codefacetech.com');
			$this->email->to($to);
			$this->email->subject('Thanks for registering');
			$this->email->message($message);

			if(!$this->email->send())
			{ 
				echo "fail <br>";
				echo $this->email->print_debugger();
				/*$this->session->set_flashdata('flash_message', 'Password reset fail.');
				redirect(site_url().'/main/register');*/
			}
			else
			{       
				  
			   $this->session->set_flashdata('flash_message', 'Please check the mail.');
				redirect('user/profile',"refresh");
			}
		    }				
			}

	public function checkUsername(){
		$params =$this->input->post('uname');
		$unameTest=$this->users_model->checkUserName($params);
		if(!empty($unameTest)){echo json_encode(array('status'=>1));}else{echo json_encode(array('status'=>0));}
	}


    public function logout() {
		$user_id=$this->session->userdata('user_id');
	
		$unameTest=$this->users_model->UpdateOnline($user_id,0);
		$array_items = array('user_name' => '', 'user_id' => '');
		$this->session->unset_userdata($array_items);
		$this->session->sess_destroy();
		$cookie = array(
			'name'   => 'serialidetifier',
			'value'  => '',
			'expire' => '0'
			);
		 
		delete_cookie($cookie);
		$cookie = array(
			'name'   => 'token',
			'value'  => '',
			'expire' => '0'
			);
		delete_cookie($cookie);
		$page_content['error'] = "Logged out successfully";
		$page_content['title'] = 'Login';
		redirect(base_url());
    }

    public function fetch_data() {
	$opentok = new OpenTok($this->config->item('opentok_key'), $this->config->item('opentok_secret'));
	$session = $opentok->createSession(array(
		'mediaMode' => MediaMode::ROUTED
	));
	$sessionId = $session->getSessionId();
	$userid=$_POST['uid'];
	$result=$this->obj_model->fetch_session($userid);
	$opentok_sessionid = $result['session_id'];
	$opntok_tokenId = $opentok->generateToken($opentok_sessionid);
	echo json_encode(array('sessionId'=>$opentok_sessionid,'tokenId'=>$opntok_tokenId));
    }
    public function newpass()
			{	
			 	$this->load->view("user/newpass");
			}
			public function setnewpass()
			{	
			// $user =$this->input->post('first');
			 $pass =md5($this->input->post('second'));
			 $params =$this->input->post('tok');
			 $user =$this->input->post('user');
			$unameTest=$this->users_model->user_pass_rest($params,$pass,$user);
			$unameTest=$this->users_model->delete_token($user);
			redirect('user/profile',"refresh");
			}
}