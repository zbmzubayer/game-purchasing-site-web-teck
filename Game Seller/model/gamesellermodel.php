<?php
require_once("db.php");

function addUser($user)
{
 $connection = getConnection();
 $sql = "insert into gameseller values('', '{$user['username']}', '{$user['email']}','{$user['password']}' )";
 if(mysqli_query($connection, $sql))
 {
  return true;
 }
 else
 {
  return false;
 }
}

function validate($username, $password)
{
 $connection = getConnection();
 $sql = "select * from gameseller where username='{$username}' and password='{$password}'";
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
function updateUser($user)
{
 $connection = getConnection();
 $sql = "update gameseller set  username = '{$user['username']}', email = '{$user['email']}', password = '{$user['password']}' where serialno = '{$user['serialno']}'";
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