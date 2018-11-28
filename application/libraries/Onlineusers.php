
<?php
/**
* Users Online class
*
* Manages active users
*
* @package CodeIgniter
* @subpackage Libraries
* @category Add-Ons
* @author Leonardo Monteiro Bersan de Araújo
* @link hhttp://codeigniter.com/wiki/Library: Online_Users
*/
class OnlineUsers{
  public $file="usersonline.tmp";
  public $data;
  public $ip;

  public function __construct(){
    $this->CI =& get_instance();
    $this->CI->load->model('online_users_mod');

    /*$this->ip=$_SERVER['REMOTE_ADDR'];
    $this->data = @unserialize(file_get_contents($this->file));
    $aryData = $this->data['useronline'];
    if(!$this->data) $this->data=array();
    $timeout = time()-120;
    //Removes expired data 
    foreach($aryData as $key => $value){
      if($value['time'] <= $timeout) {
        if($value['username']) {
          $this->data['memonline']--; 
        }else 
          $this->data['guestonline']--;
      unset($aryData[$key]);
      }
    }
    //If it’s the first hit, add the information to database
    if(!isset($aryData[$this->ip])){
      $this->CI->load->library('session');
      $aryData[$this->ip]['time'] = time();
      $aryData[$this->ip]['uri'] = $_SERVER['REQUEST_URI'];
      $username =  $this->CI->session->userdata('user_name');
      $sessionID = $this->CI->session->session_id;
      $aryData[$this->ip]['sessionId'] = $sessionID;
      $aryData[$this->ip]['username'] = $username;
      if($username) {
        if(!isset($this->data['memonline'])) $this->data['memonline'] = 0;
        $this->data['memonline']++;
      }else {
        if(!isset($this->data['guestonline'])) $this->data['guestonline'] = 0;
        $this->data['guestonline']++;
      }
      if(!isset($this->data['totalvisit'])) $this->data['totalvisit'] = 0;
      $this->data['totalvisit']++;
      //Loads the USER_AGENT class if it’s not loaded yet
      if(!isset($this->CI->agent)) { 
        $this->CI->load->library('user_agent'); $class_loaded = true; 
      }
      if($this->CI->agent->is_robot())
        $aryData[$this->ip]['bot'] = $CI->agent->robot();
      else
        $aryData[$this->ip]['bot'] = false;
        //Destroys the USER_AGENT class so it can be loaded again on the controller
      if($class_loaded) unset($class_loaded, $this->CI->agent);
    }else {
        $aryData[$this->ip]['time'] = time();
        $aryData[$this->ip]['uri'] = $_SERVER['REQUEST_URI'];
    }
      $this->data['useronline'] = $aryData;
      $this->_save();*/
  }
  //this function return the total number of online users
  //function total_users(){
  //  return count($this->data['useronline']);
  //}
  //this function return the total number of online members
  //function total_mems(){
  //  return @$this->data['memonline'];
  //}
  //this function return the total number of online guest
  //function total_guests(){
  //  return @$this->data['guestonline'];
  //}
  //this function return the total number of total visit
  //function total_visit() {
  //  return @$this->data['totalvisit'];
  //}
  //this function return the total number of online robots
  //function total_robots(){
  //  $i=0;
  //  foreach($this->data as $value){
  //    if($value['is_robot']) $i++;
  //  }
  //  return $i;
  //}

  //Used to set custom data
  //function set_data($data=false, $force_update=false){
  //  if(!is_array($data)){ return false;}
  //  $tmp=false; //Used to control if there are changes
    /*foreach($data as $key => $value){
      if(!isset($aryData[$this->ip]['data'][$key]) || $force_update){
        $aryData[$this->ip]['data'][$key] = $value; 
        $tmp=true;
      }
      
    }*/
  //  $data['time']   = time();
  //  $sessionID = $this->CI->session->session_id;
  //  $data['sessionId'] = $sessionID;
  //  $aryData[$this->ip]['data'][$data['username']] = $data;
    //Check if the user’s already have this setting and skips the wiriting file process (saves CPU)
  //  if(!$tmp) return false;
  //  return $this->_save();
  //}
  //
  //function get_info(){
  //  return @$this->data;
  //} 
  //Save current data into file
  //function _save() {
  //  $fp = fopen($this->file,'w');
  //  flock($fp, LOCK_EX);
  //  $write = fwrite($fp, serialize($this->data));
  //  fclose($fp);
  //  return $write;
  //}
  public function getAllonlineUserSession(){
    $query=$this->CI->online_users_mod->get_all_session_data();
    $user = array();
    $full_session = array();
      /* array to store the user data we fetch */
      foreach ($query->result() as $row)
      {
        $session_data = $row->data ;  // your BLOB data who are a String
          // array where you put your "BLOB" resolved data     
        $offset = 0;
        $return_data = array();
        while ($offset < strlen($session_data)) {
            if (!strstr(substr($session_data, $offset), "|")) {
                throw new Exception("invalid data, remaining: " . substr($session_data, $offset));
            }
            $pos = strpos($session_data, "|", $offset);
            $num = $pos - $offset;
            $varname = substr($session_data, $offset, $num);
            $offset += $num + 1;
            $data = unserialize(substr($session_data, $offset));
            $return_data[$varname] = $data;  
            $offset += strlen(serialize($data)); 
        }
        array_push($full_session,$return_data);
      }
      return ($this->formateSessionData($full_session)) ;
   }

   private function formateSessionData($full_session){
    $finalData = array(); 
    foreach ($full_session as $item){
      $userID  = isset($item['user_id']) ? $item['user_id'] : null;
      if(isset($userID))
         if(!isset($finalData[$userID]))
            $finalData[$userID]   = $item;
    }
    return $finalData;
   }
  
}