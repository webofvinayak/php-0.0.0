<?php include 'db.php';
//global $connection;

function abc(){
  global $connection;
  $query = " SELECT * FROM users " ;
  $results = mysqli_query($connection,$query);
  if(! $results){
    die("Query failed".mysqli_error());
  }
 while($result = mysqli_fetch_assoc($results)){
  $id = $result["id"];
  echo "<option value='$id'> $id </option>";
}



}

//abc();

 ?>

 <!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <title></title>
  </head>
  <body style="margin-left: 15px;">
    <form action="index_update.php" method="post">
      <input type="text" name="username" placeholder="username" value="">
      <br>
      <br>
      <input type="password" name="password" placeholder="password" value="">




    <div class="form-group">
      <select class="" name="id" id="" >
       <?php
             abc();
       ?>
      </select>

    </div>
   <input class="btn btn-primary" type="submit" name="update" value="update">
  </form>
  </body>
</html>
