<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="css/login.css">
</head>
<body>

    
	<b>WELCOME TO THE REGISTRATION PAGE</b>

	<p>Give the best gift card to your client !!!!!!!!!</p>	
<nav>
    <ul>
<li><a href="firstpage.php" class="main-btn"><b>Main</b></a></li>
<li><a href="login.php" class="log-btn"><b>log in</b></a></li>
</ul>
</nav>
<br>
<br>
    <div class="container"> 
	<form method="post" action="../controller/logincheck.php">
		<h1 class="text">LOG IN</h1>

			
		<div class="form-control">
		<label for="username">USER NAME</label>
		<input type="text" name="username" value="">
		</div>		
				
		<div class="form-control">
		<label for="password">PASSWORD</label>
		<input type="password" name="password" value="" id="myInput">
		</div>
		<input type="checkbox" onclick="myFunction()">Show Password		
				
					
		<button type="submit" name="login" value="">LOG IN </button>
                    
				
			
		<p>Don't have an account? then <b>Create a new one</b>  </p>
            
		<button type="submit" name="submit" value="">CREATE</button>
            
		
	</form>
	</div>

	<script>
    function myFunction() {
     var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
    
</body>
</html>