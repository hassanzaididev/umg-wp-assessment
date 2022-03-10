<?php
get_header();
if (have_posts()) :
while(have_posts()) : the_post();
get_template_part('includes/custom-blocks');
endwhile;
endif;
 ?>


<section id="music_sec" class="music_section">
  <div class="container">
    <div class="heading">
      <h3>Music</h3>
    </div>
    <div class="music_wrapper">
      <div class="music_box"> <a href="#">
        <div class="thumbnail"> <img src="<?php echo get_template_directory_uri();?>/assets/images/music-1.jpg" alt="" ></div>
        <div class="title">
          <h4>lorem ipsum dollor</h4>
        </div>
        </a> </div>
      <div class="music_box"> <a href="#">
        <div class="thumbnail"> <img src="<?php echo get_template_directory_uri();?>/assets/images/music-2.jpg" alt="" ></div>
        <div class="title">
          <h4>lorem ipsum dollor</h4>
        </div>
        </a> </div>
      <div class="music_box"> <a href="#">
        <div class="thumbnail"> <img src="<?php echo get_template_directory_uri();?>/assets/images/music-3.jpg" alt="" ></div>
        <div class="title">
          <h4>lorem ipsum dollor</h4>
        </div>
        </a> </div>
      <div class="music_box"> <a href="#">
        <div class="thumbnail"> <img src="<?php echo get_template_directory_uri();?>/assets/images/music-4.jpg" alt="" ></div>
        <div class="title">
          <h4>lorem ipsum dollor</h4>
        </div>
        </a> </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>