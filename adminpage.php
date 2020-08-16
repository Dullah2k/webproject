
<!DOCTYPE html>
<?php 
include ("connect.php");

 ?>
<html>
<head>
	<title>Admin page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>


<div class="sidenav">
  <a href="addproducts.php">Add Products</a>
  <a href="#">services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>




<div class="main">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">brand</th>
      <th scope="col">price</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>

  
  <tbody>
   
            <?php 
    $sql="SELECT product_id,brand,price FROM products ";
    $stmt=$conn->query($sql);

    while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    echo "<tr><td>";
    echo(htmlentities($row['product_id']));
    echo("</td><td>");
    echo (htmlentities($row['brand']));
    echo("</td><td>");
    echo (htmlentities($row['price']));
    echo("</td><td>");

    echo('<a href="editproducts.php?product_id='.$row['product_id'].'"> <b> Edit </b> </a>');
    echo("</td><td>");

    echo('<a href="deleteproduct.php?product_id='.$row['product_id'].'"> <b> delete </b> </a>');
    echo("</td><td>");
  
  
    }
 ?>  
  </tbody>
</table>

</div>




</body>
</html>