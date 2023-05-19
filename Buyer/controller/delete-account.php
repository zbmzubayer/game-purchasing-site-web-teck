<?php
session_start();
require_once("../model/customersModel.php");
if(isset($_POST['submit'])) {
    $status = deleteCustomer($_SESSION['id']);
    if($status) {
        echo "Account successfully deleted";
    }
    else {
        echo "Error occured";
    }
}
?>