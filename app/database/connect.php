<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "majorproject";

//  $conn= new MySQLi($host, $user, $pass, $db_name);
$conn = new mysqli($host, $username, $password, $db_name);

 // Check connection 
if ($conn->connect_error) { 
    die("Connection failure: " 
        . $conn->connect_error); 
}
// else{
//    die("connection suscceful");
// }  
  
// Creating a database named geekdata 
// $sql = "CREATE DATABASE geekdata"; 
// if ($conn->query($sql) === TRUE) { 
//     echo "Database with name geekdata"; 
// } else { 
//     echo "Error: " . $conn->error; 
// } 
  
// // Closing connection 
// $conn->close(); 
?> 