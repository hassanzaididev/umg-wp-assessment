<?php
/*global $post;
$current_Id = $post->ID;*/

if( have_rows('custom_blocks') ):
    while ( have_rows('custom_blocks') ) : the_row();
	$module = get_row_layout();

	get_template_part('includes/custom-blocks-partial/'.$module);
    endwhile;
endif;


?>