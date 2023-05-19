<?php

require_once("db.php");
function validate($username, $password)
{
 $connection = getConnection();
 $sql = "select * from users where username='{$username}' and password='{$password}'";
 $result = mysqli_query($connection, $sql);
 $data = mysqli_fetch_assoc($result);
 if($data != null)
 {
  return $data;
 }
 else
 {
  return false;
 }
}

function addUser($user)
{
 $connection = getConnection();
 $sql = "insert into users values('', '{$user['fullname']}', '{$user['username']}', '{$user['email']}', '{$user['password']}', '{$user['confirmpassword']}', '{$user['dateofbirth']}')";
 if(mysqli_query($connection, $sql))
 {
  return true;
 }
 else
 {
  return false;
 }
}

function updateUser($user)
{
 $connection = getConnection();
 $sql = "update users set fullname = '{$user['fullname']}', username = '{$user['username']}', email = '{$user['email']}', password = '{$user['password']}', confirmpassword = '{$user['confirmpassword']}', dateofbirth = '{$user['dateofbirth']}' where serialno = '{$user['serialno']}'";
 if(mysqli_query($connection, $sql))
 {
  return true;
 }
 else
 {
  return false;
 }
}

function deleteUser($id)
{
 $connection = getConnection();
 $sql = "DELETE FROM users WHERE serialno = '{$id}'";
 if(mysqli_query($connection, $sql))
 {
  return true;
 }
 else
 {
  return false;
 }
}

?>