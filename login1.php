<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: dashboard.php");
    exit;
}
require_once "config1.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: dashboard.php");
                            
                        }
                    }

                }

    }
}    


}


?>
<!-- 
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login System</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">WOMEN SAFETY Web</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register1.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login1.php">Login</a>
      </li>

    </ul>
  </div>
</nav>

<div class="container mt-4">
<h3>Please Login Here:</h3>
<hr>

<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



</div>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html> -->




<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Custom CSS -->
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
<style>
		
/* https://unsplash.com/photos/TQnAxQCfBcs?utm_source=unsplash&utm_medium=referral&utm_content=creditShareLink */

/* Photo by <a href="https://unsplash.com/@brynnpedrick?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Brynn Pedrick</a> on <a href="https://unsplash.com/photos/TQnAxQCfBcs?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a> */
  
body {
    /* background-image: url("https://images.pexels.com/photos/5566675/pexels-photo-5566675.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"); */
	background-image: url("https://images.unsplash.com/photo-1496715976403-7e36dc43f17b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80");

	background-image: url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2073&q=80");

    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}

/* .container{
    background: rgba(184, 239, 249, 0.6);
} */





.card {
	margin-top: 50px;
	background-color: rgba(255, 255, 255, 0.6);
	box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
}

.card-header {
	background-color: #e8f0fe;
}

.card-header h2 {
	margin: 0;
}

.card-body {
	padding: 30px;
}

.form-group {
	margin-bottom: 20px;
}

.form-control {
	border-radius: 0;
}

.btn-primary {
	background-color: #007bff;
	border-color: #007bff;
}

.btn-primary:hover {
	background-color: #0069d9;
	border-color: #0062cc;
}

.btn-block {
	border-radius: 0;
}

@media (max-width: 576px) {
	.card {
		margin-top: 30px;
	}
}

@media (max-width: 400px) {
	.card-header {
		font-size: 20px;
	}
}






.btn-primary {
    /* Other styles from the previous example */
    position: relative;
    z-index: 1;
    overflow: hidden;
}

.btn-primary::before, .btn-primary::after {
    content: '';
    position: absolute;
    top: -2px;
    left: -2px;
    background: linear-gradient(135deg, #ff00ff, #00ff00, #00ffff, #ff0000);
    background-size: 400%;
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    z-index: -1;
    animation: neon-border 5s linear infinite;
}

.btn-primary::after {
    animation-delay: 1s;
}

@keyframes neon-border {
    0% {
        background-position: 0 0;
    }
    100% {
        background-position: 400% 0;
    }
}


  
</style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">WOMEN SAFETY Web</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register1.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login1.php">Login</a>
      </li>

    </ul>
  </div>
</nav>



	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 col-md-8 col-sm-10">
				<div class="card">
					<div class="card-header">
						<h2>Login Form</h2>
					</div>
					<div class="card-body">
            <form action="" method="post">
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" class="form-control" name ="username"id="username" placeholder="Enter username">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
							</div>
							<button type="submit" class="btn btn-primary btn-block">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

