<?php
$onepage                = $titan->createMetaBox( array(
	'name'      => __( 'Select Menu One Page', 'thim' ),
	'id'        => 'menu_onepage',
	'post_type' => array( 'page' ),
) );
$menus                  = get_terms( 'nav_menu', array( 'hide_empty' => false ) );
$menu_select['default'] = 'Default Menu';
foreach ( $menus as $menu ) {
	$menu_select[$menu->term_id] = $menu->name;
}
$onepage->createOption( array(
	'name'    => __( 'Select Menu', 'thim' ),
	'id'      => 'select_menu_one_page',
	'type'    => 'select',
	'options' => $menu_select
) );
