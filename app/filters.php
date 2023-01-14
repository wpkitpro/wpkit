<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Read more" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Read more', 'wpkit'));
});
