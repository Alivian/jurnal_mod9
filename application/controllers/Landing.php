<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function index()
	{
        $data['title'] = "Login";
        $this->load->view('Landing/Header', $data);
        $this->load->view('Landing/Login');
        $this->load->view('Landing/Footer');
    }
    
    public function Register() {
        $data['title'] = "Register";
        $this->load->view('Landing/Header', $data);
        $this->load->view('Landing/Register');
        $this->load->view('Landing/Footer');
    }
}