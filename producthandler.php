<?php 
session_start();
include 'connect.php';


if(isset($_POST['save']))
$brand    =$_POST['brand'];
$price    =$_POST['price'];


$sql="INSERT INTO products(brand,price)
 VALUES (:brand,:price)"; 

 $stmt=$conn->prepare($sql);
 
 $stmt->execute(array(':brand'=>$brand,':price'=>$price));
 header("location:adminpage.php");

 ?>
