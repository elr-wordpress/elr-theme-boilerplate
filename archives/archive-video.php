<?php get_header(); ?>
<main class="main-content elr-container">
    <?php elr_cpt_grid($wp_query, 'video', array('video_type'), false, false); ?>
</main>
<?php get_footer(); ?>