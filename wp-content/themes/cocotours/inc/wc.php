<?php


add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
   // add_theme_support( 'wc-product-gallery-lightbox' );
}


remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
function jk_related_products_args( $args ) {
  $args['posts_per_page'] = 3; // 4 related products
  $args['columns'] = 3; // arranged in 2 columns
  return $args;
}


/*---Move Product Title*/
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
//add_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_single_title', 30);

//remove short description from sigle page
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
//add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );


remove_action( 'woocommerce_after_single_product_summary','woocommerce_output_product_data_tabs', 10 );
//add_action( 'woocommerce_before_single_product_summary','woocommerce_output_product_data_tabs', 30 );

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
function woo_remove_product_tabs( $tabs ) {

    //unset( $tabs['description'] );  
    unset( $tabs['reviews'] );          // Remove the reviews tab
    //unset( $tabs['additional_information'] );   // Remove the additional information tab

    return $tabs;

}

//modificar tab description con la informacion short-description
add_filter( 'woocommerce_product_tabs', 'woo_custom_description_tab', 98 );
function woo_custom_description_tab( $tabs ) {

  $tabs['description']['callback'] = 'woo_custom_description_tab_content';  // Custom description callback

  return $tabs;
}

function woo_custom_description_tab_content() {
  woocommerce_get_template( 'single-product/short-description.php' );
}
//agregar tab details con la informacio de description
add_filter( 'woocommerce_product_tabs', 'woo_details_tab' );
function woo_details_tab( $tabs ) {
  
  // Adds the new tab
  
  $tabs['details'] = array(
    'title'   => __( 'Details', 'woocommerce' ),
    'priority'  => 50,
    'callback'  => 'woo_details_tab_content'
  );

  return $tabs;

}
function woo_details_tab_content() {

  // The new tab content

  //echo '<h2>New Product Tab</h2>';
  //echo '<p>Here\'s your new product tab.</p>';
  woocommerce_get_template( 'single-product/tabs/description.php' );
  
}

// Hook in
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
     unset($fields['billing']['billing_address_1']);
     unset($fields['billing']['billing_address_2']);
     unset($fields['billing']['billing_country']);
     unset($fields['billing']['billing_city']);
   unset($fields['billing']['billing_postcode']);
   unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_company']);

   $fields['order']['order_comments']['placeholder'] = 'e.g. child seats, Pick up';
    $fields['order']['order_comments']['label'] = 'Important Notes';
     

     return $fields;
}

/**
 * Add the field to the checkout
 */
add_action( 'woocommerce_after_order_notes', 'my_custom_checkout_field' );

function my_custom_checkout_field( $checkout ) {

    echo '<div id="tour_card_request">';
 
        woocommerce_form_field( 'credit_card', array(
          'type'          => 'text',
          'class'         => array('my-field-class form-row-wide'),
          'label'         => __('Credit Card Number'),
          'placeholder'   => __(''),
          'required'  => false,
          ), $checkout->get_value( 'credit_card' ));
  
      woocommerce_form_field( 'exp_date', array(
        'type'          => 'text',
        'class'         => array('my-field-class form-row-wide'),
        'label'         => __('Exp. Date'),
        'placeholder'   => __('mm/yy'),
        'required'  => false,
        ), $checkout->get_value( 'exp_date' ));
    
        woocommerce_form_field( 'code_card', array(
          'type'          => 'text',
          'class'         => array('my-field-class form-row-wide'),
          'label'         => __('Code Card'),
          'placeholder'   => __(''),
          'required'  => false,
          ), $checkout->get_value( 'code_card' ));
        

    echo '</div>';

}
/**
 * Process the checkout
 */
add_action('woocommerce_checkout_process', 'my_custom_checkout_field_process');

function my_custom_checkout_field_process() {
    // Check if set, if its not set add an error.
    /*if ( ! $_POST['credit_card'] )
        wc_add_notice( __( '<strong>Credit Card Number</strong> is a required field.' ), 'error' );

     if ( ! $_POST['exp_date'] )
        wc_add_notice( __( '<strong>Exp. Date</strong> is a required field.' ), 'error' );
      
      if ( ! $_POST['code_card'] )
        wc_add_notice( __( '<strong>Code Card</strong> is a required field.' ), 'error' );*/

}

/**
 * Update the order meta with field value
 */
add_action( 'woocommerce_checkout_update_order_meta', 'my_custom_checkout_field_update_order_meta' );

function my_custom_checkout_field_update_order_meta( $order_id ) {
    if ( ! empty( $_POST['credit_card'] ) ) {
        update_post_meta( $order_id, 'Credit Card Number', sanitize_text_field( $_POST['credit_card'] ) );
    }
    if ( ! empty( $_POST['exp_date'] ) ) {
        update_post_meta( $order_id, 'Exp. Date', sanitize_text_field( $_POST['exp_date'] ) );
    }
    if ( ! empty( $_POST['code_card'] ) ) {
        update_post_meta( $order_id, 'Code Card', sanitize_text_field( $_POST['code_card'] ) );
    }
  
}

/**
 * Display field value on the order edit page
 */
add_action( 'woocommerce_admin_order_data_after_billing_address', 'my_custom_checkout_field_display_admin_order_meta', 10, 1 );

function my_custom_checkout_field_display_admin_order_meta($order){
    echo '<p><strong>'.__('Credit Card Number').':</strong> ' . get_post_meta( $order->id, 'Credit Card Number', true ) . '</p>';
    echo '<p><strong>'.__('Exp. Date').':</strong> ' . get_post_meta( $order->id, 'Exp. Date', true ) . '</p>';
    echo '<p><strong>'.__('Code Card').':</strong> ' . get_post_meta( $order->id, 'Code Card', true ) . '</p>';
   
}

