<?php
  /**
   * Template Name: Home Page
   *
   */
  get_header();
  $templateDirectory = get_template_directory_uri();
?>
<script>
$(function () {
    var body = $('body');
    var backgrounds = ['url(<?php echo $templateDirectory; ?>/images/bg-pool-dog.jpg)','url(<?php echo $templateDirectory; ?>/images/bg-pool-home.jpg)'];
    var current = 0;

    function nextBackground() {
        body.css(
            'background',
        backgrounds[current = ++current % backgrounds.length]);

        setTimeout(nextBackground, 5000);
    }
    setTimeout(nextBackground, 5000);
    body.css('background', backgrounds[0]);
});

</script>
<div id="page">
  <div class="container">
    <div id="splash-message">
      <div class="hero-message">
        What color is your water?
      </div>
      <div class="squire-message">
        Keep your water color true with Summer Blue!
      </div>
    </div>
  </div>


</div>

<div id="faux-footer" class="faux-home">
  <div class="container">
	<div class="col-sm-9 col-xs-12 pull-right">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <p><?php the_content(); ?></p>
  <?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
    </div>
    <div class="col-sm-3 col-xs-12 text-center">
      <div id="faux-social">
        <a href="#"><i class="fab fa-facebook-square"></i></a>
        <a href="#"><i class="fas fa-envelope-square"></i></a>
        <a href="#"><i class="fas fa-phone-square"></i></a>
      </div>
      <ul>
        <?php
        $pages = get_pages('sort_column=menu_order');
        foreach ( $pages as $page ) {
          $option .= "<li><a href='" . get_page_link( $page->ID ) . "'>" . $page->post_title . "</a>";
        }
        echo $option;
        ?>
      </ul>
    </div>

  </div>

</div>
<?php wp_footer(); ?>
