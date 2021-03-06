<?php
/*
Template Name: Rowing Camps
*/
get_header(); ?>
	<div class="full-bg">
		<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail('full', array('class' => 'full-bg-img'));
		} ?>
	</div>
	<div class="page-wrap">

	  <div class="row">
	    <?php include(locate_template('parts/rowing-camps-menu.php' )); ?>
	  </div>
	</div>

<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer(); ?>
