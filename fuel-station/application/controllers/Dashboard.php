<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function index()
	{
		$this->load->database();
		if ($_SESSION['user'] && $_SESSION['type'] != 'client') {
			$orders_num = $this->db->where('status', 0)->from('orders')->count_all_results();
			$today_orders_num = $this->db->query('SELECT * FROM `orders` WHERE DATE(`order_date`) = date(NOW()) AND `status` = 0')->num_rows();
			// echo "<pre>";
			// print_r($query);
			// die();
			$users_num = $this->db->where('user_type', 2)->from('user')->count_all_results();
			$clients_num = $this->db->where('user_type', 3)->from('user')->count_all_results();
			$salers_num = $this->db->where('user_type', 2)->from('user')->count_all_results();

			// Total Today Sale
			$orders = $this->db->query('SELECT * FROM `orders` WHERE DATE(`delivery_time`) = date(NOW()) AND `status` = 1')->result();
			$sale = 0;
			foreach ($orders as $order) {
				foreach (json_decode($order->orders) as $my_order) {
					$sale += $my_order->amt;
				}
			}
			$data = array(
				'controller' => 'dashboard',
				'page' => 'dashboard',
				'heading' => 'Dashboard',
				'orders_num' => $orders_num,
				'today_orders_num' => $today_orders_num,
				'users_num' => $users_num,
				'clients_num' => $clients_num,
				'salers_num' => $salers_num,
				'sale' => $sale
			);
			$this->load->view('dashboard', $data);
		} else {
			redirect('login');
		}
		$this->db->close();
	}
}
