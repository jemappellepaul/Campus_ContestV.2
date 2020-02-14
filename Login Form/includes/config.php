<?php
$username = "root";
$password = "";
$database = "dbname";
$hostname = "localhost";

$conn = mysqli_connect($hostname,$username,$password,$database);
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
/* change character set to utf8 */
if (!$conn->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $conn->error);
    exit();
}
?>