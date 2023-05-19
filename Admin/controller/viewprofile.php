<?php

require_once('../model/adminModel.php');
session_start();
if(isset($_POST['data']))
{
    $user = validate($_SESSION['username'], $_SESSION['password']);
    echo json_encode($user);
}

?>