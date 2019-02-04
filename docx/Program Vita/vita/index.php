<?php
  include 'konek.php';
  ob_start();
  session_start();
  $page = (empty($_GET['page'])) ? "overview" : $_GET['page'] ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<!-- Page Title -->
	<title>Prototype Home</title>
	
	<meta name="keywords" content="real estate, responsive, retina ready, modern html5 template, bootstrap, css3" />
	<meta name="description" content="Cozy - Responsive Real Estate HTML5 Template" />
	<meta name="author" content="Wisely Themes - www.wiselythemes.com" />
	
	<!-- Mobile Meta Tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Fav and touch icons -->
	<!--<link rel="shortcut icon" type="image/x-icon" href="images/fav_touch_icons/favicon.ico" />-->
	<link rel="apple-touch-icon" href="images/fav_touch_icons/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="images/fav_touch_icons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="images/fav_touch_icons/apple-touch-icon-114x114.png" />
	
	<!-- IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> 
	<![endif]-->
	
	<!-- Google Web Font -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:300,500,900%7COpen+Sans:400,700,400italic" rel="stylesheet" type="text/css" />
	
	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	
	<!-- Template CSS -->
	<link href="css/style.css" rel="stylesheet" />
	
	<!-- Modernizr -->
	<script src="js/modernizr-2.8.1.min.js"></script>

	<!-- -->
	<link href="js/jquery-ui-1.11.4/smoothness/jquery-ui.css" rel="stylesheet" />
	<link rel="stylesheet" href="js/jquery-ui-1.11.4/jquery-ui.theme.css">

	<script src="js/jquery-2.2.4.min.js"></script>
  	<script src="js/process.js"></script>
</head>
<body>
	<!-- BEGIN WRAPPER -->
	<div id="wrapper">
	
		<!-- BEGIN HEADER -->
		<header id="header">
			<div id="nav-section">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<a href="index.html" class="nav-logo"><img src="images/jurnal5.jpg" alt="Cozy Logo" /></a>
							
							<!-- BEGIN MAIN MENU -->
							<nav class="navbar">
								<button id="nav-mobile-btn"><i class="fa fa-bars"></i></button>
								<ul class="nav navbar-nav">
									<li><a href="index.php?page=overview">Overview</a></li>
									<li><a href="index.php?page=insert">Insert Data</a></li>
									<li class="dropdown">
										<a href="#" data-toggle="dropdown" data-hover="dropdown">Metode Klasifikasi<b class="caret"></b></a>
										<ul class="dropdown-menu">
												<li><a href="index.php?page=naive">Naive Bayes</a></li>
												<li><a href="index.php?page=knn">K-Nearest Neighbour</a></li>';
										</ul>
									</li>
								</ul>
							</nav>
							<!-- END MAIN MENU -->
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- END HEADER -->
		
		<?php
			include "$page.php";
		?>
		
		<footer id="footer">
			<!-- BEGIN COPYRIGHT -->
			<div id="copyright">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<!-- BEGIN SOCIAL NETWORKS -->
							<ul class="social-networks">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
							<!-- END SOCIAL NETWORKS -->
						
						</div>
					</div>
				</div>
			</div>
			<!-- END COPYRIGHT -->
		</footer>

	<!-- Libs -->
	<script src="js/common.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/owl.carousel.min.js"></script>
	<script src="js/chosen.jquery.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
	<script src="js/infobox.min.js"></script>
	
		<!-- jQuery Revolution Slider -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<!-- Template Scripts -->
	<script src="js/variables.js"></script>
	<script src="js/scripts.js"></script>

    <!-- Agencies list -->
	<script src="js/agencies.js"></script>

	<script type="text/javascript">

		(function($){
			"use strict";
			
			$(document).ready(function(){
				//Create agencies map with markers and populate dropdown agencies list.
				Cozy.agencyMap(agencies, "map_agency");
			});
		})(jQuery);
	</script>
	<script src="js/bootstrap-checkbox.js"></script>


  <script src="js/jquery-ui-1.11.4/external/jquery/jquery.js"></script>
  <script src="js/jquery-ui-1.11.4/jquery-ui.js"></script>
  <script src="js/jquery-ui-1.11.4/jquery-ui.min.js"></script>
  
  <script>
    $(document).ready(function(){
    		$("#tanggal").datepicker({
    	})
    })
  </script>
  <script>
    $(document).ready(function(){
    		$("#tanggal2").datepicker({
    	})
    })
  </script>
   <script>
    $(document).ready(function(){
    		$("#tanggal3").datepicker({
    	})
    })
  </script>
   <script>
    $(document).ready(function(){
    		$("#tanggal4").datepicker({
    	})
    })
  </script>

<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=0d5yw2mege3r82d6fcp9j3tnnmjqypzsmli5gzuekq02a1ah"></script>
<script>tinymce.init({ selector:'.mce' });</script>

<script>
	$('.thumbnail').hover(
		function(){
			$(this).find('.caption').slideDown(250);
		},
		function(){
			$(this).find('.caption').slideUp(250);
		}
		);
</script>

<script>
$(document).ready(function(){
  $("#loading").hide(); // Sembunyikan dulu loadingnya
  
  $("#gambar").change(function(){ // Ketika user memilih gambar (mengklik tombol Chose File / Browse), lakukan: 
    upload('upload.php', '#gambar', $("#loading"), $("#msg"), $("#view")); // Panggil fungsi upload yg ada di file process.js
  });
});
</script>

</body>
</html>