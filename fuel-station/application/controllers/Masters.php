<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masters extends CI_Controller
{
    public function user()
    {
        $this->load->database();
        if ($_SESSION['user'] && $_SESSION['type'] != 'client') {
            $this->form_validation->set_error_delimiters('<p class="text-warning">', '</p>');
            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[15]');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[15]');
            $this->form_validation->set_rules('phone_no', 'Phone No.', 'trim|required|required|regex_match[/^[0-9]{10}$/]|greater_than[0]');
            $this->form_validation->set_rules('place', 'Place', 'trim|required|min_length[3]|max_length[100]');
            $this->form_validation->set_rules('user_type', 'User Type', 'trim|required');
            $this->form_validation->set_rules('saler', 'Saler', 'trim|required|min_length[3]|max_length[16]');
            $this->form_validation->set_rules('company_name', 'Company Name', 'trim|required|min_length[3]|max_length[16]');
            $this->form_validation->set_rules('company_address', 'Company Address', 'trim|required|min_length[5]|max_length[100]');
            $this->form_validation->set_rules('state', 'State Name', 'trim|required|min_length[3]|max_length[16]');
            $this->form_validation->set_rules('credit_period', 'Credit Period', 'trim|required|regex_match[/^[0-9]{1,10}$/]|greater_than[0]');
            $this->form_validation->set_rules('slip_range', 'Slip Range', 'trim|required|regex_match[/^[0-9]{1,10}$/]|greater_than[0]');
            if ($this->form_validation->run() == true) {
                if (isset($_POST['username'])) {
                    $_POST['password'] = md5($_POST['password']);
                    // $query = $this->db->insert('usertype', $_POST);
                    if ($this->db->insert('user', $_POST)) {
                        $this->session->set_flashdata('msg', 'User Added!');
                        $this->session->set_flashdata('msg_type', 'success');
                    } else {
                        $error = $this->db->error();
                        $this->session->set_flashdata('msg', 'Database Error!');
                        $this->session->set_flashdata('msg_type', 'error');
                    }
                }
                redirect('masters/user');
            }
            $user_types = $this->db->select("*")->from('usertype')->get()->result();
            $data = array(
                'controller' => 'masters/user',
                'page' => 'user',
                'heading' => 'User Master',
                'user_types' => $user_types
            );
            $this->load->view('masters/user', $data);
        } else {
            redirect('login');
        }
        $this->db->close();
    }
    public function vehicle()
    {
        if ($_SESSION['user'] && $_SESSION['type'] != 'client') {
            $this->load->database();
            $this->form_validation->set_error_delimiters('<p class="text-warning">', '</p>');
            $this->form_validation->set_rules('user', 'User', 'trim|required');
            $this->form_validation->set_rules('vehicle_no', 'Vehicle No', 'trim|required|min_length[3]|max_length[12]');
            $this->form_validation->set_rules('company_name', 'Company Name', 'trim|required|min_length[3]|max_length[16]');
            if ($this->form_validation->run() == true) {
                if (isset($_POST['vehicle_no'])) {
                    // $query = $this->db->insert('usertype', $_POST);
                    if ($this->db->insert('vehicle', $_POST)) {
                        $this->session->set_flashdata('msg', 'Vehicle Added!');
                        $this->session->set_flashdata('msg_type', 'success');
                    } else {
                        $error = $this->db->error();
                        $this->session->set_flashdata('msg', 'Database Error!');
                        $this->session->set_flashdata('msg_type', 'error');
                    }
                }
                redirect('masters/vehicle');
            }
            $users = $this->db->select("*")->from('user')->get()->result();
            $data = array(
                'controller' => 'masters/vehicle',
                'page' => 'vehicle',
                'heading' => 'Vehicle Master',
                'users' => $users
            );
            $this->load->view('masters/vehicle', $data);
        } else {
            redirect('login');
        }
        $this->db->close();
    }
    public function usertype()
    {
        if ($_SESSION['user'] && $_SESSION['type'] != 'client') {
            $this->form_validation->set_error_delimiters('<p class="text-warning">', '</p>');
            $this->form_validation->set_rules('user_type', 'User Type', 'trim|required|min_length[3]|max_length[12]');
            if ($this->form_validation->run() == true) {
                if (isset($_POST['user_type'])) {
                    $this->load->database();
                    // $query = $this->db->insert('usertype', $_POST);
                    if ($this->db->insert('usertype', $_POST)) {
                        $this->session->set_flashdata('msg', 'User Type Added!');
                        $this->session->set_flashdata('msg_type', 'success');
                    } else {
                        $error = $this->db->error();
                        $this->session->set_flashdata('msg', 'Database Error!');
                        $this->session->set_flashdata('msg_type', 'error');
                    }
                    $this->db->close();
                }
                redirect('masters/usertype');
            }
            $data = array(
                'controller' => 'masters/usertype',
                'page' => 'usertype',
                'heading' => 'User Type Master'
            );
            $this->load->view('masters/usertype', $data);
        } else {
            redirect('login');
        }
    }
    public function item()
    {
        if ($_SESSION['user'] && $_SESSION['type'] != 'client') {
            $this->form_validation->set_error_delimiters('<p class="text-warning">', '</p>');
            $this->form_validation->set_rules('unit', 'Unit', 'trim|required|min_length[1]|max_length[3]');
            $this->form_validation->set_rules('item_name', 'Item name', 'trim|required|min_length[3]|max_length[12]');
            $this->form_validation->set_rules('price', 'Price', 'trim|required|numeric|greater_than[0]|less_than[100000000]');
            $this->form_validation->set_rules('gst', 'GST rate', 'trim|required|numeric|greater_than[0]|less_than[100]');
            $this->form_validation->set_rules('hsn_code', 'HSN code', 'trim|required|min_length[3]|max_length[12]');
            if ($this->form_validation->run() == true) {
                if (isset($_POST['item_name'])) {
                    $this->load->database();
                    // $query = $this->db->insert('usertype', $_POST);
                    if ($this->db->insert('item', $_POST)) {
                        $this->session->set_flashdata('msg', 'Item Added!');
                        $this->session->set_flashdata('msg_type', 'success');
                    } else {
                        $error = $this->db->error();
                        $this->session->set_flashdata('msg', 'Database Error!');
                        $this->session->set_flashdata('msg_type', 'error');
                    }
                    $this->db->close();
                }
                redirect('masters/item');
            }
            $data = array(
                'controller' => 'masters/item',
                'page' => 'item',
                'heading' => 'Items Master'
            );
            $this->load->view('masters/item', $data);
        } else {
            redirect('login');
        }
    }

    public function cashier()
    {
        if ($_SESSION['user'] && $_SESSION['type'] != 'client') {
            $data = array(
                'controller' => 'masters/cashier',
                'page' => 'cashier',
                'heading' => 'Cashier Master'
            );
            $this->load->view('masters/cashier', $data);
        } else {
            redirect('login');
        }
    }
    public function nozzle()
    {
        if ($_SESSION['user'] && $_SESSION['type'] != 'client') {
            $data = array(
                'controller' => 'masters/nozzle',
                'page' => 'nozzle',
                'heading' => 'Nozzle Master'
            );
            $this->load->view('masters/nozzle', $data);
        } else {
            redirect('login');
        }
    }
}
