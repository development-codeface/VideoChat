<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 class Users_model extends CI_Model
    {
	public function __construct()
	{
	}
	public function getUserLogin($username=nullm,$password=null){
         $query=$this->db->get_where('users', array('user_name'=>$username,'password'=>$password, 'status'=>1));
		return $query->row_array();
	}
	 
	public function get_email($admin_id)
	{
		$query = $this->db->query("SELECT  admin_userName  from admin_npr WHERE  admin_id=$admin_id" );
		return $query->row_array();
	}
	
	
	// Users insert

	public function InsertUser($saves){
	
			$this->db->insert('users',$saves);
			$user_id	= $this->db->insert_id();
			$error = $this->db->error();
			if(!empty($error['message'])){
				return  array('success'=>false,'message'=>$error['message']);
			}else{
				$array=array('user_id'=>$user_id,'visibility'=>'true');
				$this->db->insert('user_profile',$array);
				return  array('success'=>true,'message'=>$user_id);
			}
		return  array('success'=>true,'message'=>'User data successfully  entered');
	}
//Online friends	
public function GetOnlineFriends($userId){
	$this->db->select( 'us.user_id,up.profile_pic,up.nick_name,us.full_name,od.logged_time');
	$this->db->from('users us');
	$this->db->join('friends um', 'um.friend_id=us.user_id','INNER');
	$this->db->join('user_profile up', 'up.user_id=us.user_id','INNER');
	$this->db->join('online_user od', 'od.user_id= us.user_id','LEFT');
	$this->db->where('um.user_id',$userId);
	$this->db->where('um.status',1);
	$this->db->where('od.status',1);
	$this->db->group_by('us.user_id'); 
	$this->db->order_by("od.logged_time", "ASC");
    $result=$this->db->get()->result();
	return $result;
    }

    //friendsList(all)

    public function GetFriendList($userId){
	$this->db->select( 'us.user_id,up.profile_pic,up.nick_name,us.full_name,od.logged_time,od.status');
	$this->db->from('users us');
	$this->db->join('friends um', 'um.friend_id=us.user_id','INNER');
	$this->db->join('user_profile up', 'up.user_id=us.user_id','INNER');
	$this->db->join('online_user od', 'od.user_id= us.user_id','LEFT');
	$this->db->where('um.user_id',$userId);
	$this->db->where('um.status',1);
	$this->db->group_by('us.user_id'); 
	$this->db->order_by("od.logged_time", "ASC");
    $result=$this->db->get()->result();
	return $result;
    }

//friendRequest
    public function GetFriendsRequest($userId){
	$this->db->select( 'us.user_id,up.profile_pic,up.nick_name,us.full_name');
	$this->db->from('users us');
	$this->db->join('friends um', 'um.friend_id=us.user_id','INNER');
	$this->db->join('user_profile up', 'up.user_id=us.user_id','INNER');
	$this->db->where('um.user_id',$userId);
	$this->db->where('um.status',0);
	$this->db->order_by("um.friend_id", "ASC");
    $result=$this->db->get()->result();
	return $result;
    }

public function getCustomerById($id){
	$this->db->select( 'ph.*');
	$this->db->from('ci_customer_npr ph');

	$this->db->where ('ph.CustomerId',$id);
	$result = $this->db->get();
	return $result->row_array();
	
    }	
	
	public function update_pass($password,$admin_id)
	{
	         $data=array('password'=>$password);
		     $this->db->where('empId',$admin_id);
		     $this->db->update('users',$data);
		     return 1;
	}
	
public function check_pass($params,$id){
 	$this->db->select( 'ph.*,');
	$this->db->from('users ph');
	$this->db->where('ph.password', $params);
	$this->db->where('ph.empId',$id);
	$result = $this->db->get();
	return $result->row_array();

	}	
	
/// CUSTOMERS

	public function getCustomerProducts($CompanyID){
	$this->db->select( 'wd.*,ed.EmployeeName,dp.Department');
	$this->db->from('work_details wd');
	$this->db->join('user_master um', 'um.UserID=wd.CreatedBy','INNER');
	$this->db->join('employee_details ed', 'ed.EmpID= um.EmpID','INNER');
	$this->db->join('userbranchaccess ub', 'um.UserID= ub.UserID','INNER');
	$this->db->join('department _master dp', 'dp.DepartmentID= ub.DepartmentID','INNER');
	$this->db->where('um.CompanyID',$CompanyID);
	if(!empty($params['BranchID'])){
		$this->db->where_in('ub.BranchID',$params['BranchID']);
		$this->db->where_in('ub.DepartmentID',$params['DepartmentID']);
	}
	if(!empty($params['startDate'])){
    		$this->db->where( "date(wd.CreatedDate) BETWEEN '".$params['startDate']."' AND '". $params['endDate']."'", NULL, FALSE );
	}else{
		$this->db->where( "date(wd.CreatedDate)",date('Y-m-d'));
	}
	if(!empty($params['Emp'])){
    $this->db->where('wd.CreatedBy',$params['Emp']);
  }
	//$this->db->where('dm.ParentID',$params['DepartmentID']);
	$this->db->order_by("wd.Workdate", "ASC");
    $result=$this->db->get()->result();
	return $result;
    }

    public function getCustomerTickets($customer_id){
	$this->db->select('ph.*,uh.*,tr.*');
	$this->db->from('ci_tickets_npr tr');
	$this->db->join('ci_tickets_assign_npr uh', 'tr.id=uh.ticket_id','LEFT');
	$this->db->join('users ph', 'ph.empId=uh.employee_id','LEFT');
	$this->db->join('ci_product pr', 'pr.product_id=tr.product_code','LEFT');
	$this->db->join('ci_customer_npr cr',  'cr.CustomerId= tr.customer_id','INNER');
	$this->db->where('tr.customer_id',$customer_id);
	$this->db->order_by("tr.created_on", "DESC");
	$result = $this->db->get()->result();
	return $result;  }


public function checkEmail($params){
 	$this->db->select( 'ph.*,');
	$this->db->from('users ph');
	$this->db->like('ph.email', $params);
	$result = $this->db->get();
	return $result->row_array();

	}
	
public function checkUserOnline($params){
 	$this->db->select( 'ph.*,');
	$this->db->from('online_user ph');
	$this->db->like('ph.user_id', $params);
	$result = $this->db->get();
	return $result->row_array();
}
	public function checkUserName($params){
 	$this->db->select( 'ph.*,');
	$this->db->from('users ph');
	$this->db->like('ph.user_name', $params);
	$result = $this->db->get();
	return $result->row_array();

	}

	public function AccetFriends($friendId,$user_id){
	         $data=array('status'=>1);
		     $this->db->where('user_id',$user_id);
		     $this->db->where('friend_id',$friendId);
		     $this->db->update('friends',$data);
			 $array=array('user_id'=>$friendId,'friend_id'=>$user_id,'status'=>1);
			 $this->db->insert('friends',$array);
		     return 1;
	}
	
	
	public function friendRequest($friendId,$user_id){
	        $data=array('friend_id'=>$user_id,'user_id'=>$friendId, 'status'=>0);
			$this->db->insert('friends',$data);
		    return 1;
	}
	
	
	
	
	
 public function GetMyData($userId){
	$this->db->select( 'us.*,up.*');
	$this->db->from('users us');
	$this->db->join('user_profile up', 'up.user_id=us.user_id','INNER');
	$this->db->where('up.user_id',$userId);
	$result = $this->db->get();
	return $result->row_array();
    }

    public function UpdateBasic($param,$params,$user_id){
	         
		    $this->db->where('user_id',$user_id);
		     $this->db->update('users',$param);
		      $this->db->where('user_id',$user_id);
		     $this->db->update('user_profile',$params);
		     return 1;
	}
	public function UpdateLocation($params,$user_id){
	         $this->db->where('user_id',$user_id);
		     $this->db->update('user_profile',$params);
		     return 1;
	}
public function UpdateOverview($params,$user_id){
	         $this->db->where('user_id',$user_id);
		     $this->db->update('user_profile',$params);
		     return 1;
	}
public function InsertOnline($param)
	{
	    $this->db->insert('online_user',$param);
		return 1;
	}
	public function UpdateOnline($params,$status)
	{
		if($status==1){
			$query = $this->db->query("UPDATE  online_user SET status=$status, logout_time =null WHERE user_id=$params" );
		}else{
			$query = $this->db->query("UPDATE  online_user SET status=$status, logout_time =NOW()  WHERE user_id=$params" );
		}
		
		
		return true;
	     
	}
	///search friends
	public function GetSearchFriends($params){
		if($params['gender']==3){
			/*$result = $this->db->query('SELECT DISTINCT(us.user_id),up.profile_pic,up.nick_name,us.full_name  from users us INNER JOIN
			user_profile up  ON up.user_id=us.user_id
		WHERE us.user_id not in(select fm.friend_id from friends fm where fm.user_id ='.$params['user_id'].')  AND up.country_id="'.$params['country'].'"
		AND us.user_id !='.$params['user_id'] .' and 
		up.visibility="true" ORDER BY us.user_id');*/
		$result = $this->db->query('SELECT DISTINCT(us.user_id),up.profile_pic,up.nick_name,us.full_name  from users us INNER JOIN
			user_profile up  ON up.user_id=us.user_id
		WHERE us.user_id not in(select fm.user_id from friends fm where fm.friend_id ='.$params['user_id'].')
		AND us.user_id !='.$params['user_id'] .' and 
		up.visibility="true" ORDER BY us.user_id');
		return $result->result() ;
		}else{
			
		/*$result = $this->db->query('SELECT DISTINCT(us.user_id),up.profile_pic,up.nick_name,us.full_name  from users us 
		INNER JOIN  user_profile up  ON up.user_id=us.user_id
		WHERE us.user_id not in(select fm.friend_id from friends fm where fm.user_id ='.$params['user_id'].') 
		and up.gender ='.$params['gender'].' AND up.country_id="'.$params['country'].'" AND us.user_id !='.$params['user_id'] .' and 
		up.visibility="true" ORDER BY us.user_id');*/
		$result = $this->db->query('SELECT DISTINCT(us.user_id),up.profile_pic,up.nick_name,us.full_name  from users us 
		INNER JOIN  user_profile up  ON up.user_id=us.user_id
		WHERE us.user_id not in(select fm.user_id from friends fm where fm.friend_id ='.$params['user_id'].') 
		and up.gender ='.$params['gender'].' AND us.user_id !='.$params['user_id'] .' and 
		up.visibility="true" ORDER BY us.user_id');
		return $result->result() ;
		}
	   
	}
		
		
			
			public function insert_session($uid,$sess){
				
				
				
				$query = $this->db->query("UPDATE  users SET session_id='$sess' WHERE user_id=$uid" );
		
       // echo $this->db->last_query();
		//return $query->result();
				
			}
			
		public function fetch_session($uid){
			$query = $this->db->query("SELECT session_id from users WHERE  user_id=$uid" );
			return $query->row_array();
		}
				
public function check_session($uid){
			$query = $this->db->query("SELECT session_id from users WHERE  user_id=$uid" );
			return $query->row_array();
		}
				

	
}
