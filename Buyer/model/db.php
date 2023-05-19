<?php
$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "wtproject";

function getConnection() {
    global $host;
    global $dbuser;
    global $dbpass;
    global $dbname;

    $connection = mysqli_connect($host, $dbuser, $dbpass, $dbname);
    return $connection;
}
