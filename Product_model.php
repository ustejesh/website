<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product_model extends CI_Model{

    public function getplaces(){
		$this->db->select('*');
        $this->db->from("productdetails");
        $this->db->join('category', 'category.categoryId = productdetails.categoryId');
        $this->db->order_by('productdetails.productId', "desc");
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
	}

    public function getCategory(){
        $this->db->select('categoryId,categoryName');
        $this->db->from("category");
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

}