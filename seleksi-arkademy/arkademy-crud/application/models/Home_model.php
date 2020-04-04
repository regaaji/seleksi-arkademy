<?php 

/**
 * 
 */
class Home_model extends CI_model
{
	
	
  public function getData(){
    $query = $this->db->query('SELECT product.id, cashier.cashier_name, product.name, product.price, category.category_name FROM (product INNER JOIN cashier ON product.id_cashier=cashier.id) INNER JOIN category ON product.id_category=category.id');
    return $query;
  }

  public function getDataById(){
    $where = $this->input->post('id_product');
    $query = $this->db->query('SELECT product.id, cashier.cashier_name, product.name, product.price, category.category_name FROM (product INNER JOIN cashier ON product.id_cashier=cashier.id) INNER JOIN category ON product.id_category=category.id WHERE product.id='.$where.'');
    return $query;
  }

  public function insertData(){
    $data = array(
      'id' => '',
      'name' => $this->input->post('product_name'),
      'price' => $this->input->post('price'),
      'id_category' => $this->input->post('id_category'),
      'id_cashier' => $this->input->post('id_cashier')
    );
    return $this->db->insert('product', $data);
  }

  public function editData(){
    $data = array(
      'name' => $this->input->post('product_name'),
      'price' => $this->input->post('price'),
      'id_category' => $this->input->post('id_category'),
      'id_cashier' => $this->input->post('id_cashier')
    );
    $this->db->where('id', $this->input->post('id_product'));
    return $this->db->insert('product', $data);
  }

  public function deleteData(){
    $this->db->where('id', $this->uri->segment(3));
    return $this->db->delete('product');
  }
}