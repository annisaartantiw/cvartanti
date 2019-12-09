<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
        $this->load->model("auth");
        //$this->load->model("master_model");
		$this->load->library('form_validation');
	}
	public function index(){
    	$this->form_validation->set_rules('username', 'Username', 'required|trim|alpha_numeric', [
    		'required' => 'Username Tidak Boleh Kosong'
    	]);
    	$this->form_validation->set_rules('password', 'Password', 'required|trim', [
    		'required' => 'Password Tidak Boleh Kosong'
    	]);
    	if ($this->form_validation->run() == false) {
    		$this->load->view('login');
    	}else{
        	$login = $this->auth;  
            $login->login();
        }
    }
    
    public function logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id');

        redirect('login');
    }
}
