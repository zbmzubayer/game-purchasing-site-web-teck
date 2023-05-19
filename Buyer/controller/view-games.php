<?php
if(isset($_POST['data'])) {
    $connect = mysqli_connect("localhost", "root", "", "wtproject");
    $query = "SELECT * FROM games";
    $result = mysqli_query($connect, $query);
    $output = '
        <table>
            <thead>
                <td>Picture</td>
                <td>Name</td>
                <td>Type</td>
                <td>Details</td>
                <td>Popularity</td>
                <td>Price</td>
            </thead>
    ';
    while($row = mysqli_fetch_array($result)) {
        $output .= '
            <tr>
                <td>
                    <img src="assets/images/games/'.$row['picture']. '" alt="' . $row['name'] . ' logo" height = "80px" width = "200px">
                </td>
                <td>' . $row['name'] . '</td>
                <td>' . $row['type'] . '</td>
                <td>' . $row['description'] . '</td>
                <td>' . $row['popularity'] . '</td>
                <td>$' . $row['price'] . '<a href="views/login.html">Buy</a></td>
            </tr>
        ';
    }
    $output .= '</table>';
    echo $output;
}
?>