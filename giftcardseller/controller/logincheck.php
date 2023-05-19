<?php 
	session_start();

	if(isset($_POST['login']))
    {

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];

		if($username != "")
        {
			if($password != "")
            {
				
				$con = mysqli_connect('localhost', 'root', '', 'webtech');
                $sql = "select * from users where username = '{$username}' and password = '{$password}'";
                $result = mysqli_query($con, $sql);
                $data = mysqli_fetch_assoc($result);
                print_r($data);
				
				if($username == $data['username'] && $password == $data['password'])
                {
					$_SESSION["username"]=$data["username"];
					$_SESSION["password"]=$data["password"];
					setcookie('flag', 'true', time()+3600, '/');
					
					header('location: ../views/homepage.php');
				}
                else
                {
					echo "invalid username/password";
				}	

			}
            else
            {
				echo "invalid password....";
			}
		}
        else
        {
			echo "invalid username....";
		}
	}
	if(isset($_POST['submit']))
	{
		header("location: ../views/registration.php");
	}
?>