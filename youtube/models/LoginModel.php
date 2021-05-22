<?php

class LoginModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function run() {


        $sth = $this->db->prepare("SELECT id FROM users WHERE 
                login = :login AND password = MD5(:password)"); //to niby cos z pdo
        $sth->execute(array(
            ':login' => $_POST['login'],
            ':password' => $_POST['password']
        ));
        //$data = $sth->fetchAll();

        $count = $sth->rowCount();
        if ($count > 0) {
            //login
            Session::init();
            Session::set('loggedIn', true);
            header('location: ../dashboard');
        } else {
            header('location: ../login');
            // show an error
        }
    }

}
