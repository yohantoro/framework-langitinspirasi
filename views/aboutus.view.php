<?php
	/**
     * @Author  : Langit Inspirasi <web@langitinspirasi.co.id>
     * @Date    : 26/05/17 - 3:06 AM
	 * @Phone   : 0856-2555-665
	 *
	 * @Warning : Please don't delete this notes !
    */
	
    $hal = (isset($_GET['hal']) && $_GET['hal']) ? $_GET['hal'] : '';
?>
<!DOCTYPE html>
<html>
<head>
<title>.:: LANGIT INSPIRASI FRAMEWORK ::.</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Framework Langit Inspirasi Responsive Web, Bootstrap Web Langit Inspirasi Framework, Flat Web Langit Inspirasi Framework, 
Smartphone Framework Langit Inspirasi, Yosef Murya, YM Kusuma Ardhana, Yosef Murya Kusuma Ardhana" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="assets/css/font-awesome.css" rel="stylesheet"> 
<!-- js -->
<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Sanchez:400,400italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="assets/js/move-top.js"></script>
<script type="text/javascript" src="assets/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!--navigation-->
	<div class="top-nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>					
					<a href="index.php"> <img style="padding-top:10px; padding-bottom:10px " src="resource/images/langitinspirasi.png"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--shylock">
						<ul class="nav navbar-nav link-effect-7" id="link-effect-7">
							<li class="active"><a href="<?php echo SITE_URL; ?>" <?php if($hal=="" || $hal=="home") ?> data-hover="Home">Home</a></li>							
							<li><a href="<?php echo SITE_URL; ?>?hal=AboutUs" data-hover="About Us">About Us</a></li>							
							<li><a href="<?php echo SITE_URL; ?>?hal=Contact" data-hover="Contact">Contact</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>	
	</div>	
<!--navigation-->

<!-- steps -->
	<div class="steps">		
	<h3 class="head">About Us</h3>
		<p class="urna">Para legion di CV. Langit Inspirasi yang telah melakukan pengembangan</p>
		<div class="inner_content">
			<!-- /social_media-->
			<div class="col-md-4 socail_grid_agile facebook">
                <ul class="icon_w3_info">
					<li><a href="http://facebook.com/josef.han" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li>Facebook</li>
				</ul>
				<ul class="icon_w3_social">
					<li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="mailto: yosefmurya@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
					<li><a href=""><i class="fa fa-github" aria-hidden="true"></i></a></li>
                </ul>
				<div class="clearfix"></div>
				<div class="bottom_info_social">
					<div class="col-md-4 agile_w3l_social_media_text_img">
						<img src="resource/persons/yosefmurya.jpg" alt="">
					</div>
					<div class="col-md-8 agile_w3l_social_media_text">
						<h4>Yosef Murya</h4>
						<p>Dosen STMIK AKAKOM, pendiri CV. Langit Inspirasi dan pencipta Framework Langit Inspirasi. </p><p>Menguasai bahasa pemrograman HTML, PHP, JavaScript, CSS, AngularJS, SQL, Ajax, Android, Framwork Laravel, CodeIgniter, YII.  </p>
					</div>							
					<div class="clearfix"></div>
				</div>
            </div>
			<div class="col-md-4 socail_grid_agile twitter">
                <ul class="icon_w3_info">
				    <li><a href="#" class="wthree_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li>Facebook</li>
				</ul>
				<ul class="icon_w3_social">
				    <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href=""><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
					<li><a href=""><i class="fa fa-github" aria-hidden="true"></i></a></li>
                </ul>
				<div class="clearfix"></div>
				<div class="bottom_info_social">
				    <div class="col-md-4 agile_w3l_social_media_text_img">
					    <img src="resource/persons/suhindra.jpg" alt="">
					</div>
					<div class="col-md-8 agile_w3l_social_media_text">
					    <h4>Suhindra</h4>
						<p>Pengembang Framework Langit Inspirasi dengan konsep MVC. Menguasai pemrograman PHP, Framework CodeIgniter dan Python.</p>
						<p>Freelance programmer sejak tahun 2013 dan kemudian bergabung di Langit Inspirasi pada tahun 2016</p>
					</div>								
					<div class="clearfix"></div>
				</div>
            </div>
			<div class="col-md-4 socail_grid_agile gmail">
                <ul class="icon_w3_info">
				    <li><a href="#" class="wthree_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li>Facebook</li>
			    </ul>
				<ul class="icon_w3_social">
				    <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href=""><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
					<li><a href=""><i class="fa fa-github" aria-hidden="true"></i></a></li>
                </ul>
				<div class="clearfix"></div>
				<div class="bottom_info_social">
					<div class="col-md-4 agile_w3l_social_media_text_img">
					    <img src="resource/persons/arifriyadi.jpg" alt="">
					</div>
					<div class="col-md-8 agile_w3l_social_media_text">
					    <h4>Arif Riyadi</h4>
						<p>Programmer di Langit Inspirasi. Menguasai PHP, JavaScript, Ajax, Bootstrap, Framework Laravel.</p>
						<p>Tahun 2015 bergabung di Langit Inspirasi dan membuat berbagai project menggunakan Framework Langit Inspirasi.</p>
					</div>									
					<div class="clearfix"></div>
				</div>
            </div>
			<!--
			<div class="col-md-3 socail_grid_agile dribble">
			    <ul class="icon_w3_info">
			 	    <li><a href="#" class="wthree_facebook"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li>Dribbble</li>
				</ul>
				<ul class="icon_w3_social">
				    <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
					<li><i class="fa fa-user" aria-hidden="true"></i></li>
                </ul>
				<div class="clearfix"></div>
				<div class="bottom_info_social">
				    <div class="col-md-4 agile_w3l_social_media_text_img">
					    <img src="resource/persons/a4.jpg" alt="">
					</div>
					<div class="col-md-8 agile_w3l_social_media_text">
					    <h4>Honey Pal</h4>
						<p>Lorem ipsum dolor sit amet</p>
					</div>
					<div class="clearfix"></div>
			    </div>
            </div>
			-->
			<div class="clearfix"></div>
			<!-- //social_media-->				   
		</div>	
	</div>
<!-- //steps -->
<!-- count-down -->
	<div class="count">
		<div class="container">
			<div class="col-md-3 agile_count_grid">
				<div class="agile_count_grid_left">
					<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
				</div>
				<div class="agile_count_grid_right">
					<p class="counter">79</p> 
				</div>
				<div class="clearfix"> </div>
				<h3>Pengembang Kreatif</h3>
			</div>
			<div class="col-md-3 agile_count_grid">
				<div class="agile_count_grid_left">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				</div>
				<div class="agile_count_grid_right">
					<p class="counter">225</p> 
				</div>
				<div class="clearfix"> </div>
				<h3>Pengguna Aktif</h3>
			</div>
			<div class="col-md-3 agile_count_grid">
				<div class="agile_count_grid_left">
					<span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
				</div>
				<div class="agile_count_grid_right">
					<p class="counter">200</p> 
				</div>
				<div class="clearfix"> </div>
				<h3>Penyuka Framework</h3>
			</div>
			<div class="col-md-3 agile_count_grid">
				<div class="agile_count_grid_left">
					<span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span>
				</div>
				<div class="agile_count_grid_right">
					<p class="counter">80</p> 
				</div>
				<div class="clearfix"> </div>
				<h3>Hemat Pengeluaran</h3>
			</div>
			<div class="clearfix"> </div>
				<!-- Starts-Number-Scroller-Animation-JavaScript -->
					<script src="assets/js/waypoints.min.js"></script> 
					<script src="assets/js/counterup.min.js"></script> 
					<script>
						jQuery(document).ready(function( $ ) {
							$('.counter').counterUp({
								delay: 20,
								time: 1000
							});
						});
					</script>
				<!-- //Starts-Number-Scroller-Animation-JavaScript -->
		</div>
	</div>
<!-- //count-down -->

<!-- for bootstrap working -->
	<script src="assets/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>