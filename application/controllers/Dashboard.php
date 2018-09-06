<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends  CI_Controller{
	protected $data=array();
	private $UserId=null;
	private $departmentId=null;
	public function __construct(){
		parent::__construct();
				$this->load->library(array('pagination', 'javascript'));
				if ($this->session->userdata('username_loggedin') == ''){
					redirect('login');
				}
		
		$this->load->model('Employees_model');
		$this->load->model('Users_model');
		$this->load->model('Tickets_model');
		$this->UserId=$this->session->userdata('uid');
		$this->departmentId=$this->session->userdata('depId');

		
	}
public function index()
{
       
        $this->data['menu']  =  1  ;
		$this->data['depart'] =$this->Tickets_model->getDepartmentById($this->departmentId);
		$this->load->view('dashboard',$this->data);

	}

public function change_pass(){
	
	$this->data['menu']  =  6  ;
	$this->data['error']="";
	$this->load->view('change_password',$this->data);
	}
public function change(){
   
    $this->data['menu']  =  6  ;
	$this->data['error']="";
	$page_content=$this->session->all_userdata();
	$id= $page_content['uid'];
	$old=$this->input->post('oldpassword');
	$password=$this->input->post('password');
	$password1=$this->input->post('repassword');
	if(strlen($password)<6){
		$this->data['error']="Password Contain at least 6 characters ";
		$this->load->view('change_password',$this->data);
	}

	$res=$this->Users_model->check_pass(md5($old),$id);
	if(!empty($res)){
	if($password==$password1){
		$password=md5($password);
		$id=$this->Users_model->update_pass($password,$id);
		redirect('/Dashboard');
	}else{
		$this->data['error']="Password Mismatch";
		$this->load->view('change_password',$this->data);
		}
	}else{
		$this->data['error']="Old Password Mismatch";
		$this->load->view('change_password',$this->data);
	}
}

// Added on 12/04/2018

public function resetPass(){
	
	$this->data['menu']  =  6  ;
	$this->data['error']="";
	$this->data['Users'] =$this->Employees_model->GetAllEmployee();
	$this->load->view('resetpassword',$this->data);
	}
public function resetPassword(){
	
	$this->data['menu']  =  6  ;
	$this->data['Users'] =$this->Employees_model->GetAllEmployee();
	$this->data['error']="";
	$UserId=$this->input->post('EmpId');
	$password=$this->input->post('password');
	$password1=$this->input->post('repassword');
	if(strlen($password)<6){

		$this->data['error']="Password Contain at least 6 characters ";
		$this->load->view('resetpassword',$this->data);
	}
	else if($password==$password1){
		$password=md5($password);
		$id=$this->Users_model->update_pass($password,$UserId);
		$this->session->set_flashdata('success', 'Password Updated Successfully');
		redirect('/Dashboard/resetPass',$this->data);
	}else{
		$this->data['error']="Password Mismatch";
		$this->load->view('resetpassword',$this->data);
		}

}
//end



}
