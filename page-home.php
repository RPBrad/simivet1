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

// $(function() {
//   var eTop = $('#faux-footer').offset().top;
//   console.log(eTop);
//   var heroTop = ((eTop - 200) / 2);
//   console.log(heroTop);
//   $('#splash-message').css('margin-top', heroTop);
// });
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
      <h2>AT SUMMER BLUE, WE WORK FOR YOU...</h2>
      <p>
        Summer Blue Pool Services is a true full service pool company.  With services in cleaning and maintenance specifically tailored to your pool, you can rest assured that your water will be perfect.  Our chemical and cleaning packages are unique in that we do not charge a flat fee for every pool as every pool is truly different.  Some families swim more than others, some have direct sunlight all day and some use heaters to extend their swimming to year round.  All of these are variables that directly affect the chemicals in your pool.  Every visit we make to your pool ensures that your water will always be perfect and ready for you to enjoy your favorite backyard area. Why guess that your water levels are correct when you can always know your water is perfect with Summer Blue!
      </p>
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
