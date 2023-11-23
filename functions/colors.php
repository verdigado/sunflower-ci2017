<?php

function sunflower_add_custom_gutenberg_color_palette_ci2017() {
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => esc_html__( 'Magenta', 'sunflower-ci2017' ),
				'slug'  => 'magenta',
				'color' => '#e6007e',
			),
			array(
				'name'  => esc_html__( 'Magenta 600', 'sunflower-ci2017' ),
				'slug'  => 'magenta-600',
				'color' => '#BF0069',
			),
			array(
				'name'  => esc_html__( 'Green', 'sunflower-ci2017' ),
				'slug'  => 'green',
				'color' => '#46962b',
			),
			array(
				'name'  => esc_html__( 'Green 800', 'sunflower-ci2017' ),
				'slug'  => 'green-800',
				'color' => '#224634',
			),
			array(
				'name'  => esc_html__( 'Green 550', 'sunflower-ci2017' ),
				'slug'  => 'green-550',
				'color' => '#3C8025',
			),
			array(
				'name'  => esc_html__( 'White', 'sunflower-ci2017' ),
				'slug'  => 'white',
				'color' => '#ffffff',
			),
			array(
				'name'  => esc_html__( 'Yellow 500', 'sunflower-ci2017' ),
				'slug'  => 'yellow-500',
				'color' => '#ffd500',
			),
			array(
				'name'  => esc_html__( 'Yellow 600', 'sunflower-ci2017' ),
				'slug'  => 'yellow-500',
				'color' => '#D9B500',
			),
			array(
				'name'  => esc_html__( 'Blue 500', 'sunflower-ci2017' ),
				'slug'  => 'blue-500',
				'color' => '#4cb4e7',
			),
			array(
				'name'  => esc_html__( 'Blue 600', 'sunflower-ci2017' ),
				'slug'  => 'blue-600',
				'color' => '#4097c2',
			),
			array(
				'name'  => esc_html__( 'Gray 100', 'sunflower-ci2017' ),
				'slug'  => 'gray-100',
				'color' => '#EFF2ED',
			),
			array(
				'name'  => esc_html__( 'Black 500', 'sunflower-ci2017' ),
				'slug'  => 'black-500',
				'color' => '#201D1B',
			),

		)
	);
}
add_action( 'after_setup_theme', 'sunflower_add_custom_gutenberg_color_palette_ci2017', 20 );
