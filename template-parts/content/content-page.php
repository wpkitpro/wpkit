<article id="<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    the_content();

    wp_link_pages( [
        'before' => '<nav class="page-nav"><p>' . __( 'Pages:', 'wpkit' ),
        'after'  => '</p></nav>',
    ] );
    ?>
</article>
