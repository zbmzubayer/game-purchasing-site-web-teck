<html>
<head>
	<title>Signup</title>
    <link rel="stylesheet" href="css/reg.css">
</head>
<body>

    

		<center>
            <b>WELCOME TO THE REGISTRATION PAGE</b>

			<p>Give the best gift card to your client !!!!!!!!!</p>	
        </center>
    <nav>
     <ul>
    <li> <a href="firstpage.php" class="main-btn"><b>Main</b></a></li>
    <li><a href="registration.php" class="registration-btn"><b>Registration</b></a> </li>
    </ul>
    </nav>
	<br>
	
	
    <div class="container">  

	<form method="post" action="../controller/regcheck.php">
		
        <h1 class="text">REGISTRATION</h1>
        <br>
        <br>

        <div class="form-control">
		<label for="username">USER NAME</label>
		<input type="text" name="username" value="" placeholder="username here">
        </div>		
		
        <div class="form-control">
		<label for="password">PASSWORD</label>
		<input type="password" name="password" value="" placeholder="password here">
        </div>		
		
        <div class="form-control">
		<label for="email">EMAIL</label>
		<input type="email" name="email" value="" placeholder="email here">
    </div>		
				
					
		<button type="submit" name="submit" value="">SUBMIT</button>
				
			
        <p class="text color" >Already have an account? then <b>log in</b>  </p>
           
        <button type="submit" name="login" value="">LOG IN</button> 
            
		
	</form>
    </div>
    <script src="js/regjs.js"></script>
</body>
</html>
