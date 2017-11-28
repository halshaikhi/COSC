<?php

class Home extends Controller {

    public function index($name = '') {		
        $user = $this->model('User');
        $personaldetails = $this->model('Profile');
		if (isset($_SESSION['name'])) {

            $row = $personaldetails->get_profile();
            if (!$row) {
                header('Location: /personaldetails/create');
                exit();
            }
            $message = 'You are awesome';
		} else {
			$message = 'You suck';
		}
		
        $this->view('home/index', ['message' => $message]);
    }

    public function login($name = '') {
        $this->view('home/login');
    }

}
