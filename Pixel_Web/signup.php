<!DOCTYPE html>
<html>
  <head>
    <?php
    include_once("db_connect.php");
    ?>

    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://unpkg.com/nes.css@2.1.0/css/nes.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="script/validation.min.js"></script>
    <script type="text/javascript" src="script/register.js"></script>
  </head>


  <body class="myImage" style="font-family: 'Press Start 2P', cursive; background:lightgreen;" >
    <div class="container-fluid" >
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">

      <a class="navbar-brand"  href="#">Guvi</a>
      <ul class=" navbar-nav ml-auto" style="font-family: 'Press Start 2P', cursive; ">
        <a href="index.php"><button type="button" class="nes-btn is-success b1">Home</button></a>
        <a href="profile.php"><button type="button" class="nes-btn is-success b1" >Profile</button></a>
        <a href="login.php"><button type="button" class="nes-btn is-success b1" >Login</button></a>
        <a href="signup.php"><button type="button" class="nes-btn is-success b1">Sign Up</button></a>
        <a href="logout.php"><button type="button" class="nes-btn is-success b1">Logout</button></a>
      </ul>
    </nav>

    <div class="nes-container with-title is-centered">


    	<div class="register_container">
    	<form class="form-signin" method="post" id="register-form">
    	<h2 class="form-signin-heading title">Register Here!!</h2><hr />
    	<div id="error">
    	</div>
      <div class="form-group r1">
    	<input type="text" class="form-control" placeholder="first name" name="f_name" id="f_name" />
    	</div>
      <div class="form-group r1">
    	<input type="text" class="form-control" placeholder="last name" name="l_name" id="l_name" />
    	</div>
    	<div class="form-group r1">
    	<input type="text" class="form-control" placeholder="Username" name="user_name" id="user_name" />
    	</div>
    	<div class="form-group r1">
    	<input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
    	<span id="check-e"></span>
    	</div>
      <div class="form-group r1">
    	<input type="text" class="form-control" placeholder="Github" name="github" id="github" />
    	</div><div class="form-group r1">
    	<input type="text" class="form-control" placeholder="nickname" name="n_name" id="n_name" />
    	</div>
    	<div class="form-group r1">
    	<input type="password" class="form-control" placeholder="Password" name="password" id="password" />
    	</div>
    	<div class="form-group r1">
    	<input type="password" class="form-control" placeholder="Retype Password" name="cpassword" id="cpassword" />
    	</div>
    	<hr />
    	<div class="form-group r1">
    	<button type="submit" class="btn nes-btn is-success" name="btn-save" id="btn-submit">
    	<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
    	</button>
    	</div>
    	</form>
    	</div>


    </div>


    <?php
    include("jsontrans.php");
    ?>


</body>
</html>
