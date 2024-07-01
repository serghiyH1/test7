<?php
/**
 * Twenty Twenty-Four-Child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four
 * @since Twenty Twenty-Four 1.0
 */

/**
 * Register block styles.
 */

if ( ! function_exists( 'twentytwentyfourchild_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Twenty Twenty-Four-Child 1.0
	 * @return void
	 */
	function twentytwentyfourchild_block_styles() {

		register_block_style(
			'core/table',
			array(
				'name'         => 'special-table-style',
				'label'        => __( 'Special Style Table', 'twentytwentyfour' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfourchild_enqueue_block_styles' );

function twentytwentyfourchild_enqueue_block_styles() {
	wp_enqueue_block_style( 'core/table', array(
		'handle' => 'twentytwentyfourchild-block-table',
		'src'    => get_theme_file_uri( "assets/blocks/core-table.css" ),
		'path'   => get_theme_file_path( "assets/blocks/core-table.css" )
	) );
}

add_action( 'init', 'twentytwentyfourchild_block_styles' );