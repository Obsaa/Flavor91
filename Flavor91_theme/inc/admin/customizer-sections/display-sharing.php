<?php
$display->addSubSection( array(
	'name'     => __( 'Sharing', 'thim' ),
	'id'       => 'share_archive',
	'position' => 3,
) );


$display->createOption( array(
	'name'    => __( 'Facebook', 'thim' ),
	'id'      => 'archive_sharing_facebook',
	'type'    => 'checkbox',
	"desc"    => "Show the facebook sharing option in product.",
	'default' => true,
) );

$display->createOption( array(
	'name'    => __( 'Twitter', 'thim' ),
	'id'      => 'archive_sharing_twitter',
	'type'    => 'checkbox',
	"desc"    => "Show the twitter sharing option in product.",
	'default' => true,
) );


$display->createOption( array(
	'name'    => __( 'Google Plus', 'thim' ),
	'id'      => 'archive_sharing_google',
	'type'    => 'checkbox',
	"desc"    => "Show the g+ sharing option in product.",
	'default' => true,
) );

$display->createOption( array(
	'name'    => __( 'Pinterest', 'thim' ),
	'id'      => 'archive_sharing_pinterest',
	'type'    => 'checkbox',
	"desc"    => "Show the pinterest sharing option in product.",
	'default' => true,
) );

