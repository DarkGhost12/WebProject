<?php

    class User extends CI_Model{

        public $UserId;
        public $UserEmail;
        public $UserLastname;
        public $UserFirstname;
        public $UserNickname;
        public $UserAddress;
        public $UserZip;
        public $UserCity;
        public $UserPhone;
        public $UserPhone2;
        public $password;
        public $UserComment;
        public $UserEnabled;

        public function __construct(){
            parent::__construct();
        }
 
        public function insert(){
            $this->db->insert('Users', $this);
        }

        public function update(){

        }

        public function delete(){

        }

        public function login($login, $password){
            $return = false;
            $login = $_POST['login'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM Users WHERE (UserEmail='$login' OR UserNickname='$login') AND password='$password'";
            $result = $this->db->query($sql);
            $result = $result->result();
            isset($result[0]) ? $return = true : $return = false;
            if($return){
                $data['message'] = 'Vous êtes connecté';
                $this->session;
                $session_infos = array(
                    'login' => $result[0]->UserEmail,
                );
                $this->session->set_userdata($session_infos);
            }
            return $return;
        }

        public function checkIfUserExists($id){
            $sql = "SELECT * FROM Users WHERE UserId='$id'";
            $result = $this->db->query($sql);
            $return = $result->result();
            isset($return[0]) ? $return = true : $return = false;
            return $return;
        }

        public function getUserIdByLogin($login){
            $sql = "SELECT * FROM Users WHERE UserEmail='$login'";
            $result = $this->db->query($sql);
            $return = $result->result();
            isset($return[0]) ? $return = $return[0] : $return = false;
            return $return;
        }

    }

?>
