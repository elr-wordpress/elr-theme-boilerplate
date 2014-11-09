<?php
    global $post;
    $start_date = get_post_meta ( $post->ID, '_event_start_date', true );
    $start_time = get_post_meta ( $post->ID, '_event_start_time', true );
    $datetime = $start_date . ' ' . $start_time;
    $end_date = get_post_meta ( $post->ID, '_event_end_date', true );
    $end_time = get_post_meta ( $post->ID, '_event_end_time', true );
    $dress_code = get_post_meta ( $post->ID, '_event_dress_code', true );
    $sponsor = get_post_meta ( $post->ID, '_event_sponsor', true );
    $url = get_post_meta ( $post->ID, '_event_url', true );

    $venue_name = get_post_meta ( $post->ID, '_event_venue_name', true );
    $street_address = get_post_meta ( $post->ID, '_event_street_address', true );
    $city = get_post_meta ( $post->ID, '_event_city', true );
    $state = get_post_meta ( $post->ID, '_event_state', true );
    $zip_code = get_post_meta ( $post->ID, '_event_zip_code', true );
    $country = get_post_meta ( $post->ID, '_event_country', true );
    $venue_phone = get_post_meta ( $post->ID, '_event_venue_phone', true );
    $venue_email = get_post_meta ( $post->ID, '_event_venue_email', true );
    $venue_url = get_post_meta ( $post->ID, '_event_venue_url', true );
    $venue_map = get_post_meta ( $post->ID, '_event_venue_map', true );

    $ticket_price = get_post_meta ( $post->ID, '_event_ticket_price', true );
    $ticket_url = get_post_meta ( $post->ID, '_event_ticket_url', true );
    $ticket_availability = get_post_meta ( $post->ID, '_event_ticket_availability', true );
    $ticket_phone = get_post_meta ( $post->ID, '_event_ticket_phone', true );
    $ticket_email = get_post_meta ( $post->ID, '_event_ticket_email', true );
?>
<article role="article" id="post-<?php the_ID(); ?>" <?php post_class("post"); ?>>
    <header>
        <ul class="post-meta">
            <?php elr_post_category( $post->ID ); ?>
            <?php elr_post_tags(); ?>            
            <?php elr_post_comments(); ?>
        </ul>
        <?php elr_post_title(); ?>
    </header>

    <!-- display custom post info -->
    <ul class="post-info">
        <?php elr_start_end( $start_date, $start_time, $end_date, $end_time ); ?>
        <?php elr_time_diff( $datetime ); ?>
    </ul>

    <h2>The Details</h2>

    <ul class="post-info">
        <li>  
            <?php if ( get_the_terms( $post->ID, 'audience' ) ) : ?><i class="fa fa-users"></i> <?php elr_taxonomy_terms( 'audience', $post->ID ); ?><?php endif; ?>
            <?php if ( get_the_terms( $post->ID, 'audience' ) && get_the_terms( $post->ID, 'event_type' ) ) : ?> - <?php endif; ?>
            <?php if ( get_the_terms( $post->ID, 'event_type' ) ) : ?><i class="fa fa-cube"></i> <?php elr_taxonomy_terms( 'event_type', $post->ID ); ?><?php endif; ?>
            <?php if ( get_the_terms( $post->ID, 'event_type' ) && get_the_terms( $post->ID, 'venue_type' ) ) : ?> - <?php endif; ?>
            <?php if ( get_the_terms( $post->ID, 'venue_type' ) ) : ?><i class="fa fa-building"></i> <?php elr_taxonomy_terms( 'venue_type', $post->ID ); ?><?php endif; ?>
        </li>
        <li>
            <?php if ( $dress_code ) : ?><i class="fa fa-female"></i> <?php echo esc_html( $dress_code ); ?><?php endif; ?>
            <?php if ( $dress_code && $sponsor ) : ?> - <?php endif; ?>
            <?php if ( $sponsor ) : ?><i class="fa fa-university"></i> Sponsored by: <?php echo esc_html( $sponsor ); ?><?php endif; ?>
            <?php if ( $sponsor && $url ) : ?> - <?php endif; ?>
            <?php if ( $url ) : ?><a href="<?php echo esc_url( $url ); ?>"><i class="fa fa-link"></i> More Information</a><?php endif; ?>
        </li>

        <li>
            <?php if ( $ticket_phone ) : ?><i class="fa fa-phone-square"></i> <?php echo esc_html( $ticket_phone ); ?><?php endif; ?>
            <?php if ( $ticket_phone && $ticket_url ) : ?> - <?php endif; ?>
            <?php if ( $ticket_url ) : ?><a href="<?php echo esc_url( $ticket_url ) ?>"><i class="fa fa-shopping-cart"></i> Get Tickets</a><?php endif; ?>
            <?php if ( $ticket_url && $ticket_email ) : ?> - <?php endif; ?>
            <?php if ( $ticket_email ) : ?><a href="mailto:<?php echo antispambot( $ticket_email ); ?>"><i class="fa fa-envelope"></i> Email</a><?php endif; ?>
        </li>
        
        <li>
            <?php if ( $ticket_availability ) : ?><i class="fa fa-ticket"></i> <?php echo esc_html( $ticket_availability ); ?><?php endif; ?>
            <?php if ( $ticket_availability && $ticket_price ) : ?> - <?php endif; ?>
            <?php if ( $ticket_price ) : ?><i class="fa fa-money"></i> $<?php echo esc_html( $ticket_price ); ?><?php endif; ?>
        </li>
    </ul>

    <h2>The Venue</h2>

    <ul class="post-info">
        <?php if ( isset( $venue_name ) ) : ?><li><?php echo esc_html( $venue_name ); ?></li><?php endif; ?>
        <?php if ( $street_address ) : ?><li><?php echo esc_html( $street_address ); ?></li><?php endif; ?>
        <?php if ( $city | $state | $zip_code | $country ) : ?>
            <li>
                <?php if ( $city ) : ?><?php echo esc_html( $city ) . ', '; ?><?php endif; ?>
                <?php if ( $state ) : ?><?php echo esc_html( $state ); ?><?php endif; ?>
                <?php if ( $zip_code ) : ?><?php echo esc_html( $zip_code ) . ', '; ?><?php endif; ?>
                <?php if ( $country ) : ?><?php echo esc_html( $country ); ?><?php endif; ?>
            </li>
        <?php endif; ?>
        <?php if ( $venue_phone | $venue_email | $venue_url ) : ?>
        <li>
            <?php if ( $venue_phone ) : ?><i class="fa fa-phone-square"></i> <?php echo esc_html( $venue_phone ) ?><?php endif; ?>
            <?php if ( $venue_phone && $venue_email ) : ?> - <?php endif; ?>
            <?php if ( $venue_email ) : ?><a href="mailto:<?php echo antispambot( $venue_email ); ?>"><i class="fa fa-envelope"></i> Email Venue</a><?php endif; ?>
            <?php if ( $venue_email && $venue_url ) : ?> - <?php endif; ?>
            <?php if ( $venue_url ) : ?><a href="<?php echo esc_url( $venue_url ) ?>"><i class="fa fa-link"></i> Venue Website</a><?php endif; ?>
        </li>
        <?php endif; ?>
    </ul>

    <div class="drm-row">
        <?php elr_post_thumbnail( 'event-image-holder', array( 400, 450 ) ); ?>
        <?php if ( $venue_map ) : ?>
            <div class="event-map-holder">
                <?php elr_map( $venue_map, 1000 ); ?>
            </div>
        <?php endif; ?>        
    </div> 

    <?php elr_post_content( $post->ID ); ?>

    <footer><?php elr_post_actions_nav( $post->ID ); ?></footer>
</article>