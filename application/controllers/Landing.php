<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function index()
	{
        $cookie = $this->input->cookie('logged');
        if(isset($cookie) || isset($_SESSION['successLogin'])){
            $this->loginPage();
        } else {
            $data['title'] = "Login";
           
            /*Load view header,Login and Footer from Landing folder.
                Header and Login have a parameter $data.
             */
        }
    }
    
    public function Register() {
        $data['title'] = "Register";
       

            /*Load view header,Login and Footer from Landing folder.
                Header have a parameter $data.
             */
    }

    public function loginPage() {
        
        /*
        1. CREATE COOKIE NAME LOGGED
        2. $data['image'] = ('replace this text to function getImage() in Model/User.php')
        3.LOAD VIEW LOGGEDIN AND USE PARAMETER $DATA */

    }
}