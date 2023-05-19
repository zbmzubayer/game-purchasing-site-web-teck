<?php
require_once('../model/customersModel.php');
session_start();
if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $dateOfBirth = $_POST["dateofbirth"];
    $gender = $_POST["gender"];
    $country = $_POST["country"];
    if ($name != "" && $email != "" && $username != "" && $dateOfBirth != "" && $gender != "" && $country != "") {
        $customer = ['id' => $_SESSION['id'], 'name' => $name, 'email' => $email, 'username' => $username, 'dateofbirth' => $dateOfBirth, 'gender' => $gender, 'country' => $country];
        $status = updateProfile($customer);
        if ($status) {
            echo "Updated successfully";
        } else {
            echo "Try again...";
        }
    }
}
?>