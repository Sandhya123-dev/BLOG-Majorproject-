<?php
require('connect.php');

// $sql = "SELECT* FROM users";
// $stmt =$conn->prepare($sql);
// $stmt->execute();
// $users= $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
// echo "<pre>", print_r($users), "</pre>";
// var_dump($users);

function dd($value)
{
echo "<pre>", print_r($value, true), "</pre>";
die();
}
function selectAll($table, $conditions=[])
{
    global $conn;
    $sql = "SELECT* FROM $table";
    if(empty($condition)){
$stmt =$conn->prepare($sql);
$stmt->execute();
$records= $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
return $records;
    }
    else{
$sql="SELECT *FROM $table WHERE username='BLOG' AND admin=
    }

}
$conditions={
    'admin'=>1;
    'username'=>'BLOG';
}
$users=selectALL('users');
dd($users);
?>