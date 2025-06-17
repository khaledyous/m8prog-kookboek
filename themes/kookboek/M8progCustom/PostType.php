<?php
// Zorg dat dit bestand via require_once in functions.php geladen wordt

// 1. Custom Post Type registreren
function m8prog_register_post_types() {
    $labels = [
        'name'               => __( 'Woods', 'Text_Domain' ),
        'singular_name'      => __( 'Wood', 'Text_Domain' ),
        'add_new'            => __( 'New Wood', 'Text_Domain' ),
        'add_new_item'       => __( 'Add New Wood', 'Text_Domain' ),
        'edit_item'          => __( 'Edit Wood', 'Text_Domain' ),
        'new_item'           => __( 'New Wood', 'Text_Domain' ),
        'view_item'          => __( 'View Wood', 'Text_Domain' ),
        'search_items'       => __( 'Search Woods', 'Text_Domain' ),
        'not_found'          => __( 'No Woods found', 'Text_Domain' ),
        'not_found_in_trash' => __( 'No Woods found in Trash', 'Text_Domain' ),
        'menu_name'          => __( 'Woods', 'Text_Domain' ),
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'hierarchical'       => false,
        'supports'           => [ 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'page-attributes' ],
        'rewrite'            => [ 'slug' => 'wood' ],
        'show_in_rest'       => true,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-admin-post',
    ];

    register_post_type( 'wood', $args );
}

// 2. Custom Taxonomies registreren
function m8prog_register_taxonomies() {
    // Taxonomy: origin
    $origin_labels = [
        'name'              => _x( 'Origins', 'taxonomy general name', 'Text_Domain' ),
        'singular_name'     => _x( 'Origin', 'taxonomy singular name', 'Text_Domain' ),
        'search_items'      => __( 'Search Origins', 'Text_Domain' ),
        'popular_items'     => __( 'Popular Origins', 'Text_Domain' ),
        'all_items'         => __( 'All Origins', 'Text_Domain' ),
        'parent_item'       => __( 'Parent Origin', 'Text_Domain' ),
        'parent_item_colon' => __( 'Parent Origin:', 'Text_Domain' ),
        'edit_item'         => __( 'Edit Origin', 'Text_Domain' ),
        'update_item'       => __( 'Update Origin', 'Text_Domain' ),
        'add_new_item'      => __( 'Add New Origin', 'Text_Domain' ),
        'new_item_name'     => __( 'New Origin Name', 'Text_Domain' ),
        'menu_name'         => __( 'Origins', 'Text_Domain' ),
    ];

    $origin_args = [
        'hierarchical'      => true,
        'labels'            => $origin_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => [ 'slug' => 'origin' ],
    ];

    register_taxonomy( 'origin', 'wood', $origin_args );

    // Taxonomy: material
    $material_labels = [
        'name'              => _x( 'Materials', 'taxonomy general name', 'Text_Domain' ),
        'singular_name'     => _x( 'Material', 'taxonomy singular name', 'Text_Domain' ),
        'search_items'      => __( 'Search Materials', 'Text_Domain' ),
        'all_items'         => __( 'All Materials', 'Text_Domain' ),
        'edit_item'         => __( 'Edit Material', 'Text_Domain' ),
        'update_item'       => __( 'Update Material', 'Text_Domain' ),
        'add_new_item'      => __( 'Add New Material', 'Text_Domain' ),
        'new_item_name'     => __( 'New Material Name', 'Text_Domain' ),
        'menu_name'         => __( 'Materials', 'Text_Domain' ),
    ];

    $material_args = [
        'hierarchical'      => false, // Tag-achtig
        'labels'            => $material_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => [ 'slug' => 'material' ],
    ];

    register_taxonomy( 'material', 'wood', $material_args );
}

// 3. Hooks
add_action( 'init', 'm8prog_register_post_types' );
add_action( 'init', 'm8prog_register_taxonomies' );
