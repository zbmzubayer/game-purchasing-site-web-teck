<?php 

	$term = $_POST['name'];
	$con = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql = "select * from sellers where username like '%{$term}%'";
	$result = mysqli_query($con, $sql);

	//echo $sql;

	if($result != null)
 {
  $output = 
  '<table>
  <thead>
  <td>Full Name</td>
  <td>User Name</td>
  <td>Email</td>
  <td>Date of Birth</td>
  </thead>';

		while($row = mysqli_fetch_assoc($result))
  {
   $output .=
   '<tr>
   <td>' . $row['fullname'] . '</td>
   <td>' . $row['username'] . '</td>
   <td>' . $row['email'] . '</td>
   <td>' . $row['dateofbirth'] . '</td>
   </tr>';
		}
  
  $output .= '</table>';
  echo $output;
	}
 else
 {
  echo $sql;
	}