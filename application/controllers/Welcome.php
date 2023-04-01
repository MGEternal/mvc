<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 
class Welcome extends CI_Controller {
 
 
public function __construct()
    {
        parent::__construct();

    }
 
 public function index(){
    $this->load->view('header');
    $this->load->view('default_menu');
    $this->load->view('welcome');
    $this->load->view('footer');
 } public function contact(){
    $this->load->view('header');
    $this->load->view('default_menu');
    $this->load->view('contact');
    $this->load->view('footer');
 }


 
 
}