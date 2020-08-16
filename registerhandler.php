<?php 
session_start();
include 'connect.php';


if(isset($_POST['save']))
$fname     =$_POST['fname'];
$lname     =$_POST['lname'];
$username  =$_POST['username'];
$password  =$_POST['password'];
$role      =$_POST['role'];

$sql="INSERT INTO user(firstname,lastname,username,password,role)
 VALUES (:fname,:lname,:username,:password,:role)"; 

 $stmt=$conn->prepare($sql);
 
 $stmt->execute(array(':fname'=>$fname,':lname'=>$lname,':username'=>$username,':password'=>$password,':role'=>$role));
 header("location:index.php");

 ?>
