<?php
class Online_users_mod extends CI_Model
{
    public function __construct()
    {
      
    }

  //getting all session data
  function get_all_session_data(){
    $query=$this->db->select('data')->where('timestamp > (UNIX_TIMESTAMP() - 65)',null, FALSE)->get('ci_sessions');
    return $query;
  }
}