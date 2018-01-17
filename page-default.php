<?php
  /**
   * Template Name: Default Page
   *
   */
  get_header();
  $templateDirectory = get_template_directory_uri();

	$thumb_id = get_post_thumbnail_id();
	$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
	//echo $thumb_url[0];
?>
<div class="page-hero" style="background:url(<?php echo $thumb_url[0]; ?>)">
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div>
</div>
<div class="container" id="page-content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<p><?php the_content(); ?></p>
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>

<?php get_footer(); ?>
