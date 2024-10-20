<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{
    public function index()
    {
        $this->session->unset_userdata('admin');
        $this->session->unset_userdata('user');
        $this->session->unset_userdata('client');
        $this->session->unset_userdata('type');
        redirect('login');
    }
}
