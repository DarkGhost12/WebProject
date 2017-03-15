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
        $this->load->model('user','', TRUE);
        $contents = $this->cart->contents();
        $user = $this->user->getUserIdByLogin($_SESSION['login']);
        $product = new Product();
        $this->load->view('welcome_message');
    }

}
