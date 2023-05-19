<?php
require_once("db.php");
function validate($username, $password) {
    $connection = getConnection();
    $sql = "select * from customers where username='{$username}' and password='{$password}'";
    $result = mysqli_query($connection, $sql);
    $data = mysqli_fetch_assoc($result);
    if($data != null) {
        return $data;
    }
    else {
        return false;
    }
}
function addCustomer($customer) {
    $connection = getConnection();
    $sql = "insert into customers values('', '{$customer['name']}', '{$customer['email']}', '{$customer['username']}', '{$customer['dateofbirth']}', '{$customer['gender']}', '{$customer['country']}', '{$customer['password']}')";
    if(mysqli_query($connection, $sql)) {
        return true;
    }
    else {
        return false;
    }
}
function updateProfile($customer) {
    $connection = getConnection();
    $sql = "update customers set name = '{$customer['name']}', email = '{$customer['email']}', username = '{$customer['username']}', dateofbirth = '{$customer['dateofbirth']}', gender = '{$customer['gender']}', country = '{$customer['country']}' where id = '{$customer['id']}'";
    if(mysqli_query($connection, $sql)) {
        return true;
    }
    else {
        return false;
    }
}
function deleteCustomer($id) {
    $connection = getConnection();
    $sql = "DELETE FROM customers WHERE id = '{$id}'";
    if(mysqli_query($connection, $sql)) {
        return true;
    }
    else {
        return false;
    }
}
?>