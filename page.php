<?php
/**
 * The template for displaying all single posts
 */

get_header();

?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<article id="page-<?php echo esc_attr( the_ID() ) ?>" <?php post_class(); ?>>
				<?php
				// Loop Start
				while ( have_posts() ): the_post();
					if ( has_post_thumbnail() ) {
						echo '<div class="post-media">';
						the_post_thumbnail();
						echo '</div>';
					}

					if ( get_the_title() !== '' ) {
						the_title( '<h1 class="page-title">', '</h1>' );
					}

					echo '<div class="post-content">';
					the_content();
					echo '</div>';

					// Post Pagination
					$args = array(
						'before' => '<p class="single-pagination">' . esc_html__( 'Pages:', 'wpkit' ),
						'after'  => '</p>'
					);
					wp_link_pages( $args );
				endwhile; // Loop End
				?>
			</article><!-- #page-<?php echo esc_attr( the_ID() ) ?>-->

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				echo '<div id="comments" class="comments-area">';
				comments_template( '', true );
				echo '</div><!-- #comments -->';
			}
			?>
		</main>
	</div>
<?php
get_footer();
