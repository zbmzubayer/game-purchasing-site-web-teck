<?php 
require_once('../model/db.php');
$connection=getConnection(); 
$sql="select * from users";
$result= mysqli_query($connection,$sql);
?> 

<!DOCTYPE html>
<html>
<head>
	
	<title>transaction page</title>
    <link rel="stylesheet" href="css/trs.css">
</head>
<body>
    <div align="center" style="background-color: lightgray;">
    
	<p>Give the best gift card to your client !!!!!!!!!</p>
   
    <nav>
    <ul>
    <li><a href="homepage.php"><b>Home</b></a> </li>
    <li><a href="transaction.php"><b>Transaction</b></a> </li>
    <li><a href="help.php"><b>Help</b></a></li> 
    <li><a href="add.php"><b>Add Gift Card</b></a> </li>
    <li><a href="contact.php"><b>Contact</b></a></li> 
    <li><a href="login.php"><b>Log Out</b></a> </li>
    <li><a href="store.php"><b>Store</b></a> </li>
    <li><a href="profile.php"><b>Profile</b></a></li>
    </nav>
</ul>
    <h2>Here you can see the Transaction history</h2> 
    </div> 

   
    <table border="3px" style="width:600px; line-height:40px; background-color:white; margin-left: 500px; " > 
	<tr> 
		<th colspan="4"><h2>Transaction Record</h2></th> 
		</tr> 
			  
			  <th> USER NAME </th> 
			  <th> PASSWORD </th> 
			  <th> EMAIL </th> 
			  
		</tr> 

		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<td><?php echo $rows['username']; ?></td> 
		<td><?php echo $rows['password']; ?></td> 
		<td><?php echo $rows['email']; ?></td> 
	</tr> 
	<?php 
        } 
          ?>
  
</body>
</html>
