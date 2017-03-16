<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReservationManagement extends CI_Controller {

    public function index()
    {
    }

    public function show_add_reservation()
    {
    }

    public function add_reservation(){
        $user = new User();
        $contents = $this->cart->contents();
        $user = $user->getUserIdByLogin($_SESSION['login']);
        $reservation = new Reservation();
        $product = new Product();
        foreach($contents as $content){
            $args = array(
                'order_id' => $content['id'],
                'order_qty' => $content['qty'],
                'order_user' => $_SESSION['id'],
            );
            $reservation->add_reservation($args);
            $args = array(
                'id' => $content['id'],
                'qty' => $content['qty'],
            );
            $product->reduceStock($args);
        }
        $this->load->view('welcome_message');
    }

}
