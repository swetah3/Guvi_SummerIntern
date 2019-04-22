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
    <div class="row">
    <div class="col-6">
    <img src="assets/banner.png">
    </div>
    <div class="col-6" style="margin-top:8%;">
      <div class="nes-container is-dark with-title">
    <p class="title">Code Build Get Hired</p>
    <i class="nes-charmander"></i><br>
    <p>Boost your career by learning in your native language to code.....<br>
      Learn trending languages like Python and Ruby or start with HTML and CSS.
      <br>Just explore and find out what you want to learn....<i class="nes-icon is-small heart"></i>
    </p>
  </div>
    </div>

    </div>
   </div>



</body>
</html>
