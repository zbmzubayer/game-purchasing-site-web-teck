<?php

require_once('../model/adminModel.php');
session_start();
if (isset($_POST["submit"]))
{
	$username = $_POST["username"];
	$password = $_POST["password"];
	if ($username != "" && $password != "")
	{
		$_SESSION["flag"] = "true";
		$status = validate($username, $password);
		if ($status)
		{
			header('location: ../views/home.html');
			$_SESSION["serialno"] = $status['serialno'];
			$_SESSION["fullname"] = $status['fullname'];
			$_SESSION["username"] = $status['username'];
			$_SESSION["email"] = $status['email'];
			$_SESSION["password"] = $status['password'];
			$_SESSION["confirmpassword"] = $status['confirmpassword'];
			$_SESSION["dateofbirth"] = $status['dateofbirth'];
		}
		else
		{
			echo "Invalid Login";
		}
	}
	if (isset($_POST["remember-me"]))
	{
		setcookie("flag", "true", time() + 3600, "/");
	}
}

?>