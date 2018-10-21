<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends  CI_Controller
{
	public function __construct()
	{
		 parent::__construct();
		$this->load->library(array('session', 'form_validation','facebook'));
        $this->load->helper(array('url', 'form', 'html'));
        $this->load->model('users_model');
	}
	
	public function index()
	{ 
		if($this->session->userdata('username_loggedin'))
		{
	
		       redirect('employee/Dashboard');
		         exit();
		}else{
			$data['authURL'] =  $this->facebook->login_url();
			$this->load->view('login',$data);
		}
		
		
	}
	
        
       
	public function validate()
	{
		$page_content['title'] = 'Login';
		
		if($this->input->post())
		{
		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$page_content['error']='Invalid fields';
			
			$this->load->view('login',$page_content);
			
			
	}
	else
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$users=$this->users_model->get_Employee($username,md5($password));
		if(count($users))
		{
		  $session_vars=array('username_loggedin'  => $username,
		  						'uid'              => $users['empId'],
		  						'emp_name'         => $users['employee_name']  ,
		  						'depId'            => $users['departmentId']);	
		  $this->session->set_userdata($session_vars);
		  redirect('employee/Dashboard');
		}
		else
		{
			$page_content['error']='Invalid user name or password';
			$this->load->view('login',$page_content);
			
		}
		}
	}	
	else 
	{
	$page_content['error']='Invalid user name or password';
	
	$this->load->view('login',$page_content);

	}
}

/**
 * Page to logout the user.
 */
 
	public function logout() {
		$array_items = array('username_loggedin' => '', 'uid' => '');
		$this->session->unset_userdata($array_items);
		$this->session->sess_destroy();
		$page_content['error'] = "Logged out successfully";
		$page_content['title'] = 'Login';
		redirect(base_url()."index.php/employee/login");
	}
}
