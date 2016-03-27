<?php //Setting up Featured Post

$featuredPost = get_field('featured_article');
$categoryImg = get_field('featured_category_image');
$featTitle = get_field('featured_title');
$featBlurb = get_field('featured_blurb');

?>

<?php //Display Featured Post
	if ($featuredPost):

    	$post = $featuredPost;
    	setup_postdata($post);

	?>

 		<div class="featured-journal-post">

	 		<h1><?php echo $featTitle; ?></h1>

	 		<?php echo $featBlurb; ?>

	 		<?php if( !empty($categoryImg) ): ?>

				<img src="<?php echo $categoryImg['url']; ?>" alt="<?php echo $categoryImg['alt']; ?>" />

			<?php endif; ?>
		</div>

	   	<?php wp_reset_postdata(); ?>
	<?php endif; ?>