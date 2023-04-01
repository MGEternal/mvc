<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	 
	 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model');

	}
	 
	public function index()
	{
		
        $this->load->view('header');
        $this->load->view('view_login');
		
					
	}
	public function chklogin(){
		$username    = $this->input->post('username'); 
        $password    = $this->input->post('password'); 
        $data=$this->model->chklogin($username,$password); 
		
		if($data!=null){
				echo $data['user_id'];
			$arrData = array('user_id'=>$data['user_id'],
			'password'=> $data['password'],'username'=> $data['username'],'user_type'=> $data['user_type'],'class_id'=> $data['class_id']);
			$this->session->set_userdata($arrData);
			$username = $this->session->userdata('username');
			$user_type = $this->session->userdata('user_type');
			if($user_type=='admin'){
				redirect('admin_dashboard/home');
			}else if($user_type=='student'){
				redirect('dashboard/home');
			}
			
		}else{
			?>
			<script language="javascript">
		alert("Username or Password not bu true");
		window.location='../login';
		</script>
		  <?php
			
		}
        
	}
	public function Account()
	{


		$action = base64_decode($this->input->post('action'));

		if($data==true) {
            $arrData = array('status'=> $data['u_enable'], 'su_id'=>$data['su_id'],
             'password'=> $data['password'],'username'=> $data['username'],
             'firstname'=> $data['firstname'],'sug_id'=>$data['sug_id'],'login' => "OK");	
             $this->session->set_userdata($arrData);
             $username = $this->session->userdata('username');

             if($data['u_enable'] != 1){
				$this->session->set_flashdata('msg_error','<div class="alert alert-danger fade in">
				<button class="close" data-dismiss="alert">
					×
				</button>
				<i class="fa-fw fa fa-times"></i>
				<strong>Error!</strong><br />แอคเคาท์นี้ถูกระงับ<br />Account is baned.</div>');
                redirect('login');  
             }else if($data['sug_enable'] != 1){
				$this->session->set_flashdata('msg_error','<div class="alert alert-danger fade in">
				<button class="close" data-dismiss="alert">
					×
				</button>
				<i class="fa-fw fa fa-times"></i>
				<strong>Error!</strong><br />แอคเคาท์นี้ถูกระงับ<br />Account is baned.</div>');
                redirect('login'); 
             } else{
                redirect('dashboard/show');
             }
        }
     else{
		$this->session->set_flashdata('msg_error','<div class="alert alert-danger fade in">
		<button class="close" data-dismiss="alert">
			×
		</button>
		<i class="fa-fw fa fa-times"></i>
		<strong>Error!</strong><br />รหัสผ่านไม่ถูกต้อง กรุณาทำการตรวจสอบข้อมูลอีกครั้งค่ะ <br />Invalid Account : Please check your account correctly.</div>');
        redirect('dashboard/home');  
     
	 }
				
	}
	
}

?>