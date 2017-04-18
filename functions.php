/**
 * Proper way to enqueue scripts and styles
 */
function petj_styles() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'petj_styles' );
