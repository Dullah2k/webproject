

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css\bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url(picha/reg.jpg);background-size: 100%;" >


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
	<form action="registerhandler.php" method="POST">
		<div class="conteiner">
			<div class="row">
				<div class="col-sm-5">-

			<div class="reg">
				<h2>REGISTER HERE</h2>


			<label for="firstname"><b>First Name</b></label>
			<input class="form-control" type="text" name="fname" id="fname" required>

			<label for="lastname"><b>Last Name</b></label>
			<input class="form-control" type="text" name="lname" id="lname"required>

			<label for="username"><b>User NAme</b></label>
			<input class="form-control" type="text" name="username" id="username" required>

			
			<label for="password"><b>Password</b></label>
			<input class="form-control" type="password" name="password" id="password" required>

			<label for="role"><b>Role</b></label>
			<input class="form-control" type="text" name="role" id="role"required> 


			<input class="btn btn-primary" type="submit" name="save" value="Sign Up">


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