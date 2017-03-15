<?php

    class Reservation extends CI_Model{

        public $RPPID;
        public $RUserID;
        public $RQuantity;
        public $RDelivery;
        public $RPickup;
        public $RDateFinished;
        public $RComment;

        public function __construct(){
            parent::__construct();
        }
 
        public function insert(){
            $this->db->insert('Reservations', $this);
        }

        public function update(){

        }

        public function delete(){

        }

        public function addReservation($args){
            extract($args);
            $product = new Product();
            $product->RPPID = $prodID;
            $product->RUserID = $userID;
            $product->RQuantity = $quantity;
            if($deliver){
                $product->RDelivery = 1;
                $product->RPickup = 0; 
            }
            else{
                $product->RDelivery = 0; 
                $product->RPickup = 1;
            }
            $product->insert();
            return true;
        }

        public function getReservationByID($id){
            $sql = "SELECT * FROM Reservations WHERE ReservationID = $id";
            $result = $this->db->query($sql);
            $product = $result->result();
            return $product;
        }
}
?>
