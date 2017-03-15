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
        $user = $this->user->getUserIdByLogin($_SESSION['login']);
        $product = new Product();
        $args = array(
                      'ProductName' => $_POST['ProductName'], 
                      'ProductDesc' => $_POST['ProductDesc'], 
                      'ProductQuality' => $_POST['ProductQuality'], 
                      'ProductQty' => $_POST['ProductQty'],
                      'User' => $user
                     );
        $return = $product->addProduct($args);
        if($return) $data = array('message' => 'Your product has been successfully added to the products.');
        else $data = array('message' => 'There was an error while adding your product');
        $this->load->view('welcome_message', $data);
    }

}
