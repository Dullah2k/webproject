
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css\bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>



<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>




    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->




<div>
	<form action="producthandler.php" method="POST">
		<div class="conteiner">
			<div class="row">
				<div class="col-sm-5">-

			

			<form action="#" method="POST">

			<div class="reg">
				<h2>ADD PRODUCTS</h2>


			<label for="product_id"><b>Product id</b></label>
			<input class="form-control" type="text" readonly="readonly" name="product" required>

			<label for="brand"><b>Brand</b></label>
			<input class="form-control" type="text" name="brand" required>

			<label for="price"><b>Price</b></label>
			<input class="form-control" type="text" name="price" required>

			
			<input class="btn btn-primary" type="submit" name="save" value="Add">


			</form>

		</div>
		</div>

			</div>
			</div>




		</div>
	</form>
</div>





</body>
</html>