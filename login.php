<!DOCTYPE html>
<html>
<head>
<title>
Admin Panel
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link media="all" type="text/css" rel="stylesheet" href="css/bootstrap.css">
<link media="all" type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
<link media="all" type="text/css" rel="stylesheet" href="css/signin.css">
<link href="justified-nav.css" rel="stylesheet">
<style>body{padding-top:60px;}</style>
</head>
<body>
<div class="navbar-wrapper">
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">Admin Panel</a>
</div>
<div class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-right">
</ul>
</ul>
</div>
</div>
</div>
</div><div class="container">
<center> </center>
<form method="POST" action="login.php" accept-charset="UTF-8" class="form-signin">
<h2 class="form-signin-heading">Please sign in</h2>
<label for="inputUsername" class="sr-only">Username</label>
<input name="username" type="username" id="inputUsername" class="form-control" placeholder="Username" value="" required autofocus>
<label for="inputPassword" class="sr-only">Password</label>
<input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
<div class="checkbox">
<label>
<input type="checkbox" value="remember-me"> Remember me
</label>
</div>
<!-- <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button><br/> -->
<input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" value="Sign in">
</form>

<?php
  @session_start();

  if(isset($_POST['submit'])) {
    login();
  }

  function login() {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin@abc.com" && $password == "456123") {
      $_SESSION['userid'] = $username;

      header("location:adminpanel.php");
    } else {
      echo "<script>alert('wrong username or password'); </script>";
    }
  }
 ?>

</div>
