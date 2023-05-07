<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 */

$unique_id  = wp_unique_id( 'search-form-' );
$aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
?>
<form role="search" <?php echo $aria_label; ?> method="get" class="d-flex" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <input type="search" id="<?php echo esc_attr( $unique_id ); ?>" class="form-control me-2" value="<?php echo get_search_query(); ?>" placeholder="<?php _e( 'Search&hellip;', 'wpkit' ); ?>" name="s" aria-label="Search"/>
  <button type="submit" class="btn btn-outline-success"><?php _e( 'Search', 'wpkit' ); ?></button>
</form>
