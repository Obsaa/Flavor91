<?php
// main menu

$header->addSubSection( array(
	'name'     => __( 'Sub Menu', 'thim' ),
	'id'       => 'display_sub_menu',
	'position' => 6,
) );

$header->createOption( array(
	"name"    => __( "Color Border Top", "thim" ),
	"id"      => "sub_menu_border_top_color",
	"default" => "#fff",
	"type"    => "color-opacity"
) );
$header->createOption( array(
	"name"        => __( "Background color", "thim" ),
	"desc"        => "Pick a background color for sub menu",
	"id"          => "sub_menu_bg_color",
	"default"     => "#fff",
	"type"        => "color-opacity",
	'livepreview' => '$("#main_menu li .sub-menu").css("background-color", value);
                                        $("#main_menu ul.navbar-nav>li.menu-item-has-children>ul.sub-menu").css("border-top-color", value)'
) );

$header->createOption( array(
	"name"    => __( "Color Border Bottom", "thim" ),
	"id"      => "sub_menu_border_color",
	"default" => "#ddd",
	"type"    => "color-opacity"
) );

$header->createOption( array(
	"name"        => __( "Text color", "thim" ),
	"desc"        => __( "Pick a text color for sub menu", "thim" ),
	"id"          => "sub_menu_text_color",
	"default"     => "#666666",
	"type"        => "color-opacity",
	'livepreview' => '$("#main_menu li .sub-menu li a").css("color", value);'
) );
$header->createOption( array(
	"name"    => __( "Text color hover", "thim" ),
	"desc"    => __( "Pick a text color hover for sub menu", "thim" ),
	"id"      => "sub_menu_text_color_hover",
	"default" => "#666666",
	"type"    => "color-opacity"
) );