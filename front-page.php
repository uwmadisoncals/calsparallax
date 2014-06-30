<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();
?>
<div id="myDiv"><?php get_sidebar('parallax') ?></div>

<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/uw_logo.png" alt="UW Cals logo">

<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">
	<a class="button" data-slide="2" title=""></a>
</div><!-- End slide 1 -->

<div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
	<div class="wrapper">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/skull.png" data-stellar-ratio="1.4" data-stellar-vertical-offset="-102" alt="skull">
	</div><!--End .wrapper -->

	<span class="slidno">Slide 2</span>
	<a data-slide="3" class="button"></a>
</div><!--End #slide2 -->

<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5" >
	<div class="wrapper">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/skull.png" data-stellar-ratio="1.4" data-stellar-vertical-offset="-102" alt="skull">	
	</div><!--End .wrapper -->
	<span class="slidno">Slide 3</span>
	<a data-slide="4" class="button"></a>
</div><!--End #slide3 -->

<div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0">
	<span class="slideno">Slide 4</span>
	<span class="parallaxbg">Use the parallax efx on background images</span>
</div><!--End #slide4 -->




<?php get_footer(); ?>