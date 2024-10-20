<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{
    public function index()
    {
        $this->load->database();
        if (isset($_POST['vch_num'])) {
            $user = $this->db->where('username', $_SESSION['user'])->get("user")->row();
            $this->db->query("UPDATE `orders` SET `status`=1,`delivery_time`=CURRENT_TIMESTAMP,`delivered_by`=" . $user->id . " WHERE `vch_no`=" . $_POST['vch_num']);
            // $this->db->where('vch_no', $_POST['vch_num'])->update('orders', array('status' => 1, 'delivery_time' => '`CURRENT_TIMESTAMP`'));
            $this->db->select('*');
            $this->db->from('user');
            $this->db->join('orders', 'orders.user = user.id', 'right');
            $this->db->where('vch_no', $_POST['vch_num']);
            $order = $this->db->get()->row();
            $this->load->view('receipt', array('order' => $order));
        } else if ($_SESSION['user'] && $_SESSION['type'] != 'client') {
            $this->db->select('*');
            $this->db->from('user');
            $this->db->join('orders', 'orders.user = user.id', 'right');
            $orders = $this->db->get()->result();

            $data = array(
                'controller' => 'order',
                'page' => 'order',
                'heading' => 'Orders',
                'orders' => $orders
            );
            $this->load->view('order', $data);
        } else {
            redirect('login');
        }
        $this->db->close();
    }
}
