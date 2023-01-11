<?php get_header(); ?>
<div class="container">
    <?php if ( have_posts() ): ?>
        <?php while ( have_posts() ) { the_post();
            wk_template('partials/content', 'single');
        } ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
