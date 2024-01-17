<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
    }

	public function index()
	{

		$data['viewoptions']['page'] = "home";
		$data['viewoptions']['title'] = "Pratical Test Maxy Academy";
		$data['heading'] = "Master Barang";
		$this->load->view('general/header',$data);
    	$this->load->view('content/home',$data);
    	$this->load->view('content/script/home-script',$data);
    	$this->load->view('general/footer',$data);

	}

	public function list_ajax()
	{

		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));
		$order = $this->input->post("order");
		$search= $this->input->post("search");
		$search = $search['value'];
		$col = 0;

		$this->load->model('barang_model');
		$data = $this->barang_model->generate_list_barang($start, $length);
		$res = $data['query'];

		if ($res != 0) {
			$order = $this->input->post("order");
			$search= $this->input->post("search");
			$search = $search['value'];
			$col = 0;

			$data_barang = array();
			$i = 0;
			foreach ($res as $thorz => $value) {
				$data_barang[] = array(
					$value['id'],
					$value['sku'],
					$value['nama'],
					$value['quantity'],
					$value['price_before_discount'],
					$value['price_after_discount'],
					$value['link_image'],
					$value['deskripsi_barang'],
					$value['status'],
					$value['created'],
					$value['updated']
				);
			}

			$total_barang = $data['count'];
			$data = array(
					"draw" => $draw,
					"recordsTotal" => $total_barang,
					"recordsFiltered" => $total_barang,
					"count" => $total_barang,
					"data" => $data_barang
			);
			header("Content-Type: application/json");
			echo json_encode($data);

		}

	}

	public function refresh_barang()
	{
		header('Access-Control-Allow-Origin: *');
		$this->load->model('barang_model');
		$data = $this->barang_model->generate_list_barang();
		$data["barang"] = $data["query"];
		$this->load->view('content/tabel_barang', $data);
	}

	public function halaman_add_barang()
	{

		$data['viewoptions']['page'] = "insert-barang";
		$data['viewoptions']['title'] = "Pratical Test Maxy Academy";
		$data['heading'] = "Add Barang";
		$this->load->view('general/header',$data);
    	$this->load->view('content/insert-barang',$data);
    	$this->load->view('content/script/insert-barang-script',$data);
    	$this->load->view('general/footer',$data);

	}

	public function add_barang()
	{

		header('Access-Control-Allow-Origin: *');
		$this->load->model('barang_model');

		$this->load->library('form_validation');
		$this->form_validation->set_rules('sku', 'sku', 'required');
		$this->form_validation->set_rules('nama', 'nama', 'required');

		if ($this->form_validation->run() === TRUE)
		{

			$data = array(
				'sku' => $this->input->post('sku'),
		        'nama' => $this->input->post('nama'),
		        'quantity' => $this->input->post('quantity'),
		        'price_before_discount' => $this->input->post('price_before_discount'),
		        'price_after_discount' => $this->input->post('price_after_discount'),
		        'deskripsi_barang' => $this->input->post('deskripsi'),
		        'status' => 1
	      	);

			header("Content-Type: application/json");
			$data["id_barang"] = $this->barang_model->add_barang($data);
			echo json_encode($data);

		} else {
			http_response_code(404);
			die();
		}

	}

	public function halaman_update_barang($id)
	{

		$data['viewoptions']['page'] = "update-barang";
		$data['viewoptions']['title'] = "Pratical Test Maxy Academy";
		$data['heading'] = "Update Barang";

		$this->load->model('barang_model');
		$res = $this->barang_model->get($id);
		$data['content'] = $res;

		$this->load->view('general/header',$data);
    	$this->load->view('content/update-barang',$data);
    	$this->load->view('content/script/update-barang-script',$data);
    	$this->load->view('general/footer',$data);

	}

	public function update_barang()
	{

		header('Access-Control-Allow-Origin: *');
		$this->load->model('barang_model');

		$this->load->library('form_validation');
		$this->form_validation->set_rules('id', 'id', 'required');
		$this->form_validation->set_rules('sku', 'sku', 'required');
		$this->form_validation->set_rules('nama', 'nama', 'required');

		if ($this->form_validation->run() === TRUE)
		{

			$data = array(
				'sku' => $this->input->post('sku'),
		        'nama' => $this->input->post('nama'),
		        'quantity' => $this->input->post('quantity'),
		        'price_before_discount' => $this->input->post('price_before_discount'),
		        'price_after_discount' => $this->input->post('price_after_discount'),
		        'deskripsi_barang' => $this->input->post('deskripsi')
	      	);
	      	$id = $this->input->post('id');

			header("Content-Type: application/json");
			$data["id_barang"] = $this->barang_model->update_barang($data, $id);
			echo json_encode($data);

		} else {
			http_response_code(404);
			die();
		}

	}

	public function delete_barang()
	{

		header('Access-Control-Allow-Origin: *');
		$this->load->model('barang_model');

		$this->load->library('form_validation');
		$this->form_validation->set_rules('id', 'id', 'required');

		if ($this->form_validation->run() === TRUE)
		{

	      	$id = $this->input->post('id');

			header("Content-Type: application/json");
			$data["id_barang"] = $this->barang_model->delete_barang($id);
			echo json_encode($data);

		} else {
			http_response_code(404);
			die();
		}

	}

}
