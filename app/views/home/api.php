<?php

class api {

    public function __construct() {

    }

    public function get_api () {
        $db = db_connect();
        $statement = $db->prepare("SELECT * FROM personaldetails
                                WHERE user = :username;");
        $statement->bindValue(':username', $_SESSION['name']);

        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    public function create ($username, $birthdate, $phonenumber, $firstname, $lastname, $email) {
        $db = db_connect();
        $statement = $db->prepare("INSERT INTO personaldetails (user, birthdate, phonenumber, firstname, lastname, email)"
            . " VALUES (:username, :birthdate, :phonenumber, :firstname, :lastname, :email); ");

        $statement->bindValue(':username', $username);
        $statement->bindValue(':birthdate', $birthdate);
        $statement->bindValue(':phonenumber', $phonenumber);
        $statement->bindValue(':firstname', $firstname);
        $statement->bindValue(':lastname', $lastname);
        $statement->bindValue(':email', $email);
        $statement->execute();

    }


curl_close ($ch);


$private_key="bfa7b04a5c9";
$username="test";


$query="username=" . $user . "&function=do_search&param1=user";


$sign=hash("test1",$private_key . $query);


echo file_get_contents("cosc/api/function/param1/param2/param3?" . $query . "&sign=" . $sign);
}
?>
