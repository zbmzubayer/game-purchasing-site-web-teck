<?php

require_once('../model/giftcardseller.php');

if (isset($_POST["submit"]))
{
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	
	
	
	
	if ($username != ""  && $password != ""  && $email != "")
	{
		$user = ['username' => $username, 'password' => $password, 'email' => $email];
		$status = addUser($user);
		if ($status)
		{
			header('location: ../views/login.php');
		}
		else
		{
			echo "Try again...";
		}
	}
}

if (isset($_POST["login"]))
{
	header('location: ../views/login.php');

}

?>