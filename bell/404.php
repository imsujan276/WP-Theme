<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?php bloginfo( 'title' ); ?> - Error</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
 
  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicon -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo bloginfo('template_url').'/lib/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo bloginfo('template_url').'/lib/font-awesome/css/font-awesome.min.css'; ?>" rel="stylesheet">


  <!-- Main Stylesheet File -->
  <link href="<?php echo bloginfo('template_url').'/style.css'; ?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>"> 

  <!-- =======================================================
    Theme Name: Bell
    Theme URL: https://bootstrapmade.com/bell-free-bootstrap-4-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- Page Content
    ================================================== -->
<header id="header">
    <div class="container">
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="<?php echo bloginfo('url'); ?>#about">About Us</a></li>
          <li><a href="<?php echo bloginfo('url'); ?>#features">Features</a></li>
          <li><a href="<?php echo bloginfo('url'); ?>#portfolio">Portfolio</a></li>
          <li><a href="<?php echo bloginfo('url'); ?>#team">Team</a></li>
          <li><a href="<?php echo bloginfo('url'); ?>#contact">Contact Us</a></li>
        </ul>
      </nav>
            <!-- #nav-menu-container -->

      <nav class="nav social-nav pull-right d-none d-lg-inline">
        <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
      </nav>
    </div>
  </header>
  <!-- #header -->

<div class="container text-center">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title">Oops! That page can&rsquo;t be found.</h1>
				</header><!-- .page-header -->
				<div class="page-content">
					<p>It looks like nothing was found at this location. 
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
</body>
</html>
