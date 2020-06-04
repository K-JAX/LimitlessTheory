<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** Gutenberg editor support */
require_once( 'library/gutenberg.php' );

add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects( $items, $args ) {

	foreach( $items as &$item ) {
		$icon = get_field('icon', $item);
		
		if( $icon ) {
			
			$item->title .= ' <img src="' . $icon['url'].'" />';
		}
	}
    return $items;
}
add_filter('wpcf7_autop_or_not', '__return_false');

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

function mytheme_setup() {
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'mytheme_setup');


/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );


// woocommerce updates


// featured image
add_filter('woocommerce_single_product_image_html', 'change_product_image_link', 10, 2);

function change_product_image_link( $html, $product_id) {
  $product = wc_get_product($product_id);
  if (is_singular('product') &&
      $product &&
      $product->is_type('external')){

    $attachment_count = count($product->get_gallery_attachment_ids());
    $gallery          = $attachment_count > 0 ? '[product-gallery]' : '';
    $props            = wc_get_product_attachment_props(get_post_thumbnail_id(), $post);
    $image            = get_the_post_thumbnail(
                            $post->ID,
                            apply_filters('single_product_large_thumbnail_size',
                                          'shop_single'),
                            array(
                                'title' => $props['title'],
                                'alt'   => $props['alt'],
                            ));
    return sprintf(
        '<a href="%s" itemprop="image" class="woocommerce-main-image zoom" title="%s">%s</a>',
        $product->get_product_url(),
        esc_attr($props['caption']),
        $image
    );
  }
  else {
    return $html;
  }
}

remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open');
add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_open', 15);

// featured image on archive page
add_action('woocommerce_before_shop_loop_item', 'woocommerce_add_aff_link_open', 10);
add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_add_aff_link_close', 10);

function woocommerce_add_aff_link_open(){
  $product = wc_get_product(get_the_ID());
  if ($product->is_type('external'))
    echo '<a target="_blank" href="' .
         $product->get_product_url() .
         '" class="woocommerce-LoopProductImage-link">';
}

function woocommerce_add_aff_link_close(){
  $product = wc_get_product(get_the_ID());
  if ($product->is_type('external'))
    echo '</a>';
}


// add target blank
add_filter( 'woocommerce_loop_add_to_cart_link', 'add_target_blank', 10, 2 );

function add_target_blank( $link, $product ){
    global $post;
    $product = get_product( $post->ID );
        if( $product->is_type( 'external' ) ){
            // I simply added target="_blank" in the line below
            $link = sprintf( '<a rel="nofollow" href="%s" target="_blank" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a>',
                    esc_url( $product->add_to_cart_url() ),
                    esc_attr( isset( $quantity ) ? $quantity : 1 ),
                    esc_attr( $product->id ),
                    esc_attr( $product->get_sku() ),
                    esc_attr( isset( $class ) ? $class : 'button' ),
                    esc_html( $product->add_to_cart_text() )
                );
            return $link;
        } else {
            // I simply remove target="_blank" in the line below
            $link = sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a>',
                    esc_url( $product->add_to_cart_url() ),
                    esc_attr( isset( $quantity ) ? $quantity : 1 ),
                    esc_attr( $product->id ),
                    esc_attr( $product->get_sku() ),
                    esc_attr( isset( $class ) ? $class : 'button' ),
                    esc_html( $product->add_to_cart_text() )
                );
            return $link;
        }
}

// title external
function woocommerce_template_loop_product_link_open() {
    global $product;

    if( $product->is_type( 'external' ) ) {
        $link = apply_filters( 'woocommerce_loop_product_link', $product->get_product_url(), $product );
        echo '<a target="_blank" href="' . esc_url( $link ) . '" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">';
    } else {
        $link = apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $product );
        echo '<a href="' . esc_url( $link ) . '" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">';
    }
} 