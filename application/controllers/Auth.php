<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
use OpenTok\OpenTok;
use OpenTok\MediaMode;
class Auth extends   CI_Controller {
	 public $opentok;
	function __construct() {
	parent::__construct();
	//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	$this->load->library(array('session', 'upload','form_validation'));
	$this->load->helper(array('url', 'html', 'form'));
	 $this->load->model('Users_model', 'obj_model', TRUE);   
    }
	
	public function index(){
		$data['tab'] = 'index';
		if($this->input->post("submit"))
		{
			$this->form_validation->set_rules('username','User name','required');
			$this->form_validation->set_rules('password','Password','required');
			if($this->form_validation->run() == TRUE)
			{
			$uname = stripslashes($this->input->post("username"));
			$paswrd = stripslashes(md5($this->input->post("password")));
			$result = $this->users_model->getUserLogin($uname, $paswrd);
			if(!$result || $result == FALSE)
			{
				$this->session->set_flashdata('err_msg','Incorrect Username/Password');
				redirect('/',"refresh");
			} else {
				$users_id = $result['user_id'];
				$users_name = $result['user_name'];
				$session_array = array('user_id'=>$users_id,'user_name'=>$users_name);
				$this->session->set_userdata($session_array);
				$param['user_id']=$users_id;
				$uid=$users_id;
			/////
			
			
	
			
			 $opentok = new OpenTok($this->config->item('opentok_key'), $this->config->item('opentok_secret'));
        
		
			$session = $opentok->createSession(array(
				'mediaMode' => MediaMode::ROUTED
			));
		
		
			$res=$this->obj_model->check_session($uid);
		
			foreach($res as $row)
			{
			if($row==null)
				{
						$sessionId = $session->getSessionId();
				}
			else
				{
						$sessionId=$row;
	
				}
		
			}
		
		
      
		
       // $opentokData['sessionid']  = $sessionId;
       // $opentokData['tokenid']    = $opentok->generateToken($sessionId);
        $data['records'] = $sessionId;
        $data['tokenid'] = $opentok->generateToken($sessionId);
		$uid=$users_id;
		$sess=$sessionId;
		$this -> session -> set_userdata($data['tokenid']);
		$this->obj_model->insert_session($uid,$sess);
       //	   $this->load->view('login',$data);
	//	print_r($data['records']);exit;	
			
			$_SESSION['token_id']= $data['tokenid'];
			
			  $sess_data = array(
               'u_id'           => $users_id,
               'token'     => $data['tokenid']
              
             );
  
			
			
			
			
			
			
			
			
			
			//////////
				 
				 
				$unameTest=$this->users_model->checkUserOnline($users_id);
				if(!empty($unameTest)){
					$unameTest=$this->users_model->UpdateOnline($users_id,1);
				}else{
					$result = $this->users_model->InsertOnline($param);
				}
				redirect('user/profile',"refresh");
				
		}
		}}
		$this->load->view('auth/sign-in', $data);
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
	
	public function register(){
		$data['tab'] = 'register';
		
		if(isset($_POST['register'])){
			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('phone_no','Phone Number','required');
			$this->form_validation->set_rules('u_name','User name','required');
			$this->form_validation->set_rules('u_pass','Password','required');
			$this->form_validation->set_rules('gender','gender','required');
			$this->form_validation->set_rules('cc','agreement','required');
			
			if($this->form_validation->run() == TRUE){
				$insertData=array('full_name'=>$this->input->post("name"),'email'=>$this->input->post("email"),'mobile'=>$this->input->post("phone_no"),'gender'=>$this->input->post("gender"),'user_name'=>$this->input->post("u_name"),'password'=>md5($this->input->post("u_pass")));
				$result_data = $this->users_model->InsertUser($insertData);
				if($result_data['success'])
				{
					$this->session->set_flashdata("success",'Successfully registered..Please login to continue !!');
					redirect('/', "refresh");
				}
			}
		}
		$this->load->view('auth/sign-in', $data);
	}

	public function checkEmail(){
		$params =$this->input->post('email');
		$emailTest=$this->users_model->checkEmail($params);
		if(!empty($emailTest)){echo json_encode(array('status'=>1));}else{echo json_encode(array('status'=>0));}
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

}