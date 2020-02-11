<?php 
session_start();
$id=$_SESSION["id"];
$link=mysqli_connect('localhost','root','');
mysqli_query($link,"SET NAMES UTF8");
mysqli_select_db($link,'eia');
$res=mysqli_query($link,"SELECT * FROM user WHERE id='$id'");
$result=mysqli_fetch_array($res);
$name=$result["username"];
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>El işi Atölyesi</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">


	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

<style>
		#logo{
			text-align: center;
			background-color: white;
		}
		.siyahyazi{
			margin-top: 125px;
			color:#484949;
		}
		#gonder{
			width: 100%;
			height: 50px;
			background-color: #a2c4c9;
			border-style: solid;
			border-width: 1px;
			border-color: #d9d9d9;
			border-radius: 5px;
			box-shadow: 1px 1px 5px #d9d9d9; 
		}

	</style>
	<!-- Stylesheets -->

	<link href="common-css/bootstrap.css" rel="stylesheet">

	<link href="common-css/ionicons.css" rel="stylesheet">


	<link href="blank-static/css/styles.css" rel="stylesheet">

	<link href="blank-static/css/responsive.css" rel="stylesheet">

</head>
<body >
<div id="logo">
 	<a href="index.php" class="logo"><img src="images/logo2.png" alt="Logo Image" style="width: 115px;height: 120px;margin-bottom: 20px;margin-top:10px;"></a></div>
	<header>
		<div class="container-fluid position-relative no-side-padding">

			

			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="index.php">Anasayfa</a></li>
				<li><a href="profil.php">Profil</a></li>
				<li><a href="mesajlar.php">Mesajlar</a></li>
			</ul><!-- main-menu -->

			<div class="src-area">
				<form>
					<button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
					<input class="src-input" type="text" placeholder="Arama">
				</form>
			</div>

		</div><!-- conatiner -->
	</header>

	<div class="slider display-table center-text">
		<h1 class="siyahyazi"><b>MESAJ YAZ</b></h1>
	</div><!-- slider -->
	

	<section class="blog-area section">
		<div class="container">

			<div class="row">
				<div class="col-lg-2 col-md-0"></div>
				<div class="col-lg-8 col-md-12">
					<div class="post-wrapper">
						<form method="post" action="">
						<p>Gönderilen Kullanıcı:</p>
						<br>
						<input type="text" class="form-control" id="usr" name="alan">
						<br>
						<p>Konu:</p>
						<br>
						<input type="text" class="form-control" id="knr" name="konu2">
						<br>
						<p>İçerik:</p>
						<br>
						<textarea class="form-control" rows="5" id="comment" name="icerik"></textarea>
						<br>
						<button type="submit" id="gonder" name="submit">GÖNDER</button>
</form>
<?php
					if(isset($_POST["submit"])){
						$alan=$_POST["alan"];
						$gkonu=$_POST["konu2"];
						$gicerik=$_POST["icerik"];
						$inserter=mysqli_query($link,"INSERT INTO mesaj VALUES('','$name','$alan','$gkonu','$gicerik')");
						header("location:mesajlar.php");
					}
					?>



					</div><!-- post-wrapper -->
				</div><!-- col-sm-8 col-sm-offset-2 -->
			</div><!-- row -->

		</div><!-- container -->
	</section><!-- section -->


	


	<!-- SCIPTS -->

	<script src="common-js/jquery-3.1.1.min.js"></script>

	<script src="common-js/tether.min.js"></script>

	<script src="common-js/bootstrap.js"></script>

	<script src="common-js/scripts.js"></script>

</body>
</html>
