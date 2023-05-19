<?php

if(isset($_POST['data']))
{
 $connect = mysqli_connect("localhost", "root", "", "webtech");
 $query = "SELECT * FROM buyers";
 $result = mysqli_query($connect, $query);
 $output = '
 <table>
 <tr>
 <td>Full Name</td>
 <td>User Name</td>
 <td>Email</td>
 <td>Date Of Birth</td>
 </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
  <tr>
  <td>' . $row['fullname'] . '</td>
  <td>' . $row['username'] . '</td>
  <td>' . $row['email'] . '</td>
  <td>' . $row['dateofbirth'] . '</td>
  </tr>
  ';
 }
 $output .= '</table>';
 echo $output;
}

?>