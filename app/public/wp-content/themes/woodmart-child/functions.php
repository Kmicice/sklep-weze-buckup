<?php

use MailPoetVendor\Doctrine\ORM\Mapping\Id;

function kadence_child_enqueue_styles() {
    $parent_style = 'woodmart'; // This is 'kadence-style' for the Kadence theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    // wp_enqueue_style( "tailwind-style", get_stylesheet_directory_uri() . '/tailwind_output.css', array(), '1.0' );
    wp_enqueue_style( 'woodmart-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

    wp_register_script('custom-progressive-mode', get_stylesheet_directory_uri() . '/woocommerce/js/custom-progressive-mode.js', array('jquery'), null, true);
    wp_register_script('composite-summary-default-values', get_stylesheet_directory_uri() . '/woocommerce/js/composite-summary-default-values.js', array('jquery'), null, true);

    // Enqueue the script
    wp_enqueue_script('custom-progressive-mode');
    wp_enqueue_script('composite-summary-default-values');
}
add_action( 'wp_enqueue_scripts', 'kadence_child_enqueue_styles' );
remove_action( 'woocommerce_composited_product_single', 'wc_cp_composited_product_title', 5 );
remove_action( 'woocommerce_composited_product_single', 'wc_cp_composited_product_wrapper_open', 10 );

// add_action( 'woocommerce_composite_before_components_progressive', 'composite-summary-default-values', 1, 2 );
// add_action( 'woocommerce_composite_after_components_progressive', 'wc_cp_add_to_cart_section', 10, 2 );


