<?php
// main menu
$header->addSubSection( array(
	'name'     => __( 'Main Menu', 'thim' ),
	'id'       => 'display_main_menu',
	'position' => 5,
) );

$header->createOption( array(
	'name'    => __( 'Select a Layout', 'thim' ),
	'id'      => 'header_style',
	'type'    => 'radio-image',
	'options' => array(
		"header_v1" => get_template_directory_uri( 'template_directory' ) . "/images/admin/header/header_1.jpg",
		"header_v2" => get_template_directory_uri( 'template_directory' ) . "/images/admin/header/header_2.jpg",
	),
	'default' => 'header_v1',
) );

$header->createOption( array(
	'name'    => __( 'Header Position', 'thim' ),
	'id'      => 'header_position',
	'type'    => 'select',
	'options' => array(
		'header_default' => __( 'Default', 'thim' ),
		'header_overlay' => __( 'Overlay', 'thim' ),
	),
	'default' => 'header_overlay',
) );

$header->createOption( array(
	"name"    => __( "Background color", "thim" ),
	"desc"    => __( "Pick a background color for main menu", "thim" ),
	"id"      => "bg_main_menu_color",
	"default" => "#fff",
	"type"    => "color-opacity"
) );

$header->createOption( array(
	"name"    => __( "Text color", "thim" ),
	"desc"    => __( "Pick a text color for main menu", "thim" ),
	"id"      => "main_menu_text_color",
	"default" => "#0e2a36",
	"type"    => "color-opacity"
) );

$header->createOption( array(
	"name"    => __( "Text Hover color", "thim" ),
	"desc"    => __( "Pick a text hover color for main menu", "thim" ),
	"id"      => "main_menu_text_hover_color",
	"default" => "#01b888",
	"type"    => "color-opacity"
) );

$header->createOption( array(
	"name"    => __( "Font Size", "thim" ),
	"desc"    => "Default is 13",
	"id"      => "font_size_main_menu",
	"default" => "13px",
	"type"    => "select",
	"options" => $font_sizes
) );

$header->createOption( array(
	"name"    => __( "Font Weight", "thim" ),
	"desc"    => "Default bold",
	"id"      => "font_weight_main_menu",
	"default" => "400",
	"type"    => "select",
	"options" => array( 'bold'   => 'Bold',
	                    'normal' => 'Normal',
	                    '100'    => '100',
	                    '200'    => '200',
	                    '300'    => '300',
	                    '400'    => '400',
	                    '500'    => '500',
	                    '600'    => '600',
	                    '700'    => '700',
	                    '800'    => '800',
	                    '900'    => '900'
	),
) );