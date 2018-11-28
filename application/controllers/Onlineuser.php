<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Onlineuser extends  CI_Controller
{
	public function __construct()
	{
		 parent::__construct();
		$this->load->library(array('session', 'form_validation','Facebook'));
        $this->load->helper(array('url', 'form', 'html'));
        $this->load->model('online_users_mod');
	}
  //getting all online session data
  
  public function getAllonlineUser(){
    $query=$this->online_users_mod->get_all_session_data();
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
      //print_r ($full_session) ;die();
   }
   public function refreshui(){
        echo "OK";
   }
}