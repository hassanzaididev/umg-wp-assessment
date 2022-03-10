<?php 
wp_reset_query();
$title    = get_sub_field( 'title' );
$sub_title    = get_sub_field( 'sub_title' );
$buttons    = get_sub_field( 'buttons' );
$tour_dates    = get_sub_field( 'tour_dates' );

?>

<section id="ticket_sec" class="ticket_section">
  <div class="container">
    <?php if(trim($title)){ ?>
    <div class="heading">
      <h3><?php echo $title; ?></h3>
    </div>
    <?php } ?>
    <?php if(trim($sub_title)){ ?>
    <div class="subheading">
      <p><?php echo do_shortcode($sub_title); ?></p>
    </div>
    <?php } ?>
    <?php //if(trim($buttons['button'])){ ?>
    <div class="tour_btn_bar">
      <?php foreach($buttons as $button){ ?>
      <a class="track-link" href="<?php echo $button['button']['url']; ?>" target="_blank"><?php echo $button['button']['title']; ?></a>
      <?php } ?>
    </div>
    <?php //} ?>
    <div class="tickeks_wrapper">
        <div class="top_row">
          <div class="same_row date">Date</div>
          <div class="same_row venue">Venue</div>
          <div class="same_row city">City</div>
          <div class="same_row tickets">Tickets</div>
          <div class="clearfix"></div>
        </div>
        <div class="row_wrapper">
        <?php foreach($tour_dates as $tour_row){ ?>
        <div class="data_row">
        <div class="flex-_section">
          <?php if(trim($tour_row['date'])){ ?>
          <div class="same_row for_mobile">Date</div>
          <div class="same_row date"><?php echo $tour_row['date']; ?></div>
          <?php } ?>
          <?php if(trim($tour_row['venue'])){ ?>
          <div class="same_row for_mobile">Venue</div>
          <div class="same_row city"><?php echo $tour_row['venue']; ?></div>
          <?php } ?>
          <?php if(trim($tour_row['city'])){ ?>
          <div class="same_row for_mobile">City</div>
          <div class="same_row venue"><?php echo $tour_row['city']; ?></div>
          <?php } ?>
          <?php if(trim($tour_row['ticket_url'])){ ?>
          <div class="same_row for_mobile">Tickets</div>
          <div class="same_row tickets"><a class="tour_btn"  href="<?php echo $tour_row['ticket_url']; ?>">Tickets</a></div>
          <?php } ?>
          <div class="clearfix"></div>
          </div>
        </div>
        <?php } ?>
        </div>
        <div class="load-more"> load more </div>
      
    </div>
  </div>
</section>
<?php  wp_reset_query(); ?>
