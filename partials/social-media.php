<?php
	$query = new WP_Query( 'post_type=social_media&posts_per_page=-1' );
?>

<ul class="social-media-section">
	<?php	
	if ( $query->have_posts() ):
	    while ( $query->have_posts() ) : $query->the_post();
			global $post;
			$title = substr( str_ireplace( '"', '', trim( get_the_title() ) ), 0, 70 );
			$url = str_ireplace('"', '', trim(get_post_meta($post->ID, 'elr_social_media_url', true)));
	?>
			<li>
				<a href="<?php echo esc_attr( $url ); ?>" title="<?php echo esc_attr( $title ); ?>" target="_blank"><?php the_post_thumbnail(); ?></a>
			</li>
			<?php
	    endwhile;
	endif; ?>
	<?php wp_reset_postdata(); ?>
</ul>