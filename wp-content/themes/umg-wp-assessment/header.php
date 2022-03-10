<?php 
	$header_logo = get_field('header_logo','option');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv=Content-Type content="text/html; charset=<?php bloginfo('charset'); ?>">
<meta name=viewport content="width=device-width,initial-scale=1">
<title>
<?php wp_title('|',true,'right'); ?>
</title>
<link rel="icon" href="<?php echo get_template_directory_uri();?>/assets/favicon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" href="<?php echo get_template_directory_uri();?>/assets/favicon/favicon-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri();?>/assets/favicon/favicon-180x180.png" />
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri();?>/assets/favicon/favicon-270x270.png" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="header">
  <div id="sticky-anchor"></div>
  <div class="header_wrapper">
    <div class="container">
      <div class="header_wraper">
        <?php if(trim($header_logo['url'])){ ?>
        <div class="logo"> <a href="<?php bloginfo('url');?>"> <img src="<?php echo $header_logo['url']; ?>" alt=""/> </a> </div>
        <?php } ?>
        <nav>
          <div class="menu_btn"> <img src="<?php echo get_template_directory_uri();?>/assets/images/menu-icon.png" alt=""> </div>
          <?php wp_nav_menu( array( 
			  'theme_location' => 'primary',
			  'menu_class' => '',
			  'container' => '',
			  ) ); 
		  ?>
        </nav>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</header>
