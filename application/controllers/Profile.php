<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
use OpenTok\OpenTok;
use OpenTok\MediaMode;
use LinkPreview\LinkPreview;
use LinkPreview\Model\VideoLink;
class Profile extends CI_Controller
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
            'upload',
            'form_validation',
			 'OnlineUsers'
        ));
        $this->load->library('upload');
        $this->load->helper('array');
        $this->load->helper(array(
            'form',
            'url'
        ));
        $this->load->database();
        if ($this->session->userdata('user_name') == '') {
            redirect('login');
        }
        $this->load->model('profile_model');
        $this->load->model('Users_model', 'obj_model', TRUE);
        $this->UserId = $this->session->userdata('user_id');
    }
    public function myProfile()
    {
         $this->data['sendRequest']    = $this->users_model->GetsendRequest($this->UserId);
        $this->data['friendList']     = $this->users_model->GetFriendList($this->UserId);
        $this->data['profileViewer']  = $this->profile_model->GetProfileViewerList($this->UserId);
        $this->data['friendsRequest'] = $this->users_model->GetFriendsRequest($this->UserId);
        $this->data['date']           = $this->users_model->fetch_dob($this->UserId);
        $this->data['UserId']         = $this->session->userdata('user_id');
        foreach ($this->data['date'] as $dos) {
            $dob = $dos['dob'];
        }
      
        $this->data['mydata']        = $this->users_model->GetMyData($this->UserId);
        //print_r($this->data['mydata']);exit;
        $this->data['user']          = $this->users_model->userinfo($this->UserId);
        $this->data['image']         = $this->users_model->imageinfo($this->UserId);
        $this->data['countries']     = $this->users_model->getAllcountries();
		$this->data['intrest']     = $this->users_model->getAllintrest();
        //print_r($this->UserId);exit;
        $myfeeds =          $this->profile_model->GetAllfeedss($this->UserId);
        $myfeedsurldetails = array();     
        foreach ($myfeeds as $i => $item) {
            $title = "";
            $description= "";
            $image = "";
            $videoid = "";
            $videoidEmbe = "";
            $linkUrl = "";
            $isLink = false;
            preg_match_all('#\b(https|http)?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $item->feeds, $match);
            if(sizeof($match[0]) > 0  && sizeof($item->image_name) < 2){
                $linkPreview = new LinkPreview($match[0][0]);
                $parsed = $linkPreview->getParsed();
                $isLink = true;
                foreach ($parsed as $parserName => $link) {
                    //$parserName . PHP_EOL . PHP_EOL;
                    //echo $link->getUrl() . PHP_EOL;
                    //echo $link->getRealUrl() . PHP_EOL;
                    $title = $link->getTitle() . PHP_EOL;
                    $linkUrl  = $link->getUrl() . PHP_EOL;
                    $description =  $link->getDescription() . PHP_EOL;
                    $image =  $link->getImage() . PHP_EOL;
                    if ($link instanceof VideoLink) {
                        $videoid = $link->getVideoId() . PHP_EOL;
                        $videoidEmbe = $link->getEmbedCode() . PHP_EOL;
                        
                    }
                }
            }		    
            $itemVal = $item;           
            $itemVal->islink = $isLink;
            $itemVal->linkUrl = $linkUrl;
            $itemVal->linktitle = $title;
            $itemVal->linkdescription = $description;
            $itemVal->videoEmbeded = $videoidEmbe;
            $itemVal->linkimage = $image;
            $myfeedsurldetails[$i] = $itemVal;
        }
        $this->data['feeds']   = $myfeedsurldetails;
		//print_r($this->data['feeds']);exit;
        $this->data['openToken']     = base64_encode($this->session->userdata('token'));
        $this->data['openSessionId'] = $this->session->userdata('openSessionId');
        $this->data['apiKey']        = $this->config->item('opentok_key');
        $this->load->view("user/my-profile", $this->data);
        
    }
	 public function myProfile_image()
    {
         $this->data['sendRequest']    = $this->users_model->GetsendRequest($this->UserId);
        $this->data['friendList']     = $this->users_model->GetFriendList($this->UserId);
        $this->data['profileViewer']  = $this->profile_model->GetProfileViewerList($this->UserId);
        $this->data['friendsRequest'] = $this->users_model->GetFriendsRequest($this->UserId);
        $this->data['date']           = $this->users_model->fetch_dob($this->UserId);
        $this->data['UserId']         = $this->session->userdata('user_id');
        foreach ($this->data['date'] as $dos) {
            $dob = $dos['dob'];
        }
      
        $this->data['mydata']        = $this->users_model->GetMyData($this->UserId);
        //print_r($this->data['mydata']);exit;
        $this->data['user']          = $this->users_model->userinfo($this->UserId);
        $this->data['image']         = $this->users_model->imageinfo($this->UserId);
        $this->data['countries']     = $this->users_model->getAllcountries();
		$this->data['intrest']     = $this->users_model->getAllintrest();
        //print_r($this->UserId);exit;
        $myfeeds =          $this->profile_model->GetAllfeedss($this->UserId);
        $myfeedsurldetails = array();     
        foreach ($myfeeds as $i => $item) {
            $title = "";
            $description= "";
            $image = "";
            $videoid = "";
            $videoidEmbe = "";
            $linkUrl = "";
            $isLink = false;
            preg_match_all('#\b(https|http)?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $item->feeds, $match);
            if(sizeof($match[0]) > 0  && sizeof($item->image_name) < 2){
                $linkPreview = new LinkPreview($match[0][0]);
                $parsed = $linkPreview->getParsed();
                $isLink = true;
                foreach ($parsed as $parserName => $link) {
                    //$parserName . PHP_EOL . PHP_EOL;
                    //echo $link->getUrl() . PHP_EOL;
                    //echo $link->getRealUrl() . PHP_EOL;
                    $title = $link->getTitle() . PHP_EOL;
                    $linkUrl  = $link->getUrl() . PHP_EOL;
                    $description =  $link->getDescription() . PHP_EOL;
                    $image =  $link->getImage() . PHP_EOL;
                    if ($link instanceof VideoLink) {
                        $videoid = $link->getVideoId() . PHP_EOL;
                        $videoidEmbe = $link->getEmbedCode() . PHP_EOL;
                        
                    }
                }
            }		    
            $itemVal = $item;           
            $itemVal->islink = $isLink;
            $itemVal->linkUrl = $linkUrl;
            $itemVal->linktitle = $title;
            $itemVal->linkdescription = $description;
            $itemVal->videoEmbeded = $videoidEmbe;
            $itemVal->linkimage = $image;
            $myfeedsurldetails[$i] = $itemVal;
        }
        $this->data['feeds']   = $myfeedsurldetails;
		//print_r($this->data['feeds']);exit;
        $this->data['openToken']     = base64_encode($this->session->userdata('token'));
        $this->data['openSessionId'] = $this->session->userdata('openSessionId');
        $this->data['apiKey']        = $this->config->item('opentok_key');
        $this->load->view("user/my-profile-image", $this->data);
        
    }
       public function myProfile_limit()
    {
		 $fi   = $this->input->post('fi');
        $la    = $this->input->post('la');
         $this->data['sendRequest']    = $this->users_model->GetsendRequest($this->UserId);
        $this->data['friendList']     = $this->users_model->GetFriendList($this->UserId);
        $this->data['profileViewer']  = $this->profile_model->GetProfileViewerList($this->UserId);
        $this->data['friendsRequest'] = $this->users_model->GetFriendsRequest($this->UserId);
        $this->data['date']           = $this->users_model->fetch_dob($this->UserId);
        $this->data['UserId']         = $this->session->userdata('user_id');
        foreach ($this->data['date'] as $dos) {
            $dob = $dos['dob'];
        }
      
        $this->data['mydata']        = $this->users_model->GetMyData($this->UserId);
        //print_r($this->data['mydata']);exit;
        $this->data['user']          = $this->users_model->userinfo($this->UserId);
        $this->data['image']         = $this->users_model->imageinfo($this->UserId);
        $this->data['countries']     = $this->users_model->getAllcountries();
		$this->data['intrest']     = $this->users_model->getAllintrest();
        //print_r($this->UserId);exit;
        $myfeeds =          $this->profile_model->GetAllfeedss_limit($this->UserId,$fi,$la);
		 if(sizeof($myfeeds) > 0){
        $myfeedsurldetails = array();     
        foreach ($myfeeds as $i => $item) {
            $title = "";
            $description= "";
            $image = "";
            $videoid = "";
            $videoidEmbe = "";
            $linkUrl = "";
            $isLink = false;
            preg_match_all('#\b(https|http)?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $item->feeds, $match);
            if(sizeof($match[0]) > 0  && sizeof($item->image_name) < 2){
                $linkPreview = new LinkPreview($match[0][0]);
                $parsed = $linkPreview->getParsed();
                $isLink = true;
                foreach ($parsed as $parserName => $link) {
                    //$parserName . PHP_EOL . PHP_EOL;
                    //echo $link->getUrl() . PHP_EOL;
                    //echo $link->getRealUrl() . PHP_EOL;
                    $title = $link->getTitle() . PHP_EOL;
                    $linkUrl  = $link->getUrl() . PHP_EOL;
                    $description =  $link->getDescription() . PHP_EOL;
                    $image =  $link->getImage() . PHP_EOL;
                    if ($link instanceof VideoLink) {
                        $videoid = $link->getVideoId() . PHP_EOL;
                        $videoidEmbe = $link->getEmbedCode() . PHP_EOL;
                        
                    }
                }
            }		    
            $itemVal = $item;           
            $itemVal->islink = $isLink;
            $itemVal->linkUrl = $linkUrl;
            $itemVal->linktitle = $title;
            $itemVal->linkdescription = $description;
            $itemVal->videoEmbeded = $videoidEmbe;
            $itemVal->linkimage = $image;
            $myfeedsurldetails[$i] = $itemVal;
        }
        $this->data['feeds']   = $myfeedsurldetails;
		//print_r($this->data['feeds']);exit;
        $this->data['openToken']     = base64_encode($this->session->userdata('token'));
        $this->data['openSessionId'] = $this->session->userdata('openSessionId');
        $this->data['apiKey']        = $this->config->item('opentok_key');
         
        $this->load->view("user/profile-feed-result", $this->data);
      }else {
          echo ("");
      }
        
    }
    
    
    public function profileView($friendId)
    {
        
        $this->data['friendList']    = $this->users_model->GetFriendList($friendId);
        $this->data['photos']        = $this->profile_model->GetUserPhotos($friendId);
        $this->data['profileViewer'] = $this->profile_model->GetProfileViewerList($friendId);
        $this->data['mydata']        = $this->users_model->GetMyData($friendId);
        
       // print_r($this->data['mydata']);exit;
        //$this->data['feeds'] = $this->profile_model->GetUserfeeds($friendId);
        $myfeeds =          $this->profile_model->GetUserfeeds($friendId);
        $myfeedsurldetails = array();     
        foreach ($myfeeds as $i => $item) {
            $title = "";
            $description= "";
            $image = "";
            $videoid = "";
            $videoidEmbe = "";
            $linkUrl = "";
            $isLink = false;
            preg_match_all('#\b(https|http)?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $item->feeds, $match);
            if(sizeof($match[0]) > 0  && sizeof($item->image_name) < 2){
                $linkPreview = new LinkPreview($match[0][0]);
                $parsed = $linkPreview->getParsed();
                $isLink = true;
                foreach ($parsed as $parserName => $link) {
                    //$parserName . PHP_EOL . PHP_EOL;
                    //echo $link->getUrl() . PHP_EOL;
                    //echo $link->getRealUrl() . PHP_EOL;
                    $title = $link->getTitle() . PHP_EOL;
                    $linkUrl  = $link->getUrl() . PHP_EOL;
                    $description =  $link->getDescription() . PHP_EOL;
                    $image =  $link->getImage() . PHP_EOL;
                    if ($link instanceof VideoLink) {
                        $videoid = $link->getVideoId() . PHP_EOL;
                        $videoidEmbe = $link->getEmbedCode() . PHP_EOL;
                        
                    }
                }
            }		    
            $itemVal = $item;           
            $itemVal->islink = $isLink;
            $itemVal->linkUrl = $linkUrl;
            $itemVal->linktitle = $title;
            $itemVal->linkdescription = $description;
            $itemVal->videoEmbeded = $videoidEmbe;
            $itemVal->linkimage = $image;
            $myfeedsurldetails[$i] = $itemVal;
        }
        $this->data['feeds']   = $myfeedsurldetails;

        $this->data['user']  = $this->users_model->userinfo($this->UserId);
        $this->data['age']   = $this->users_model->friendage($friendId);
        //print_r($this->data['age']);exit;
        $result              = $this->profile_model->checkVisit(array(
            'visitor_id' => $this->UserId,
            'user_id' => $friendId
        ));
        if (empty($result)) {
            $s = $this->profile_model->InsertVisit(array(
                'user_id' => $friendId,
                'visitor_id' => $this->UserId
            ));
        }
        $this->data['openToken']     = base64_encode($this->session->userdata('token'));
        $this->data['openSessionId'] = $this->session->userdata('openSessionId');
        $this->data['apiKey']        = $this->config->item('opentok_key');
        $this->load->view("user/profile-view", $this->data);
        
    }    
    public function profileView_limited()
    {
		
		 $fi   = $this->input->post('fi');
        $la    = $this->input->post('la');
		$friendId    = $this->input->post('frd');
        
        $this->data['friendList']    = $this->users_model->GetFriendList($friendId);
        $this->data['photos']        = $this->profile_model->GetUserPhotos($friendId);
        $this->data['profileViewer'] = $this->profile_model->GetProfileViewerList($friendId);
        $this->data['mydata']        = $this->users_model->GetMyData($friendId);
        
       // print_r($this->data['mydata']);exit;
        //$this->data['feeds'] = $this->profile_model->GetUserfeeds($friendId);
        $myfeeds =          $this->profile_model->GetUserfeeds_limit($friendId,$fi,$la);
		   if(sizeof($myfeeds) > 0){
        $myfeedsurldetails = array();     
        foreach ($myfeeds as $i => $item) {
            $title = "";
            $description= "";
            $image = "";
            $videoid = "";
            $videoidEmbe = "";
            $linkUrl = "";
            $isLink = false;
            preg_match_all('#\b(https|http)?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $item->feeds, $match);
            if(sizeof($match[0]) > 0  && sizeof($item->image_name) < 2){
                $linkPreview = new LinkPreview($match[0][0]);
                $parsed = $linkPreview->getParsed();
                $isLink = true;
                foreach ($parsed as $parserName => $link) {
                    //$parserName . PHP_EOL . PHP_EOL;
                    //echo $link->getUrl() . PHP_EOL;
                    //echo $link->getRealUrl() . PHP_EOL;
                    $title = $link->getTitle() . PHP_EOL;
                    $linkUrl  = $link->getUrl() . PHP_EOL;
                    $description =  $link->getDescription() . PHP_EOL;
                    $image =  $link->getImage() . PHP_EOL;
                    if ($link instanceof VideoLink) {
                        $videoid = $link->getVideoId() . PHP_EOL;
                        $videoidEmbe = $link->getEmbedCode() . PHP_EOL;
                        
                    }
                }
            }		    
            $itemVal = $item;           
            $itemVal->islink = $isLink;
            $itemVal->linkUrl = $linkUrl;
            $itemVal->linktitle = $title;
            $itemVal->linkdescription = $description;
            $itemVal->videoEmbeded = $videoidEmbe;
            $itemVal->linkimage = $image;
            $myfeedsurldetails[$i] = $itemVal;
        }
        $this->data['feeds']   = $myfeedsurldetails;

        $this->data['user']  = $this->users_model->userinfo($this->UserId);
        $this->data['age']   = $this->users_model->friendage($friendId);
        //print_r($this->data['age']);exit;
        $result              = $this->profile_model->checkVisit(array(
            'visitor_id' => $this->UserId,
            'user_id' => $friendId
        ));
        if (empty($result)) {
            $s = $this->profile_model->InsertVisit(array(
                'user_id' => $friendId,
                'visitor_id' => $this->UserId
            ));
        }
        $this->data['openToken']     = base64_encode($this->session->userdata('token'));
        $this->data['openSessionId'] = $this->session->userdata('openSessionId');
        $this->data['apiKey']        = $this->config->item('opentok_key');
         $this->load->view("user/profile-feed-result", $this->data);
      }else {
          echo ("");
      }
        
    }
    public function settings()
    {
        $this->data['sendRequest']    = $this->users_model->GetsendRequest($this->UserId);
        $this->data['friendsRequest'] = $this->users_model->GetFriendsRequest($this->UserId);
        $this->data['user']           = $this->users_model->userinfo($this->UserId);
        $this->data['openToken']      = base64_encode($this->session->userdata('token'));
        $this->data['openSessionId']  = $this->session->userdata('openSessionId');
        $this->data['apiKey']         = $this->config->item('opentok_key');
        $this->load->view("user/profile-account-setting", $this->data);
        
    }
    public function messages()
    {
        $opentok = new OpenTok($this->config->item('opentok_key'), $this->config->item('opentok_secret')); //'46163292', '436f0b34f67e82089f741ff6509c9608919f8d82'
        $username  = "";
        if (isset($_GET['user'])) {
            $userid               = $_GET['user'];
            $this->data['caller'] = "Y";
        } else {
            $userid               = $this->UserId; 
            $username    = isset($_GET['token']) ?$_GET['token'] : "";
            $this->data['caller'] = "N";
        }
        $result            = $this->users_model->fetch_session($userid);
        
        $this->data ['fullname']     = $this->data['caller'] == 'Y' ? $result['full_name'] : $username;
        $opentok_sessionid = $result['session_id'];
        $opntok_tokenId    = $opentok->generateToken($opentok_sessionid);
        
        $this->data['feeds']         = $this->profile_model->GetAllfeeds($this->UserId);
        $this->data['onlinef']       = $this->users_model->GetOnlineFriends($this->UserId);
        $this->data['openTokapi']    = $this->config->item('opentok_key');
        $this->date['opentokenid']   = $opntok_tokenId;
        $this->data['openSessionId'] = $opentok_sessionid;
        $str                         = base64_encode($opntok_tokenId);
        $this->data['openSession']   = urlencode($str); 
        $this->date['responsedata']  = json_encode(array(
            'apiKey' => $this->config->item('opentok_key'), 
            'sessionId' => $opentok_sessionid,
            'token' => $opntok_tokenId
        ));
        $this->data['user']          = $this->users_model->userinfo($this->UserId);
        $this->load->view("user/messages", $this->data);
        
    }
    public function messages_stranger()
    {
        $user    = $this->input->post('val');
        $opentok = new OpenTok($this->config->item('opentok_key'), $this->config->item('opentok_secret')); //'46163292', '436f0b34f67e82089f741ff6509c9608919f8d82'
        if (isset($user)) {
            $userid               = $user;
            $this->data['caller'] = "Y";
        } else {
            $userid               = $this->UserId;
            $this->data['caller'] = "N";
        }
        $result            = $this->users_model->fetch_session($userid);
        $opentok_sessionid = $result['session_id'];
        $opntok_tokenId    = $opentok->generateToken($opentok_sessionid);
        
        $this->data['feeds']          = $this->profile_model->GetAllfeeds($this->UserId);
        $this->data['onlinef']        = $this->users_model->GetOnlineFriends($this->UserId);
        $this->data['openTokapi']     = $this->config->item('opentok_key');
        $this->date['opentokenid']    = $opntok_tokenId;
        $this->data['openSessionId']  = $opentok_sessionid;
        $str                          = base64_encode($opntok_tokenId);
        $this->data['openSession']    = urlencode($str);
        $this->date['responsedata']   = json_encode(array(
            'apiKey' => $this->config->item('opentok_key'),
            'sessionId' => $opentok_sessionid,
            'token' => $opntok_tokenId
        ));

        /*$this->data['stranger_check'] = $this->users_model->stranger_check();
        if ($this->data['stranger_check'] == null) {
            $this->data['stranger'] = $this->users_model->stranger_update($this->UserId);
        } else {
            // $this->users_model->stranger_delete($this->UserId) ;
        }*/

        $this->data['user'] = $this->users_model->userinfo($this->UserId);
        $this->load->view("user/messages_stranger", $this->data);
        
    }
    public function getStranger(){
        $gender    = $this->input->post('usertype');
        if (!isset($gender)) {
            $gender  = "1"; 
        } 
        //log_message('error', 'here getstranger >> '.$this->session->userdata('user_id').'<< going to clear..');
        $this->users_model->clearoldstranger();
        //log_message('error', 'here getstranger >>'.$this->session->userdata('user_id').'<< going to getuser..');
        $resultval = $this->users_model->getStrangerAvaiUser($this->session->userdata('user_id'),$gender);
        $opentok = new OpenTok($this->config->item('opentok_key'), $this->config->item('opentok_secret'));
        $stranger_nickname = $resultval ['nick_name']!= null ? $resultval['nick_name'] : "" ;
        $my_name   = ""; 
        //log_message('error','here getstranger >>'.$this->session->userdata('user_id').'<< going to stranger >>'.print_r($resultval, TRUE).'<<..');
        if(null != $resultval){  
            $resultval = $this->users_model->removeuserfromStranger($resultval['user_id']);
            $mydetails = $this->users_model->getUserFullDetails($this->session->userdata('user_id'));
            $resultval["myNickName"] = $mydetails['nick_name'];
        }else {
            $result = $this->users_model->stranger_update($this->session->userdata('user_id'));
            $resultval = $this->users_model->getUserFullDetails($this->session->userdata('user_id'));
            $resultval["errormsg"] = "No user";
            $resultval["errorcode"] = "1";
            $resultval["myNickName"]  = $resultval ['nick_name'];
        }
        
        $resultval['stranger_nikename'] = $stranger_nickname;
        //$resultval["myNickName"]  = $resultval["nick_name"];
        $opntok_tokenId    = $opentok->generateToken($resultval['session_id']);
        $resultval['token']  = $opntok_tokenId ;

        echo json_encode($resultval);

    }
    public function messagesUser()
    {
        $this->data['user']    = $this->users_model->userinfo($this->UserId);
        $this->data['feeds']   = $this->profile_model->GetAllfeeds($this->UserId);
        $this->data['onlinef'] = $this->users_model->GetOnlineFriends($this->UserId);
        
        $this->load->view("user/messages_user", $this->data);
        
    }
    public function notifications()
    {
        
        $this->data['feeds']         = $this->profile_model->GetAllfeeds($this->UserId);
        $this->data['onlinef']       = $this->users_model->GetOnlineFriends($this->UserId);
        $this->data['user']          = $this->users_model->userinfo($this->UserId);
        $this->data['notifications'] = $this->users_model->notication_list($this->UserId);
        
        //print_r($this->data['notifications']);exit;
        
        
        $this->data['openToken']     = base64_encode($this->session->userdata('token'));
        $this->data['openSessionId'] = $this->session->userdata('openSessionId');
        $this->data['apiKey']        = $this->config->item('opentok_key');
        $this->load->view("user/notification", $this->data);
        
    }
    public function notifications_tab()
    {
      
         $html ="";
        $this->data['feeds']         = $this->profile_model->GetAllfeeds($this->UserId);
        $this->data['onlinef']       = $this->users_model->GetOnlineFriends($this->UserId);
        $this->data['user']          = $this->users_model->userinfo($this->UserId);
        $this->data['notifications'] = $this->users_model->notication_list($this->UserId);
		$this->data['notifications_status'] = $this->users_model->notication_status_up($this->UserId);
		//print_r(  $this->data['notifications']);exit;
        //    foreach($this->data['notifications']  as $row){
        //    
        
        //$this->data    ='<div>"'.$row->messages.''.$row->profile_pic.''.$row->gender.'</div>';
        //    echo json_encode($this->data);
        //    }
        
        
        //$this->load->view("user/header",$this->data);
        
        $this->data['openToken']     = base64_encode($this->session->userdata('token'));
        $this->data['openSessionId'] = $this->session->userdata('openSessionId');
        $this->data['apiKey']        = $this->config->item('opentok_key');
		// <img src="/videoCHAT-master/uploads/profile_pic/'.$row->profile_pic.'" alt="">
		     $i=1;
           foreach($this->data['notifications']  as $row){

	 if($i<=5)
	 {
	  
	  if(($row->gender==1)&&($row->profile_pic==null))
	  
	  {
	  
                  $html .= '
				<div class="notfication-details sds">
				<div class="padchange">
                     <div class="noty-user-img">
                                              <img src="../../assets/images/resources/malemaleavatar.png" alt="">
                                              </div>
                                              <div class="notification-info">
                                 <a href= "'.$row->link.'" >                 <p> '.$row->messages.'</p> </a>
                                                
                                              </div></div></div>
                  ';
				  
	  }
	  else  if(($row->gender==2)&&($row->profile_pic==null))
	  
	  {
	      $html .= '
				<div class="notfication-details sds">
				<div class="padchange">
                     <div class="noty-user-img">
                                              <img src="../../assets/images/resources/femalemaleavatar.png" alt="">
                                              </div>
                                              <div class="notification-info">
                                               <a href= "'.$row->link.'" >                 <p> '.$row->messages.'</p> </a>
                                                
                                              </div></div></div>
                  ';
				  
	  }
	  else{
  
                  $html .= '
				<div class="notfication-details sds">
				<div class="padchange">
                     <div class="noty-user-img">
                                              <img src="../../uploads/profile_pic/'.$row->profile_pic.'" alt="">
                                              </div>
                                              <div class="notification-info">
                                                  <p> '.$row->messages.'</p>
                                                
                                              </div></div></div>
                  ';
				  
			
			  }
	$i++; }	  
		   }
			  
			  echo $html;
	
		
			     $status=1;
			return json_encode(['status' => $status, 'html' => $html]);
           

		   
        
      //  $this->load->view("user/header", $this->data);
        
    }
    
    public function profileSearch()
    {
        
        $this->data['feeds']         = $this->profile_model->GetAllfeeds($this->UserId);
        $this->data['onlinef']       = $this->users_model->GetOnlineFriends($this->UserId);
        $this->data['openToken']     = base64_encode($this->session->userdata('token'));
        $this->data['openSessionId'] = $this->session->userdata('openSessionId');
        $this->data['apiKey']        = $this->config->item('opentok_key');
        $this->load->view("user/public-profile", $this->data);
        
    }
    
    public function friends()
    {
		$this->data['sessionOnline'] =$this->onlineusers->getAllonlineUserSession();   
		
        $this->data['friendList']     = $this->users_model->GetFriendList($this->UserId);
        $this->data['friendOnline']   = $this->users_model->GetOnlineFriends($this->UserId);
        $this->data['friendsRequest'] = $this->users_model->GetFriendsRequest($this->UserId); 
		
        $this->data['user']           = $this->users_model->userinfo($this->UserId);
        $this->data['openToken']      = base64_encode($this->session->userdata('token'));
        $this->data['openSessionId']  = $this->session->userdata('openSessionId');
        $this->data['apiKey']         = $this->config->item('opentok_key');
        //print_r($this->data);exit;
        
        $this->data['user'] = $this->users_model->userinfo($this->UserId);
        $this->load->view("user/profiles", $this->data);
    }
    
    
    public function UpdateLike()
    {
        
          
        $feedId = $this->input->post('feedId');
        $uid    = $this->input->post('Uid');
        $fid    = $this->input->post('fid');
		
		$nolik     = $this->users_model->checknolike($feedId, $uid);
		if ($nolik!=1)
		{
        if($uid!= $fid)
		{
        $name     = $this->users_model->username($uid);
        $myString = $name . " Liked your post";
      $link =  base_url() .'index.php/Profile/notificationview/'.$feedId;
        $name     = $this->users_model->insertnotification($myString, $fid, $uid,$link);
		 } }
		 
        $return   = $this->profile_model->setLike($feedId, $this->UserId);
        if (!empty($return)) {
            echo json_encode(array(
                'status' => 1,
                'lik' => $return
            ));
        } else {
            echo json_encode(array(
                'status' => 0
            ));
        }
    }
    
    
    public function change()
    {
        $id        = $this->UserId;
        $old       = $this->input->post('oldpassword');
        $password  = $this->input->post('password');
        $password1 = $this->input->post('repassword');
         $this->data['user']          = $this->users_model->userinfo($this->UserId);
        $this->data['openToken']     = base64_encode($this->session->userdata('token'));
        $this->data['openSessionId'] = $this->session->userdata('openSessionId');
        $this->data['apiKey']        = $this->config->item('opentok_key');
        /*if(strlen($password)<6){
        $this->data['error']="Password Contain at least 6 characters ";
        $this->load->view('change_password',$this->data);
        }
        */
        $res                         = $this->profile_model->check_pass(md5($old), $id);
        
        if (!empty($res)) {
            if ($password == $password1) {
                $password = md5($password);
                $id       = $this->profile_model->update_pass($password, $id);
                $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Password Changed</div>');
                //redirect('user/profile');
                $this->load->view("user/profile-account-setting", $this->data);
                
            } else {
                
                $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Password Mismatch</div>');
                $this->data['friendsRequest'] = $this->users_model->GetFriendsRequest($this->UserId);
                $this->load->view("user/profile-account-setting", $this->data);
            }
        } else {
            
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Old Password Mismatch</div>');
            $this->data['friendsRequest'] = $this->users_model->GetFriendsRequest($this->UserId);
            $this->load->view("user/profile-account-setting", $this->data);
        }
    }
    public function deleteFeed($product_id = NULL)
    {
        $del         = $this->uri->segment('3');
        $result_data = $this->profile_model->deleteFeed($del);
        if ($result_data['success']) {
            
            redirect('/user/profile', "refresh");
        }
        
        redirect('/user/profile', "refresh");
    } 
	public function deleteFeedmyprofile($product_id = NULL)
    {
        $del         = $this->uri->segment('3');
        $result_data = $this->profile_model->deleteFeed($del);
        if ($result_data['success']) {
            
            redirect('/Profile/myProfile', "refresh");
        }
        
        redirect('/Profile/myProfile', "refresh");
    }
    public function postFeed()
    {
		
		
		
        
		
		
		
		
		
	
        
        $flag      = 0;
        $file      = $_FILES['file-4'];
        $file_name = $file['name'];
        $file_tmp  = $file['tmp_name'];
        $file_ext  = explode('.', $file_name);
        $file_ext  = strtolower(end($file_ext));
        $allowed   = array(
            "gif",
            "png",
            "jpg",
            "jpeg"
        );
        if (in_array($file_ext, $allowed)) {
            $file_name_new    = uniqid('', true) . '.' . $file_ext;
            $file_destination = './uploads/status/' . $file_name;
            if (move_uploaded_file($file_tmp, $file_destination)) {
                
                $flag = 1;
            }
        }
      //  if ($flag == 1) {
            
     //       $data = $this->users_model->updatecover($user_id, $file_name);
            
   //     }
        
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
        if (isset($_POST['register'])) {
        //    $this->form_validation->set_rules('feeds', 'feeds', 'required');
        //    if ($this->form_validation->run() == TRUE) {
                
                $insertData  = array(
                    'user_id' => $this->UserId,
                    'feeds' => $this->input->post("feeds")
					
                );
                $result_data = $this->profile_model->InserFeeds($insertData,$file_name);
                if ($result_data['success']) {
                    
                    redirect('/user/profile', "refresh");
                }
          //  }
        }
        redirect('/user/profile', "refresh");
    }
    public function edit_data()
    {
        $feed_id = $this->input->post('val');
        
        $result = $this->profile_model->editfeed($feed_id);
        
        
        $value = $result['feeds'];
        $id    = $result['id'];
        echo json_encode(array(
            'feed' => $value,
            'feedid' => $id
        ));
        
    }
    public function updateFeed()
    {
        
        $feed   = $_POST['feed-edit'];
        $feedid = $_POST['feed-id'];
        
        $result = $this->profile_model->updatefeed($feed, $feedid);
        redirect('/user/profile', "refresh");
    }
    
    public function hideFeed()
    {
        
        $fid = $this->input->post('fid');
        $uid = $this->session->userdata('user_id');
        
        $result = $this->profile_model->hideFeed($fid, $uid);
        redirect('/user/profile', "refresh");
    }
    public function getprofile()
    {
        $user_id = $this->input->post('user_id');
        $return  = $this->users_model->GetMyData($user_id);
        if (!empty($return)) {
            echo json_encode(array(
                'status' => 1,
                'pr' => $return
            ));
        } else {
            echo json_encode(array(
                'status' => 0
            ));
        }
    }
    
    public function UploadProfile()
    {
        $user_id = $_POST['abc'];
        
        $flag      = 0;
        $file      = $_FILES['photopro'];
        $file_name = $file['name'];
        $file_tmp  = $file['tmp_name'];
        $file_ext  = explode('.', $file_name);
        $file_ext  = strtolower(end($file_ext));
        $allowed   = array(
            "gif",
            "png",
            "jpg",
            "jpeg"
        );
        if (in_array($file_ext, $allowed)) {
            $file_name_new = uniqid('', true) . '.' . $file_ext;
            
            $file_destination = './uploads/profile_pic/' . $file_name;
            if (move_uploaded_file($file_tmp, $file_destination)) {
                
                $flag = 1;
            }
        }
        if ($flag == 1) {
            
            $data = $this->users_model->updatephoto($user_id, $file_name);
            
        }
        
        redirect('/profile/myProfile', "refresh");
        
        
    }
    
    public function UploadCover()
    {
        $user_id = $_POST['abc'];
        
        $flag      = 0;
        $file      = $_FILES['photocover'];
        $file_name = $file['name'];
        $file_tmp  = $file['tmp_name'];
        $file_ext  = explode('.', $file_name);
        $file_ext  = strtolower(end($file_ext));
        $allowed   = array(
            "gif",
            "png",
            "jpg",
            "jpeg"
        );
        if (in_array($file_ext, $allowed)) {
            $file_name_new    = uniqid('', true) . '.' . $file_ext;
            $file_destination = './uploads/cover_photo/' . $file_name;
            if (move_uploaded_file($file_tmp, $file_destination)) {
                
                $flag = 1;
            }
        }
        if ($flag == 1) {
            
            $data = $this->users_model->updatecover($user_id, $file_name);
            
        }
        
        redirect('/profile/myprofile', "refresh");
        
        
    }
    public function UploadPhotos_back()
    {
        
        
        $uid = $_POST['abcimg'];
        $pub = $_POST['photopublic'];
        echo $uid;
        echo $pub;
        exit;
        $flag      = 0;
        $file      = $_FILES['photopublic'];
        $file_name = $file['name'];
        $file_tmp  = $file['tmp_name'];
        $file_ext  = explode('.', $file_name);
        $file_ext  = strtolower(end($file_ext));
        $allowed   = array(
            "gif",
            "png",
            "jpg",
            "jpeg"
        );
        if (in_array($file_ext, $allowed)) {
            $file_name_new = uniqid('', true) . '.' . $file_ext;
            
            $file_destination = './uploads/photos/' . $file_name;
            if (move_uploaded_file($file_tmp, $file_destination)) {
                
                $flag = 1;
            }
        }
        if ($flag == 1) {
            
            $data = $this->users_model->updatepublicphoto($user_id, $file_name);
            
        }
        
        redirect('/profile/myprofile', "refresh");
        
        
    }
    public function UploadPhotos()
    {
        
        $user_id = $_POST['abc'];
        
        $flag      = 0;
        $file      = $_FILES['photopublic'];
        $file_name = $file['name'];
        $file_tmp  = $file['tmp_name'];
        $file_ext  = explode('.', $file_name);
        $file_ext  = strtolower(end($file_ext));
        $allowed   = array(
            "gif",
            "png",
            "jpg",
            "jpeg"
        );
        if (in_array($file_ext, $allowed)) {
            $file_name_new = uniqid('', true) . '.' . $file_ext;
            
            $file_destination = './uploads/photos/' . $file_name;
            if (move_uploaded_file($file_tmp, $file_destination)) {
                
                $flag = 1;
            }
        }
        if ($flag == 1) {
            
            $data = $this->users_model->updatepublicphoto($user_id, $file_name);
            
        }
        
        redirect('/profile/myProfile_image', "refresh");
        
        
    }
    
    public function searchFreiend()
    {
        
        $check = $_POST['search'];
        
        $this->data['friendList'] = $this->users_model->GetFriendListsearch($this->UserId, $check);
        
        $this->data['friendOnline']   = $this->users_model->GetOnlineFriends($this->UserId);
        $this->data['friendsRequest'] = $this->users_model->GetFriendsRequest($this->UserId);
        //userinfo($userId);
        $this->data['openToken']     = base64_encode($this->session->userdata('token'));
        $this->data['openSessionId'] = $this->session->userdata('openSessionId');
        $this->data['apiKey']        = $this->config->item('opentok_key');
        
        $this->data['user'] = $this->users_model->userinfo($this->UserId);
        $this->load->view("user/profiles", $this->data);
        
    }
    ///////derin/////////////
    public function searchFreiend_name()
    {
        
        /*$check             = $_POST['search'];
        $params['user_id'] = $this->UserId;
        
        
        $this->data['results'] = $this->users_model->GetSearchFriends_name($params, $check);
        
        //    print_r(  $this->data['results']
         $this->data['user'] = $this->users_model->userinfo($this->UserId);
        $this->data['openToken']     = base64_encode($this->session->userdata('token'));
        $this->data['openSessionId'] = $this->session->userdata('openSessionId');
        $this->data['apiKey']        = $this->config->item('opentok_key');
        
        $this->load->view("user/public-profile-search", $this->data);*/
        $this->data['results'] = null;
        if (isset($_POST['search'])) {
            $params['gender']      = $this->input->post("looking");
			$params['searchkey']   = trim($this->input->post("search"));
            $params['age']         = $this->input->post("age");
            $params['country']     = $this->input->post("country");
			
            
            if ($params['age'] == 1) {
                $params['age_from'] = 18;
                $params['age_to']   = 30;
            }
            if ($params['age'] == 2) {
                $params['age_from'] = 31;
                $params['age_to']   = 45;
            }
            if ($params['age'] == 3) {
                $params['age_from'] = 46;
                $params['age_to']   = 200;
            }
        }else {
            $params['searchkey'] = "";
            $params['age']  = 0;
            $params['gender'] = 0;
            $params['country'] = 0;
        }
        $this->data['countries'] = $this->users_model->getAllcountries();
        $params['user_id']       = $this->UserId;
        $this->data['results']   = $this->users_model->GetSearchFriends($params);
        $this->data['user']          = $this->users_model->userinfo($this->UserId);
        $this->data['selLokkingFor'] = $params['gender'];
        $this->data['searchKey']     = $params['searchkey'];
        $this->data['selage']        = $params['age'];
        $this->data['selcountry']    = $params['country'];
        $this->data['openToken']     = base64_encode($this->session->userdata('token'));
        $this->data['openSessionId'] = $this->session->userdata('openSessionId');
        $this->data['apiKey']        = $this->config->item('opentok_key');
        
        $this->load->view("user/public-profile-search", $this->data);
        
    }
    public function getProfileSearchResult(){
        $this->data['results'] = null;
        if (isset($_POST['search'])) {
            $params['gender']      = $this->input->post("looking");
			$params['searchkey']   = trim($this->input->post("search"));
            $params['age']         = $this->input->post("age");
            $params['country']     = $this->input->post("country");
			
            
            if ($params['age'] == 1) {
                $params['age_from'] = 18;
                $params['age_to']   = 30;
            }
            if ($params['age'] == 2) {
                $params['age_from'] = 31;
                $params['age_to']   = 45;
            }
            if ($params['age'] == 3) {
                $params['age_from'] = 46;
                $params['age_to']   = 200;
            }
		
            $this->data['countries'] = $this->users_model->getAllcountries();
            $params['user_id']       = $this->UserId;
            $this->data['results']   = $this->users_model->GetSearchFriends($params);
            
        }
        $this->load->view("user/profile_search_result", $this->data);
    }
    public function delete_img()
    {
		/*
		
		$this->data['sendRequest']    = $this->users_model->GetsendRequest($this->UserId);
        $this->data['friendList']     = $this->users_model->GetFriendList($this->UserId);
        $this->data['profileViewer']  = $this->profile_model->GetProfileViewerList($this->UserId);
        $this->data['friendsRequest'] = $this->users_model->GetFriendsRequest($this->UserId);
        $this->data['date']           = $this->users_model->fetch_dob($this->UserId);
        $this->data['UserId']         = $this->session->userdata('user_id');
        foreach ($this->data['date'] as $dos) {
            $dob = $dos['dob'];
        }
      
        $this->data['mydata']        = $this->users_model->GetMyData($this->UserId);
        //print_r($this->data['mydata']);exit;
        $this->data['user']          = $this->users_model->userinfo($this->UserId);
        $this->data['image']         = $this->users_model->imageinfo($this->UserId);
        $this->data['countries']     = $this->users_model->getAllcountries();
		$this->data['intrest']     = $this->users_model->getAllintrest();
        //print_r($this->UserId);exit;
        $myfeeds =          $this->profile_model->GetAllfeedss($this->UserId);
        $myfeedsurldetails = array();     
        foreach ($myfeeds as $i => $item) {
            $title = "";
            $description= "";
            $image = "";
            $videoid = "";
            $videoidEmbe = "";
            $linkUrl = "";
            $isLink = false;
            preg_match_all('#\b(https|http)?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $item->feeds, $match);
            if(sizeof($match[0]) > 0  && sizeof($item->image_name) < 2){
                $linkPreview = new LinkPreview($match[0][0]);
                $parsed = $linkPreview->getParsed();
                $isLink = true;
                foreach ($parsed as $parserName => $link) {
                    //$parserName . PHP_EOL . PHP_EOL;
                    //echo $link->getUrl() . PHP_EOL;
                    //echo $link->getRealUrl() . PHP_EOL;
                    $title = $link->getTitle() . PHP_EOL;
                    $linkUrl  = $link->getUrl() . PHP_EOL;
                    $description =  $link->getDescription() . PHP_EOL;
                    $image =  $link->getImage() . PHP_EOL;
                    if ($link instanceof VideoLink) {
                        $videoid = $link->getVideoId() . PHP_EOL;
                        $videoidEmbe = $link->getEmbedCode() . PHP_EOL;
                        
                    }
                }
            }		    
            $itemVal = $item;           
            $itemVal->islink = $isLink;
            $itemVal->linkUrl = $linkUrl;
            $itemVal->linktitle = $title;
            $itemVal->linkdescription = $description;
            $itemVal->videoEmbeded = $videoidEmbe;
            $itemVal->linkimage = $image;
            $myfeedsurldetails[$i] = $itemVal;
        }
        $this->data['feeds']   = $myfeedsurldetails;
		//print_r($this->data['feeds']);exit;
        $this->data['openToken']     = base64_encode($this->session->userdata('token'));
        $this->data['openSessionId'] = $this->session->userdata('openSessionId');
        $this->data['apiKey']        = $this->config->item('opentok_key');
        $this->load->view("user/my-profile", $this->data);
		*/
		
		
        $img_id = $this->input->post('selID');
        $data   = $this->users_model->update_img_status($img_id);
        echo json_encode(array(
                'status' => 1
                
            ));
    }
    
    
    public function postFileUpload()
    {
        
        $option = array(
            
            'upload_dir' => './uploads/photos/'
        );
        
        //$upload_handler = new UploadFileHandler($option);
    }
    public function update_privacy()
    {
        $user_id = $this->session->userdata('user_id');
        if(isset($_POST['profilestatus'])){
            $currentStatus             = trim($_POST['profilestatus']);
            $requestVisiblility = ($currentStatus == '1') ? 'false' : 'true' ;
            $result = $this->profile_model->updateprivacy($user_id,$requestVisiblility);
            echo '{"status":"sucess","visibility" : "'.$requestVisiblility.'"}';
        }else {
            echo '{"status":"failed"}}';
        }
}
         public function update_age_privacy()
    {
		
        $user_id = $this->session->userdata('user_id');
        if(isset($_POST['profilestatus'])){
			
		
			   
$data   = $this->users_model->age_hide_value($user_id );
                    
                    foreach($data as $value){ 
					$st=$value['age_hide'];
					
					}
					
					
					$res   = $this->users_model->age_dob_value($user_id );
			
			 foreach($res as $val)
			 { 
					$ag=$val['age'];
					$db=$val['dob'];
					
					}
					
			  $val1 =  explode("-",$db);		
			$dobs=  $val1[2]."/".  $val1[1]."/".  $val1[0];

				
			
		
            $currentStatus             = trim($_POST['profilestatus']);
            $requestVisiblility = ($currentStatus == '1') ? 'false' : 'true' ;
            $result = $this->profile_model->update_age_privacy($user_id,$requestVisiblility);
            echo '{"status":"sucess","visibility" : "'.$requestVisiblility.'","st" : "'.$st.'","ag" : "'.$ag.'","dobs" : "'.$dobs.'"}';
        }else {
            echo '{"status":"failed"}}';
        }
        
        
        //    redirect('/user/profile', "refresh");
        
    }
    public function update_privacy_private()
    {
        
        $user_id = $this->session->userdata('user_id');
        
        $result = $this->profile_model->updateprivacy_private($user_id);
        //redirect('/user/profile', "refresh");
        echo json_encode();
    }
     public function cookies()
    {
		$this->data['feeds']         = $this->profile_model->GetAllfeeds($this->UserId);
        $this->data['onlinef']       = $this->users_model->GetOnlineFriends($this->UserId);
        $this->data['user']          = $this->users_model->userinfo($this->UserId);
        $this->data['notifications'] = $this->users_model->notication_list($this->UserId);
        
        //print_r($this->data['notifications']);exit;
        
        
        $this->data['openToken']     = base64_encode($this->session->userdata('token'));
        $this->data['openSessionId'] = $this->session->userdata('openSessionId');
        $this->data['apiKey']        = $this->config->item('opentok_key');
        $this->load->view("user/cookies", $this->data);
      
      
       
    } public function terms_conditions()
    {
		$this->data['feeds']         = $this->profile_model->GetAllfeeds($this->UserId);
        $this->data['onlinef']       = $this->users_model->GetOnlineFriends($this->UserId);
        $this->data['user']          = $this->users_model->userinfo($this->UserId);
        $this->data['notifications'] = $this->users_model->notication_list($this->UserId);
        
        //print_r($this->data['notifications']);exit;
        
        
        $this->data['openToken']     = base64_encode($this->session->userdata('token'));
        $this->data['openSessionId'] = $this->session->userdata('openSessionId');
        $this->data['apiKey']        = $this->config->item('opentok_key');
        $this->load->view("user/terms_conditions", $this->data);
      
      
       
    }

    public function howit_work()
    {
		$this->data['feeds']         = $this->profile_model->GetAllfeeds($this->UserId);
        $this->data['onlinef']       = $this->users_model->GetOnlineFriends($this->UserId);
        $this->data['user']          = $this->users_model->userinfo($this->UserId);
        $this->data['notifications'] = $this->users_model->notication_list($this->UserId);
        
        //print_r($this->data['notifications']);exit;
        
        
        $this->data['openToken']     = base64_encode($this->session->userdata('token'));
        $this->data['openSessionId'] = $this->session->userdata('openSessionId');
        $this->data['apiKey']        = $this->config->item('opentok_key');
        $this->load->view("user/howitworks", $this->data);
      
      
       
    }
     public function unfriend()
    {
       
        $friend = $this->input->post('uid');
		$user_id       = $this->session->userdata('user_id');
      $result = $this->users_model->updateunfriend($friend,$user_id);
        //redirect('/user/profile', "refresh");
      echo json_encode();
    } 
		public function cancel_request()
    {
      
        $friend = $this->input->post('uid');
		$user_id       = $this->session->userdata('user_id');
      $result = $this->users_model->cancelfriend($friend,$user_id);
      
      echo json_encode(array(
                'status' => 1
            ));
    }
	public function reject_request()
    {
        
        $friend = $this->input->post('uid');
		$user_id       = $this->session->userdata('user_id');
      $result = $this->users_model->rejectfriend($friend,$user_id);
        //redirect('/user/profile', "refresh");
      echo json_encode(array(
                'status' => 1
                
            ));
    } 
	public function deactive()
    {
			$user_id       = $this->session->userdata('user_id');
			
         $mail = $this->input->post('emailid');
		 $pass = $this->input->post('pas');
		 $pass=md5($pass);
		 $msg = $this->input->post('bb');
		 $data['deact'] = $this->profile_model->getdeactiveinfo($this->UserId);
		
		foreach($data['deact'] as $row)
					{
						$email=$row['email'];
						$password=$row['password'];
						
					}
					
					if(($email==$mail)&&($pass==$password))
					{
						
						 $result = $this->profile_model->deactivateifo($user_id,$msg);
						 
						 $unameTest=$this->users_model->UpdateOnline($user_id,0);
						  $res = $this->profile_model->deactivateuser($user_id);
						
						$array_items = array('user_name' => '', 'user_id' => '');
						$this->session->unset_userdata($array_items);
						
						$this->session->sess_destroy();
						$page_content['error'] = "Logged out successfully";
						$page_content['title'] = 'Login';
						redirect(base_url());
											 
						 
					}
					else
					{
						$this->session->set_flashdata("success",'Check Email id and Password');
						
						
						
						 $this->data['user']           = $this->users_model->userinfo($this->UserId);
        $this->data['openToken']      = base64_encode($this->session->userdata('token'));
        $this->data['openSessionId']  = $this->session->userdata('openSessionId');
        $this->data['apiKey']         = $this->config->item('opentok_key');
        //print_r($this->data);exit;
        
        $this->data['user'] = $this->users_model->userinfo($this->UserId);
        $this->load->view("user/profile-account-setting", $this->data);
    
						
						
						
						
					
					
					}
		
 
    }
    
	    public function update_friendlist_privacy()
    {
        $user_id = $this->session->userdata('user_id');
        if(isset($_POST['profilestatus'])){
            $currentStatus             = trim($_POST['profilestatus']);
            $requestVisiblility = ($currentStatus == '1') ? 'false' : 'true' ;
            $result = $this->profile_model->update_friendlist_privacy($user_id,$requestVisiblility);
            echo '{"status":"sucess","visibility" : "'.$requestVisiblility.'"}';
        }else {
            echo '{"status":"failed"}}';
        }
}

	public function notificationview()
    {
		$user_id = $this->session->userdata('user_id');
         $feed         = $this->uri->segment('3');
       $myfeeds = $this->profile_model->Getlinkfeeds($user_id,$feed);
       $myfeedsurldetails = array();     
        foreach ($myfeeds as $i => $item) {
            $title = "";
            $description= "";
            $image = "";
            $videoid = "";
            $videoidEmbe = "";
            $linkUrl = "";
            $isLink = false;
            preg_match_all('#\b(https|http)?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $item->feeds, $match);
            if(sizeof($match[0]) > 0 && sizeof($item->image_name) < 2){
                $linkPreview = new LinkPreview($match[0][0]);
                $parsed = $linkPreview->getParsed();
                $isLink = true;
                foreach ($parsed as $parserName => $link) {
                    //$parserName . PHP_EOL . PHP_EOL;
                    //echo $link->getUrl() . PHP_EOL;
                    //echo $link->getRealUrl() . PHP_EOL;
                    $title = $link->getTitle() . PHP_EOL;
                    $linkUrl  = $link->getUrl() . PHP_EOL;
                    $description =  $link->getDescription() . PHP_EOL;
                    $image =  $link->getImage() . PHP_EOL;
                    if ($link instanceof VideoLink) {
                        $videoid = $link->getVideoId() . PHP_EOL;
                        $videoidEmbe = $link->getEmbedCode() . PHP_EOL;
                        
                    }
                }
            }		    
            $itemVal = $item;           
            $itemVal->islink = $isLink;
            $itemVal->linkUrl = $linkUrl;
            $itemVal->linktitle = $title;
            $itemVal->linkdescription = $description;
            $itemVal->videoEmbeded = $videoidEmbe;
            $itemVal->linkimage = $image;
            $myfeedsurldetails[$i] = $itemVal;
            log_message('error','here getstranger >>'.$this->session->userdata('user_id').'<< going to stranger >>'.print_r($itemVal, TRUE).'<<..');
        }
        $this->data['feeds']   = $myfeedsurldetails;
        $this->data['friendOnline']  = $this->users_model->GetOnlineFriends($this->UserId);
        $this->data['user']          = $this->users_model->userinfo($this->UserId);
        $this->data['UserId']        = $this->session->userdata('user_id');
        $this->data['openToken']     = base64_encode($this->session->userdata('token'));
        $this->data['openSessionId'] = $this->session->userdata('openSessionId');
        $this->data['apiKey']        = $this->config->item('opentok_key');
        
        $this->load->view("user/notification_view", $this->data);
        
    }
    
}