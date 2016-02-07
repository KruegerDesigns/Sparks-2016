<?php
/**
 * Template part for Working With Us - College Counseling
 **/
?>

<div class="tabs-panel is-active" id="panel1">
    <h1>College Counseling</h1>
    <hr>

	<?php if( have_rows('counseling_info_block') ): ?>

	    <?php while( have_rows('counseling_info_block') ): the_row(); ?>
	        
	        <?php 
	        
		        $counselingInfoHeading = get_sub_field('counseling_info_heading'); 
		        $counselingInfoBlurb = get_sub_field('counseling_info_blurb');
		        $counselingInfoImg = get_sub_field('counseling_info_img');
	        
	        ?>

	        <div class="ww-ccounsel">
		        <h3><?php echo $counselingInfoHeading;?></h3>
		        <?php echo $counselingInfoBlurb;?>
		        
		        <?php if( !empty($counselingInfoImg) ): ?>

					<img src="<?php echo $counselingInfoImg['url']; ?>" alt="<?php echo $counselingInfoImg['alt']; ?>" />

				<?php endif; ?>

	        </div>
	        
	    <?php endwhile; ?>

	<?php endif; ?>

</div>