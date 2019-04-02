<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    public function Register() {
        date_default_timezone_set('Asia/Jakarta');
        $data = array(
            "Nama" => $this->input->post('name'),
            "Email" => $this->input->post('email'),
            "Password" => md5($this->input->post('pass')),
            "RegisDate" => Date("d-m-Y, H:i:s")
        );

        $this->db->insert('register', $data);
        $this->db->insert('login',
        array(
            "Nama" => $data['Nama'],
            "Password" => $data['Password']
        ));
    }

    public function findUser() {
        $data = array(
            "Nama" => $this->input->post('your_name'),
            "Password" => md5($this->input->post('your_pass'))
        );

        $this->db->where($data);
        $result = $this->db->get('login');
        return $result->result_array();
    }
}