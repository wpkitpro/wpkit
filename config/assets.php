<?php
 namespace WpKit;

function assets( $file ) {
    return get_theme_file_uri("/public/$file");
}