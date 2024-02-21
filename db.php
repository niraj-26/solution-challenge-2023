<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "login";

$con = mysqli_connect($server, $user, $pass, $database);




if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>