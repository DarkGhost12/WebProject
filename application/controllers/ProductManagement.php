<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductManagement extends CI_Controller {

    public function index()
    {
        // AUTO REDIRECT TO show_add_product TO BE DONE
    }

    public function show_add_product()
    {
        $product = new Product();
        $productsName = $product->listProductsName();
        $productsCounter = $product->listProductsCounter();
        $data = array("productsName" => $productsName, "productsCounter" => $productsCounter);
        $this->load->view('product_add_form', $data);
    }

    public function add_product(){
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

    public function show_order_product(){
        $this->load->model('user','', TRUE);
        $this->load->model('product','', TRUE);
        if(isset($_SESSION['login'])){
            $id = $_GET['id'];
            $user = $this->user->getUserIdByLogin($_SESSION['login']);
            $product = $this->product->getProductByID($id);
        }else {
            $message = 'You are not logged in. <br/>';
            $message .= 'Return to <a href="'.base_url().'">index page</a>';
            $data = array('message' => $message);
            $this->load->view('welcome_message', $data);
        }
    }

}
