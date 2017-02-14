<?php
/**
 * Plugin Handler
 *
 * @package         MakeCreative\CollapsibleContent
 * @since           1.0.0
 * @author          makecreative
 * @license         GPL-2.0+
 * @link            https://www.makecreative.ro
 */

namespace MakeCreative\CollapsibleContent;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );

/**

* Enqueue Plugin Scripts and Styles
*
* @since 1.0.0 
*
* @return void

*/

function enqueue_assets(){
    wp_enqueue_style( 'dashicons' );
    wp_enqueue_script( 'collapsible-content-plugin-script', COLLAPSIBLE_CONTENT_URL .'assets/dist/js/jquery.plugin.js', array('jquery'), '1.0.0', true );

//    $script_parameters = array(
//        'showIcon' => 'dashicons-arrow-down-alt2',
//        'hideIcon' => 'dashicons-arrow-up-alt2',
//    );
//	wp_localize_script( 'collapsible-content-plugin-script', "collapsibleContentParameters", $script_parameters );


}

/**

* Autoload Plugin Files
*
* @since 1.0.0 
*
* @return void

*/

function autoload(){
    $files = array(
            'shortcode/shortcodes.php',
        );

    foreach( $files as $file ) {
        include( __DIR__ .'/' . $file );
    }
}

autoload();