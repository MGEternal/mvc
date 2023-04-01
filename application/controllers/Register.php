<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 
class Register extends CI_Controller {
 
 
public function __construct()
    {
        parent::__construct();
        
        $this->load->model('model');
    }
 
 public function index(){
    $this->load->view('header');
    $this->load->view('register');
 }
 public function chkregis(){
        $username    = $this->input->post('username'); 
        $password         = $this->input->post('password'); 
        $name        = $this->input->post('name'); 
        $age         = $this->input->post('age'); 
        $sex         = $this->input->post('sex');
        $tel             = $this->input->post('tel'); 
        $email          = $this->input->post('email'); 
        echo $username;
        $this->model->chkregis($username,$password,$name, $age,$sex,$tel,$email); 
        redirect('welcome');
 
 }

        
}