<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use OpenTok\OpenTok;

class User extends  CI_Controller {
	protected $data=array();
	private $UserId=null;
	function __construct() {
	parent::__construct();
	//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	$this->load->library(array( 'upload','form_validation'));
	
	if ($this->session->userdata('user_name') == ''){
					redirect('login');
	}
	$this->load->model('profile_model');
	$this->UserId=$this->session->userdata('user_id');
    }
	public function profile()
	{
		  
		$this->data['feeds']   =    $this->profile_model->GetAllfeeds($this->UserId) ;
		$this->data['friendOnline'] = $this->users_model->GetOnlineFriends($this->UserId) ;
		$this->data['user'] =    $this->users_model->userinfo($this->UserId) ;
		
		
		
		
		
		
		
		
		
		$this->load->view("user/profile-status",$this->data);
		
	}
	
	public function profileSearch()
	{
		  
		$this->data['feeds']    =    $this->profile_model->GetAllfeeds($this->UserId) ;
		$this->data['onlinef']    =    $this->users_model->GetOnlineFriends($this->UserId) ;
		$this->data['user'] =    $this->users_model->userinfo($this->UserId) ;
		$this->load->view("user/public-profile",$this->data);
		
	}
	public function searchFriends(){
		$this->data['results']=null;
		if(isset($_POST['search'])){
           	$params['gender']=$this->input->post("looking");
           	$params['age']=$this->input->post("age");
           	$params['country']=$this->input->post("country");
			$params['user_id'] =$this->UserId;
          $this->data['results']    =    $this->users_model->GetSearchFriends($params) ;
		  
          }
		
		$this->load->view("user/public-profile-search",$this->data);
		
	}

	public function AccetFriends(){
		$params =$this->input->post('frinedId');
		$return=$this->users_model->AccetFriends($params,$this->UserId);
		if(!empty($return)){echo json_encode(array('status'=>1));}else{echo json_encode(array('status'=>0));}
	}
	
	public function friendRequest(){
		$params =$this->input->post('frinedId');
		$return=$this->users_model->friendRequest($params,$this->UserId);
		if(!empty($return)){echo json_encode(array('status'=>1));}else{echo json_encode(array('status'=>0));}
	}
	public function UpdateBasic(){
		$param['full_name'] =$this->input->post('full_name');
		$params['nick_name'] =$this->input->post('nick_name');
		$params['dob']=$this->input->post('dob');
		$params['gender'] =$this->input->post('gender');
		$params['visibility'] =$this->input->post('visibility');
		$return=$this->users_model->UpdateBasic($param,$params,$this->UserId);
		if(!empty($return)){echo json_encode(array('status'=>1));}else{echo json_encode(array('status'=>0));}
	}
public function UpdateLocation(){
		$params['country_id'] =$this->input->post('country_id');
		$params['address'] =$this->input->post('address');
		
		$return=$this->users_model->UpdateLocation($params,$this->UserId);
		if(!empty($return)){echo json_encode(array('status'=>1));}else{echo json_encode(array('status'=>0));}
	}

	public function UpdateOverview(){
		$params['description'] =$this->input->post('description');
		$return=$this->users_model->UpdateOverview($params,$this->UserId);
		if(!empty($return)){echo json_encode(array('status'=>1,'des'=>$params['description']));}else{echo json_encode(array('status'=>0));}
	}
public function videochat(){
	
		$opentok = new OpenTok($this->config->item('opentok_key'), $this->config->item('opentok_secret'));
		$session = $opentok->createSession();        
		$iSessionId = $session->getSessionId();
		
		
		$data = array(
			'apiKey' => $this->config->item('opentok_key'),
            'sessionId' => $iSessionId,
            'token' => $session->generateToken()
        );
      //  echo "<pre />"; print_r($data);
	  $this->load->view("user/videochat",$data);
		//$this->load->view('videochat', $data);
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