<?php

    class Product extends CI_Model{

        public $ProductDenom;
        public $ProductQuantity;
        public $ProductQuality;
        public $ProductComment;
        public $ProductDescription;

        public function __construct(){
            parent::__construct();
        }
 
        public function insert(){
            $this->db->insert('Products', $this);
            $id = $this->db->insert_id();
            return $id;
        }

        public function update(){

        }

        public function delete(){

        }

        public function addProduct($args){
            extract($args);
            $product = new Product();
            $this->load->model('productor','', TRUE);
            $this->load->model('productor_product', '', TRUE);
            $product->ProductDenom = $ProductName;
            $product->ProductDescription = $ProductDesc;
            $product->ProductQuality = $ProductQuality;
            $product->ProductQuantity = $ProductQty;
            $productID = $product->insert();
            $productorID = $this->productor->addProductor($User);
            $this->productor_product->addPPLink($productorID, $productID);
            return true;
        }

        public function listProducts(){
            $sql = "SELECT * FROM Products";
            $result = $this->db->query($sql);
            $products = $result->result();
            return $products;
        }

        public function listProductsName(){
            $sql = "SELECT ProductName FROM Products_List";
            $result = $this->db->query($sql);
            $products = $result->result();
            foreach($products as $product){
                $productsName[] = $product->ProductName;
            }
            return $productsName;
        }

        public function listProductsCounter(){
            $sql = "SELECT ProductCounter FROM Products_List";
            $result = $this->db->query($sql);
            $products = $result->result();
            foreach($products as $product){
                $productsCounter[] = $product->ProductCounter;
            }
            return $productsCounter;
        }

        public function getProductByID($id){
            $this->db->select('*');
            $this->db->from('Products');
            $this->db->where("ProductID" ,$id);
            $result = $this->db->get();
            $product = $result->result();
            return $product;
        }
       
        public function getProductByName($args){
            extract($args);
            $this->db->select('*');
            $this->db->from('Products');
            $this->db->where("ProductDenom", $name);
            $result = $this->db->get();
            $product = $result->result();
            return $product;
        }

 
        public function reduceStock($args){
            extract($args);
            $this->db->select('ProductQuantity');
            $this->db->from('Products');
            $this->db->where('ProductID',  $id);
            $query = $this->db->get();
            $result = $query->result();
            $stock = $result[0]->ProductQuantity;
            $newStock = $stock - $qty;
            $this->db->set('ProductQuantity', $newStock);
            $this->db->where('ProductID', $id);
            $this->db->update('Products');
        }
}
?>
