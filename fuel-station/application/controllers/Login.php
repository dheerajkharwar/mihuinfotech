<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->database();
        if (isset($_POST['username'])) {
            $user = $this->db->where('username', $_POST['username'])->get("user")->row();
            if ($user && md5($_POST['password']) == $user->password) {
                $user_type = $this->db->select('user_type')->where('id', $user->user_type)->get("usertype")->row();
                $this->session->set_userdata('user', $user->username);
                $this->session->set_userdata('type', $user_type->user_type);
                if ($user_type->user_type == 'client') {
                    redirect('client');
                }
                redirect('dashboard');
            } else {
                echo 'Wrong Credentials';
            }
        }
        $this->load->view('login');
        $this->db->close();
    }
}
