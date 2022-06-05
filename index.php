<?require('config.php');?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<!-- Travel Demo Specific Stylesheet -->
	<link rel="stylesheet" href="demos/travel/travel.css" type="text/css" />
	<link rel="stylesheet" href="demos/travel/css/datepicker.css" type="text/css" />
	<!-- / -->
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/colors.php?color=AC4147" type="text/css" />
	<link rel="stylesheet" href="css/override.css" type="text/css" />	
	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<!-- Travel Demo Specific Script -->
	<script type="text/javascript" src="demos/travel/js/datepicker.js"></script>
	<!-- / -->
	<!-- Document Title
	============================================= -->
	<title><?=WEB_TITLE?></title>
	<meta content="<?=$meta['description']?>" name="description">
    <meta content="<?=$meta['keywords']?>" name="keywords">
    <link href="images/favicon.png" rel="shortcut icon">     
</head>

<body class="">
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header dark" data-sticky-class="not-dark" data-responsive-class="not-dark">

			<div id="header-wrap">
				<div class="container clearfix">
					<div  style="border: 1px solid #717171; background: #1b1b1b; margin-top: 12px; border-radius: 7px; padding: 10px; opacity: 0.8;">
						<div style="margin-top: 0px; font-weight: bold; font-size: 42px; text-align: center; color: #EACB5E;"><?=$text[2]?></div>				
						<div style="margin-top: 2px; margin-bottom: 10px; font-weight: bold; font-size: 21px; text-align: center;"><?=$text[1]?></div>
					</div>	
					<div style="clear: both;"></div>
					<!-- Logo
					============================================= -->
					<center>
						<div style="">
							<a href="../">
								<div id="demo"></div>
							</a>
						</div>
					</center><!-- #logo end -->
				</div>
			</div>
		</header><!-- #header end -->

		<section class="swiper_wrapper clearfix" id="slider">
			<div style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; background-color: #333; background-image:url('https://wallpapercave.com/wp/W9Yjyl7.jpg');">
			</div>
		</section>

		<!-- Content
		============================================= -->

		<section id="content">
				<div class="section footer-stick" style="margin-top: 0px; padding-top: 25px;">
					<div class="container center clearfix">
						<div class="heading-block bottommargin-sm nobottomborder">
							<h2><?=$text[3]?></h2>
						</div>
						<p class="lead" style="margin-top: -6px;">
							<?=$text[4]?>
							<ol class="rounded-list">
								<li><a href="">Aimbot (Adjustable)</a></li>
								<li><a href="">Recoil Remover</a></li>
								<li><a href="">Zone Surprises: Wait in the new zone and kill someone right when they make it inside.</a></li>
								<li><a href="">Wallhack: See the enemy behind any objects.</a></li>
								<li><a href="">Always Win: Hide by being able to always see the enemy and stay near the center of zones.</a></li>        
								<li><a href="">Vehicle Hits: Run over more people by always being able to see them running for the new zone.</a></li>
								<li><a href="">Undetected: Not detected by BattlEye or Anti-Cheat Measures if directions are followed.</a></li>				
							</ol>
						</p>
						<a href="<?=$content['download-link']?>" class="button button-rounded button-reveal tright button-xlarge topmargin-sm" style="margin-top: 0px !important; margin-bottom: 12px;">
							<i class="icon-angle-right"></i><span>Download Now</span>
						</a>
					</div>
				</div>

		</section><!-- #content end -->
			
		<!-- Footer
		============================================= -->
		<footer class="dark" style="background-color: #222; width: 1220px; margin: 0 auto;" id="footer">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">
					<div class="col_one_third">
						<div class="widget clear-bottommargin-sm clearfix">
							<div class="row">
								<div class="col-md-12 bottommargin-sm">
									<div class="footer-big-contacts">
										<h4 style="margin-bottom: 10px;">Contact Us</h4>
										<span style="font-size: 16px;" style="text-transform: none !Important;"><a href="mailto:<?=EMAIL?>"><?=EMAIL?></a></span>
									</div>
								</div>
							</div>
						</div>

						<div class="widget subscribe-widget clearfix">
							<div class="row">

								<div class="col-md-6 clearfix bottommargin-sm">
									<a href="<?=FB?>" target="_blank" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="<?=FB?>" target="_blank"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
								</div>
								<div class="col-md-6 clearfix">
									<a href="<?=TW?>" target="_blank" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px; background: #55ACEE !Important;">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="<?=TW?>" target="_blank"><small style="display: block; margin-top: 3px;"><strong>Re-tweet</strong><br>on Twitter</small></a>
								</div>
							</div>
							<div class="row" style="margin-top: 5px;">

								<div class="col-md-6 clearfix bottommargin-sm">
									<a href="<?=GP?>" target="_blank" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px; background: #D73D32 !Important;">
										<i class="icon-gplus"></i>
										<i class="icon-gplus"></i>
									</a>
									<a href="<?=GP?>" target="_blank"><small style="display: block; margin-top: 3px;"><strong>Add us</strong><br>on Google+</small></a>
								</div>
							</div>							
						</div>
						
						<div style="font-size: 13px; color: snow; padding-top: 12px;"><?=$text[5]?></div>				
					</div>

					<div class="col_one_third">

						<div class="widget clearfix">
							<h4 style="margin-bottom: 10px;">About Us</h4>
							<div id="post-list-footer">
								<?=$text[6]?>
							</div>
						</div>

					</div>

					<div class="col_one_third col_last">
						<div class="widget widget_links clearfix">
							<h4 style="margin-bottom: 10px;">What is PUBG?</h4>
							<div id="post-list-footer">
								<?=$text[7]?>
							</div>
							<div style="margin-bottom: 15px;"></div>
						</div>

						<div class="widget subscribe-widget clearfix" style="margin-top: 16px;">
							<h5 style="margin-bottom: 10px;"><?=$text[8]?></h5>
							<div id="widget-subscribe-form-result" data-notify-type="success" data-notify-msg=""></div>
							<form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-email2"></i></span>
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-danger bgcolor" type="submit">Subscribe</button>
									</span>
								</div>
							</form>
							<script type="text/javascript">
								jQuery("#widget-subscribe-form").validate({
									submitHandler: function(form) {
										jQuery(form).find('.input-group-addon').find('.icon-email2').removeClass('icon-email2').addClass('icon-line-loader icon-spin');
										jQuery(form).ajaxSubmit({
											target: '#widget-subscribe-form-result',
											success: function() {
												jQuery(form).find('.input-group-addon').find('.icon-line-loader').removeClass('icon-line-loader icon-spin').addClass('icon-email2');
												jQuery('#widget-subscribe-form').find('.form-control').val('');
												jQuery('#widget-subscribe-form-result').attr('data-notify-msg', jQuery('#widget-subscribe-form-result').html()).html('');
												SEMICOLON.widget.notifications(jQuery('#widget-subscribe-form-result'));
											}
										});
									}
								});
							</script>
						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half" style="color: #CCC;">
						<?=$text[9]?> <br /><?=WEB_TITLE?> - <a href="<?=WEB_URL_2?>" style="color: #55ACEE;"><?=WEB_URL_2?></a><br />
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix" style="margin-top: 5px;">
							<a href="<?=FB?>" target="_blank" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="<?=TW?>" target="_blank" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="<?=GP?>" target="_blank" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>
						</div>
						<div class="clear"></div>

					</div>
				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->
	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>
</body>
</html>