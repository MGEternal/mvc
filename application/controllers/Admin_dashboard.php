<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {


		 
	public function __construct()
	{
		parent::__construct();
        $this->load->view('header');
        $this->load->view('admin_menu');
		$this->load->model('model');
		$this->model->CheckSession();
	}
	public function user(){
        
        $data['user_all']=$this->model->selectuserall();
        $data['class_all']=$this->model->selectclassall();
        $this->load->view('manage',$data);
        $this->load->view('footer');
	}
    public function user_edit(){
        
        $user_id=$this->input->get('user_id');
        if($user_id==null)
            $user_id=$this->input->post('user_id');
        
        $data['user']=$this->model->selectuser($user_id);
        $data['class']=$this->model->selectclassall();
        $this->load->view('user_edit',$data);
		$this->load->view('footer');

	}public function profile(){
		$user_id    = $this->input->post('user_id'); 
		$username    = $this->input->post('username'); 
        $password         = $this->input->post('password'); 
        $name        = $this->input->post('name'); 
        $age         = $this->input->post('age'); 
        $sex         = $this->input->post('sex');
        $tel             = $this->input->post('tel'); 
        $email          = $this->input->post('email'); 
        $class_id          = $this->input->post('class_id'); 
        //echo $sex;exit;
        $data['user']=$this->model->update_user($user_id,$username,$password,$name, $age,$sex,$tel,$email,$class_id); 
        redirect('Admin_dashboard/user');
        
	}
    public function delete_user(){
        $user_id=$this->input->get('user_id');
        $this->model->delete_user($user_id);
        redirect('Admin_dashboard/user'); 
    }public function add_user(){
        $data['class']=$this->model->selectclassall();
        $this->load->view('add_user',$data);
        $this->load->view('footer');
    }
    public function new_user(){
        $user_id    = $this->input->post('user_id'); 
		$username    = $this->input->post('username'); 
        $password         = $this->input->post('password'); 
        $name        = $this->input->post('name'); 
        $age         = $this->input->post('age'); 
        $sex         = $this->input->post('sex');
        $tel             = $this->input->post('tel'); 
        $email          = $this->input->post('email');
        $class_id          = $this->input->post('class_id');
        $user_type          = $this->input->post('user_type');
        $this->model->new_user($username,$password,$name, $age,$sex,$tel,$email,$class_id,$user_type); 
        redirect('Admin_dashboard/user'); 
    } public function home(){
		
		
        
    $this->load->view('welcome2');
    $this->load->view('footer');
 

	}public function class(){
		
		$data['tea']=$this->model->selectteaall();  
        $data['class']=$this->model->selectclassall();  
        $data['stu']=$this->model->selectstuall(); 
    $this->load->view('class',$data);
    $this->load->view('footer');
 

	}public function class_delete(){
        $class_id = $this->input->get('class_id');
        
        $this->model->class_delete($class_id);
        redirect('Admin_dashboard/class');

    }
    public function class_update(){
        $class_id = $this->input->post('class_id');
        $class_name = $this->input->post('class_name');
        $dep = $this->input->post('dep');
        $tea_id = $this->input->post('tea_id');
        //echo $class_id,$class_name,$dep,$tea_id;exit;
        $this->model->update_class($class_id,$class_name,$dep,$tea_id);
        redirect('Admin_dashboard/class');
    }
    public function class_edit(){
        $class_id = $this->input->get('class_id');
        $data['class_one'] = $this->model->selectclass_id($class_id);
        $data['tea']=$this->model->selectteaall();  
        $this->load->view('class_edit',$data);
        $this->load->view('footer');
        
    }public function add_class(){
        $data['tea']=$this->model->selectteaall(); 
        $this->load->view('new_class',$data);
    $this->load->view('footer');
        

    }public function new_class(){
        $class_name = $this->input->post('class_name');
        $dep = $this->input->post('dep');
        $tea_id = $this->input->post('tea_id');
        $this->model->new_class($class_name,$dep,$tea_id);
        redirect('Admin_dashboard/class');
    }

    public function teacher(){
	$data['tea'] = $this->model->selectteaall();	
		
        
    $this->load->view('teacher',$data);
    $this->load->view('footer');
 

	}public function tea_delete(){
        $tea_id = $this->input->get('tea_id');
        
        $this->model->tea_delete($tea_id);
        redirect('Admin_dashboard/teacher');

    }public function tea_edit(){
        $tea_id = $this->input->get('tea_id');
        
        $data['tea_one'] = $this->model->selecttea_id($tea_id);
        $data['tea']=$this->model->selectteaall();  
        $this->load->view('tea_edit',$data);
        $this->load->view('footer');
        

    }public function tea_update(){
        $tea_id = $this->input->post('tea_id');
        $name = $this->input->post('name');
        $age = $this->input->post('age');
        $sex = $this->input->post('sex');
        $tel = $this->input->post('tel');
        $email = $this->input->post('email');
        $dep = $this->input->post('dep');
        
        //echo $class_id,$class_name,$dep,$tea_id;exit;
        $this->model->update_tea($tea_id,$name,$age, $sex, $tel, $email,$dep);
        redirect('Admin_dashboard/teacher');
    }
    
    public function add_tea(){
        $data['tea']=$this->model->selectteaall(); 
        $this->load->view('new_tea',$data);
    $this->load->view('footer');
        

    }public function new_tea(){
        $name = $this->input->post('name');
        $age = $this->input->post('age');
        $sex = $this->input->post('sex');
        $tel = $this->input->post('tel');
        $email = $this->input->post('email');
        $dep = $this->input->post('dep');
        $this->model->new_tea($name,$age,$sex,$tel,$email,$dep);
        redirect('Admin_dashboard/teacher');
    }
    
    public function schedule(){
		
		$data['sche'] = $this->model->selectscheall();	
        $data['tea'] = $this->model->selectteaall();
        $data['class'] = $this->model->selectclassall();
        
    $this->load->view('schedule',$data);
    $this->load->view('footer');
 

	}public function add_sche(){
        $data['sche'] = $this->model->selectscheall();	
        $data['tea'] = $this->model->selectteaall();
        $data['class'] = $this->model->selectclassall();
        $this->load->view('new_sche',$data);
    $this->load->view('footer');
        
    }public function new_sche(){
        $class_id = $this->input->post('class_id');
        $tea_id = $this->input->post('tea_id');
        $sup = $this->input->post('sup');
        $this->model->new_sche($class_id,$tea_id,$sup);
        redirect('Admin_dashboard/schedule');
    }public function sche_delete(){
        $sche_id = $this->input->get('sche_id');
        
        $this->model->sche_delete($sche_id);
        redirect('Admin_dashboard/schedule');

    }public function sche_edit(){
        $sche_id = $this->input->get('sche_id');
        $data['sche_one'] = $this->model->selectsche_id($sche_id);
        $data['tea']=$this->model->selectteaall();  
        $data['class']=$this->model->selectclassall(); 
        $this->load->view('sche_edit',$data);
        $this->load->view('footer');
    }public function sche_update(){
        $sche_id = $this->input->post('sche_id');
        $class_id = $this->input->post('class_id');
        
        $tea_id = $this->input->post('tea_id');
        $sup = $this->input->post('sup');
        //echo $class_id,$class_name,$dep,$tea_id;exit;
        $this->model->update_sche($sche_id,$class_id,$tea_id,$sup);
        redirect('Admin_dashboard/schedule');
    }


}
