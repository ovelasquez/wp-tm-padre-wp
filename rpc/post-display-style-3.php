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
?>

<div class="rpc-post-carousel4 rpc-box rpc-bg style6">
	<div class="rpc-post-image">
		<a href="<?php the_permalink(); ?>" target="<?php echo $carousel_settings['read_more_target']; ?>">
			<?php do_action( 'rpc_carousel_thumbnail', $post_id, $carousel_settings ); ?>
		</a>
	</div>
  <div class="event-desc">
        <div class="rpc-post-category">
          <?php $categories = get_the_category();
            $separator = ' , ';
            $output = '';
            if ( ! empty( $categories[0] ) ) {
                    $output .= '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>' . $separator;
                echo trim( $output, $separator );
            }
          ?>
        </div>
       
        <span class="status-event <?php echo ( date_i18n( "Y-m-d", esc_attr($page_end_date) ) < date("Y-m-d") )?'past-event':'new-event'; ?>">		
          <?php echo ( date_i18n( "Y-m-d", esc_attr($page_end_date) ) < date("Y-m-d") )?'Eventi Precedenti':'Nuovo evento'; ?>
        </span>  	
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
          <?php echo 'dalle  ';?><span class="montserrat"><?php echo $page_time; ?></span>
        </span>
        <span  class="event_time"><?php echo 'Per info e prenotazioni:';?></span>
        <div class="event-cell-phone">
          <button >
              <span class="montserrat"><?php echo '+3457965333 ';?></span>
          </button>
          <button >
              <span class="montserrat"><?php echo '+3476598812 ';?></span>
          </button>
        </div>
        <div class="event-share">
          <div class="rrss-menu col-12">
            <?php echo 'Quota ';?>
            <!--a href="https://www.instagram.com/whitebeach.restaurant/"><span class="icon-instagram-inverse light-beige"></span></a-->
            <a target="_blank" rel="nofollow" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&title=<?php do_action( 'rpc_carousel_title', $post_id,  $carousel_settings ); ?>"><span class="icon-facebook-logo-button light-beige"></span></a>
            <a target="_blank" rel="nofollow" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php do_action( 'rpc_carousel_title', $post_id,  $carousel_settings ); ?>"><i class="fab fa-twitter white"></i></a>
            <a target="_blank" rel="nofollow" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fab fa-google-plus white"></i></a>
          </div>
          
        </div>

  </div>	
	
	<div class="clearfix"></div>
</div>