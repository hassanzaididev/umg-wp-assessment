<?php 
	$footer_logo = get_field('footer_logo','option');
	$footer_links = get_field('footer_links','option');
	$social_icons = get_field('social_icons','option');
?>
<footer>
  <div class="container">
    <div class="footer_wraper">
     <?php if(trim($footer_logo['url'])){ ?>
      <div class="footer_left">
        <div class="logo">
           <a href="<?php bloginfo('url');?>"><img src="<?php echo $footer_logo['url']; ?>" alt=""/></a>
        </div>
      </div>
      <?php } ?>
      <div class="footer_right">
       <?php if($footer_links){ ?>
        <div class="footer_coulmn">
          <h5>user guides</h5>
          <ul>
          <?php foreach($footer_links as $link){
			   ?>
            <li><a href="<?php echo $link['footer_links']['url']; ?>"><?php echo $link['footer_links']['title']; ?></a></li>
          <?php } ?>
          </ul>
        </div>
        <?php } ?>
        <div class="footer_coulmn">
          <h5>Connect</h5>
          <div class="social_link">
            <ul>
              <?php if($social_icons['facebook']){ ?>
              	<li><a href="<?php echo $social_icons['facebook']; ?>"></a></li>
              <?php } ?>
              <?php if($social_icons['instagram']){ ?>
              <li><a class="instagram" href="<?php echo $social_icons['instagram']; ?>"></a></li>
              <?php } ?>
              <?php if($social_icons['twitter']){ ?>
              <li><a class="twitter" href="<?php echo $social_icons['twitter']; ?>"></a></li>
              <?php } ?>
			  <?php if($social_icons['youtube']){ ?>
              <li><a class="youtube" href="<?php echo $social_icons['youtube']; ?>"></a></li>
              <?php } ?>
            </ul>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>