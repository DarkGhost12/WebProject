<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CartManagement extends CI_Controller {

    public function index()
    {
    }

    public function show_cart(){
        $this->load->view('cart');
    }

    public function add_to_cart(){
        $data = array(
            'id'      => $_GET['id'],
            'qty'     => $_GET['qty'],
            'price'   => 0,
            'name'    => $_GET['name'],
        );

        $this->cart->insert($data);
        $this->load->view('cart');
    }

    public function update_cart(){
        $data = array();
        foreach ($_POST as $item) {
            $data[] = array(
                'rowid' => $item['rowid'],
                'qty' => $item['qty'],
            );
        }
        $this->cart->update($data);
        $this->load->view('cart');
    }

}
