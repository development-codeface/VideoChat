<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users_model extends CI_Model
{
    public function __construct()
    {
    }
    public function getUserLogin($username, $password)
    {
		  $query = $this->db->query("SELECT  * from  users  WHERE  user_name='$username' OR Email='$username' and password='$password' and status=1");
       /* $query = $this->db->or_where_in('users', array(
            'user_name' => $username  ,
			'Email' => $username,
			
            'password' => $password,
            'status' => 1
			
        ));*/
        return $query->row_array();
    }

    public function getUserById($userid = null)
    {
        $query = $this->db->get_where('users', array(
            'user_id' => $userid,
            'status' => 1
        ));
        return $query->row_array();
    }

    public function getUserFullDetails($userid = null){
        $this->db->select("*");
        $this->db->from('users us');
        $this->db->join('user_profile up', 'up.user_id=us.user_id', 'LEFT');
        $this->db->where('us.user_id', $userid);
        $this->db->where('us.status', 1);
        $result = $this->db->get()->row_array();
        return $result;
    }

    public function getUserByToken($token = null,$serial =null)
    {
        $query = $this->db->get_where('users', array(
            'series_identifier' => $serial,
            'token' => $token
        ));
        return $query->row_array();
    }

    public function setUserToken($array = null,$userid= null)
    {
        $this->db->set($array);
        $this->db->where('user_id', $userid);
        return $this->db->update('users');
    }
    
    public function get_email($admin_id)
    {
        $query = $this->db->query("SELECT  admin_userName  from admin_npr WHERE  admin_id=$admin_id");
        return $query->row_array();
    }
    
    
    // Users insert
    
    public function InsertUser($saves,$nick)
    {
		
        
        $this->db->insert('users', $saves);
        $user_id = $this->db->insert_id();
        $error   = $this->db->error();
        if (!empty($error['message'])) {
            return array(
                'success' => false,
                'message' => $error['message']
            );
        } else {
            $array = array(
                'user_id' => $user_id,
                'nick_name' => $nick,
                'visibility' => 'true'
            );
            $this->db->insert('user_profile', $array);
			//$query = $this->db->query("UPDATE  user_profile SET nick_name='$nick' where user_id=$user_id");
            return array(
                'success' => true,
                'message' => $user_id
            );
			
			
			 
        }
        return array(
            'success' => true,
            'message' => 'User data successfully  entered'
        );
    }
    //Online friends    
   /* public function GetOnlineFriends($userId)
    {
        $this->db->select('us.user_id,us.gender,up.profile_pic,up.nick_name,us.full_name,od.logged_time,od.status');
        $this->db->from('users us');
        $this->db->join('friends um', 'um.friend_id=us.user_id', 'INNER');
        $this->db->join('user_profile up', 'up.user_id=us.user_id', 'INNER');
        $this->db->join('online_user od', 'od.user_id= us.user_id', 'LEFT');
        $this->db->where('um.user_id', $userId);
        $this->db->where('um.status', 1);
        $this->db->where('od.status', 1);
        $this->db->group_by('us.user_id');
        $this->db->order_by("od.logged_time", "ASC");
        $result = $this->db->get()->result();
        return $result;
    }*/
    
    
    
    
      public function GetOnlineFriends($userId)
    {
        $this->db->select('us.user_id,ANY_VALUE(us.gender),ANY_VALUE(up.profile_pic),ANY_VALUE(up.nick_name),ANY_VALUE(us.full_name),ANY_VALUE(od.logged_time),ANY_VALUE(od.status)');
        $this->db->from('users us');
        $this->db->join('friends um', 'um.friend_id=us.user_id', 'INNER');
        $this->db->join('user_profile up', 'up.user_id=us.user_id', 'INNER');
        $this->db->join('online_user od', 'od.user_id= us.user_id', 'LEFT');
        $this->db->where('um.user_id', $userId);
        $this->db->where('um.status', 1);
        $this->db->where('od.status', 1);
        $this->db->group_by('us.user_id');
        $this->db->order_by("ANY_VALUE(od.logged_time)", "ASC");
        $result = $this->db->get()->result();
        return $result;
    }
    
    
    //friendsList(all)
    
 /*  public function GetFriendList($userId)
    {
        $this->db->select('us.user_id,us.gender,up.profile_pic,up.nick_name,us.full_name,od.logged_time,od.status');
        $this->db->from('users us');
        $this->db->join('friends um', 'um.friend_id=us.user_id', 'INNER');
        $this->db->join('user_profile up', 'up.user_id=us.user_id', 'INNER');
        $this->db->join('online_user od', 'od.user_id= us.user_id', 'LEFT');
        $this->db->where('um.user_id', $userId);
        $this->db->where('um.status', 1);
        $this->db->group_by('us.user_id');
        $this->db->order_by("od.logged_time", "ASC");
        $result = $this->db->get()->result();
        return $result;
    } */
    
    
    
    
    
       public function GetFriendList($userId)
    {
        $this->db->select('us.user_id,us.gender,ANY_VALUE(up.profile_pic) as profile_pic,ANY_VALUE(up.nick_name),us.full_name,ANY_VALUE(od.logged_time),ANY_VALUE(od.status),um.status');
        $this->db->from('users us');
        $this->db->join('friends um', 'um.friend_id=us.user_id', 'INNER');
        $this->db->join('user_profile up', 'up.user_id=us.user_id', 'INNER');
        $this->db->join('online_user od', 'od.user_id= us.user_id', 'LEFT');
        $this->db->where('um.user_id', $userId);
        $this->db->where('um.status', 1);
        $this->db->group_by('us.user_id');
        $this->db->order_by("ANY_VALUE(od.logged_time)", "ASC");
        $result = $this->db->get()->result();
        return $result;
    } 
    
    
  
    
  /*      public function GetstrangerList($userId)
    {
        $this->db->select('us.user_id,us.gender,up.profile_pic,up.nick_name,us.full_name,od.logged_time,od.status');
        $this->db->from('users us');
        $this->db->join('add_stranger um', 'um.friend_id=us.user_id', 'INNER');
        $this->db->join('user_profile up', 'up.user_id=us.user_id', 'INNER');
        $this->db->join('online_user od', 'od.user_id= us.user_id', 'LEFT');
        $this->db->where('um.user_id', $userId);
        $this->db->where('um.status', 0);
        $this->db->group_by('us.user_id');
        $this->db->order_by("od.logged_time", "ASC");
        $result = $this->db->get()->result(); //echo $this->db->last_query();
       // print_r($result);exit;
        return $result;
    }
    */
    
    
    
        public function GetstrangerList($userId)
    {
        $this->db->select('us.user_id,ANY_VALUE(us.gender),ANY_VALUE(up.profile_pic),ANY_VALUE(up.nick_name),ANY_VALUE(us.full_name),ANY_VALUE(od.logged_time),ANY_VALUE(od.status)');
        $this->db->from('users us');
        $this->db->join('add_stranger um', 'um.friend_id=us.user_id', 'INNER');
        $this->db->join('user_profile up', 'up.user_id=us.user_id', 'INNER');
        $this->db->join('online_user od', 'od.user_id= us.user_id', 'LEFT');
        $this->db->where('um.user_id', $userId);
        $this->db->where('um.status', 0);
        $this->db->group_by('us.user_id');
        $this->db->order_by("ANY_VALUE(od.logged_time)", "ASC");
        $result = $this->db->get()->result(); //echo $this->db->last_query();
       // print_r($result);exit;
        return $result;
    }
    
    
    
    
    

    //friendRequest
    public function GetFriendsRequest($userId)
    {
        $this->db->select('us.user_id,us.gender,up.profile_pic,up.nick_name,us.full_name');
        $this->db->from('users us');
        $this->db->join('friends um', 'um.friend_id=us.user_id', 'INNER');
        $this->db->join('user_profile up', 'up.user_id=us.user_id', 'INNER');
        $this->db->where('um.user_id', $userId);
        $this->db->where('um.status', 0);
        $this->db->order_by("um.friend_id", "ASC");
        $result = $this->db->get()->result(); //echo $this->db->last_query();exit;
        return $result;
    }
	public function GetsendRequest($userId)
    {
        $this->db->select('us.user_id,us.gender,up.profile_pic,up.nick_name,us.full_name');
        $this->db->from('users us');
        $this->db->join('friends um', 'um.user_id=us.user_id', 'INNER');
        $this->db->join('user_profile up', 'up.user_id=us.user_id', 'INNER');
        $this->db->where('um.friend_id', $userId);
        $this->db->where('um.status', 0);
        $this->db->order_by("um.friend_id", "ASC");
        $result = $this->db->get()->result();// echo $this->db->last_query();exit;
        return $result;
    }
    
    public function getCustomerById($id)
    {
        $this->db->select('ph.*');
        $this->db->from('ci_customer_npr ph');
        
        $this->db->where('ph.CustomerId', $id);
        $result = $this->db->get();
        return $result->row_array();
        
    }
    
    public function update_pass($password, $admin_id)
    {
        $data = array(
            'password' => $password
        );
        $this->db->where('empId', $admin_id);
        $this->db->update('users', $data);
        return 1;
    }
    
    public function check_pass($params, $id)
    {
        $this->db->select('ph.*,');
        $this->db->from('users ph');
        $this->db->where('ph.password', $params);
        $this->db->where('ph.empId', $id);
        $result = $this->db->get();
        return $result->row_array();
        
    }
    
    /// CUSTOMERS
    
    public function getCustomerProducts($CompanyID)
    {
        $this->db->select('wd.*,ed.EmployeeName,dp.Department');
        $this->db->from('work_details wd');
        $this->db->join('user_master um', 'um.UserID=wd.CreatedBy', 'INNER');
        $this->db->join('employee_details ed', 'ed.EmpID= um.EmpID', 'INNER');
        $this->db->join('userbranchaccess ub', 'um.UserID= ub.UserID', 'INNER');
        $this->db->join('department _master dp', 'dp.DepartmentID= ub.DepartmentID', 'INNER');
        $this->db->where('um.CompanyID', $CompanyID);
        if (!empty($params['BranchID'])) {
            $this->db->where_in('ub.BranchID', $params['BranchID']);
            $this->db->where_in('ub.DepartmentID', $params['DepartmentID']);
        }
        if (!empty($params['startDate'])) {
            $this->db->where("date(wd.CreatedDate) BETWEEN '" . $params['startDate'] . "' AND '" . $params['endDate'] . "'", NULL, FALSE);
        } else {
            $this->db->where("date(wd.CreatedDate)", date('Y-m-d'));
        }
        if (!empty($params['Emp'])) {
            $this->db->where('wd.CreatedBy', $params['Emp']);
        }
        //$this->db->where('dm.ParentID',$params['DepartmentID']);
        $this->db->order_by("wd.Workdate", "ASC");
        $result = $this->db->get()->result();
        return $result;
    }
    
    public function getCustomerTickets($customer_id)
    {
        $this->db->select('ph.*,uh.*,tr.*');
        $this->db->from('ci_tickets_npr tr');
        $this->db->join('ci_tickets_assign_npr uh', 'tr.id=uh.ticket_id', 'LEFT');
        $this->db->join('users ph', 'ph.empId=uh.employee_id', 'LEFT');
        $this->db->join('ci_product pr', 'pr.product_id=tr.product_code', 'LEFT');
        $this->db->join('ci_customer_npr cr', 'cr.CustomerId= tr.customer_id', 'INNER');
        $this->db->where('tr.customer_id', $customer_id);
        $this->db->order_by("tr.created_on", "DESC");
        $result = $this->db->get()->result();
        return $result;
    }
    
    
    public function checkEmail($params)
    {
		 $query = $this->db->query("SELECT email from users WHERE  email='$params'");
       return $query->result_array();
    /*    $this->db->select('ph.*,');
        $this->db->from('users ph');
        $this->db->like('ph.email', $params);
        $result = $this->db->get();
        return $result->row_array();*/
        
    }
    public function checkmail($params)
    {
        $query = $this->db->query("SELECT email,user_id from users WHERE  email='$params'");
        return $query->result_array();
        
    }
    public function insert_token($token, $user)
    {
        $query = $this->db->query("INSERT INTO token (token,user_id)
              VALUES ('$token',$user) ");
        // echo $this->db->last_query();
        return 1;
        
    }
    
    public function checkUserOnline($params)
    {
        $this->db->select('ph.*,');
        $this->db->from('online_user ph');
        $this->db->like('ph.user_id', $params);
        $result = $this->db->get();
        return $result->row_array();
    }
    public function checkUserName($params)
    {
		 $query = $this->db->query("SELECT user_name from users WHERE  user_name='$params'");
       return $query->result_array();
      /*  $this->db->select('ph.*,');
        $this->db->from('users ph');
        $this->db->like('ph.user_name', $params);
        $result = $this->db->get();*/
     //   return $result->row_array();
        
    }
    
    public function AccetFriends($friendId, $user_id)
    {
        $data = array(
            'status' => 1
        );
        $this->db->where('user_id', $user_id);
        $this->db->where('friend_id', $friendId);
        $this->db->update('friends', $data);
        $array = array(
            'user_id' => $friendId,
            'friend_id' => $user_id,
            'status' => 1
        );
        $this->db->insert('friends', $array);
        return 1;
    }
    
    
    public function friendRequest($friendId, $user_id)
    {
        $data = array(
            'friend_id' => $user_id,
            'user_id' => $friendId,
            'status' => 0
        );
        $this->db->insert('friends', $data);
        return 1;
    }
    
    
    
    
    
    public function GetMyData($userId)
    {
        $this->db->select('us.*,up.*,cf.*,us.gender as gen,us.dob as birth,us.age as ag');
        $this->db->from('users us');
        $this->db->join('user_profile up', 'up.user_id=us.user_id', 'INNER');
        $this->db->join('countries cf', 'cf.c_id=up.country_id', 'LEFT');
        $this->db->where('up.user_id', $userId);
        $result = $this->db->get();
        return $result->row_array();
    }
    
    public function UpdateBasic($param, $params, $user_id, $dob, $gen, $ager,$age)
    {
       
        $this->db->where('user_id', $user_id);
        $this->db->update('users', $param);
        $this->db->where('user_id', $user_id);
        $this->db->update('user_profile', $params);
      //  $query = $this->db->query("UPDATE  user_profile SET age_hide=$ager where user_id=$user_id");
        $query = $this->db->query("UPDATE  users SET dob='$dob',gender=$gen where user_id=$user_id"); 
		$query = $this->db->query("UPDATE  users SET age='$age' where user_id=$user_id");
		$query = $this->db->query("select age   from users  where user_id=$user_id");
        return 1;
    }
    public function Updateintrest($params, $user_id)
    {   
        $query = $this->db->query("UPDATE  user_profile SET interest_area=$params where user_id=$user_id");
        return 1;
    }

    public function updateAreaofinterest($params, $user_id){
        $query = $this->db->query("DELETE from user_intrest_list where user_id=$user_id");
        $arrayList =array();
        foreach ($params as $key => $interest){
            $intererstItem[] = array(
                'user_id' => $user_id,
                'intrest_id' => $interest,
                'status' => 1
               );
        }

        $this->db->insert_batch(
            'user_intrest_list',$intererstItem
            
        );
		return 1;
    } 
    public function ageintrest($params, $user_id)
    {
        $query = $this->db->query("UPDATE  user_profile SET age_hide=$params where user_id=$user_id");
        return 1;
    }
    public function fetch_dob($user_id)
    {
        $query = $this->db->query("select dob from users  where user_id=$user_id");
        return $query->result_array();
    }
    public function UpdateLocation($params, $user_id)
    {
        $this->db->where('user_id', $user_id);
        $this->db->update('user_profile', $params);
        
        return 1;
    }
    public function selectLocation($params)
    {
        
        $query = $this->db->query("select country from countries  where c_id='" . $params['country_id'] . "'");
        
        foreach ($query->result() as $row) {
            $country = $row->country;
            
        }
        return $country;
    }
    public function UpdateOverview($params, $user_id)
    {
        $this->db->where('user_id', $user_id);
        $this->db->update('user_profile', $params);
        return 1;
    }
    public function InsertOnline($param)
    {
        $this->db->insert('online_user', $param);
        return 1;
    }
    public function UpdateOnline($params, $status)
    {
        if ($status == 1) {
            $query = $this->db->query("UPDATE  online_user SET status=$status, logout_time =null WHERE user_id=$params");
        } else {
            $query = $this->db->query("UPDATE  online_user SET status=$status, logout_time =NOW()  WHERE user_id=$params");
        }
        
        
        return true;
        
    }
    ///search friends
    public function GetSearchFriends($params)
    {
        $search   = (strlen($params['searchkey']) > 0)? " AND us.full_name LIKE '%".$params['searchkey']."%'" : "";
        $privateprofile = (strlen($params['searchkey']) > 0)? " OR us.user_id in (select pu.user_id from user_profile pu where pu.visibility ='false' and pu.nick_name = '".$params['searchkey']."')" : "";
        if (($params['country'] == 0)&&($params['age'] == 0)&&($params['gender'] == 0)) { 
            $result = $this->db->query('SELECT DISTINCT(us.user_id),us.gender,up.profile_pic,up.nick_name,us.full_name  from users us INNER JOIN
            user_profile up  ON up.user_id=us.user_id
            WHERE us.user_id not in(select fm.user_id from friends fm where fm.friend_id =' . $params['user_id'] . ')
            AND us.user_id !=' . $params['user_id'] . ' and 
            up.visibility="true" AND us.status =1 '.$search.$privateprofile.' ORDER BY us.user_id');
            return $result->result();
        } else  if (($params['country'] != 0)&&($params['age'] == 0)&&($params['gender'] == 0)){  
            $result = $this->db->query('SELECT DISTINCT(us.user_id),us.gender,up.profile_pic,up.nick_name,us.full_name  from users us INNER JOIN
            user_profile up  ON up.user_id=us.user_id
            WHERE us.user_id not in(select fm.user_id from friends fm where fm.friend_id =' . $params['user_id'] . ')
            AND us.user_id !=' . $params['user_id'] . '  AND up.country_id =' . $params['country'] . ' AND us.status =1 AND up.visibility="true"  '.$search.$privateprofile.'  ORDER BY us.user_id');
            return $result->result();  
		}else  if (($params['country'] == 0)&&($params['age'] != 0)&&($params['gender'] == 0)){
            $result = $this->db->query('SELECT DISTINCT(us.user_id),us.gender,up.profile_pic,up.nick_name,us.full_name  from users us INNER JOIN
            user_profile up  ON up.user_id=us.user_id
            WHERE us.user_id not in(select fm.user_id from friends fm where fm.friend_id =' . $params['user_id'] . ')
            AND us.user_id !=' . $params['user_id'] . '  AND  us.age BETWEEN ' . $params['age_from'] . ' AND ' . $params['age_to'] . ' AND us.status =1 AND up.visibility="true"  '.$search.$privateprofile.' ORDER BY us.user_id');
            return $result->result();
		   
		}else  if (($params['country'] == 0)&&($params['age'] == 0)&&($params['gender'] != 0)){
            $result = $this->db->query('SELECT DISTINCT(us.user_id),us.gender,up.profile_pic,up.nick_name,us.full_name  from users us INNER JOIN
            user_profile up  ON up.user_id=us.user_id
            WHERE us.user_id not in(select fm.user_id from friends fm where fm.friend_id =' . $params['user_id'] . ')
            AND us.user_id !=' . $params['user_id'] . '  AND  us.gender =' . $params['gender'] . ' AND us.status =1 AND up.visibility="true"  '.$search.$privateprofile.' ORDER BY us.user_id');
            return $result->result();echo $this->db->last_query();
		}else  if (($params['country'] != 0)&&($params['age'] != 0)&&($params['gender'] == 0)){
            $result = $this->db->query('SELECT DISTINCT(us.user_id),us.gender,up.profile_pic,up.nick_name,us.full_name  from users us INNER JOIN
            user_profile up  ON up.user_id=us.user_id
            WHERE us.user_id not in(select fm.user_id from friends fm where fm.friend_id =' . $params['user_id'] . ')
            AND us.user_id !=' . $params['user_id'] . '  AND   us.age BETWEEN ' . $params['age_from'] . ' AND ' . $params['age_to'] . ' AND up.country_id =' . $params['country'] . ' AND us.status =1 AND up.visibility="true"  '.$search.$privateprofile.'  ORDER BY us.user_id');
            return $result->result();
		}
		else  if (($params['country'] == 0)&&($params['age'] != 0)&&($params['gender'] != 0)){
            $result = $this->db->query('SELECT DISTINCT(us.user_id),us.gender,up.profile_pic,up.nick_name,us.full_name  from users us INNER JOIN
            user_profile up  ON up.user_id=us.user_id
            WHERE us.user_id not in(select fm.user_id from friends fm where fm.friend_id =' . $params['user_id'] . ')
            AND us.user_id !=' . $params['user_id'] . '  AND   us.age BETWEEN ' . $params['age_from'] . ' AND ' . $params['age_to'] . ' AND us.gender =' . $params['gender'] . ' AND us.status =1 AND up.visibility="true"  '.$search.$privateprofile.'  ORDER BY us.user_id');
            return $result->result();
		}
		else  if (($params['country'] != 0)&&($params['age'] == 0)&&($params['gender'] != 0)){
            $result = $this->db->query('SELECT DISTINCT(us.user_id),us.gender,up.profile_pic,up.nick_name,us.full_name  from users us INNER JOIN
            user_profile up  ON up.user_id=us.user_id
            WHERE us.user_id not in(select fm.user_id from friends fm where fm.friend_id =' . $params['user_id'] . ')
            AND us.user_id !=' . $params['user_id'] . '  AND us.gender =' . $params['gender'] . ' AND up.country_id =' . $params['country'] . ' AND us.status =1 AND up.visibility="true"  '.$search.$privateprofile.'  ORDER BY us.user_id');
            return $result->result();
		}else{
				
            $result = $this->db->query('SELECT DISTINCT(us.user_id),us.gender,up.profile_pic,up.nick_name,us.full_name  from users us 
            INNER JOIN  user_profile up  ON up.user_id=us.user_id
            JOIN  countries uc  ON uc.C_id=up.country_id
            WHERE us.user_id not in(select fm.user_id from friends fm where fm.friend_id =' . $params['user_id'] . ') 
            and  us.gender =' . $params['gender'] . ' AND  us.age BETWEEN ' . $params['age_from'] . ' AND ' . $params['age_to'] . ' AND us.user_id !=' . $params['user_id'] . ' AND up.country_id =' . $params['country'] . ' AND us.status =1 and 
            up.visibility="true"  '.$search.$privateprofile.' ORDER BY us.user_id');
            //echo $this->db->last_query();
            //us.gender ='.$params['gender'].' AND
            return $result->result();
        }
        
    }
    ///derin
    
    public function GetSearchFriends_name($params, $check)
    {
        
       
        /*$result = $this->db->query('SELECT DISTINCT(us.user_id),up.profile_pic,up.nick_name,us.full_name  from users us INNER JOIN
        user_profile up  ON up.user_id=us.user_id
        WHERE us.user_id not in(select fm.friend_id from friends fm where fm.user_id ='.$params['user_id'].')  AND up.country_id="'.$params['country'].'"
        AND us.user_id !='.$params['user_id'] .' and 
        up.visibility="true" ORDER BY us.user_id');*/
        $this->db->select('us.user_id,up.profile_pic,up.nick_name,us.full_name,us.gender,um.user_Id ');
        $this->db->from('users us');
		 $this->db->join('user_profile up', 'up.user_id=us.user_id', 'left');
       
         $this->db->join('friends um', 'um.friend_id=us.user_id', 'INNER');
		
        $this->db->join('online_user od', 'od.user_id= us.user_id', 'INNER');
       
       
        $this->db->or_like('us.full_name', $check);
		$this->db->or_like('up.nick_name', $check);
		 
        $this->db->group_by('us.user_id');
        
        $result = $this->db->get()->result();
        return $result;
		
		
		
        
        
    }
    public function insert_session($uid, $sess)
    {
        
        
        
        $query = $this->db->query("UPDATE  users SET session_id='$sess' WHERE user_id=$uid");
        
        // echo $this->db->last_query();
        //return $query->result();
        
    }
    
    public function fetch_session($uid)
    {
        $query = $this->db->query("SELECT session_id,full_name from users WHERE  user_id=$uid");
        return $query->row_array();
    }
    
    public function check_session($uid)
    {
        $query = $this->db->query("SELECT session_id from users WHERE  user_id=$uid");
        return $query->row_array();
    }
    
    
    public function userinfo($userId)
    {
        $query = $this->db->query("SELECT gender from users WHERE  user_id=$userId");
        return $query->row_array();
    }
    public function privacy($userId)
    {
        $query = $this->db->query("SELECT status from users WHERE  user_id=$userId");
        return $query->row_array();
    }
    public function imageinfo($userId)
    {
        $query = $this->db->query("SELECT * from user_photos WHERE  user_id=$userId and status='0' ORDER BY id DESC");
        return $query->result_array();
    }
    
    
    
    function updatephoto($user_id, $file_name)
    {
        $query = $this->db->query("update user_profile set profile_pic='$file_name' where user_id=$user_id ");
        return 1;
    } 
	function updateunfriend($friend,$user_id)
    {
       $query = $this->db->query("delete from friends where user_id=$user_id and friend_id=$friend ");
        $query = $this->db->query("delete from friends where user_id=$friend and friend_id=$user_id ");
        return 1;
    }
	function cancelfriend($friend,$user_id)
    {
     //  $query = $this->db->query("delete from friends where user_id=$user_id and friend_id=$friend ");
        $query = $this->db->query("delete from friends where user_id=$friend and friend_id=$user_id ");
        return 1;
    }
    	function cancelstrangerfriend($friend,$user_id)
    {
     //  $query = $this->db->query("delete from friends where user_id=$user_id and friend_id=$friend ");
        $query = $this->db->query("delete from add_stranger where user_id=$user_id and friend_id=$friend ");
        return 1;
    }
	function rejectfriend($friend,$user_id)
    {
       $query = $this->db->query("delete from friends where user_id=$user_id and friend_id=$friend ");
       // $query = $this->db->query("delete from friends where user_id=$friend and friend_id=$user_id ");
        return 1;
    }
    function updatecover($user_id, $file_name)
    {
        $query = $this->db->query("update user_profile set cover_photo='$file_name' where user_id=$user_id ");
        return 1;
    }
    function updatepublicphoto($user_id, $file_name)
    {
        $query = $this->db->query("INSERT INTO user_photos (user_id , file_name)
              VALUES ($user_id,'$file_name') ");
        // echo $this->db->last_query();
        return 1;
    }
    
    public function GetFriendListsearch($userId, $check)
    {
        $this->db->select('us.user_id,up.profile_pic,up.nick_name,us.full_name,od.logged_time,od.status,us.gender');
        $this->db->from('users us');
        $this->db->join('friends um', 'um.friend_id=us.user_id', 'INNER');
        $this->db->join('user_profile up', 'up.user_id=us.user_id', 'INNER');
        $this->db->join('online_user od', 'od.user_id= us.user_id', 'LEFT');
        $this->db->where('um.user_id', $userId);
        $this->db->where('um.status', 1);
        
        $this->db->like('us.full_name', $check);
        $this->db->group_by('us.user_id');
        $this->db->order_by("od.logged_time", "ASC");
        $result = $this->db->get()->result();
        return $result;
    }
    function update_img_status($img_id)
    {
        $query = $this->db->query("delete from  user_photos  where id=$img_id ");
        return 1;
    }
    
    function getAllcountries()
    {
        
        
        $query = $this->db->query('SELECT * FROM countries');
        
        
        return $query->result();
        
        
    }
	function getAllintrest()
    {
        
        
        $query = $this->db->query('SELECT * FROM user_intrest');
        
        
        return $query->result();
        
        
    }
    function friendage($uid)
    {
        
        
        $query = $this->db->query("SELECT age  FROM users where user_id = $uid");
        
        foreach ($query->result() as $row) {
            $age = $row->age;
            
        }
        return $age;
        
    }
    function username($uid)
    {
        $query = $this->db->query("select full_name from users where user_id=$uid");
        foreach ($query->result() as $row) {
            $name = $row->full_name;
            
        }
        
        return $name;
        
    }
    function stranger_check()
    {
        $query = $this->db->query("select * from stranger_det");
        return $query->result();
        
    }  
    function clearoldstranger(){
     $query = $this->db->query("DELETE from stranger_det WHERE requestedtime < NOW() - INTERVAL 1 MINUTE");
     return 1;
    }

    function removeuserfromStranger($uid){
        $query = $this->db->query("DELETE from stranger_det WHERE 	user_id = $uid");
        return $this->getUserFullDetails($uid);
    }
    function getStrangerAvaiUser($user_id,$gender){
        
        $query = $this->db->query('SELECT DISTINCT(us.user_id),up.nick_name  from stranger_det sd LEFT JOIN users us ON sd.user_id=us.user_id LEFT JOIN
            user_profile up  ON up.user_id=us.user_id
            WHERE us.user_id not in(select fm.user_id from friends fm where fm.friend_id =' . $user_id . ')
            AND us.user_id !=' . $user_id. ' AND us.status =1 AND us.gender ='.$gender.' LIMIT 1');
        
        //$query = $this->db->query("SELECT user_id FROM stranger_det WHERE user_id != $user_id LIMIT 1");
        return $query->row_array();
    }
    
    
	function countimage($uid)
    {
        $query = $this->db->query("select count(user_id) as cs from user_photos where user_id=$uid");
        foreach ($query->result() as $row) {
            $name = $row->cs;
            
        }
        return $name;
 
        
    }
    function insertnotification($str, $fid, $uid,$link)
    {
        $query = $this->db->query("INSERT INTO notification (messages ,fri_id,user_id,link)
              VALUES ('$str',$fid,$uid,'$link') ");
        // echo $this->db->last_query();
        return 1;
    }
    function stranger_update($uid)
    {   $this->db->select("user_id");
        $this->db->from("stranger_det");
        $this->db->where(array('user_id'=>$uid));
        $prevQuery = $this->db->get();
        $prevCheck = $prevQuery->num_rows();
        if($prevCheck > 0){
            $prevResult = $prevQuery->row_array();
            //update user data
            $userData['status'] = 1;
            $this->db->set('requestedtime', 'NOW()', FALSE);
            $update = $this->db->update("stranger_det",$userData,array('user_id'=>$prevResult['user_id']));
            $userID = $prevResult['user_id'];
        }else {
            $userData['user_id']  = $uid;
            $userData['status'] = 1;
            $this->db->set('requestedtime', 'NOW()', FALSE);
            $insert = $this->db->insert("stranger_det",$userData);
            $userID = $this->db->insert_id();
        }
        return $userID?$userID:FALSE;
    }
    function stranger_delete($user)
    {
        $query = $this->db->query(" DELETE from stranger_det ");
        //  echo $this->db->last_query();exit;
        return 1;
    }
    function notication_list($id)
    {
        $query = $this->db->query("
            
            SELECT ns.messages,ns.fri_id,ns.user_id,up.profile_pic,us.gender,ns.link   from notification ns 
            INNER JOIN
            user_profile up  ON up.user_id = ns.user_id
             INNER JOIN
            users us  ON us.user_id = up.user_id
            where ns.fri_id=$id ORDER BY cur_time DESC ");
    //    echo $this->db->last_query();
        return $query->result();
    }  
	function notication_status_up($id)
    {
        $query = $this->db->query("update notification set status =1 where fri_id=$id;
            
         ");
    //    echo $this->db->last_query();
       return true;
    }
    function user_pass_rest($str, $pass, $user)
    {
        $query = $this->db->query(" UPDATE users u
        JOIN token t ON t.user_id = u.user_id
        SET u.password='$pass',t.status=0
        WHERE u.user_id=$user
                      ");
        // echo $this->db->last_query();exit;
        return 1;
    }
    function delete_token($user)
    {
        $query = $this->db->query(" DELETE from token where user_id=$user");
        //  echo $this->db->last_query();exit;
        return 1;
    } 
	
function checknolike($fid, $uid)
    {
        $query = $this->db->query("Select * from feed_like where feed_id=$fid and user_id=$uid");
       //echo $this->db->last_query();
       $num = $query->num_rows();
	    if ($query->num_rows() == 1) {
    return true;
    } else {
    return false;
    }
    }
	
	function age_hide_value($uid)
    {
	
			    $query=$this->db->query("select age_hide from user_profile where user_id=$uid");

            $result=$query->result_array();
               return $result;     
	}
	function age_dob_value($uid)
    {
	
			    $query=$this->db->query("select age,dob from users where user_id=$uid");

           $result=$query->result_array();
               return $result;  
	}
	
	function fetchintrest($uid)
    {
			           $this->db->select('up.intrest');
        $this->db->from('user_intrest up');
        $this->db->join(' user_intrest_list ul', 'ul.intrest_id=up.in_id');
        $this->db->where('ul.user_id', $uid);
       
    $result = $this->db->get()->result();
        
        //exit;
        return $result;
			   
	}
	
	
	
	function useremail($uid)
    {
        $query = $this->db->query("select email from users where user_id=$uid");
        foreach ($query->result() as $row) {
            $email = $row->email;
            
        }
        
        return $email;
        
    }	
	
}