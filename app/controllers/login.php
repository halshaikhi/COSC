<?php

class Login extends Controller {
    public function index() {
        $user = $this->model('User');
        $personaldetails = $this->model('Profile');
        if (isset($_POST['username'])) {
            $user->username = $_POST['username'];
        }

        if (isset($_POST['password'])) {
            $user->password = $_POST['password'];
        }

        $user->authenticate();

        if ($user->auth == TRUE) {
            $_SESSION['auth'] = true;
            $row = $personaldetails->get_profile();
            if (!$row) {
                header('Location: /personaldetails/create');
                exit();
            }
        }

        header('Location: /home');
    }

    public function register () {
        $user = $this->model('User');

        $this->view('home/register');
        if(isset($_POST["register"])) {

            if(empty($_POST['username']) || empty($_POST['password']) ||

                empty($_POST['confirm_password']) || empty($_POST['user_email'])){
                $msg_err = "All Fields are required";

            } else if($_POST['password'] != $_POST['confirm_password']){
                $msg_err = 'Passwords should be same<br>';

            } else if(!filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL)) {
                $msg_err = "Invalid Email Address";

            } else if(!isset($_POST["terms"])) {
                $msg_err = "Accept Terms and Conditions to Register";
            }
            $hash=password_hash($_POST['password'],PASSWORD_DEFAULT);
            $user->register();


        }


    }
}
