<?php 

	$term = $_POST['name'];
	$con = mysqli_connect('localhost', 'root', '', 'wtproject');
	$sql = "select * from games where name like '%{$term}%'";
	$result = mysqli_query($con, $sql);

	//echo $sql;

	if($result != null){
    $output = '
        <table>
            <thead>
                <td>Picture</td>
                <td>Name</td>
                <td>Type</td>
                <td>Description</td>
                <td>Popularity</td>
                <td>Price</td>
            </thead>
    ';
		while($row = mysqli_fetch_assoc($result)){
        $output .= '
            <tr>
                <td>
                    <img src="assets/images/games/' . $row['picture'] . '" alt="' . $row['name'] . ' logo" height = "80px" width = "200px">
                </td>
                <td>' . $row['name'] . '</td>
                <td>' . $row['type'] . '</td>
                <td>' . $row['description'] . '</td>
                <td>' . $row['popularity'] . '</td>
                <td>$' . $row['price'] . '<a href="#">Buy</a></td>
            </tr>
        ';
		}

    $output .= '</table>';
    echo $output;
	}else{
		echo $sql;
	}
