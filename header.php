<?php
$templateDirectory = get_template_directory_uri();

?>
<html xmlns="https://www.w3.org/1999/xhtml" xmlns:og="https://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:image" content="" />
  <meta property="og:title" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <link rel="shortcut icon" href="<?php echo $templateDirectory; ?>/images/favicon.ico" />
  <link href="<?php echo $templateDirectory; ?>/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <script defer src="<?php echo $templateDirectory; ?>/all.js"></script>
  <script src="<?php echo $templateDirectory; ?>/jquery.min.js"></script>
  <script src="<?php echo $templateDirectory; ?>/js/bootstrap.min.js"></script>
  <?php wp_head(); ?>
</head>
<body>
  <nav class="navbar navbar-clear navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand hidden-xs" href="#"><img src="<?php echo $templateDirectory; ?>/images/summer-blue-pools-logo-color.png" class="logo"/></a>
        <a class="navbar-brand visible-xs" href="#"><img src="<?php echo $templateDirectory; ?>/images/summer-blue-pools-logo.png" class="logo"/></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <?php
          $pages = get_pages('sort_column=menu_order');
          foreach ( $pages as $page ) {
            $option .= "<li><a href='" . get_page_link( $page->ID ) . "'>" . $page->post_title . "</a>";
          }
          echo $option;
          ?>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
