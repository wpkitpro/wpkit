<?php
/**
 * Application Functions
 */


if ( ! function_exists( 'asset' ) ) {
    function asset( ...$args ) {
        return \WpKit\asset( ...$args );
    }
}

if ( ! function_exists( 'wk_template' ) ) {
    function wk_template( ...$args ) {
        return \WpKit\wk_template( ...$args );
    }
}
