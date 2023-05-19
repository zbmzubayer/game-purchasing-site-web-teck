<?php
session_start();
if(isset($_POST["submit"])) {
    $currentPass = $_POST["currentpassword"];
    $newPass = $_POST["newpassword"];
    $confirmPass = $_POST["newconfirmpassword"];

    $connect = mysqli_connect("localhost", "root", "", "wtproject");
    $query = "SELECT * FROM customers where ";
    $result = mysqli_query($connect, $query);

    if($currentPass == $_SESSION["password"] && $newPass == $confirmPass) {
        $connect = mysqli_connect("localhost", "root", "", "wtproject");
        $query = "update customers set password = '{$newPass}' where id = '{$_SESSION["id"]}'";
        $result = mysqli_query($connect, $query);
        if($result) {
            echo "Password Changed Successfully";
            $_SESSION["password"] = $newPass;
        }
    }
    else {
        echo "Invalid";
    }
}
?>