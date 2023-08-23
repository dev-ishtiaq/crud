<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "formdb";

$con = mysqli_connect($server, $username, $password, $database);
// check connection
// if($con) {
//     echo "Connection ok2 <br><br>";
// } else {
//     echo "<br>";
//     echo "Connection error <br> " . mysqli_connect_error();
// }
?>