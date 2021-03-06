<?php
$link       = 'http://video.online-convert.com/convert-to-mp4';
$copy_right = 'http://www.thimpress.com';

$comingsoon = $titan->createMetaBox( array(
	'name'      => __( 'Coming Soon Mode Options', 'thim' ),
	'id'        => 'coming-soon-mode-options',
	'post_type' => array( 'page' ),
) );

$comingsoon->createOption( array(
	'name' => __( 'Logo Page', 'thim' ),
	'id'   => 'coming_soon_logo',
	'type' => 'upload',
	'desc' => __( 'Upload your logo', 'thim' )
) );

$comingsoon->createOption( array(
	'name'    => __( 'Cover Color', 'thim' ),
	'id'      => 'cover_color',
	'type'    => 'select',
	'options' => array(
		'black'  => __( 'Black', 'thim' ),
		'blue'   => __( 'Blue', 'thim' ),
		'green'  => __( 'Green', 'thim' ),
		'orange' => __( 'Green', 'thim' ),
		'red'    => __( 'Red', 'thim' ),
	),
	'default' => 'black',
) );

$comingsoon->createOption( array(
	'name' => __( 'Background video', 'thim' ),
	'type' => 'heading',
) );

$comingsoon->createOption( array(
	'name' => 'link video ogg/webm',
	'id'   => 'link_ogg',
	'type' => 'text',
) );

$comingsoon->createOption( array(
	'name' => 'link video mp4',
	'id'   => 'link_mp4',
	'type' => 'text',
	'desc' => __( 'Select an uploaded video in mp4 format. Other formats, such as webm and ogv will work in some browsers. You can use an online service such as <a href="' . $link . '" target="_blank">online-convert.com</a> to convert your videos to mp4.', 'thim' ),
) );


$comingsoon->createOption( array(
	'name' => __( 'Text Color', 'thim' ),
	'id'   => 'text_color',
	'type' => 'color',
) );

//$comingsoon->createOption( array(
//	'name' => '',
//	'id'   => 'font-family',
//	'type' => 'font',
//	'show_font_family'    => true,
//	'show_font_weight'    => false,
//	'show_color'    => false,
//	'show_font_style'     => false,
//	'show_font_size'      => false,
//	'show_line_height'    => false,
//	'show_letter_spacing' => false,
//	'show_text_transform' => false,
//	'show_font_variant'   => false,
//	'show_text_shadow'    => false,
//	//'show_preview'=>false
//) );


$comingsoon->createOption( array(
	'name'    => __( 'Date Option', 'thim' ),
	'id'      => 'coming_soon_date',
	'type'    => 'date',
	'desc'    => __( 'Choose a date', 'thim' ),
	'default' => '',
) );


$comingsoon->createOption( array(
	'name'    => __( 'Title From', 'thim' ),
	'id'      => 'title_form',
	'type'    => 'text',
	'default' => __( 'Register now and be among the first to know more.', 'thim' )
) );

$comingsoon->createOption( array(
	'name' => __( 'ShortCode Form', 'thim' ),
	'id'   => 'form_mail_letter',
	'type' => 'text',
) );

$comingsoon->createOption( array(
	'name'    => __( 'Copyright Text', 'thim' ),
	'id'      => 'text_copyright',
	'type'    => 'text',
	'default' => 'Powered By <a href="' . $copy_right . '">ResolvIT</a>adot &copy; 2016',
) );