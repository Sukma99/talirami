<?php
session_start();
include_once "conn/dbcon.php";


if($_SERVER["REQUEST_METHOD"] == "POST"){
	$nama_user = mysqli_real_escape_string($conn,$_POST['username']);
	$password_user = mysqli_real_escape_string($conn,$_POST['password']);
	
	$sql = "SELECT * FROM user_login WHERE nama_user = '".ucwords($nama_user)."' and password = '$password_user'";
	$result = mysqli_query($conn, $sql);
	$hak_akses = "";
	$count = mysqli_num_rows($result);
	
	if ($count == 1) {
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$hak_akses = $row['hak_akses'];
			$nama = $row['nama_user'];
		}
		$_SESSION['hak_akses'] = $hak_akses;
		$_SESSION['login_user'] = $nama;
		
		if ($hak_akses == "Admin") {
			echo "<script>window.location.href='dashboard.php';</script>";
		} elseif ($hak_akses == "Kasir") {
			header("Location:dashboard_cutting.php");
		}
			
		} else {
			$error = "Nama dan password anda salah, silahkan ulang kembali";
			echo "<script>alert('$error!');</script>";
			
			
		}
	}
mysqli_close($conn);
?>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Back Office Mangle7</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="asset/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="asset/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="asset/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/css/util.css">
	<link rel="stylesheet" type="text/css" href="asset/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background: wh">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-10">
						Welcome
						<p>Back Office Studimangle7</p>
					</span>
					<span class="login100-form-title p-b-10">
						<i class="zmdi zmdi-male"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="username" id="username">
						<span class="focus-input100" data-placeholder="User Name"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password" id="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
			  </form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="asset/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/vendor/bootstrap/js/popper.js"></script>
	<script src="asset/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/vendor/daterangepicker/moment.min.js"></script>
	<script src="asset/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="asset/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="asset/js/main.js"></script>

</body>
</html>