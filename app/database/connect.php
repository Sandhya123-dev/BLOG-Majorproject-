<?php
$host = "localhost";
$user = "root";
$pass = " yes";
$dbname = "majorproject";

//  $conn= new MySQLi($host, $user, $pass, $db_name);
$con = mysqli_connect($host, $user, $pass, $dbname);

 if($con->connect_error){
    die('Database conection error:' .$conn->$connect_error);

 }
 else{
    echo "Db connection successful";
 }
 ?>