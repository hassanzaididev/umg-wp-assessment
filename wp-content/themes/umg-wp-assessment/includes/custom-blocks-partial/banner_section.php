<?php 
 wp_reset_query();
$banner_image    = get_sub_field( 'banner_image' );


?>
<?php if(trim($banner_image)){ ?>
<section class="banner">
	<div class="container">
  		<div class="banner_image"><img src="<?php echo $banner_image; ?>" alt="" /></div>
 	 </div>
</section>
<?php } ?>
<?php  wp_reset_query(); ?>
