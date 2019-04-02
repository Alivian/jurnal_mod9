<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function Register()
	{
        $this->User->Register();
        redirect('Landing');
    }

    public function Signin() {
        if($this->User->findUser() != null){
            
        }
    }
}