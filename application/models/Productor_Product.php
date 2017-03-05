<?php

    class Productor_Product extends CI_Model{

        public $PPID;
        public $PPProductID;
        public $PPProductorID;
        public $PPEnabled;

        public function __construct(){
            parent::__construct();
        }
 
        public function insert(){
            $this->db->insert('Productors_Products', $this);
            $id = $this->db->insert_id();
        }

        public function update(){

        }

        public function delete(){

        }

        public function addPPLink($productorID,$productID){
            $PPLink = new Productor_Product();
            $PPLink->PPProductID = $productorID;
            $PPLink->PPProductorID = $productID;
            $id = $PPLink->insert();
        }
}
?>
