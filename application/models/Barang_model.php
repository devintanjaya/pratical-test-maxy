<?php
class Barang_model extends CI_Model {

	public function generate_list_barang($start = 0, $limit = 0)
    {
		
		$this->db->select('id, sku, nama, quantity, price_before_discount, price_after_discount, link_image, deskripsi_barang, status, created, updated');
		$this->db->from('produk');
		$this->db->where("status = 1");
		$this->db->order_by('id', 'DESC');

		$data = [];
		$tempdb = clone $this->db;
		$num_rows = $tempdb->count_all_results();
		$data['count'] = $num_rows;

		if ($start > 0 && $limit > 0) {
			$this->db->limit($limit, $start);
		}
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			$data['query'] =  $query->result_array();
		} else {
			$data['query'] =  0;
		}
		return $data;

    }

    public function get($id) {
		$query = $this->db->where('id', $id)->get('produk', 1, 0);
		if ($query->num_rows() > 0)
			return $query->result_array();
		else
			return 0;
	}

    public function add_barang($data)
    {
      	$this->db->insert('produk', $data);
      	$id_barang = $this->db->insert_id();
      	return $id_barang;
    }

    public function update_barang($data, $id)
    {
      	$this->db->where('id', $id);
      	$this->db->update('produk', $data);
    }

    public function delete_barang($id)
    {
    	$data = array(
    		'status' => 0
    	);
      	$this->db->where('id', $id);
      	$this->db->update('produk', $data);
    }

}
