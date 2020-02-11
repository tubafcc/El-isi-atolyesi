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
		.tekMesaj{
			margin-bottom: 25px;
			padding: 20px;
			width: 100%;
			height: 75px;
			border-style: solid;
			border-color: #cdd0d0;
			border-width: 1px;
			box-shadow: 3px 3px 5px #cdd0d0;
			border-radius: 10px;
		}
		#kullaniciAdi,#konu{
			margin-top: 5px;
			float: left;
		}
		#konu{
			margin-left: 35px;
		}
		#kullaniciAdi{
			color: #484949;
			font-weight: bold;
		}
		#btn{
			
			
			float:right;
		}
		#msjBtn button:focus, button:active, button:hover{
			color: white;
		}
		#msjBtn{
			width: 100px;
			height: 35px;
			background-color: #f49a9a;
			border-width: 1px;
			border-color: #484949;
			border-style: solid;
			box-shadow: 1px 1px 1px;
			border-radius: 5px;
		}
		.clear{
			clear: both;
		}
		#mesajYaz{
			padding-top:20px ;
			width: 500px;
			height: 30px;
			margin-left: auto;
			margin-right: auto;
		}
		#mesajYaz a{
			width: 500px;
		}
		#msjyaz{
			width: 100%;
			height: 50px;
			background-color: #a2c4c9;
			border-width: 1px;
			border-color: #484949;
			border-style: solid;
			box-shadow: 1px 1px 1px;
			border-radius: 5px;
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
		<h1 class="siyahyazi"><b>MESAJLAR</b></h1>
	</div><!-- slider -->
	<div id="mesajYaz"><a href="mesajYaz.php"> <button type="button" id="msjyaz">Mesaj Yaz</button></a></div>
	<section class="blog-area section">
		<div class="container">

			<div class="row">
				<div class="col-lg-2 col-md-0"></div>
				<div class="col-lg-8 col-md-12">
					<div class="post-wrapper">
<?php 
	$rs=mysqli_query($link,"SELECT * FROM mesaj WHERE alan='$name'");
	while($rs2=mysqli_fetch_array($rs)){

	
?>
						<div class="tekMesaj">
							<div id="kullaniciAdi"><?php echo $rs2["gonderen"]; ?></div>
							<div id="konu"><?php echo $rs2["konu"]; ?></div>
							<div id="btn"><a href='mesajIcerik.php?KID=<?php echo $rs2["id"]; ?>'><button type="button" id="msjBtn" >İçerik</button></a></div>
							<div class="clear"></div>
						</div>
<?php
}
?>
				<!--		<div class="tekMesaj">
							<div id="kullaniciAdi">@osmanklk</div>
							<div id="konu">Dantel hakkında</div>
							<div id="btn"><a href="mesajIcerik.html"><button type="button" id="msjBtn" >İçerik</button></a></div>
							<div class="clear"></div>
						</div>

						<div class="tekMesaj">
							<div id="kullaniciAdi">@kopeksever</div>
							<div id="konu">Merhaba</div>
							<div id="btn"><a href="mesajIcerik.html"><button type="button" id="msjBtn" >İçerik</button></a></div>
							<div class="clear"></div>
						</div>

						<div class="tekMesaj">
							<div id="kullaniciAdi">@madamCoco</div>
							<div id="konu">Örgü modeliniz hakkkında soru sorucaktım..</div>
							<div id="btn"><a href="mesajIcerik.html"><button type="button" id="msjBtn" >İçerik</button></a></div>
							<div class="clear"></div>
						</div>
--->

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
