<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage cricket-club-league
 * @since cricket-club-league 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since cricket-club-league 1.0
	 *
	 * @return void
	 */
	function cricket_club_league_register_block_styles() {
		

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'cricket-club-league-border',
				'label' => esc_html__( 'Borders', 'cricket-club-league' ),
			)
		);

		
	}
	add_action( 'init', 'cricket_club_league_register_block_styles' );
}