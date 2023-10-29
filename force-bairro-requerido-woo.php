<?php
/**
 * Plugin Name: Force Bairro Requerido WooCommerce
 * Plugin URI:        https://github.com/marcos-alexandre82/Force-Bairro-Requerido-WooCommerce
 * GitHub Plugin URI: https://github.com/marcos-alexandre82/Force-Bairro-Requerido-WooCommerce
 * Description: Force Bairro Requerido WooCommerce
 * Version:     0.0.1
 * Requires PHP:      7.2
 * Requires at least: 5.0
 * Tested up to: 6.3.2
 * WC requires at least: 3.0.0
 * WC tested up to: 8.2.1
 * Author:      MarcosAlexandre
 * Author URI:        https://marcosalexandre.dev/
 * License:           MIT
 * License URI:       https://opensource.org/licenses/MIT
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

function force_required_wc_neighborhood_field( $fields ) {
	$fields['billing_neighborhood']['required'] = true;
	return $fields;
  }
add_filter( 'woocommerce_billing_fields', 'force_required_wc_neighborhood_field', 999 );
