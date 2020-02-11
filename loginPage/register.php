<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kayıt Ol/El İşleri Atölyesi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form method="post" action="" class="login100-form validate-form" >
					<span class="login100-form-logo">
						<img src="images/logo.png" style="width: 90px;height: 70px;">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						kayit ol
					</span>
					
					<div class="wrap-input100 validate-input" data-validate = "Kullanıcı Adını giriniz">
						<input class="input100" type="text" name="username" placeholder="Kullanıcı Adı">
						
					</div>

					<div class="wrap-input100 validate-input" data-validate="Emaili giriniz">
						<input class="input100" type="text" name="email" placeholder="Email">
						
					</div>
					<div class="wrap-input100 validate-input" data-validate="Şifreyi giriniz">
						<input class="input100" type="password" name="pass" placeholder="Şifre">
						
					</div>
					<div class="wrap-input100 validate-input" data-validate="Şifreyi giriniz">
						<input class="input100" type="password" name="passtr" placeholder="Şifre Tekrar">
						
					</div>

					

					<div class="container-login100-form-btn">
						<button type="submit" name="submit" class="login100-form-btn" >
							Kayıt Ol
						</button>
					
					
					</div>
					
					<div class="text-center p-t-90">
						Giriş yapmak için
						<a class="txt1" href="login.php">
							tıklayınız.
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
	<?php

							$link=mysqli_connect('localhost','root','');
							mysqli_select_db($link,'eia');
							if(isset($_POST['submit'])){
								$name=$_POST['username'];
								$email=$_POST['email'];
								$sifre=$_POST['pass'];
								$sifretr=$_POST['passtr'];
								if($sifre==$sifretr){
									$inserter=mysqli_query($link,"INSERT INTO user VALUES('2','$name','$sifre','$email')");
									echo "<script type='text/javascript'>alert('Kayıt oluşturuldu.');</script>";
									
								}else{
									echo "<script type='text/javascript'>alert('Şifreler uyuşmuyor.');</script>";
								}
							}
						?>
</html>