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

<div class="rpc-post-carousel4 rpc-box rpc-bg style6 carousel-style-past">
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
        <span class="event_start_date">		
          <span class="montserrat"><?php echo date_i18n( 'd', esc_attr($page_start_date) ).', '; ?></span>
          <?php       echo date_i18n( 'F', esc_attr($page_start_date) );?>
                <?php echo ' e il <span class="montserrat">'. date_i18n( 'd', esc_attr($page_end_date) ).'</span>, '; ?>
           <?php            echo date_i18n( 'F', esc_attr($page_start_date) );?>
        </span>
        <span class="event_time" class="">		
          <?php echo 'alle  ';?><span class="montserrat"><?php echo $page_time; ?></span>
        </span>
        
        <div class="">
          <button class="btn-type-t" >
              <span class=""><?php echo 'vedi';?></span>
          </button>
          
        </div>
        <!--div class="event-share">
          <ul>
            <li><?php echo 'Quota ';?></li> 
            <li><span class="icon-instagram-inverse"></span></li> 
            <li><span class="icon-facebook-logo-button"></span></li> 
            <li><span class="icon-instagram-inverse"></span></li> 
          </ul>
        </div-->

  </div>	
	
	<div class="clearfix"></div>
</div>

<?php 
//} 

?>