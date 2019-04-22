<?php
include_once("db_connect.php");
if(isset($_POST['btn-save'])) {
	$user_name = $_POST['user_name'];
	$user_email = $_POST['user_email'];
	$l_name = $_POST['l_name'];
	$git_email = $_POST['github'];
	$f_name = $_POST['f_name'];
	$n_name = $_POST['n_name'];


	$sql = "SELECT user_email FROM users WHERE user_email='$user_email'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	$row = mysqli_fetch_assoc($resultset);
	if($conn){
		$sql = "UPDATE users SET f_name='$f_name' ,l_name='$l_name',user_name='$user_name',user_email='$user_email',github='$git_email',n_name='$n_name'  WHERE user_email='$user_email'";
		mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);
		echo "registered";
	} else {
		echo "1";
	}
}
?>
