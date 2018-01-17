<div id="faux-footer">
  <div class="container">
    <div class="col-sm-3 col-xs-4 text-center">
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
    <div class="col-sm-9 col-xs-8">
      <h2>Contact</h2>
      <p>
        Contact Form</p>
    </div>
  </div>
<?php wp_footer(); ?>
</div>
</body>
</html>
