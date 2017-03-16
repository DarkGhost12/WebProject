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
        $product = new Product();
        $product = $product->getProductByID($_GET['id']);
        $data = array(
            'id' => $product[0]->ProductID,
            'name' => $product[0]->ProductDenom,
            'desc' => $product[0]->ProductDescription,
            'qty' => $product[0]->ProductQuantity,
            'quality' => $product[0]->ProductQuality,
        );
        $this->load->view('product_order', $data);
    }

    public function get_product_by_name(){
        $product = new Product();
        $args = array(
            'name' => $_POST['search'],
        );
        $products = $product->getProductByName($args);
        $data = array('products' => $products);
        $this->load->view('welcome_message', $data);
    }

}
