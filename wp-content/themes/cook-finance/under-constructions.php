<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Website Under Maintinance | <?php wp_title( '|', true, 'right' ); ?></title>
<meta name="robots" content="noindex, nofollow">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>

</head>

<body>
<?php 
	// Underconstructions Value
	$background_imgage = options('um_background_image');
	$logo_image = options('um_logo');
	$um_heading_text = options('um_heading_text');
	$um_comming_soon_text = options('um_comming_soon_text');
	$um_under_maintenance_text = options('um_under_maintenance_text');
	
	$time = options('um_timeing');
	$um_timer = options('um_timer');
	
?>

<!-- === Header Section === -->
<div id="container">
	<!-- +++ Intro Section ++++ -->
    <section class="intro" style="background-image: url('<?php echo $background_imgage; ?>');">
    	
    	<!-- ====+++ Intro Section Content +++==== -->
		<div class="center-content">
			

			<div class="intro-content text-center">	
				<!-- Logo -->								
				<div class="logo">
					<img src="<?php echo $logo_image; ?>" alt="Website">
					<h2 class="text-logo"><?php echo $um_heading_text; ?></h2>
				</div><!-- /End logo -->							
				<!-- ==== Main Heading ==== -->												
				<h1 class="intro-title"><?php echo $um_comming_soon_text;?>  <span class="obak">!</span></h1>
				
				
				<!-- Spin Clock -->
				<i class="fa fa-clock-o fa-spin fa-4x fa-clock-spin"></i>
					
				<?php if(isset($um_timer) && $um_timer == 1){?>
							
					<!-- ====+++ Countdown Timer +++==== -->						
					
					<ul id="countdown" class="countdown"></ul>							
				
				<?php } ?>
				<!-- ==== Intro Section Sub-Heading ==== -->				
				<div class="intro-subtitle">
					<?php echo $um_under_maintenance_text; ?>
				</div>							
											
			</div> <!-- /End Intro Section Content -->
		</div>
		<!-- ==== Intro Section Bottom Content ==== -->
		<div class="container-bottom-content">					
			<!-- ==== Social Links ==== -->
			<div class="social">
				<?php social_list(); ?>				
			</div> <!-- /End Social Links -->
		</div> <!-- /End Intro Section Bottom Content -->	
		
		<footer id="footer" class="content-div">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-12">
        				<div class="copyright">
        					<!-- Copyright Text -->
			        		<p class="text-center"><?php if(options('copyright_text') != '') { echo options('copyright_text'); } else { echo '&copy; '.date('Y'). ' <a href="'.site_url().'">'.get_bloginfo('name').'</a>.'; }?></p>
			        	</div>
        			</div>
        		</div>
        	</div>		        	
        </footer>
        		
	</section><!-- /end intro section -->
	
	
        

</div> 

<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
  

<script>
  // Set the date we're counting down to
  var countDownDate = new Date("<?php echo $time; ?>").getTime();

  // Update the count down every 1 second
  var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("countdown").innerHTML = 	 '<li><span class="days">'+days+'</span><p class="days-ref">days</p></li><li class="seperator"><i class="fa fa-clock-o"></i><br><i class="fa fa-clock-o"></i></li> <li><span class="hours">'+hours+'</span><p class="hours-ref">hours</p></li><li class="seperator"><i class="fa fa-clock-o"></i><br><i class="fa fa-clock-o"></i></li> <li><span class="minutes">'+minutes+'</span><p class="minutes-ref">minutes</p></li><li class="seperator"><i class="fa fa-clock-o"></i><br><i class="fa fa-clock-o"></i></li> <li><span class="seconds">'+seconds+'</span><p class="seconds-ref">seconds</p></li>';

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "<li>Time Has been Expired!</li>";
  }
}, 1000);
</script>
<style>
#page{display:none;}	
</style>

<?php wp_footer(); ?>
</body>
</html>
