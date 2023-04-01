
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {


		 
	public function __construct()
	{
		parent::__construct();
        $this->load->view('header');
        $this->load->view('menu');
		$this->load->model('model');
		$this->model->CheckSession();
	}
	public function home(){
		
		$user_id = $this->session->userdata('user_id');
        $data['user']= $this->model->selectuser($user_id);
		
        $this->load->view('profile',$data);
		$this->load->view('footer');

	}
	public function profile(){
		$user_id    = $this->input->post('user_id'); 
		$username    = $this->input->post('username'); 
        $password         = $this->input->post('password'); 
        $name        = $this->input->post('name'); 
        $age         = $this->input->post('age'); 
        $sex         = $this->input->post('sex');
        $tel             = $this->input->post('tel'); 
        $email          = $this->input->post('email'); 
        //echo $sex;exit;
        $data['user']=$this->model->update_user($user_id,$username,$password,$name, $age,$sex,$tel,$email); 
        $this->load->view('profile',$data);
	}
	public function schedule(){
		$user_id = $this->session->userdata('user_id');
		$class_id = $this->session->userdata('class_id');
        $data['user']= $this->model->selectstuclass($class_id);
		$data['sche'] = $this->model->selectscheclass($class_id);	
        $data['tea'] = $this->model->selectteaall();
        $data['class'] = $this->model->selectclassall();
        $this->load->view('stu_sche',$data);
		$this->load->view('footer');
	
		
	}
	public function class(){

		$user_id = $this->session->userdata('user_id');
		$class_id = $this->session->userdata('class_id');
        $data['user']= $this->model->selectstuclass($class_id);
		$data['sche'] = $this->model->selectscheall();	
        $data['tea'] = $this->model->selectteaall();
        $data['class'] = $this->model->selectclassall();
        $this->load->view('stu_class',$data);
		$this->load->view('footer');
	}

}
