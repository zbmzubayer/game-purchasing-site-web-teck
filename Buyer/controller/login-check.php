<?php
require_once('../model/customersModel.php');
session_start();
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username != "" && $password != "") {
        $_SESSION["flag"] = "true";
        $status = validate($username, $password);
        // $myfile = fopen('../model/customerdata.txt', 'r');
        // $data;
        // $_SESSION["flag"] = "true";
        // while(!feof($myfile)) {
        //     $data = fgets($myfile);
        //     $customer = explode('|', $data);
        if ($status) {
            header('location: ../views/home.php');
            $_SESSION["id"] = $status['id'];
            $_SESSION["name"] = $status['name'];
            $_SESSION["email"] = $status['email'];
            $_SESSION["username"] = $status['username'];
            $_SESSION["dateofbirth"] = $status['dateofbirth'];
            $_SESSION["gender"] = $status['gender'];
            $_SESSION["country"] = $status['country'];
            $_SESSION["password"] = $status['password'];
            
        } else {
           echo "Wrong username or password";
        }
        // fclose($myfile);
    }
    if (isset($_POST["rememberme"])) {
        setcookie("flag", "true", time() + 3600, "/");
    }
}
?>