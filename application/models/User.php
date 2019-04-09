<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    public function Register() {
        date_default_timezone_set('Asia/Jakarta');
       

        /* Buatlah array dengan nama $data yang berisi Username,Email,Pass dan RegisTime.
            Array tersebut menginputkan data ke table register pada database
            Mengambil inputan dari View/ Landing/Register.php
            dimana : Pass menggunakan md5 = md5($this->input->post('pass')),
            RegisTime menggunakan Date("d-m-Y, H:i:s")
        */

        if($this->isExist($data['Username'])) {
            return false;
        } else {
           /* Kondisi else :
            input $data ke table register.
            input Username dan pas dari array $data ke login.
            return true ketika selesai.
             */
        }
    }

    public function isExist($username) {
        $this->db->where("Username",$username);
        $result = $this->db->get('login')->result_array();
        if(isset($result[0])) {
            return true;
        } else {
            return false;
        }
    }

    public function findUser() {
        

            /* Buat Array berisi Username dan Pass (menggunakan md5)
               yang diambil dari form login pada view.

            */

            /* Cocokkan array $data yang berisi Username dan Password dengan
                data pada table login.
                Menggunakan where($data)

                    Kemudian return menggunakan result_array()                
            */

        
    }

    public function imageUpload($imgName) {
        
        /* Insert file to table image_path folder using ImgName as array */

    }

    public function getImage() {
        

        /*Use return to get data from table image_path 
        *clue with result_array() */
    }
}