<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reports extends CI_Controller
{
    public function sale()
    {
        $this->load->database();
        if ($_SESSION['user'] && $_SESSION['type'] == 'admin') {
            $user = $this->db->where('username', $_SESSION['user'])->get("user")->row();
            $this->db->select('u1.username delivered_to,o.vch_no, o.order_date,o.vehicle_no,o.orders,o.attachment,o.status,o.booking_time,u2.username delivered_by,o.delivery_time');
            $this->db->from('user u1');
            $this->db->join('orders o', 'o.user = u1.id', 'right');
            $this->db->where('status', 1);
            $this->db->join('user u2', 'o.delivered_by = u2.id', 'left');
            $orders = $this->db->get()->result();

            $data = array(
                'controller' => 'reports/sale',
                'page' => 'sale',
                'heading' => 'Sale Report',
                'user' => $user,
                'orders' => $orders
            );
            $this->load->view('reports/sale', $data);
        } else {
            redirect('login');
        }
        $this->db->close();
    }
}
