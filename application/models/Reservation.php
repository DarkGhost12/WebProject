<?php

    class Product extends CI_Model{

        public $RPPID;
        public $RUserID;
        public $ReservationQuantity;
        public $RDelivery;
        public $RPickup;
        public $RPUDelDTG;
        public $RComment;

        public function __construct(){
            parent::__construct();
        }
 
        public function insert(){
            $this->db->insert('Reservations', $this);
            $id = $this->db->insert_id();
            return $id;
        }

        public function update(){

        }

        public function delete(){

        }

        public function addProduct($args){
            extract($args);
            $product = new Product();
            $this->load->model('productor','', TRUE);
            $this->load->model('productor_product', '', TRUE);
            return true;
        }

        public function getProductByID($id){
            $sql = "SELECT ProductCounter FROM Products_List WHERE ProductID = $id";
            $result = $this->db->query($sql);
            $product = $result->result();
            return $product;
        }
}
?>
