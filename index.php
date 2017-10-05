<?php
/**
 * The header for Forkan Akon theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Forkan Akon
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<!-- Mirrored from rajoiritmission.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Oct 2017 07:59:27 GMT -->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"><meta name=""/>
	<title><?php wp_title('|', true, 'right'); ?></title>
	<!-- Bootstrap v3.7 -->




<?php wp_head(); ?>
</head>
<body>
<header class="header_area">
<div class="container"><!-- Logo Area -->
<div class="col-md-3">
<div class="logo pull-left"><a href="#"><img alt="" src="<?php echo get_bloginfo('template_url') ?>/assets/images/logo.jpg" width="100%" /></a></div>
</div>

<div class="col-md-9"><!-- Navigation Area -->
<nav><button aria-expanded="false" class="navbar-toggle my_nav" data-target=".navbar-collapse" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span></button>

<div class="navbar-collapse collapse myrule pull-right">
				<?php wp_nav_menu( array( 
				'theme_location' => 'main_menu',
				'menu_class' => 'nav navbar-nav', 
				'fallback_cb' => 'akon_fallback', 

				) ); ?>


</div>
</nav>
<!-- Navigation Area End--></div>
</div>
</header>
<!-- Header area  -->


<!-- This is for Slider -->
<div class="slider-area">
<?php query_posts( array(
	'post_type'=>'slide',
	'posts_per_page'=>3,
)); ?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
<?php if(have_posts()): while(have_posts() ): the_post(); $i++ ?>
	<?php if ($i==1) {
		?>
<div class="item active">
		<?php
	}
	else
	{
		?>
<div class="item">
		<?php
	}
     
     ?> 
    <?php if (has_post_thumbnail()) {
    	$url=wp_get_attachment_url( get_post_thumbnail_id());
    
?>
        <img src="<?php echo $url; ?>" alt="<?php the_title(); ?>" style="width:100%; background-size:100% 100%; background-repeat:no-repeat; background-position:center center;">

		<?php
	}
     
     ?>
        <div class="carousel-caption">

<div class="col-md-12">
<div class="text">
<h1 class="animated  rotateIn"><?php the_title(); ?></h1>
<h4 class="animated  bounceInRight"><?php the_excerpt(); ?></h4>

</div>
</div>
        </div>
      </div>

    <?php endwhile; endif; ?>

  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<?php wp_reset_query() ?>





<!-- Slide Item-2 --></div>
</div>

<!--Slider area end -->

<div class="promo-area">
<div class="container">
<?php
$args = array( 'post_type' => 'promo_heading', 'posts_per_page' =>1 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>
<h1><?php the_title(); ?></h1>

<h5 style="text-align: center;" class="p"><?php the_content(); ?></h5>

<?php

endwhile;

?>



<div class="another_area">

<?php
$args = array( 'post_type' => 'Single_promo', 'posts_per_page' =>3 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>
<div class="col-md-4">
<h3><?php the_title(); ?></h3>

<p><?php the_content(); ?></p>

</div>
<?php

endwhile;

?>


</div>
</div>
</div>

<div class="plan">
<div class="container">
<h1 class="package_header">Our Service Package Plan</h1>

<?php
$args = array( 'post_type' => 'PackagePlan', 'posts_per_page' =>3 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>
<div class="col-md-4">
<div class="singl_plan PackagePlan">
<h5><?php the_title(); ?></h5>
<?php the_content(); ?>	


</div>
</div>
<?php

endwhile;

?>


</div>
</div>

<div class="map_area">
<div class="map"></div>
</div>
<div class="video_area">
<div class="container">
<h2>Enjoy Bufferless FULL HD 1080d Videos</h2>

<div class="row">


<?php
 dynamic_sidebar( 'video Widgets' ); 

?>


</div>
</div>
</div>


<footer class="footer_area">
<div class="container">

<?php if (! dynamic_sidebar( 'Footer Area Widget' )): ?>

<div class="col-md-3 footer_menu">

<h2>Torrent Link</h2>

<ul>
	<li><a href="#">Link-1</a></li>
	<li><a href="#">Link-1</a></li>
	<li><a href="#">Link-1</a></li>
	<li><a href="#">Link-1</a></li>
	<li><a href="#">Link-1</a></li>
	<li><a href="#">Link-1</a></li>
	<li><a href="#">Link-1</a></li>
</ul>
</div>

<div class="col-md-3">
<h2>Service Link</h2>

<ul class="nav">
	<li><a href="#">Rajoir Pourashava</a></li>
	<li><a href="http://app.dghs.gov.bd/localhealthbulletin2014/publish/publish.php?org=10000270&amp;year=2014" target="blank">Rajoir Upazila Health Complex</a></li>
	<li><a href="http://bn.banglapedia.org/index.php?title=%E0%A6%B0%E0%A6%BE%E0%A6%9C%E0%A7%88%E0%A6%B0_%E0%A6%89%E0%A6%AA%E0%A6%9C%E0%A7%87%E0%A6%B2%E0%A6%BE" target="blank">Rajoir wikipedia</a></li>
	<li><a href="http://placesmap.net/BD/Rajoir-Police-Station-100614/" target="blank">Rajoir Police Station</a></li>
	<li><a href="http://www.education.rajoiritmission.com/" target="blank">Online Services</a></li>
	<li><a href="http://www.sefaclinic.rajoiritmission.com/" target="blank">Sefa Clinic</a></li>
	<li><a href="#">Link-1</a></li>
</ul>
</div>

<div class="col-md-3">&lt;
<h2>Download Link</h2>

<ul class="nav">
	<li><a href="#">R-1</a></li>
	<li><a href="#">R-2</a></li>
	<li><a href="#">R-3</a></li>
	<li><a href="#">R-4</a></li>
	<li><a href="#">R-5</a></li>
	<li><a href="#">R-6</a></li>
</ul>
</div>

<div class="col-md-3">
<h2>Social link</h2>

<ul class="nav scl">
	<li><a href="https://en-gb.facebook.com/login/" target="blank">facebook</a></li>
	<li><a href="https://twitter.com/login?lang=en" target="blank">twitter</a></li>
	<li><a href="#"> instagram</a></li>
	<li><a href="https://www.youtube.com/" target="blank">youtube</a></li>
	<li><a href="#"> vine</a></li>
	<li><a href="https://www.linkedin.com/uas/login" target="blank">Linkedin</a></li>
	<li><a href="#"> vimeo</a></li>
</ul>
</div>

<?php endif; ?>
</div>
<div class="container">
<?php if (! dynamic_sidebar( 'Org Address Area Widget' )): ?>

<div class="col-md-3">
<div class="address">
<div class="office">
<h2>Office and Working Hour</h2>
Address: Rajoir Madadripur, Dhaka<br />
Contact: 01717862706</div>

<div class="gmap"><iframe allowfullscreen="" frameborder="0" height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29335.171285048924!2d90.03134941327009!3d23.21044548091015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37557cdb6e7dc6af%3A0x8845b68570b3b6be!2sRajoir!5e0!3m2!1sen!2sbd!4v1503654227600" style="border:0" width="300"></iframe></div>
</div>
</div>
<?php endif; ?>

</div>
</footer>

<div class="copyright">
<div class="container">&copy;2017 All right reserved by <a href="#">Rajoir It Mission</a></div>
</div>

<!-- Jquery 1.12.4 -->
<script type="text/javascript" src="../ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- A script for letter counting animation -->

<?php wp_footer(); ?>
</body>

<!-- Mirrored from rajoiritmission.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Oct 2017 07:59:39 GMT -->
</html>