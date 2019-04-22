<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <?php
    include_once("db_connect.php");
    ?>

    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BadBoy17G</title>
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
    <div class="row">

            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h2 class="form-signin-heading title">Login</h2><hr />
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="login.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>


                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >

                            <!-- Change this to a button or input when using this as a form -->
                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>



</body>

</html>

<?php

include("db_connect.php");

if(isset($_POST['login']))
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['pass'];

    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$password'";

    $run=mysqli_query($conn,$check_user);

    if (!$run || mysqli_num_rows($run) == 0)
    {
      header( 'Location: logged.php' );
      $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
      echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>
