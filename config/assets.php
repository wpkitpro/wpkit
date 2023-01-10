<?php
 namespace WpKit;

 /**
  * Retrieves the URL of assets in the theme.
  *
  * Searches in the stylesheet directory before the template directory so themes
  * which inherit from a parent theme can just override one file.
  *
  * @param $file
  *
  * @return string
  */
function assets( $file ) {
    return get_theme_file_uri("/public/$file");
}
