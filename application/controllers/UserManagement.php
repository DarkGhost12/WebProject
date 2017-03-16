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
        $user = new User();
        $args = array(
            'email' => $_POST['email'],
            'lastname' => $_POST['lastname'],
            'firstname' => $_POST['firstname'],
            'username' => $_POST['username'],
            'phone' => $_POST['phone'],
            'address' => $_POST['address'],
            'zip' => $_POST['zip'],
            'city' => $_POST['city'],
            'password' => md5($_POST['pwd']),
        );
        $user->register($args);
        $data = array();
        $data['message'] = "Your registration has been accepted.";
        $this->load->view('welcome_message',$data);        
    }

    public function login(){
        $this->load->model('user','',TRUE);
        $result = $this->user->login($_POST['login'], $_POST['password']);
        if($result && $result != ''){
            $data['message'] = 'You are connected.';
        } else{
            $data['message'] = 'This user or password does not exist.';
        }
        $this->load->view('welcome_message', $data);
    }
    
    public function disconnect(){
        $this->session->sess_destroy();
        $data = array ('message' => 'You have been logged out');
        $this->load->view('welcome_message', $data);
    }

}
