<?php include "db.php";



$connection = mysqli_connect("localhost","root","","loggingapp");

$username = $_POST["username"];
$password = $_POST["password"];
$id= $_POST["id"];

$query = "UPDATE users SET";
$query .= " username = '$username', password ='$password'";
$query .= "where id ='$id'";


$status = mysqli_query($connection,$query);

if(!$status){die("error".mysqli_error());}





?>
