<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

use OpenTok\OpenTok;

class User extends CI_Controller
{
    protected $data = array();
    private $UserId = null;
    function __construct()
    {
        parent::__construct();
        //error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
        $this->load->library(array(
            'upload',
            'form_validation'
        ));
        $this->load->library(array(
            'session',
            'upload',
            'form_validation'
        ));
        if ($this->session->userdata('user_name') == '') {
            redirect('login');
        }
        $this->load->model('profile_model');
        $this->UserId = $this->session->userdata('user_id');
    }
    public function profile()
    {
        $this->data['feeds']         = $this->profile_model->GetAllfeeds($this->UserId);
        $this->data['friendOnline']  = $this->users_model->GetOnlineFriends($this->UserId);
        $this->data['user']          = $this->users_model->userinfo($this->UserId);
        //$this->data['privacy'] =    $this->users_model->privacy($this->UserId) ;
        $this->data['UserId']        = $this->session->userdata('user_id');
        $this->data['openToken']     = base64_encode($this->session->userdata('token'));
        $this->data['openSessionId'] = $this->session->userdata('openSessionId');
        $this->data['apiKey']        = $this->config->item('opentok_key');
        $this->load->view("user/profile-status", $this->data);
    }
    
    public function profileSearch()
    {
        
        $this->data['feeds']         = $this->profile_model->GetAllfeeds($this->UserId);
        $this->data['onlinef']       = $this->users_model->GetOnlineFriends($this->UserId);
        $this->data['user']          = $this->users_model->userinfo($this->UserId);
        $this->data['countries']     = $this->users_model->getAllcountries();
        $this->data['openToken']     = base64_encode($this->session->userdata('token'));
        $this->data['openSessionId'] = $this->session->userdata('openSessionId');
        $this->data['apiKey']        = $this->config->item('opentok_key');
        $this->load->view("user/public-profile", $this->data);
        
    }
    public function searchFriends()
    {
        $this->data['results'] = null;
        if (isset($_POST['search'])) {
            $params['gender']  = $this->input->post("looking");
			
            $params['age']     = $this->input->post("age");
            $params['country'] = $this->input->post("country");
			
            
            if ($params['age'] == 1) {
                $params['age_from'] = 18;
                $params['age_to']   = 30;
            }
            if ($params['age'] == 2) {
                $params['age_from'] = 30;
                $params['age_to']   = 45;
            }
            if ($params['age'] == 3) {
                $params['age_from'] = 22;
                $params['age_to']   = 200;
            }
		
            $this->data['countries'] = $this->users_model->getAllcountries();
            $params['user_id']       = $this->UserId;
            $this->data['results']   = $this->users_model->GetSearchFriends($params);
            
        }
        $this->data['user']          = $this->users_model->userinfo($this->UserId);
        $this->data['openToken']     = base64_encode($this->session->userdata('token'));
        $this->data['openSessionId'] = $this->session->userdata('openSessionId');
        $this->data['apiKey']        = $this->config->item('opentok_key');
        
        $this->load->view("user/public-profile-search", $this->data);
        
    }
    
    
    
    
    public function AccetFriends()
    {
        $params = $this->input->post('frinedId');
        $use    = $this->input->post('Uid');
        
        $name     = $this->users_model->username($use);
        $myString = $name . " Accepted your friend request";
        $name     = $this->users_model->insertnotification($myString, $params, $use);
        
        
        $return = $this->users_model->AccetFriends($params, $this->UserId);
        if (!empty($return)) {
            echo json_encode(array(
                'status' => 1
            ));
        } else {
            echo json_encode(array(
                'status' => 0
            ));
        }
    }
    
    public function friendRequest()
    {
        $params = $this->input->post('frinedId');
        $use    = $this->input->post('Uid');
        
        $name     = $this->users_model->username($use);
        $myString = $name . " sent a friend request to you";
        
        
        $name = $this->users_model->insertnotification($myString, $params, $use);
        
        
        
        $return = $this->users_model->friendRequest($params, $this->UserId);
        if (!empty($return)) {
            echo json_encode(array(
                'status' => 1
            ));
        } else {
            echo json_encode(array(
                'status' => 0
            ));
        }
    }
    public function update_age()
    {
        $age = $this->input->post('age');
        
        $return = $this->users_model->ageintrest($age, $this->UserId);
        if (!empty($return)) {
            echo json_encode(array(
                'status' => 1
            ));
        } else {
            echo json_encode(array(
                'status' => 0
            ));
        }
    }
    
    public function UpdateBasic()
    {
        $param['full_name']   = $this->input->post('full_name');
        $params['nick_name']  = $this->input->post('nick_name');
        $dob                  = $this->input->post('dob');
        $age                  = $this->input->post('age');
       //
        $gen                  = $this->input->post('gender');
     //   $params['visibility'] = $this->input->post('visibility');
		
	/*	echo $dob;
		echo $age;
		echo $gen;
		print_r($param);	print_r($params);exit;*/
		
		
		
			//	$from = new DateTime($dob);
			//	$to   = new DateTime('today');
				//$ageus= $from->diff($to)->y;
				
			 
  /*  $diff = (date('Y') - date('Y',strtotime($dob)));
  $ageuser= $diff;
				 $dob                  = date('Y-m-d', strtotime($dob));*/
				 
				 
				  $now = date('d-m-Y');
				      $t = $dob;          
			    	  $val =  explode("/",$dob);
				
                  $tdye =  $val[2]; 
			       $val1 =  explode("-",$now);	
			
                   $nw =  $val1[2] ;			 
			     	$age=$nw- $tdye ;
					 $dobs = $this->input->post("dob"); 
			$dobs=  $val[2]."/".  $val[1]."/".  $val[0];
$ageuser=$age;
				
				
        $return               = $this->users_model->UpdateBasic($param, $params, $this->UserId, $dobs, $gen, $age,$ageuser);
        if (!empty($return)) {
            echo json_encode(array(
                'status' => 1, 'ageuser' => $ageuser
            ));
        } else {
            echo json_encode(array(
                'status' => 0
            ));
        }
    }
    public function UpdateLocation()
    {
        $params['country_id'] = $this->input->post('country_id');
        
        
        $return            = $this->users_model->UpdateLocation($params, $this->UserId);
        $params['country'] = $this->users_model->selectLocation($params);
        
        if (!empty($return)) {
            echo json_encode(array(
                'status' => 1,
                'country' => $params['country']
            ));
        } else {
            echo json_encode(array(
                'status' => 0
            ));
        }
    }
    public function update_Interest()
    {
        $intr = $this->input->post('interest');
        
        $return = $this->users_model->Updateintrest($intr, $this->UserId);
        if (!empty($return)) {
            echo json_encode(array(
                'status' => 1
            ));
        } else {
            echo json_encode(array(
                'status' => 0
            ));
        }
    }
    
    public function UpdateOverview()
    {
        $params['description'] = $this->input->post('description');
        $return                = $this->users_model->UpdateOverview($params, $this->UserId);
        if (!empty($return)) {
            echo json_encode(array(
                'status' => 1,
                'des' => $params['description']
            ));
        } else {
            echo json_encode(array(
                'status' => 0
            ));
        }
    }
    public function videochat()
    {
        
        $opentok    = new OpenTok($this->config->item('opentok_key'), $this->config->item('opentok_secret'));
        $session    = $opentok->createSession();
        $iSessionId = $session->getSessionId();
        
        
        $data = array(
            'apiKey' => $this->config->item('opentok_key'),
            'sessionId' => $iSessionId,
            'token' => $session->generateToken()
        );
        //  echo "<pre />"; print_r($data);
        $this->load->view("user/videochat", $data);
        //$this->load->view('videochat', $data);
    }
    
    public function fetch_data()
    {
        $opentok           = new OpenTok($this->config->item('opentok_key'), $this->config->item('opentok_secret'));
        $session           = $opentok->createSession(array(
            'mediaMode' => MediaMode::ROUTED
        ));
        $sessionId         = $session->getSessionId();
        $userid            = $_POST['uid'];
        $result            = $this->obj_model->fetch_session($userid);
        $opentok_sessionid = $result['session_id'];
        $opntok_tokenId    = $opentok->generateToken($opentok_sessionid);
        echo json_encode(array(
            'sessionId' => $opentok_sessionid,
            'tokenId' => $opntok_tokenId
        ));
    }
    public function notification()
    {
        $fr_id   = $this->input->post('Fid');
        $user_id = $this->input->post('Uid');
        
    }

    
    
}