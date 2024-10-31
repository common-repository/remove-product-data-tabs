<?php
/*
Plugin Name: Hide Product Data Tabs
Plugin URI: https://wordpress.org/plugins/remove-product-data-tabs
Description: This plugin will remove Woocommerce product data tabs like Description, additional information, Reviews On
woocommerce Product Details Page.
Author: Asif Ali
Author URI: http://asifalimca.wordpress.com
Version: 1.1.0
License: GPLv2
*/
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      	// Remove the description tab
    unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;
}