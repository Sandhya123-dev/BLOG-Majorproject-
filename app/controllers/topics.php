<?php 
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateTopic.php");

$table='topics';
$errors=array();
$id='';
$name='';
$description='';
$topics = selectAll($table);
// dd($topics);

if(isset($_POST['add-topic'])){
   $errors=validateTopic($_POST);
if(count($errors)===0){

    unset($_POST['add-topic']);
    // dd($_POST);

    $topics_id = create($table, $_POST);
    $_SESSION['message']='Topic created successfully';
    $_SESSION['type']='success';
    
    header('location:' .BASE_URL .'/admin/topics/home.php');
    exit();
}
else{
   $name=$_POST['name'];
   $description=$_POST['description'];

}
}
 if(isset($_GET['id'])){
    $id= $_GET['id'];
    $topic= selectOne($table, ['id'=>$id]);
    $id= $topic['id'];
    $name= $topic['name'];
    $description= $topic['description'];
 }

 if(isset($_GET['del_id'])){
  $id=$_GET['del_id'];
  $count=delete($table, $id);
  $_SESSION['message']='Topic deleted successfully';
  $_SESSION['type']='success';
  header('location:' .BASE_URL .'/admin/topics/home.php');
  exit();
 }
 if(isset($_POST['update-topic'])){
   $errors=validateTopic($_POST);
if(count($errors)===0){
   $id=$_POST['id'];
    unset($_POST['update-topic'], $_POST['id']);
    $topic_id = update($table, $id, $_POST);
    // dd($_POST);
    $_SESSION['message']='Topic updated successfully';
    $_SESSION['type']='success';
    header('location:' .BASE_URL .'/admin/topics/home.php');
    exit();
}
else{
   $id=$_POST['id'];

   $name=$_POST['name'];
   $description=$_POST['description'];

}
    
 }
?>