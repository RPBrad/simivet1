<?php
$templateDirectory = get_template_directory_uri();

?>
<html xmlns="https://www.w3.org/1999/xhtml" xmlns:og="https://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:image" content="" />
<meta property="og:title" content=""/>
<meta property="og:url" content="http://summerbluepools.com/"/>
<meta property="og:site_name" content="Summer Blue Pools"/>
<meta property="og:description" content="Atlanta area full service pool company"/>
<link rel="shortcut icon" href="<?php echo $templateDirectory; ?>/images/favicon.ico" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

<script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
