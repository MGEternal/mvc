<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 
class Welcome2 extends CI_Controller {
 
 
public function __construct()
    {
        parent::__construct();

    }
 
 public function index(){
    $this->load->view('header');
    $this->load->view('menu');
    $this->load->view('welcome');
    $this->load->view('footer');
 }


 
 
}