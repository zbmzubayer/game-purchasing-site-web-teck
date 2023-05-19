<?php

if(isset($_POST['data']))
{
 $connect = mysqli_connect("localhost", "root", "", "webtech");
 $query = "SELECT * FROM transactions";
 $result = mysqli_query($connect, $query);
 $output = '
 <table>
 <tr>
 <td>Buyer Name</td>
 <td>Seller Name</td>
 <td>Pay Method</td>
 <td>Payment</td>
 <td>Purchase Date</td>
 </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
  <tr>
  <td>' . $row['buyername'] . '</td>
  <td>' . $row['sellername'] . '</td>
  <td>' . $row['paymethod'] . '</td>
  <td>' . $row['payment'] . '</td>
  <td>' . $row['purchasedate'] . '</td>
  </tr>
  ';
 }
 $output .= '</table>';
 echo $output;
}

?>