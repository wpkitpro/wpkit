<?php get_header(); ?>

<div class="container">
    <?php if ( have_posts() ): ?>
        <?php while ( have_posts() ) { the_post();
            wk_template('partials/page', 'header');
            wk_template('partials/content', 'page');
        } ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
