<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
use OpenTok\OpenTok;
use OpenTok\MediaMode;
class Profile extends  CI_Controller {
	protected $data=array();
	private $UserId=null;
	function __construct() {
		parent::__construct();
		//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		$this->load->library(array( 'upload','form_validation'));	
		$this->load->library(array( 'upload','form_validation'));
		$this->load->library('upload');
		$this->load->helper(array('form', 'url'));
		$this->load->database();
		if ($this->session->userdata('user_name') == ''){
			redirect('login');
		}
		$this->load->model('profile_model');
		$this->load->model('Users_model', 'obj_model', TRUE); 
		$this->UserId=$this->session->userdata('user_id');
    }
	public function myProfile()
	{
		
		$this->data['friendList']  = $this->users_model->GetFriendList($this->UserId) ;
		$this->data['profileViewer']  = $this->profile_model->GetProfileViewerList($this->UserId) ;
		$this->data['friendsRequest'] =    $this->users_model->GetFriendsRequest($this->UserId) ;
		$this->data['date']=    $this->users_model->fetch_dob($this->UserId) ;
		foreach($this->data['date'] as $dos)
		{
			$dob=$dos['dob'];
		}
		$from = new DateTime($dob);
		$to   = new DateTime('today');
		$age= $from->diff($to)->y;
		$this->data['age'] = $age;
		$this->data['mydata'] =    $this->users_model->GetMyData($this->UserId) ;
		//print_r($this->data['age']);exit;
		$this->data['user'] =    $this->users_model->userinfo($this->UserId) ;
	    $this->data['image'] =    $this->users_model->imageinfo($this->UserId) ;
		$this->data['countries'] = $this->users_model->getAllcountries();
		//print_r($this->data['countries']);exit;
		$this->data['feeds']   =    $this->profile_model->GetUserfeeds($this->UserId) ;
		$this->data['openToken']=base64_encode($this->session->userdata('token'));
		$this->data['openSessionId']=$this->session->userdata('openSessionId');
		$this->data['apiKey']= $this->config->item('opentok_key');
		$this->load->view("user/my-profile",$this->data);
		
	}
	
	
	public function profileView($friendId)
	{
		  
		$this->data['friendList']  = $this->users_model->GetFriendList($friendId) ;
		$this->data['photos']  = $this->profile_model->GetUserPhotos($friendId) ;
		$this->data['profileViewer']  = $this->profile_model->GetProfileViewerList($friendId) ;
		$this->data['mydata'] =    $this->users_model->GetMyData($friendId) ;
		
		//print_r($this->data['photos']);exit;
		$this->data['feeds']   =    $this->profile_model->GetUserfeeds($friendId) ;
		$this->data['user'] =    $this->users_model->userinfo($this->UserId) ;
		$result= $this->profile_model->checkVisit(array('visitor_id'=>$this->UserId,'user_id'=>$friendId)) ;
		if(empty($result)){
		$s= $this->profile_model->InsertVisit(array('user_id'=>$friendId,'visitor_id'=>$this->UserId)) ;
		}
		$this->data['openToken']=base64_encode($this->session->userdata('token'));
		$this->data['openSessionId']=$this->session->userdata('openSessionId');
		$this->data['apiKey']= $this->config->item('opentok_key');
		$this->load->view("user/profile-view",$this->data);
		
	}
	public function settings()
	{
		  
		$this->data['friendsRequest'] =    $this->users_model->GetFriendsRequest($this->UserId) ;
		$this->data['user'] =    $this->users_model->userinfo($this->UserId) ;
			$this->data['openToken']=base64_encode($this->session->userdata('token'));
		$this->data['openSessionId']=$this->session->userdata('openSessionId');
		$this->data['apiKey']= $this->config->item('opentok_key');
		$this->load->view("user/profile-account-setting",$this->data);
		
	}
	public function messages()
	{  
		$opentok = new OpenTok( $this->config->item('opentok_key'), $this->config->item('opentok_secret'));//'46163292', '436f0b34f67e82089f741ff6509c9608919f8d82'
	    if (isset($_GET['user'])){
			$userid=$_GET['user'];
			$this->data['caller'] = "Y";  
		} else {
			$userid=$this->UserId;
			$this->data['caller'] = "N";
		} 
		$result=$this->users_model->fetch_session($userid);
		$opentok_sessionid = $result['session_id'];
		$opntok_tokenId = $opentok->generateToken($opentok_sessionid);

		$this->data['feeds']   =    $this->profile_model->GetAllfeeds($this->UserId) ;
		$this->data['onlinef']    =    $this->users_model->GetOnlineFriends($this->UserId) ;
		$this->data['openTokapi']  = $this->config->item('opentok_key');
		$this->date['opentokenid']     = $opntok_tokenId;
		$this->data['openSessionId']    = $opentok_sessionid;
		$str=base64_encode($opntok_tokenId);
		$this->data['openSession']=urlencode($str);
		$this->date['responsedata'] = json_encode(array(
            'apiKey' => $this->config->item('opentok_key'),
            'sessionId' => $opentok_sessionid,
            'token'=>$opntok_tokenId
        ));
		$this->data['user'] =    $this->users_model->userinfo($this->UserId) ;
		$this->load->view("user/messages",$this->data);
		
	}public function messages_stranger()
	{  
		$opentok = new OpenTok( $this->config->item('opentok_key'), $this->config->item('opentok_secret'));//'46163292', '436f0b34f67e82089f741ff6509c9608919f8d82'
	    if (isset($_GET['user'])){
			$userid=$_GET['user'];
			$this->data['caller'] = "Y";  
		} else {
			$userid=$this->UserId;
			$this->data['caller'] = "N";
		} 
		$result=$this->users_model->fetch_session($userid);
		$opentok_sessionid = $result['session_id'];
		$opntok_tokenId = $opentok->generateToken($opentok_sessionid);

		$this->data['feeds']   =    $this->profile_model->GetAllfeeds($this->UserId) ;
		$this->data['onlinef']    =    $this->users_model->GetOnlineFriends($this->UserId) ;
		$this->data['openTokapi']  = $this->config->item('opentok_key');
		$this->date['opentokenid']     = $opntok_tokenId;
		$this->data['openSessionId']    = $opentok_sessionid;
		$str=base64_encode($opntok_tokenId);
		$this->data['openSession']=urlencode($str);
		$this->date['responsedata'] = json_encode(array(
            'apiKey' => $this->config->item('opentok_key'),
            'sessionId' => $opentok_sessionid,
            'token'=>$opntok_tokenId
        ));
		$this->data['user'] =    $this->users_model->userinfo($this->UserId) ;
		$this->load->view("user/messages",$this->data);
		
	}
	public function messagesUser()
	{
	   $this->data['user'] =    $this->users_model->userinfo($this->UserId) ;
		$this->data['feeds']   =    $this->profile_model->GetAllfeeds($this->UserId) ;
		$this->data['onlinef']    =    $this->users_model->GetOnlineFriends($this->UserId) ;
		
		$this->load->view("user/messages_user",$this->data);
		
	}
	public function notifications()
	{
		  
		$this->data['feeds']   =    $this->profile_model->GetAllfeeds($this->UserId) ;
		$this->data['onlinef']    =    $this->users_model->GetOnlineFriends($this->UserId) ;
		$this->data['user'] =    $this->users_model->userinfo($this->UserId) ;
		$this->data['notifications'] =    $this->users_model->notication_list($this->UserId) ;
		
		//print_r($this->data['notifications']);exit;
		
		
		$this->data['openToken']=base64_encode($this->session->userdata('token'));
		$this->data['openSessionId']=$this->session->userdata('openSessionId');
		$this->data['apiKey']= $this->config->item('opentok_key');
		$this->load->view("user/notification",$this->data);
		
	}
	public function notifications_tab()
	{
		
		  
		$this->data['feeds']   =    $this->profile_model->GetAllfeeds($this->UserId) ;
		$this->data['onlinef']    =    $this->users_model->GetOnlineFriends($this->UserId) ;
		$this->data['user'] =    $this->users_model->userinfo($this->UserId) ;
		$this->data['notifications'] =    $this->users_model->notication_list($this->UserId) ;
	//	foreach($this->data['notifications']  as $row){
	//	
		
	//$this->data	='<div>"'.$row->messages.''.$row->profile_pic.''.$row->gender.'</div>';
	//	echo json_encode($this->data);
	//	}
		
		
		//$this->load->view("user/header",$this->data);
		
		$this->data['openToken']=base64_encode($this->session->userdata('token'));
		$this->data['openSessionId']=$this->session->userdata('openSessionId');
		$this->data['apiKey']= $this->config->item('opentok_key');
	//	foreach($this->data['notifications']  as $row){

	//$this->data	='<div>"'.$row->messages.''.$row->profile_pic.''.$row->gender.'</div>';
	//	echo json_encode($this->data);
	//	}
		
		
		$this->load->view("user/header",$this->data);
		
	}
	
	public function profileSearch()
	{
		  
		$this->data['feeds']    =    $this->profile_model->GetAllfeeds($this->UserId) ;
		$this->data['onlinef']    =    $this->users_model->GetOnlineFriends($this->UserId) ;
		$this->data['openToken']=base64_encode($this->session->userdata('token'));
		$this->data['openSessionId']=$this->session->userdata('openSessionId');
		$this->data['apiKey']= $this->config->item('opentok_key');
		$this->load->view("user/public-profile",$this->data);
		
	}
	
	public function friends()
	{
		$this->data['friendList']  = $this->users_model->GetFriendList($this->UserId) ;
		$this->data['friendOnline'] = $this->users_model->GetOnlineFriends($this->UserId) ;
		$this->data['friendsRequest'] =    $this->users_model->GetFriendsRequest($this->UserId) ;
		$this->data['user'] =    $this->users_model->userinfo($this->UserId) ;
		$this->data['openToken']=base64_encode($this->session->userdata('token'));
		$this->data['openSessionId']=$this->session->userdata('openSessionId');
		$this->data['apiKey']= $this->config->item('opentok_key');
		//print_r($this->data);exit;
		
		$this->data['user'] =    $this->users_model->userinfo($this->UserId) ;
		$this->load->view("user/profiles",$this->data);	
	}
	
	
	public function UpdateLike(){
		

		$feedId =$this->input->post('feedId');
		 $uid =$this->input->post('Uid');
		 $fid =$this->input->post('fid');
		
		$name=$this->users_model->username($uid);
          $myString = $name." Liked your post";
	
		 
		$name=$this->users_model->insertnotification($myString,$fid,$uid);
		
		
		
		$return=$this->profile_model->setLike($feedId,$this->UserId);
		if(!empty($return)){echo json_encode(array('status'=>1,'lik'=>$return));}else{echo json_encode(array('status'=>0));}
	}
	
	public function change(){
   
   
 
	$id= $this->UserId;
	$old=$this->input->post('oldpassword');
	$password=$this->input->post('password');
	$password1=$this->input->post('repassword');
	
		$this->data['openToken']=base64_encode($this->session->userdata('token'));
		$this->data['openSessionId']=$this->session->userdata('openSessionId');
		$this->data['apiKey']= $this->config->item('opentok_key');
	
	
	
	/*if(strlen($password)<6){
		$this->data['error']="Password Contain at least 6 characters ";
		$this->load->view('change_password',$this->data);
	}
     */
	$res=$this->profile_model->check_pass(md5($old),$id);
	
	if(!empty($res)){
		
	if($password==$password1){
		$password=md5($password);
		$id=$this->profile_model->update_pass($password,$id);
		$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Password Changed</div>');
		//redirect('user/profile');
		$this->load->view("user/profile-account-setting",$this->data);
		
	}else{
		
		$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Password Mismatch</div>');
		$this->data['friendsRequest'] =    $this->users_model->GetFriendsRequest($this->UserId) ;
		$this->load->view("user/profile-account-setting",$this->data);
		}
	}else{
		
		$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Old Password Mismatch</div>');
		$this->data['friendsRequest'] =    $this->users_model->GetFriendsRequest($this->UserId) ;
		$this->load->view("user/profile-account-setting",$this->data);
	}
}


	public function deleteFeed($product_id = NULL){
     	$del= $this->uri->segment('3');
        $result_data = $this->profile_model->deleteFeed($del);
     	if($result_data['success'])
				{
					
					redirect('/user/profile', "refresh");
				}
			
		redirect('/user/profile', "refresh");
}






	public function postFeed(){
		if(isset($_POST['register'])){
			$this->form_validation->set_rules('feeds','feeds','required');
			if($this->form_validation->run() == TRUE){
				
				$insertData=array('user_id'=>$this->UserId,'feeds'=>$this->input->post("feeds"));
				$result_data = $this->profile_model->InserFeeds($insertData);
				if($result_data['success'])
				{
					
					redirect('/user/profile', "refresh");
				}
			}
		}
		redirect('/user/profile', "refresh");
	}
	
	
	public function edit_data(){
		$feed_id =$this->input->post('val');

		$result = $this->profile_model->editfeed($feed_id);
	

	$value = $result['feeds'];
	$id= $result['id'];
	echo json_encode(array('feed'=>$value,'feedid'=>$id));
		
		
	
	}
	
	public function updateFeed(){ 
		
		$feed=$_POST['feed-edit'];
		$feedid=$_POST['feed-id'];
		
		$result = $this->profile_model->updatefeed($feed,$feedid);
		redirect('/user/profile', "refresh");
		}
		
		
		public function hideFeed(){ 
		
		$id= $this->uri->segment('3');
		$uid= $this->uri->segment('4');
		
		$result = $this->profile_model->hideFeed($id,$uid);
		redirect('/user/profile', "refresh");
	}
			
	
		

    public function getprofile(){
		$user_id =$this->input->post('user_id');
		$return=$this->users_model->GetMyData($user_id);
		if(!empty($return)){echo json_encode(array('status'=>1,'pr'=>$return));}else{echo json_encode(array('status'=>0));}
    }
		
		///////////////////////
		
	public function UploadProfile(){ 
		   $user_id=$_POST['abc'];
		          
            $flag=0;
            $file=$_FILES['photopro'];
            $file_name = $file['name'];
            $file_tmp = $file['tmp_name'];   
               $file_ext = explode('.',$file_name); 
               $file_ext = strtolower(end($file_ext));
               $allowed = array("gif","png","jpg","jpeg");
           if(in_array($file_ext,$allowed)){
               $file_name_new = uniqid('',true).'.'.$file_ext;

               $file_destination = './uploads/profile_pic/' .$file_name;
                if(move_uploaded_file($file_tmp,$file_destination)){

               $flag= 1 ;
                        }                  }     
          if($flag==1){  

           $data=$this->users_model->updatephoto($user_id,$file_name);
           
               }
		
		redirect('/profile/myprofile', "refresh");


			}	
			
     
		public function UploadCover(){ 
		   $user_id=$_POST['abc'];
		          
            $flag=0;
            $file=$_FILES['photocover'];
            $file_name = $file['name'];
            $file_tmp = $file['tmp_name'];   
            $file_ext = explode('.',$file_name); 
            $file_ext = strtolower(end($file_ext));
            $allowed = array("gif","png","jpg","jpeg");
           if(in_array($file_ext,$allowed)){
            $file_name_new = uniqid('',true).'.'.$file_ext;
            $file_destination = './uploads/cover_photo/' .$file_name;
            if(move_uploaded_file($file_tmp,$file_destination)){

               $flag= 1 ;
                        }                  }     
           if($flag==1){  

           $data=$this->users_model->updatecover($user_id,$file_name);
           
               }
		
		redirect('/profile/myprofile', "refresh");


			}	
			public function UploadPhotos()
			{ 
			
			 $user_id =$this->input->post('id');
			
		      
		     
                $flag=0;
               $file=$_FILES['photopublic'];
               $file_name = $file['name'];
               $file_tmp = $file['tmp_name'];   
               $file_ext = explode('.',$file_name); 
               $file_ext = strtolower(end($file_ext));
               $allowed = array("gif","png","jpg","jpeg");
               if(in_array($file_ext,$allowed)){
               $file_name_new = uniqid('',true).'.'.$file_ext;

               $file_destination = './uploads/photos/' .$file_name;
                if(move_uploaded_file($file_tmp,$file_destination)){

               $flag= 1 ;
                } }     
                if($flag==1){  

                $data=$this->users_model->updatepublicphoto($user_id,$file_name);
           
               }
		
		        redirect('/profile/myprofile', "refresh");
	
         
			}	
			
			public function searchFreiend()
			{
				
				$check=$_POST['search'];
				
				$this->data['friendList']  = $this->users_model->GetFriendListsearch($this->UserId,$check) ;
			
	        	$this->data['friendOnline'] = $this->users_model->GetOnlineFriends($this->UserId) ;
		        $this->data['friendsRequest'] =    $this->users_model->GetFriendsRequest($this->UserId) ;
		
				$this->data['openToken']=base64_encode($this->session->userdata('token'));
				$this->data['openSessionId']=$this->session->userdata('openSessionId');
				$this->data['apiKey']= $this->config->item('opentok_key');
		
		        $this->data['user'] =    $this->users_model->userinfo($this->UserId) ;
		        $this->load->view("user/profiles",$this->data);
		
			}
						
			public function delete_img()
			{	
					$img_id =$this->input->post('selID');
	     	 $data=$this->users_model->update_img_status($img_id);
			 	$this->load->view("user/my-profile");
			}
			
			
     public function postFileUpload(){
echo "ggsdfgsd";exit;
       $option = array(

           'upload_dir' => 'data/temp/',
       );

       //$upload_handler = new UploadFileHandler($option);
   }

	
}
