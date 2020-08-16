<?php
session_start();
include "connect.php";

if(isset($_POST['create'])){

    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM user WHERE (username=:username AND password=:password)";

    $stmt=$conn->prepare($sql);

    $stmt->execute(array('username'=>$username,'password'=>$password));

    if($stmt->rowCount()==1){

        $data =  $stmt->fetch();

      echo  $_SESSION["role"]=$data["role"];
       

        if ($_SESSION["role"] === "customer" ){

             header("location:customerpage.php");
              
        }else if ($_SESSION["role"] === "admin" ){

            header("location:adminpage.php");
        }

        else if ($_SESSION["role"] === "supplier" ){

           header("location:supplierpage.php");
        }



    }else{
       header("location:index.php");
    }
    }else{
     header("location:index.php");
}
?>
