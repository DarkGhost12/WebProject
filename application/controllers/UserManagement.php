<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserManagement extends CI_Controller {

    public function index()
    {
        $this->load->view('inscription_form');
    }

    public function show_register()
    {
        $this->load->view('inscription_form');
    }

    public function show_login()
    {
        $this->load->view('login_page');
    }

    public function register(){
        $email = $_POST["email"];
        $email2 = $_POST["email2"];
        $username = $_POST['username'];
        $lastname = $_POST["lastname"];
        $firstname = $_POST["firstname"];
        $address = $_POST["address"];
        $zip = $_POST["zip"];
        $city = $_POST["city"];
        $phone = $_POST["phone"];
        $password = $_POST["pwd"];
        $password2 = $_POST["pwd2"];
        $vat = $_POST["vat"];
        $user = new User();
        $user->UserEmail = $email;
        $user->UserLastname = $lastname;
        $user->UserFirstname = $firstname;
        $user->UserNickname = $username;
        $user->UserPhone = $phone;
        $user->UserPhone2 = '';
        $user->UserAddress = $address;
        $user->UserZip = $zip;
        $user->UserCity = $city;
        $user->password = $password;
        $user->UserComment = "";
        $user->UserEnabled = 1;
        $user->insert();
        $data = array();
        $data['message'] = "Votre inscription est enregistrée. Vérifiez vos emails.";
        $this->load->view('welcome_message',$data);        
    }

    public function login(){
        $this->load->model('user','',TRUE);
        $result = $this->user->login($_POST['login'], $_POST['password']);
        if($result && $result != ''){
            $data['message'] = 'Vous êtes connecté';
        } else{
            $data['message'] = 'Cet utilisateur ou ce password est erroné.';
        }
        $this->load->view('welcome_message', $data);
    }
    
    public function disconnect(){
        $this->session->sess_destroy();
        redirect('');
        //$this->load->view('welcome_message');
    }

}
