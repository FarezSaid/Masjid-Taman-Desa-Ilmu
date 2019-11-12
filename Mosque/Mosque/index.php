<!-- The first include should be config.php -->
<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>

<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>

<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>
	
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="" />

  <title>Masjid Taman Desa Ilmu</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="css/social icon.css">
  <link rel="stylesheet" href="css/icons.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/plugins.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link rel="stylesheet" type="text/css" href="css/settings.css">
  <link rel="stylesheet" type="text/css" href="css/navigation.css">

</head>
<body itemscope>
<div class="preloader">
<div class="loader-inner ball-scale-multiple">
<div></div>
<div></div>
<div></div>
</div>
</div>
<main>
<header class="style1">
<div class="logo-menu-sec">
<div class="container">
<div class="logo"><a href="index.php" title="Logo" itemprop="url"><img src="img/logo.jpg" alt="logo.jpg" width="150" height="100" itemprop="image"></a></div>
<nav>
<div>
<ul>                            
<li><a href="index.php" title="" itemprop="url">Utama</a>
<li class="menu-item-has-children"><a href="#" title="" itemprop="url">Mengenai Kami</a>
<ul>
<li><a href="organisasi.html" title="" itemprop="url">Carta Organisasi</a></li>
<li><a href="sejarah.html" title="" itemprop="url">Sejarah Masjid</a></li>
<li><a href="visi.html" title="" itemprop="url">Visi & Misi</a></li>
<li><a href="objektif.html" title="" itemprop="url">Fungsi dan Objektif</a></li>
</ul>
</li>
<li><a href="hubungi kami.html" title="" itemprop="url">Hubungi Kami</a>
<li class="menu-item-has-children"><a href="#" title="" itemprop="url">Galeri</a>
<ul>
<li><a href="fasiliti.html" title="" itemprop="url">Fasiliti Masjid</a></li>
<li><a href="hadis.html" title="" itemprop="url">Koleksi Hadis</a></li>
</ul>
</li>
<li class="menu-item-has-children"><a href="#" title="" itemprop="url">Muat Turun</a>
<ul>
<li><a href="E-Khutbah.html" title="" itemprop="url">E-Khutbah</a></li>
<li><a href="nota kuliah.html" title="" itemprop="url">Nota Kuliah</a></li>
</ul>
</li>
<li><a href="cili.html" title="" itemprop="url">Fertigasi Cili</a>
<li><a href="login.php" title="" itemprop="url"><center>Log In</center><small>Are you an Admin? </small></a></li>
</ul>
<a class="srch-btn" href="#" title="" itemprop="url"><i class="fas fa-search"></i></a>
</div>
</nav>
</div>
</div>
<p><font color="white" id="demo"></font></p>
</header>
</div>
</div>
  <!-- Page Content -->
<div class="rev_slider_wrapper fullscreen-container">
          <img class="card-img-top img-fluid" <img src="img/slide3.jpg" alt="#" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>     
        </div>
<style>
  body{
    background-image: url(img/parallax3.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
   background-size: cover;
  }
</style>
<section>
<div class="gap">
<img class="vector-bg" src="img/bg-vector-2.png" alt="vector-bg" itemprop="image">
<div class="container">
<div class="abt-sec-wrp style2">
<div class="row">
<div class="col-md-6 col-sm-12 col-lg-6">
<div class="abt-vdo style2 brd-rd5">
<img src="img/abt-img1.jpg" alt="abt-img1.jpg" width="500" height="500" itemprop="image">
</div>
</div>      
<div class="col-md-6 col-sm-12 col-lg-6">
<div class="abt-desc">
<div class="sec-tl">
<span class="theme-clr">Sejarah Kami</span>
<h2 itemprop="headline">Tentang Masjid Taman Desa Ilmu</h2>
</div>
<p itemprop="description">Ditubuhkan........</p>
<p itemprop="description">Sambung ....</p>
<a class="theme-btn theme-bg brd-rd5" href="sejarah masjid.html" title="" itemprop="url">READ MORE</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section>
<div class="gap white-layer opc75">
<!--<div class="fixed-bg" style="background-image: url(img/parallax3.jpg);"></div>-->
<div class="container">
<div class="sec-tl">
<h2 itemprop="headline">Waktu Solat</h2>
<p><font color="white" id="demo"></font></p>
</div>
<div class="prayer-timing-wrp">
<div class="row">
<div class="col-md-5 col-sm-12 col-lg-5">
<div class="timing-mockp"><img src="img/logo2.png" alt="logo2.png" itemprop="image"></div>
</div>
<div class="col-md-7 col-sm-12 col-lg-7">
<div class="timing-data">
<div class="cntry-selc">
<div class="selec-wrp brd-rd5">
<div class="  brd-rd5">
<select id="comboB" onchange="get_azan_time(this)">
<option>Pilih Lokasi</option>
<option>Kota Samarahan</option>
<option>Kuching</option>
<option>Sri Aman</option>
<option>Asajaya</option>
</select>
</div>
</div>
</div>
<div id="result-update"></div>
<div class="prayer-timings text-center">
<table>
<thead><tr><th><span>Solat</span></th><th><span>Waktu Solat</span></th></tr></thead>
<tbody>
<tr class="">
<td><span>Imsak</span></td>
<td class="Waktu-solat-Imsak">04:53 pagi</td>
</tr>
<tr>
<td><span>Subuh</span></td>
<td class="Waktu-solat-Subuh">05:03 pagi</td>
</tr>
<tr>
<td><span>Syuruk</span></td>
<td class="Waktu-solat-Syuruk">06.20 pagi</td>
</tr>
<tr>
<td><span>Zohor</span></td>
<td class="Waktu-solat-Zohor">12:24 tengahari</td>
</tr>
<tr>
<td><span>Asar</span></td>
<td class="Waktu-solat-Asar">03:41 petang</td>
</tr>
<tr>
<td><span>Maghrib</span></td>
<td class="Waktu-solat-Maghrib">06:25 malam</td>
</tr>
<tr>
<td><span>Ishaq</span></td>
<td class="Waktu-solat-Ishaq">07:35 malam</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section>
<div class="gap">
<div class="container">
<div class="sec-tl text-center">
<span class="theme-clr">Acara</span>
<h2 itemprop="headline">Acara & Tentatif</h2>
<div class="content">
			<h2 class="content-title"></h2>
			<hr>
			<hr>
			<!-- more content still to come here ... -->

			<?php foreach ($posts as $post): ?>
				<div class="post" style="margin-left: 0px;">
					<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">
			        <!-- Added this if statement... -->
					<?php if (isset($post['topic']['name'])): ?>
						<a 
							href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
							class="btn category">
							<?php echo $post['topic']['name'] ?>
						</a>
					<?php endif ?>

					<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
						<div class="post_info">
							<h3><?php echo $post['title'] ?></h3>
							<div class="info">
								<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
								<span class="read_more">Details...</span>
							</div>
						</div>
					</a>
				</div>
			<?php endforeach ?>

		</div>
</div>

</div>
</div>
</div>
</div>
</section>
  <!-- Footer -->
  <footer>
<div class="gap no-gap">
<!--<img class="vector-bg-footer" src="img/bg-vector-2.png" alt="vector-bg" itemprop="image">-->
<div class="container">
<div class="footer-data brd-rd20 overlap-220">
<div class="footer-data-inr">
<div class="row">
<div class="col-md-3 col-sm-6 col-lg-3">
<div class="widget">
</div>
</div>

<div class="col-md-3 col-sm-6 col-lg-3">
<div class="widget">
<h5 itemprop="headline">Terkini</h5>
<div class="rcnt-wrp">
<div class="rcnt-bx">
<a class="brd-rd5" href="blog-detail.html" title="" itemprop="url"><img src="img/post-img1-1.jpg" alt="rcnt-img1.jpg" itemprop="image"></a>
<div class="rcnt-inf">
<h6 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Help Poor People</a></h6>
<span class="theme-clr"><i class="far fa-calendar-alt"></i>Sept 09, 2018</span>
</div>
</div>
<div class="rcnt-bx">
<a class="brd-rd5" href="blog-detail.html" title="" itemprop="url"><img src="img/post-img1-2.jpg" alt="rcnt-img2.jpg" itemprop="image"></a>
<div class="rcnt-inf">
<h6 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Learn Modern Islam</a></h6>
<span class="theme-clr"><i class="far fa-calendar-alt"></i>Sept 05, 2018</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-lg-3">
<div class="widget">
<h5 itemprop="headline">Hubungi</h5>
<div class="row mrg10">
<div class="col-md-12 col-sm-12 col-lg-12">
<p itemprop="description">Masjid Taman Desa Ilmu<br>
Lot 5868 / Sub Lot 8, Lorong 22<br>
Taman Desa Ilmu Kota Samarahan<br>
Jalan Datuk Mohd Musa 94300 Kota Samarahan<br>
</p>
<a href="https://www.facebook.com/MTDI94300/" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook-f"></i></a>&nbsp;
<a href="#" title="Instagram" itemprop="url" target="_blank"><i class="fa fa-instagram"></i></a>&nbsp; &nbsp;
<a href="#" title="Youtube" itemprop="url" target="_blank"><i class="fa fa-youtube"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</footer>
<section>
<div class="gap theme-bg bottom-spac50 top-spac270">
<div class="container">
<div class="newsletter-wrp">
<div class="row">
<div class="col-md-4 col-sm-12 col-lg-4">
</div>
</div>
</div>
</div>
</div>
</div>
</section>

    <!-- /.container -->
  </footer>
</main>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/revolution.extension.parallax.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/plugins.min.js"></script>
 <script src="js/custom-scripts.js"></script>
 <script src="js/namaz.js"></script>
 <script>
var today = new Date();
var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
var dateTime = date+' '+time;
document.getElementById("demo").innerHTML = dateTime;
</script>
</body>

</html>
