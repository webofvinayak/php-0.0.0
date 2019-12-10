
<?php include 'db.php';

$username = $_POST["username"];
$password = $_POST["password"];

 if(isset($_POST["submit"])) {

  //echo "yes submit button works";
   //echo"<br>";
  //print_r($_POST);

  //echo"<br>";




  //echo "usrnname-->" .$username. "and password--->" .$password;
  //echo"<br>";


}

$query = "INSERT INTO users(username,password)";
$query .= "VALUES('$username','$password')";

$true_con = mysqli_query($connection,$query);


 ?>
