
<?php
session_start();
ob_start();
if(empty($_SESSION["id"])){header("location:loginPage/login.php");}
$id=$_SESSION["id"];
$link=mysqli_connect('localhost','root','');
mysqli_select_db($link,'eia');
mysqli_query($link,"SET NAMES UTF8");
$res=mysqli_query($link,"SELECT * FROM user WHERE id='$id'");
$result=mysqli_fetch_array($res);
$name=$result["username"];
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>El İşi Atölyesi</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<style>
		#logo{
			text-align: center;
			background-color: white;
		}

	</style>

	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


	<!-- Stylesheets -->

	<link href="common-css/bootstrap.css" rel="stylesheet">

	<link href="common-css/ionicons.css" rel="stylesheet">


	<link href="single-post-2/css/styles.css" rel="stylesheet">

	<link href="single-post-2/css/responsive.css" rel="stylesheet">

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

	<div class="slider">

	</div><!-- slider -->

	<section class="post-area">
		<div class="container">

			<div class="row">
	<?php
	$gid=$_GET["GID"];
$sn=mysqli_query($link,"SELECT * FROM gonderi WHERE id='$gid'");
while($snc=mysqli_fetch_array($sn)){
$resim=$snc["resimkucuk"];
$idgonderi=$snc["id"];
					?>	
				<div class="col-lg-1 col-md-0"></div>
				<div class="col-lg-10 col-md-12">

					<div class="main-post">

						<div class="post-top-area">

							<h5 class="pre-title"><?php echo $snc["kategori"]; ?></h5>

					

							<div class="post-info">
								<a class="name" href="#"><b style="font-size: 25px;"><?php echo $snc["username"]; ?></b></a>
								

								<div class="middle-area">
									
									<h6 class="date"><?php echo $snc["tarih"]; ?></h6>
								</div>

							</div>

						<div class="post-image"><img <?php echo "src='$resim'"; ?> alt="Blog Image"></div>

						<div class="post-bottom-area">

							<p class="para"><?php echo $snc["aciklama"]; ?></p>

							<ul class="tags">
								<li><a href="#"><?php echo $snc["kategori"]; ?></a></li>
								
							</ul>

							<div class="post-icons-area">
								<ul class="post-icons">
									<li><a href="#"><i class="ion-heart"></i></a></li>
									<li><a href="#"><i class="ion-chatbubble"></i></a></li>
									<li><a href="#"><i class="ion-eye"></i></a></li>
								</ul>

								<ul class="icons">
									<li>PAYLAŞ : </li>
									<li><a href="#"><i class="ion-social-facebook"></i></a></li>
									<li><a href="#"><i class="ion-social-twitter"></i></a></li>
									<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
								</ul>
							</div>

							

						</div><!-- post-bottom-area -->

					</div><!-- main-post -->
				</div><!-- col-lg-8 col-md-12 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- post-area -->
<?php
}
?>

	<section class="recomended-area section">
		
	</section>

	<section class="comment-section center-text">
		<div class="container">
			<h4><b>YORUM YAZ</b></h4>
			<div class="row">

				<div class="col-lg-2 col-md-0"></div>

				<div class="col-lg-8 col-md-12">
					<div class="comment-form">
						<form method="post" action="">
							<div class="row">

								<div class="col-sm-6">
									<input type="text" aria-required="true" name="isim" class="form-control"
										placeholder="Adınızı giriniz" aria-invalid="true" required >
								</div><!-- col-sm-6 -->
								<div class="col-sm-6">
									<input type="email" aria-required="true" name="email" class="form-control"
										placeholder="Emailinizi giriniz" aria-invalid="true" required>
								</div><!-- col-sm-6 -->

								<div class="col-sm-12">
									<textarea name="yorum" rows="2" class="text-area-messge form-control"
										placeholder="Yorumunuzu giriniz" aria-required="true" aria-invalid="false"></textarea >
								</div><!-- col-sm-12 -->
								<div class="col-sm-12">
									<button class="submit-btn" name="submit" type="submit"  id="form-submit"><b>YORUM YAZ</b></button>
								</div><!-- col-sm-12 -->

							</div><!-- row -->
						</form>

					
					</div><!-- comment-form -->

					<h4><b>Yorumlar</b></h4>
					<?php
				

					$sncyrm=mysqli_query($link,"SELECT * FROM yorum WHERE gonderiID='$idgonderi'");
					while($sncyrmm=mysqli_fetch_array($sncyrm)){


					?>
					<div class="commnets-area text-left">

						<div class="comment">

							<div class="post-info">
								<a class="name" href="#"><b><?php echo $sncyrmm["kullaniciadi"]; ?></b></a>
								<div class="middle-area">
									
									<h6 class="date"><?php echo $sncyrmm["tarih"]; ?></h6>
								</div>
							</div><!-- post-info -->

							<p><?php echo $sncyrmm ["yorum"]; ?></p>

						</div>

<?php } ?>
						<!--<div class="comment">
							<h5 class="reply-for"> <a href="#"><b>@osmankltc</b></a></h5>

							<div class="post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="images/profilphotos/m5.jpg" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b>@osmankltc</b></a>
									<h6 class="date">29 Ekim</h6>
								</div>

								<div class="right-area">
									<h5 class="reply-btn" ><a href="#"><b>Yanıtla</b></a></h5>
								</div>

							</div>

							<p>Çok iyi dediniz @kedisever hanım.</p>

						</div>

					</div>< -->

					

					

				</div><!-- col-lg-8 col-md-12 -->

			</div><!-- row -->

		</div><!-- container -->
	</section>

	


	<!-- SCIPTS -->

	<script src="common-js/jquery-3.1.1.min.js"></script>

	<script src="common-js/tether.min.js"></script>

	<script src="common-js/bootstrap.js"></script>

	<script src="common-js/scripts.js"></script>

</body>
<?php
	if(isset($_POST["submit"])){
	$isim=$_POST["isim"];
							
	$yorum=$_POST["yorum"];
	mysqli_query($link,"INSERT INTO yorum VALUES('','$isim','$yorum',CURRENT_TIMESTAMP,'$idgonderi')");
						}
?>
</html>
