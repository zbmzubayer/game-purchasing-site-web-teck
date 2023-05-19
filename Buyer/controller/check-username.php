<?php
// require_once('../model/customersModel.php');

$con = mysqli_connect("localhost", "root", "", "wtproject");
if(!empty($_POST["username"])) {
    $query = "Select * from customers where username = '".$_POST["username"]."'";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);
    if($count > 0) {
        echo "<span id='usernameError'>Username already exist</span>";
        echo "<script>$('#submit').prop('disabled', true);</script>";
    }
    else {
        // echo "<span id='usernameError' color='green'>Username available</span>";
        // echo "<script>$('submit').prop('disable', false);</script>";
    }
}
?>