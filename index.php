<?php
session_start();
ob_start();
if(empty($_SESSION["id"])){header("location:loginPage/login.php");}
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

	<link href="common-css/swiper.css" rel="stylesheet">


	<link href="category-sidebar/css/styles.css" rel="stylesheet">

	<link href="category-sidebar/css/responsive.css" rel="stylesheet">

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
<div class="main-slider">
		<div class="swiper-container position-static" data-slide-effect="slide" data-autoheight="false"
			data-swiper-speed="500" data-swiper-autoplay="10000" data-swiper-margin="0" data-swiper-slides-per-view="4"
			data-swiper-breakpoints="true" data-swiper-loop="true" >
			<div class="swiper-wrapper">

				<div class="swiper-slide">
					<a class="slider-category" href="category.php?K=Dantel">
						<div class="blog-image"><img src="images/cat/dantel.jpg" alt="Blog Image"></div>

						<div class="category">
							<div class="display-table center-text">
								<div class="display-table-cell">
									<h3><b>DANTEL</b></h3>
								</div>
							</div>
						</div>

					</a>
				</div><!-- swiper-slide -->

				<div class="swiper-slide">
					<a class="slider-category" href="category.php?K=Örgü">
						<div class="blog-image"><img src="images/cat/orgu.jpg" alt="Blog Image"></div>

						<div class="category">
							<div class="display-table center-text">
								<div class="display-table-cell">
									<h3><b>ÖRGÜ</b></h3>
								</div>
							</div>
						</div>

					</a>
				</div><!-- swiper-slide -->

				<div class="swiper-slide">
					<a class="slider-category" href="category.php?K=Lif">
						<div class="blog-image"><img src="images/cat/lif.jpg" alt="Blog Image"></div>

						<div class="category">
							<div class="display-table center-text">
								<div class="display-table-cell">
									<h3><b>LİF</b></h3>
								</div>
							</div>
						</div>

					</a>
				</div><!-- swiper-slide -->

				<div class="swiper-slide">
					<a class="slider-category" href="category.php?K=Havlu Kenarı">
						<div class="blog-image"><img src="images/cat/havlu.jpg" alt="Blog Image"></div>

						<div class="category">
							<div class="display-table center-text">
								<div class="display-table-cell">
									<h3><b>HAVLU KENARI</b></h3>
								</div>
							</div>
						</div>

					</a>
				</div><!-- swiper-slide -->

				

				<div class="swiper-slide">
					<a class="slider-category" href="category.php?K=Tülbent Oyası">
						<div class="blog-image"><img src="images/cat/oya.jpg" alt="Blog Image"></div>

						<div class="category">
							<div class="display-table center-text">
								<div class="display-table-cell">
									<h3><b>TÜLBENT OYALARI</b></h3>
								</div>
							</div>
						</div>

					</a>
				</div><!-- swiper-slide -->

			</div><!-- swiper-wrapper -->

		</div><!-- swiper-container -->

	</div><!-- slider -->

	<section class="blog-area section">
		<div class="container">

			<div class="row">


				<div class="col-lg-8 col-md-12">
					<div class="row">

<?php
$sn=mysqli_query($link,"SELECT * FROM gonderi");
while($snc=mysqli_fetch_array($sn)){
$resim=$snc["resimkucuk"];
$idgonderi=$snc["id"];
?>				<div class="col-md-6 col-sm-12">
					<div class="card h-100">
						<div class="single-post post-style-1">

							<a href="post.php?GID=<?php echo $idgonderi; ?>"><div class="blog-image"><img <?php echo "src='$resim'"; ?> alt="Blog Image"></div></a>

									

									<div class="blog-info">

										<h4 class="title"><a href="#"><b><?php echo $snc["username"]; ?></b></a></h4>
										<h6 class="title"><a href="#"><b><?php echo $snc["aciklama"]; ?></b></a></h6>

										<ul class="post-footer">
											<li><a href="#"><i class="ion-heart"></i></a></li>
											<li><a href="#"><i class="ion-chatbubble"></i></a></li>
											<li><a href="#"><?php echo $snc["kategori"]; ?></a></li>
										</ul>

									</div><!-- blog-info -->
						</div><!-- single-post -->
					</div><!-- card -->
				</div><!-- col-lg-4 col-md-6 -->
<?php } ?>
			



						


					</div><!-- row -->

					

				</div><!-- col-lg-8 col-md-12 -->

				<div class="col-lg-4 col-md-12 ">

					<div class="single-post info-area ">

						<div class="about-area">
							<h4 class="title"><b><?php echo $name; ?></b></h4>
							<a href="profil.php"><button class="btns"  type="button">Profil</button></a>
							<a href="cikis.php"><button class="btns" type="button" name="cikis">Çıkış Yap</button></a>

						</div>

					

						<div class="tag-area">

							<h4 class="title"><b>Kategoriler</b></h4>
							<ul>
								<li><a href="category.php?K=Dantel">Dantel</a></li><br>
								<li><a href="category.php?K=Havlu kenarı">Havlu Kenarı</a></li><br>
								<li><a href="category.php?K=Lif">Lif</a></li><br>
								<li><a href="category.php?K=Örgü">Örgü</a></li><br>
								
								<li><a href="category.php?K=Tülbent Oyası">Tülbent Oyaları</a></li><br>
							</ul>

						

					</div><!-- info-area -->

				</div><!-- col-lg-4 col-md-12 -->

			</div><!-- row -->

		</div><!-- container -->
	</section><!-- section -->





	<!-- SCIPTS -->

	<script src="common-js/jquery-3.1.1.min.js"></script>

	<script src="common-js/tether.min.js"></script>

	<script src="common-js/bootstrap.js"></script>

	

	<script src="common-js/swiper.js"></script>
	
	<script src="common-js/scripts.js"></script>
</body>
</html>
