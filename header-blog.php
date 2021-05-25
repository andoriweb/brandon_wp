<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title><?php bloginfo('name'); echo " - "; bloginfo('description'); ?></title>
  <meta name="description" content="">

  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Favicon and Apple Touch Icons -->
  <link rel="shortcut icon" href="<?php echo B_IMG_DIR ?>/favicon/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?php echo B_IMG_DIR ?>/favicon/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo B_IMG_DIR ?>/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo B_IMG_DIR ?>/favicon/apple-touch-icon-114x114.png">

  <!-- Stylesheets -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">


  <?php wp_head(); ?>


</head>

<body>

  <div class="loader">
    <div class="sk-folding-cube">
      <div class="sk-cube1 sk-cube"></div>
      <div class="sk-cube2 sk-cube"></div>
      <div class="sk-cube4 sk-cube"></div>
      <div class="sk-cube3 sk-cube"></div>
    </div>
  </div>


	<!-- Header -->
	<header id="home" class="blog_head_bg" style="background: url('<?php the_field('blog-bg', 39); ?>') no-repeat center center;">
		<div class="overlay_color">
			<div class="mnu_line">
				<div class="container">
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12 header-bg">
              <div class="logo_block">
                <a href="http://localhost/brandon/" class="toggle-mnu hidden-lg hidden-md hidden-sm"><span></span></a>
                <h1 class="logo_img" style="background: transparent url(<?php the_field('logo', 41); ?>) no-repeat left center;"><a class="none" href="http://localhost/brandon/">B.</a></h1>
              </div>
            </div>


            <!--Desktop Main Menu-->
            <div class="col-md-10 col-sm-10 col-xs-0">
              <div class="nav_block">
                <div class="mnu hidden-xs">
                  <?php wp_nav_menu([
                    'theme_location' => 'top',
                    'container'      => null
                  ]) ?>
                  <span class="lamp"><span></span></span>
                </div>
              </div>
            </div>
            <!--End Desktop Main Menu-->
            <!--Mobile Main Menu-->
            <div class="col-xs-12 top_mnu">
              <div class="mnu_menu">
                <?php wp_nav_menu([
                  'theme_location' => 'mob',
                  'container'      => null
                ]) ?>
              </div>
            </div>
            <!--End Mobile Main Menu-->
          </div> <!-- end row -->
        </div> <!-- end container -->
      </div>

