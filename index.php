<DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css\bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image:url(picha/00.jpg); background-size: 100%;background-repeat: no-repeat;">


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

	      <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
    </form>


  </div>
</nav>
<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->


<div >
	<form action="loginhandler.php" method="post" >
		<div class="conteiner" >
			<div class="row">
				<div class="col-sm-5">



			
			<form >
				

				<div class="signin">

					<h2>SIGN IN</h2>
					<label for="email"><b>User Name</b></label>
					<input class="form-control" type="text" name="username" required>

					

					<label for="password"><b>Password</b></label>
					<input class="form-control" type="password" name="password" required>

					<input class="btn btn-primary btn-block" type="submit" name="create" value="Log In">

					<div>if you dont have an account register<a href="register.php"> here</a></div>
				</div>

			</form>
			<a href="www.suza.co.tz">suza</a>

			</div>
			</div>


		</div>
</div>

</body>
</html>