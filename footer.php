<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloBiz
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
	/**
	 * Display default footer filter.
	 *
	 * @param bool $display Display default footer.
	 */
	if ( apply_filters( 'hello-plus-theme/display-default-footer', true ) ) {
		\get_template_part( 'template-parts/footer' );
	}
}
?>

<?php wp_footer(); ?>

<div style="text-align: center; padding: 10px; background: #000; color: #fff; font-weight: bold; position: fixed; bottom: 0; width: 100%; z-index: 99999;">
	🚀 Git Auto-Deploy Test Successful!
</div>

</body>
</html>
