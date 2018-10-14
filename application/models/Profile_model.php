<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profile_model extends CI_Model
{
    public function __construct()
    {
    }
    
    
    public function GetAllfeeds($userId)
    {
        $this->db->select('DISTINCT(us.user_id),us.gender,up.profile_pic,uf.created_at,up.nick_name,us.full_name,uf.feeds,uf.no_likes,uf.id,up.country_id,cf.country');
        $this->db->from('users us');
        $this->db->join('friends um', 'um.friend_id=us.user_id', 'LEFT');
        $this->db->join('user_profile up', 'up.user_id=us.user_id', 'INNER');
        $this->db->join('user_feed uf', 'uf.user_id= us.user_id', 'INNER');
        $this->db->join('countries cf', 'cf.c_id= up.country_id', 'LEFT');
        //$this->db->join('hide_post hd', 'hd.feed_id = uf.id','LEFT');
        $this->db->where("uf.id NOT IN (SELECT feed_id FROM hide_post WHERE user_id =$userId)", NULL, FALSE);
        
        $this->db->where('um.user_id', $userId);
        $this->db->or_where('us.user_id', $userId);
        //$this->db->where_not_in('uf.id' ,'hd.feed_id');
        $this->db->where('uf.status', 1);
       // $this->db->where('um.status', 1);
        
        //$this->db->group_by('us.user_id'); 
        
        //$this->db->where('dm.ParentID',$params['DepartmentID']);
        $this->db->order_by("uf.created_at", "desc");
        $result = $this->db->get()->result();
        //    echo $this->db->last_query();
        //exit;
        return $result;
    }
    
    //get User feeds
    
    public function GetUserfeeds($userId)
    {
        $this->db->select('DISTINCT(us.user_id),us.gender,up.profile_pic,uf.created_at,up.nick_name,us.full_name,uf.feeds,uf.no_likes,uf.id,up.country_id,cf.country');
        $this->db->from('users us');
        $this->db->join('user_profile up', 'up.user_id=us.user_id', 'INNER');
        $this->db->join('user_feed uf', 'uf.user_id= us.user_id', 'INNER');
        $this->db->join('countries cf', 'cf.c_id= up.country_id', 'left');
        $this->db->where('us.user_id', $userId);
        $this->db->where('uf.status', 1);
        $this->db->order_by("uf.created_at", "desc");
        $result = $this->db->get()->result();
        return $result;
    }
    
    
    //user photos
    
    public function GetUserPhotos($userId)
    {
        $this->db->select('up.*');
        $this->db->from('users us');
        $this->db->join('user_photos up', 'up.user_id=us.user_id', 'INNER');
        $this->db->where('us.user_id', $userId);
        $this->db->order_by("up.create_at", "desc");
        $result = $this->db->get()->result();
        return $result;
    }
    
    public function GetProfileViewerList($userId)
    {
        $this->db->select('us.user_id,us.gender,up.profile_pic,up.nick_name,us.full_name');
        $this->db->from('users us');
        $this->db->join('profile_visit um', 'um.visitor_id=us.user_id', 'INNER');
        $this->db->join('user_profile up', 'up.user_id=us.user_id', 'INNER');
        $this->db->where('um.user_id', $userId);
        $this->db->order_by("us.user_id", "ASC");
        $result = $this->db->get()->result();
        return $result;
    }
    public function checkVisit($params)
    {
        $this->db->select('ph.*,');
        $this->db->from('profile_visit ph');
        $this->db->where('ph.visitor_id', $params['visitor_id']);
        $this->db->where('ph.user_id', $params['user_id']);
        $result = $this->db->get();
        return $result->row_array();
        
    }
    public function InsertVisit($params)
    {
        $this->db->insert('profile_visit', $params);
        $user_id = $this->db->insert_id();
        $error   = $this->db->error();
        $query   = $this->db->query("DELETE FROM  profile_visit where user_id=0");
        return $user_id;
        
    }
    
    //add photos
    
    public function AddUserPhotos($params)
    {
        $this->db->insert('user_photos', $params);
        $user_id = $this->db->insert_id();
        $error   = $this->db->error();
        
        return $user_id;
        
    }
    
    //update pic in profile_pic
    public function UpdateProfilePhotos($params)
    {
        $this->db->where('user_id', $params['user_id']);
        $this->db->update('user_profile', $params);
        return 1;
    }
    
    
    //update feed
    
    public function UpdateFeeds($params)
    {
        
        $this->db->where('id', $params['id']);
        $this->db->update('user_feed', $params);
        $error = $this->db->error();
        return true;
        
    }
    
    //update feeds
    
    public function InserFeeds($params)
    {
        $this->db->insert('user_feed', $params);
        $user_id = $this->db->insert_id();
        $error   = $this->db->error();
        return true;
        
    }
    
    //change password
    
    public function update_pass($password, $admin_id)
    {
        $data = array(
            'password' => $password
        );
        $this->db->where('user_id', $admin_id);
        $this->db->update('users', $data);
        return 1;
    }
    
    public function check_pass($params, $id)
    {
        $this->db->select('ph.*,');
        $this->db->from('users ph');
        $this->db->where('ph.password', $params);
        $this->db->where('ph.user_id', $id);
        $result = $this->db->get();
        return $result->row_array();
        
    }
    
    //like feeds
    
    public function setLike($feedId, $id)
    {
        $query  = $this->db->query("select  user_id from feed_like  WHERE user_id =" . $id . " AND  feed_id =" . $feedId);
        $resuls = $query->row_array();
        if (empty($resuls['user_id'])) {
            $query  = $this->db->query("UPDATE user_feed  SET no_likes = no_likes + 1  WHERE id =" . $feedId);
            $params = array(
                'user_id' => $id,
                'feed_id' => $feedId
            );
            $this->db->insert('feed_like', $params);
            
        }
        $querys = $this->db->query("select  no_likes from user_feed  WHERE id =" . $feedId);
        $result = $querys->row_array();
        
        return $result['no_likes'];
    }
    
    
    
    public function deleteFeed($id)
    {
        $query = $this->db->query("DELETE FROM  user_feed where id=" . $id);
        $query = $this->db->query("DELETE FROM  feed_like where feed_id=" . $id);
        
    }
    public function editfeed($id)
    {
        
        
        $query = $this->db->query("SELECT feeds,id from user_feed WHERE  id=$id");
        return $query->row_array();
        
        
        
    }
    public function updatefeed($feed, $feedid)
    {
        
        
        $query = $this->db->query("UPDATE user_feed  SET feeds='$feed' WHERE id =$feedid");
        return true;
        
        
        
    }
    public function updateprivacy($uid,$visibility)
    {   
        $query = $this->db->query("UPDATE user_profile SET visibility='$visibility' WHERE user_id =$uid");
        return true;  
    }
    public function updateprivacy_private($uid)
    {
        
        $query = $this->db->query("UPDATE  user_profile SET visibility='true' WHERE user_id =$uid");
        return true;
        
        
        
    }
	public function deactivateuser($user_id)
    {
        
        
        $query = $this->db->query("UPDATE users SET status=0 WHERE user_id =$user_id");
        return true;
        
        
        
    }
    public function hideFeed($id, $uid)
    {
        $query = $this->db->query("INSERT INTO hide_post (user_id ,feed_id)
            VALUES ($uid,$id)");
       // echo $this->db->last_query();
        return 1;
        
    }  public function deactivateifo($user_id,$msg)
    {
        $query = $this->db->query("INSERT INTO deactive (user_id ,message)
            VALUES ($user_id,'$msg')");
       // echo $this->db->last_query();
        return 1;
        
    }
     public function getdeactiveinfo($uid)
    {
        $query = $this->db->query("select email,password from users where user_id=$uid");
           return $query->result_array();
        
    }
    
    
    
    
    
    
}