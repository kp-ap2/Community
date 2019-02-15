<?php
class Product_model extends CI_Model{

	function product_list(){
		$hasil=$this->db->get_where('product',array('isDeleted' => '0'));
		return $hasil->result();
	}

	function save_product(){
		$data = array(
				'id' 	=> $this->input->post('id'), 
				'product_name' 	=> $this->input->post('product_name'), 
				'product_price' => $this->input->post('price'),
				'createdTime'   => date('Y-m-d H:i:s'),
				'updatedTime'   => date('Y-m-d H:i:s'),
			);
		$result=$this->db->insert('product',$data);


		return $result;
	}

	function update_product(){
		$id=$this->input->post('id');
		$product_name=$this->input->post('product_name');
		$product_price=$this->input->post('price');

		$this->db->set('product_name', $product_name);
		$this->db->set('product_price', $product_price);
		$this->db->where('id', $id);
		$this->db->set('updatedTime', date('Y-m-d H:i:s'));
		$result=$this->db->update('product');
		return $result;
	}

	function delete_product(){
		$id=$this->input->post('id');
		$this->db->where('id', $id);
		$result=$this->db->update('product',array('isDeleted' =>'1'));
	}
	
}