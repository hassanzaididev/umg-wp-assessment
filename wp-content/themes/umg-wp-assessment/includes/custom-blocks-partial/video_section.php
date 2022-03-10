<?php 
 wp_reset_query();
$title    = get_sub_field( 'title' );
$videos    = get_sub_field( 'videos' );


?>
<section id="video" class="video_section">
  <div class="container">
    <?php if(trim($title)){ ?>
    <div class="heading">
      <h3><?php echo $title; ?></h3>
    </div>
    <?php } ?>
    <div class="video_wrapper">
    <?php foreach($videos as $video){

		 ?>
      <div class="video_box">
        <iframe width="560" height="315" src="<?php echo $video['video_url']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<?php  wp_reset_query(); ?>
