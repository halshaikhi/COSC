<?php

class Personaldetails extends Controller {
    public function index($id = '') {
        $personaldetails = $this->model('Profile');
        $data = $personaldetails -> get_profile();
        if(!isset($data[0])){
            $message = "No found record!";
        } else  {
            $message = "";
            $data = $data[0];
        }
        $this->view('personaldetails/index', ['message' => $message, 'values' => $data]);

    }


	public function create () {
        $personaldetails = $this->model('Profile');
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_SESSION['name'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$birthdate = $_POST['birthdate'];
			$phonenumber = $_POST['phonenumber'];
            $email = $_POST['email'];
            $message = "";
            if(empty($firstname)){
                $message .= "Please enter the Firstname. <br>";
            }
            if(empty($lastname)){
                $message .= "Please enter the Lastname. <br>";
            }
            if(empty($birthdate)){
                $message .= "Please enter the Birthday. <br>";
            }else {
                if($this->validateDateTime($birthdate, 'm/d/Y')){
                    $b = explode("/", $birthdate);
                    $age = (date("md", date("U", mktime(0, 0, 0, $b[0], $b[1], $b[2]))) > date("md")
                        ? ((date("Y") - $b[2]) - 1)
                        : (date("Y") - $b[2]));
                    if($age < 18){
                        $message .= "Birthdate must be at least 18 years ago. <br>";
                    }
                } else{
                    $message .= "Birthday must be valid format (mm/dd/yyyy). <br>";
                }
            }
            if(empty($phonenumber)){
                $message .= "Please enter the Phone number. <br>";
            }
            if(empty($email)){
                $message .= "Please enter the Email. <br>";
            } else {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $message .= "$email is not a valid email address <br>";
                }
            }
            if(empty($message)){
                $personaldetails->create($username, $birthdate, $phonenumber, $firstname, $lastname, $email);
                $this->view('personaldetails/create', ['message' => "Created record successfully! <br>"]);
            } else  {

                $this->view('personaldetails/create', ['message' => $message, 'username' => $username,
                                                        'birthdate' => $birthdate, 'phonenumber' => $phonenumber, 'firstname' => $firstname,
                                                        'lastname' => $lastname, 'email' => $email ]);
            }

		} else {
            $this->view('personaldetails/create');
        }
	}
    function validateDateTime($dateStr, $format)
    {
        date_default_timezone_set('UTC');
        $date = DateTime::createFromFormat($format, $dateStr);
        return $date && ($date->format($format) === $dateStr);
    }

}
