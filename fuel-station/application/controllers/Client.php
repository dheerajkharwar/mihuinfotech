<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client extends CI_Controller
{
    public function index()
    {
        redirect('client/order');
    }
    public function order()
    {
        $this->load->database();
        $config['upload_path']          = './uploads/attachment';
        $config['allowed_types']        = 'gif|jpg|png';

        $this->load->library('upload', $config);

        if ($_SESSION['user'] && $_SESSION['type'] == 'client') {
            $user = $this->db->where('username', $_SESSION['user'])->get("user")->row();
            $last_order = $this->db->order_by('vch_no', "desc")->limit(1)->get('orders')->row();
            $vch_no = 1;
            if ($last_order) {
                $vch_no += $last_order->vch_no;
            } else {
                $vch = 1;
            }
            $_POST['vch_no'] = $vch_no;
            $_POST['user'] = $user->id;


            $this->form_validation->set_error_delimiters('<p class="text-warning">', '</p>');
            $this->form_validation->set_rules('order_date', 'Date', 'trim|required');
            $this->form_validation->set_rules('vehicle_no', 'Vehicle', 'trim|required');
            $this->form_validation->set_rules('orders', 'Item', 'trim|required');
            if ($this->form_validation->run() == true) {
                if ($this->upload->do_upload('attachment')) {
                    $_POST['attachment'] = 'uploads/attachment/' . $this->upload->data()['file_name'];
                }
                if ($this->db->insert('orders', $_POST)) {
                    $this->session->set_flashdata('msg', 'Order added!');
                    $this->session->set_flashdata('msg_type', 'success');
                } else {
                    $error = $this->db->error();
                    $this->session->set_flashdata('msg', 'Database Error!');
                    $this->session->set_flashdata('msg_type', 'error');
                }
                redirect('client/order');
            }

            $items = $this->db->select("*")->from('item')->get()->result();
            $vehicles = $this->db->select("*")->from('vehicle')->get()->result();
            $data = array(
                'controller' => 'client/order',
                'page' => 'order',
                'heading' => 'Order',
                'items' => $items,
                'vehicles' => $vehicles,
                'vch_no' => $vch_no,
                'user' => $user
            );
            $this->load->view('client/order', $data);
        } else {
            redirect('login');
        }
        $this->db->close();
    }
    public function orders()
    {
        $this->load->database();
        if ($_SESSION['user'] && $_SESSION['type'] == 'client') {
            $user = $this->db->where('username', $_SESSION['user'])->get("user")->row();
            $orders = $this->db->where('user', $user->id)->get('orders')->result();
            $data = array(
                'controller' => 'client/orders',
                'page' => 'orders',
                'heading' => 'Orders',
                'orders' => $orders,
                'user' => $user
            );
            $this->load->view('client/orders', $data);
        } else {
            redirect('login');
        }
        $this->db->close();
    }
    public function profile()
    {
        $this->load->database();
        if ($_SESSION['user'] && $_SESSION['type'] == 'client') {
            $user = $this->db->where('username', $_SESSION['user'])->get("user")->row();
            $usertype = $this->db->where('id', $user->user_type)->get("usertype")->row();
            $data = array(
                'controller' => 'client/profile',
                'page' => 'profile',
                'heading' => 'Profile',
                'user' => $user,
                'usertype' => $usertype
            );
            $this->load->view('client/profile', $data);
        } else {
            redirect('login');
        }
        $this->db->close();
    }
}
