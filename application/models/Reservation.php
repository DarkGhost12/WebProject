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

        public function add_reservation($args){
            extract($args);
            $reservation = new Reservation();
            $reservation->RPPID = $order_id;
            $reservation->RUserID = $order_user;
            $reservation->RQuantity = $order_qty;
            if(isset($order_deliver) && $order_deliver == 1){
                $reservation->RDelivery = 1;
                $reservation->RPickup = 0; 
            }
            else{
                $reservation->RDelivery = 0; 
                $reservation->RPickup = 1;
            }
            $reservation->insert();
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
