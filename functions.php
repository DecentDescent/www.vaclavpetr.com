<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'post' ) );
add_theme_support( 'post-thumbnails', array( 'page' ) );

function define_concerts() {
	$labels = array(
		'name' => 'Concerts',
		'singular_name' => 'Concert',
		'add_new' => 'New concert',
		'add_new_item' => 'New concert',
		'edit_item' => 'Edit concert',
		'new_item' => 'New concert',
		'all_items' => 'All concerts',
		'view_item' => 'View concert',
		'search_items' => 'Search concert',
		'not_found' => 'No concerts found',
		'not_found_in_trash' => 'No concerts found',
		'parent_item_colon' => '',
		'menu_name' => 'Concerts'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_in_menu' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'concert', 'with_front' => true),
		'capability_type' => 'post',
		'has_archive' => true,
		'supports' => array('title','thumbnail', 'editor'),
		'hierarchical' => false,
	);

	register_post_type('concert', $args);
}

add_action('init', 'define_concerts');
add_action('admin_init', 'concerts_box');

function concerts_box() {
	add_meta_box('concerts_box', 'Concert Details', 'display_concerts_box', 'concert', 'normal', 'high');
}

function display_concerts_box($concert) {
	$concert_address = esc_html(get_post_meta($concert->ID, 'concert_address', true));
	$concert_ticket = esc_html(get_post_meta($concert->ID, 'concert_ticket', true));
	?>

	<div class="container-fluid" style="max-width: 950px">
		<label><b>Address</b></label><br>
		<input type="text" size="40" name="concert_address" value="<?php echo $concert_address; ?>"/><br>

		<label><b>Link to the tickets</b></label><br>
		<input type="text" size="40" name="concert_ticket" value="<?php echo $concert_ticket; ?>"/><br>
	</div>
	<?php
}

add_action('save_post', 'add_concert', 10, 2);
function add_concert($concert_id, $concert) {
	if ($concert->post_type == 'concert') {
		if (isset($_POST['concert_address']) && $_POST['concert_address'] != '') {
			update_post_meta($concert_id, 'concert_address', $_POST['concert_address']);
		}
		if (isset($_POST['concert_ticket']) && $_POST['concert_ticket'] != '') {
			update_post_meta($concert_id, 'concert_ticket', $_POST['concert_ticket']);
		}
	}
}

/* Citace */
function define_citace() {
	$labels = array(
		'name' => 'Citace',
		'singular_name' => 'Citace',
		'add_new' => 'Nová citace',
		'add_new_item' => 'Nová citace',
		'edit_item' => 'Upravit citaci',
		'new_item' => 'Nová citace',
		'all_items' => 'Všechny citace',
		'view_item' => 'Zobrazit citaci',
		'search_items' => 'Hledat citaci',
		'not_found' => 'Žádna citace nenalezena',
		'not_found_in_trash' => 'Žádna citace nenalezena',
		'parent_item_colon' => '',
		'menu_name' => 'Citace'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_in_menu' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'sponsor', 'with_front' => true),
		'capability_type' => 'post',
		'has_archive' => true,
		'supports' => array('title','editor', 'thumbnail'),
		'hierarchical' => false,
	);

	register_post_type('citace', $args);
}

add_action('init', 'define_citace');
add_action('admin_init', 'citace_box');
