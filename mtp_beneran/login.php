<?php
include "koneksi.php";
session_start();
if (isset($_SESSION['username'])){
	header ("location:index.html");
}
?>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="./assets/css/bootstrap.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


	<style type="text/css">
	body {
		color: #5c5c5c;
	}
	#mybutton {
		position: relative;
		z-index: 1;
		left: 90%;
		top: -25px;
		cursor: pointer;
	}
	.myform {
		margin-top: 15%;
		background: #fafafa;
		padding: 20px;
		border: 1px solid #f4f4f4;
	}
	.myinput {
		width: 100%;
		padding: 5px;
	}
</style>
</head>
<body>
	<br>
	<br>
	<h2><center>LOGIN ADMIN</center></h2>
	<!-- <center><img src="logo_zakat.png" width="180px"></center> -->
	<br>
	
	<form action="cek_login.php" method="post" name="login"><center>
		<table cellpadding="3" cellspacing="0" >
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" size="30" required class="form-control"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="Password" name="password" size="30" required class="form-control"></td>
			</tr>
<!-- 			<tr>

				<td>
					<input type="checkbox" id="pass" class="pass form-check-input">Show Password
				</td>
			</tr>	
 -->				<tr>
					<td>&nbsp;</td>
					<td></td>
					<td><input type="submit" name="login" class="btn btn-primary" value="LOGIN">
					<a href="daftar.php" class="btn btn-danger">DAFTAR</a>
					</td>

				</tr>
			</table>
		</form></center>
		<script type="text/javascript">
			function change()
			{
				var x = document.getElementById('pass').type;

				if (x == 'password')
				{
					document.getElementById('pass').type = 'text';
					document.getElementById('mybutton').innerHTML = '<i class="glyphicon glyphicon-eye-close"></i>';
				}
				else
				{
					document.getElementById('pass').type = 'password';
					document.getElementById('mybutton').innerHTML = '<i class="glyphicon glyphicon-eye-open"></i>';
				}
			}
		</script>
	</body>
	</html>