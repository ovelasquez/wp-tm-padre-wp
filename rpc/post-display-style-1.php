<?php
// get event meta
$page_start_date = get_post_meta( get_the_ID(), 'event-start-date', true );
$page_end_date = get_post_meta( get_the_ID(), 'event-date', true );
$page_time = get_post_meta( get_the_ID(), 'event-time', true ); 
$page_location = get_post_meta( get_the_ID(), 'event-location', true ); 
$page_link = get_post_meta( get_the_ID(), 'event-link', true ); 
$page_link_label = get_post_meta( get_the_ID(), 'event-link-label', true ); 
$page_link_target = get_post_meta( get_the_ID(), 'event-link-target', true ); 
$page_summary = get_post_meta( get_the_ID(), 'event-summary', true ); 

//if ( date_i18n( "Y-m-d", esc_attr($page_start_date) ) < date("Y-m-d") ){
  
?>

<div class="rpc-post-carousel4 rpc-box rpc-bg style6 carousel-style-past carousel-style-past-sb">
	<div class="rpc-post-image">
		<a href="<?php the_permalink(); ?>" target="<?php echo $carousel_settings['read_more_target']; ?>">
			<?php do_action( 'rpc_carousel_thumbnail', $post_id, $carousel_settings ); ?>
		</a>
	</div>
  <div class="event-desc bg-white">
        
        <h3 class="rpc-post-title">
          <a href="<?php the_permalink(); ?>" class="rpc-title" target="<?php echo $carousel_settings['read_more_target']; ?>">
            <?php do_action( 'rpc_carousel_title', $post_id,  $carousel_settings ); ?>
          </a>
        </h3>        
  </div>	
	
	<div class="clearfix"></div>
</div>

<?php 
//} 

?>