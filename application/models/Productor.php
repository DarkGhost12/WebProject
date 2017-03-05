<?php

    class Productor extends CI_Model{

        public $ProductorUserID;
        public $ProductorComment;
        public $ProductorRating;

        public function __construct(){
            parent::__construct();
        }
 
        public function insert(){
            $this->db->insert('Productors', $this);
            $id = $this->db->insert_id();
            return $id;
        }

        public function update(){

        }

        public function delete(){

        }

        public function addProductor($user){
            $user = $user->UserID;
            $productor = new Productor();
            $productor->ProductorUserID = $user;
            $productor->ProductorRating = 0.0;
            $id = $productor->insert();
            return $id;
        }
}
?>
