<?php

use MailPoetVendor\Doctrine\ORM\Mapping\Id;

function kadence_child_enqueue_styles() {
    $parent_style = 'kadence-style'; // This is 'kadence-style' for the Kadence theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'kadence-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'kadence_child_enqueue_styles' );

add_action( 'woocommerce_composite_before_components_progressive', 'add_custom_length_input_field', 10, 2 );
function add_custom_length_input_field( $components, $product_id ) {
    // echo  $component_id;
    // error_log('add_custom_length_input_field function fired with component_id: ' . $component_id . ' and product_id: ' . $product_id);
    

    if (is_array($components)) {
        // ["__construct","get_composite","get_composite_id","get_id","get_data","get_options","get_title","get_slug","get_description","get_discount","get_quantity","is_static","is_optional","is_priced_individually","is_shipped_individually","is_lazy_loaded","get_default_option","get_option","disable_addons","get_default_sorting_order","show_sorting_options","get_sorting_options","show_filtering_options","get_attribute_filters","get_filtering_options","get_index","get_select_action","show_placeholder_option","get_options_style","get_columns","get_results_per_page","get_pagination_style","paginate_options","exclude_out_of_stock_options","get_pagination_data","hide_disabled_options","get_image_data","get_image_size","get_classes","hide_selected_option_title","hide_selected_option_description","hide_selected_option_thumbnail","hide_selected_option_price","hide_component_option_prices","is_subtotal_visible","get_price_display_format","get_price_display_settings","offsetGet","offsetExists","offsetSet","offsetUnset","query_component_options","get_options_styles","get_options_style_data","options_style_supports","set_thumbnail","get_price_display_options","get_pagination_style_options","get_select_action_options"]
        foreach ($components as $component) {
            if ($component->get_id() == 1717623436) {
                $customLength = '<div class="custom-length-input">
                    <label for="custom_length">Enter Length (cm) uug:</label>
                    <input type="number" id="custom_length" name="custom_length" min="1" step="1" />
                </div>';
            
                echo '<script>
                    jQuery(document).ready(function($) {
                        $("#component_' . $component->get_id() . '_inner").append(
                            \'<div class="custom-length-input"><label for="custom_length">Enter Length (cm):</label><input type="number" id="custom_length" name="custom_length" min="1" step="1" /></div>\'
                        );
                    });
                </script>';
            }uug

     

  
         
        }
    } else {
        // Log an error if component_data is not an array
        echo '<script>console.error("component_data is not an array");</script>';
    }
}

// Save custom length input field value
add_action( 'woocommerce_add_to_cart', 'save_custom_length_field', 10, 6 );
function save_custom_length_field( $cart_item_key, $product_id, $quantity, $variation_id, $variation, $cart_item_data ) {
    if ( isset( $_POST['custom_length'] ) ) {
        $cart_item_data['custom_length'] = sanitize_text_field( $_POST['custom_length'] );
        $cart_item_key = md5( microtime() . rand() );
    }
    return $cart_item_data;
}