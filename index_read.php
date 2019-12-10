
<?php

$connection = mysqli_connect("localhost","root","","loggingapp");
if($connection){echo"we are connected"; echo"<br>";}else{echo"we are not";}

 if(isset($_POST["submit"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

}

$query = "SELECT * FROM users";
//$query .= "VALUES('$username','$password')";

$queryStatus = mysqli_query($connection,$query);


if(! $queryStatus){
  echo "Insert into table failed" .mysql_error();
}

?>

<?php
while($row = mysqli_fetch_row($queryStatus)){
?>

 <pre>
 <?php
  print_r($row);
  ?>
  </pre>

<?php
}

 ?>
