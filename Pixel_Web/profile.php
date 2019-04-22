<?php
session_start();
?>
!DOCTYPE html>
<html>
  <head>
    <?php
    include_once("db_connect.php");
    ?>

    <meta charset="utf-8">
    


    <link rel="stylesheet" href="css/stylelog.css">
    <link rel="stylesheet" href="css/stylel.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="script/validation.min.js"></script>
    <script type="text/javascript" src="script/changes.js"></script>


  </head>
<body>
  <main>
    <!-- <div class="background">
      <div class="background-border-horizontal"></div>
      <div class="background-border-vertical"></div>
    </div> -->




  <?php
  include_once("db_connect.php");
  $e=$_SESSION['email'];
  if($e!='')
  {
  $sql = "SELECT * FROM users WHERE user_email = '{$_SESSION['email']}'";
  $res = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_array($res))
  {
  echo <<< EOF

<div class="nes-container with-title is-centered">


  <div class="register_container">
  <form class="form-signin" method="post" id="register-form">
  <h2 class="form-signin-heading title">Profile</h2><hr />
  <div id="error">
  </div>
  <div class="form-group r1">
  <lable>FirstName</lable><input type="text" class="form-control" placeholder="first name" name="f_name" id="f_name" value='{$row['f_name']}'/>
  </div>
  <div class="form-group r1">
  <lable>LastName</lable><input type="text" class="form-control" placeholder="last name" name="l_name" id="l_name" value='{$row['l_name']}' />
  </div>
  <div class="form-group r1">
  <lable>Username</lable><input type="text" class="form-control" placeholder="Username" name="user_name" id="user_name" value='{$row['user_name']}' />
  </div>
  <div class="form-group r1">
  <lable>Email</lable><input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" value='{$row['user_email']}'/>
  <span id="check-e"></span>
  </div>
  <div class="form-group r1">
  <lable>Github</lable><input type="text" class="form-control" placeholder="Github" name="github" id="github" value='{$row['github']}'/>
  </div><div class="form-group r1">
  <lable>Nickname</lable><input type="text" class="form-control" placeholder="nickname" name="n_name" id="n_name" value='{$row['n_name']}'/>
  </div>
  <hr/>
  <div class="form-group r1">
  </div>
  </form>
  </div>


</div>
EOF;
  }
}
else {
  echo <<< EOF

<h1>please sign in before viewing profile !!!</h1>

EOF;
}
  ?>


</body>
</html>
