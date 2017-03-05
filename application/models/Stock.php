<?php

    class Product extends CI_Model{

        public $ProductDenom;
        public $ProductQuantity;
        public $ProductQuality;
        public $ProductComment;
        public $ProductDescription;

        public function __construct(){
            parent::__construct();
        }
 
        public function insert(){
            $this->db->insert('Products', $this);
        }

        public function update(){

        }

        public function delete(){

        }
}
?>
