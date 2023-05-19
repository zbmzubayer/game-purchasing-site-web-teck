<?php
require_once('../model/customersModel.php');
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $dateOfBirth = $_POST["dateofbirth"];
    $gender = $_POST["gender"];
    $country = $_POST["country"];
    $password = $_POST["password"];
    /* if($name != "" && $email != "" && $username != "" && $password != "") {
        $myfile = fopen('../model/customerdata.txt', 'a');
        $customer = $name."|".$email."|".$username."|".$password."\r\n";
        fwrite($myfile, $customer);
        fclose($myfile);
        header('location: ../views/login.php');
    }  */
    if ($name != "" && $email != "" && $username != "" && $dateOfBirth != "" && $gender != "" && $country != "" && $password != "") {
        $customer = ['name' => $name, 'email' => $email, 'username' => $username, 'dateofbirth' => $dateOfBirth, 'gender' => $gender, 'country' => $country, 'password' => $password];
        $status = addCustomer($customer);
        if ($status) {
            header('location: ../views/login.html');
        } else {
            echo "Try again...";
        }
    }
}
