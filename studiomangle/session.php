<?php
   ob_start();
   include_once('conn/dbcon.php');
   //session_start();
   
try {
	$user_check = $_SESSION['login_user'];
	$ses_sql = mysqli_query($conn,"select nama_user from user_login where nama_user = '$user_check' ");
	$row = mysqli_fetch_array($ses_sql);
	if(!isset($_SESSION['login_user'])){
		header("location:index.php");
		die();
	}
} catch (mysqli_sql_exception $ex) {
	throw new Exception("Can't connect to the database! \n" . $ex);
}
?>