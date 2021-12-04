<?php
/**
 * Left sidebar check
 *
 * @package the_creativity_architect
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$sidebar_pos = get_theme_mod( 'the_creativity_architect_sidebar_position' );

if ( 'left' === $sidebar_pos || 'both' === $sidebar_pos ) {
	get_template_part( 'sidebar-templates/sidebar', 'left' );
}
?>

<div class="col-md content-area" id="primary">
