<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function index()
    {
        $this->load->database();
        if ($_SESSION['user'] && $_SESSION['type'] != 'client') {
            $user = $this->db->where('username', $_SESSION['user'])->get("user")->row();
            $usertype = $this->db->where('id', $user->user_type)->get("usertype")->row();
            $data = array(
                'controller' => 'profile',
                'page' => 'profile',
                'heading' => 'Profile',
                'user' => $user,
                'usertype' => $usertype
            );
            $this->load->view('profile', $data);
        } else {
            redirect('login');
        }
        $this->db->close();
    }
}
