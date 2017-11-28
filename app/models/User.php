<?php

class User {

    public $username;
    public $password;
    public $auth = false;

    public function __construct() {
        
    }

    public function authenticate() {
        /*
         * if username and password good then
         * $this->auth = true;
         */
		 
		$db = db_connect();
        $statement = $db->prepare("select * from users
                                WHERE name = :name;
                ");
        $statement->bindValue(':name', $this->username);
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
		
		if ($rows) {
			$this->auth = true;
			$_SESSION['name'] = $rows[0]['Name'];
			$_SESSION['is_admin'] = $rows[0]['isAdmin'];
			$_SESSION['age'] = $rows[0]['Age'];
		}
    }
	
	public function register ($username, $password ,$email) {
		$db = db_connect();
		
		$insert=$db->prepare("INSERT INTO user(username, Password, Email)values(:username,:password,:Email)");
		$insert->bindparam('username',$username);
		$insert->bindparam('email',$email);
		$insert->bindparam('password',$password);
		
        

	}

}
