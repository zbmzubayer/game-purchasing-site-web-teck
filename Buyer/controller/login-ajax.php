<?php
require_once('../model/customersModel.php');
$data = json_decode($_REQUEST['data']);


if($data->username != "" && $data->password != "") {
    $status = validate($data->username, $data->password);
    if(!$status) {
        // echo "<span id='usernameError'>Invalid username or password</span>";
        // echo "<script>$('#submit').prop('disabled', true);</script>";
        echo "W";
    }
    else {
        echo "R";
    }
}

?>