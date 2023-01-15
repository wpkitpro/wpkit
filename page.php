<?php get_header(); ?>

    <?php if ( have_posts() ): ?>
        <?php while ( have_posts() ) { the_post();
            wk_template('partials/page', 'header');
            wk_template('partials/content', 'page');
        } ?>
    <?php endif; ?>

<?php get_footer(); ?>
