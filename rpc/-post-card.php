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
<div class="post-style-2 rpc-bg rpc-box">
    <div class="card" style="width: 18rem;">
    <!--img class="card-img-top" src="..." alt="Card image cap"-->
    <a href="<?php the_permalink(); ?>" class="card-img-top">
        <?php do_action( 'rpc_carousel_thumbnail', $post_id, $carousel_settings ); ?>
    </a>
  
    <div class="card-body">
      <span class="btn-type-1">estatus</span>
        <h5 class="card-title"><a class="rpc-title" href="<?php echo get_permalink($post_id); ?>" target="<?php echo $carousel_settings['read_more_target']; ?>" class="rpc-title">
                <?php do_action( 'rpc_carousel_title', $post_id,  $carousel_settings ); ?>
            </a></h5>
        <p class="card-text"><?php echo $page_start_date."   ".$page_end_date;?> </p>
        <p class="card-text"><?php echo $page_time;?> </p>
        <p class="card-text"><?php echo $page_summary;?></p>
        <ul>
          <li><a href="#" class="btn-type-1">+3457965333 </a></li><li><a href="#" class="btn-type-1">+3476598812</a></li>
      </ul>
        <ul>
          <li>Quota</li><li><a href="#" class="btn-type-1"><i class="fa fa-facebook " /></a></li>
      </ul>
    </div>
</div>
  
    <div class="wcp-img-wrap">
        <a href="<?php the_permalink(); ?>">
            <?php do_action( 'rpc_carousel_thumbnail', $post_id, $carousel_settings ); ?>
        </a>
    </div>
    <div class="wcp-content-wrap">
        <h3>
            <a class="rpc-title" href="<?php echo get_permalink($post_id); ?>" target="<?php echo $carousel_settings['read_more_target']; ?>" class="rpc-title">
                <?php do_action( 'rpc_carousel_title', $post_id,  $carousel_settings ); ?>
            </a>
        </h3>
        <?php if (!isset($carousel_settings['hidemeta'])) { ?>
        <div class="wcp-post-meta wcp-disable-post-meta" style="color: <?php echo (isset($carousel_settings['desc_color'])) ? $carousel_settings['desc_color'] : ''; ?>;">
            <span class="wcp-post-author"><i class="fa fa-user"></i>
                <?php the_author_posts_link(); ?>
            </span>
            &nbsp;
            <span class="wcp-post-date"><i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?></span>
        </div>
        <?php } ?>
        <div class="wcp-post-contents rpc-content">

            <?php do_action( 'rpc_carousel_desc', $post_id, $carousel_settings); ?>

            <?php do_action( 'rpc_read_more_btn', $post_id, $carousel_settings); ?>

        </div>        
    </div>
</div>