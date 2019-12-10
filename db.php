<?php

$connection = mysqli_connect("localhost","root","","loggingapp");
if(!$connection){
  echo "we are not connnected to mysql database";
}else {echo "connection sucess";}


?>
