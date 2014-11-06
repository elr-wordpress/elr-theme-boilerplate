<?php

    $tax_term = elr_get_current_tax( $wp_query );

    if ( post_type_exists( 'service' ) ) {
        $count_posts = wp_count_posts( 'service' );
        $num_posts = $count_posts->publish;
    } else {
        $num_posts = 0;
    }

?>
<?php get_header(); ?>

<main class="main-content">

    <!-- if service archive or service custom taxonomy show grid -->
    <?php if ( is_post_type_archive() || is_tax()  ) : ?>
        <div class="cpt-grid">
            <div class="cpt-grid-nav">
                <h3>Limit Results:</h3>
                <nav class="num-results-nav">
                    <ul>
                        <li><a class="active" href="/services/" data-num="20">20</a></li>
                        <li><a href="/services/" data-num="40">40</a></li>
                        <li><a href="/services/" data-num="-1">All</a></li>
                    </ul>
                </nav>

                <h3>Filter Results:</h3>

                <?php elr_tax_nav( 'service_type', $tax_term ); ?>
            </div>
            <div class="cpt-grid-content" data-post-type="service">
                <?php elr_get_loop(); ?>
                <p class="post-count">Showing <?php echo $wp_query->post_count; ?> of <?php echo $num_posts; ?></p>
            </div>            
        </div>

    <!-- if category/tag/author/date archive show normal loop -->
    <?php else : ?>
        <div class="content-holder">
            <?php elr_get_loop(); ?>
        </div>
        <?php get_sidebar(); ?>
    <?php endif; ?>
</main>
<!--Check to see if contact should be displayed -->

<?php elr_get_contact(); ?>
<?php get_footer(); ?>