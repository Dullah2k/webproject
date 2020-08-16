<?php 
include("connect.php");
session_start();

if(isset($_GET['product_id'])){
	$sql = "DELETE FROM products WHERE product_id = :product_id";
	$stmt = $conn->prepare($sql);
	$stmt->execute(array(':product_id' => $_GET['product_id']));
	$_SESSION['sucess'] = 'sucessfully deleted';
	header("location:adminpage.php");

}

 ?>