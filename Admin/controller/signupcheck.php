<?php

require_once('../model/adminModel.php');

if (isset($_POST["submit"]))
{
	$fullname = $_POST["fullname"];
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$confirmpassword = $_POST["confirmpassword"];
	$dateofbirth = $_POST["dateofbirth"];
	
	if ($fullname != "" && $username != "" && $email != "" && $password != "" && $confirmpassword != "" && $dateofbirth != "" && $password == $confirmpassword)
	{
		$admin = ['fullname' => $fullname, 'username' => $username, 'email' => $email, 'password' => $password, 'confirmpassword' => $confirmpassword, 'dateofbirth' => $dateofbirth];
		$status = addUser($admin);
		if ($status)
		{
			header('location: ../views/login.html');
		}
		else
		{
			echo "Try again...";
		}
	}
}

?>