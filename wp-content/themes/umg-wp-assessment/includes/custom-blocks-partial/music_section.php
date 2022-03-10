<?php 
 wp_reset_query();
 $title = get_sub_field( 'title' );
 $spotify_iframe = get_sub_field( 'spotify_iframe' );
?>

<section id="music_sec" class="music_section">
  <div class="container">
    <?php if($title){ ?>
    <div class="heading">
      <h3><?php echo $title; ?></h3>
    </div>
    <?php } ?>
    <div class="music_wrapper">
      <?php echo do_shortcode($spotify_iframe); ?>
    </div>
  </div>
</section>
<?php  wp_reset_query(); ?>
