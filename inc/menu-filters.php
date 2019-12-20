<?php
/**
 * Add custom attribute and value to a nav menu item's anchor based on CSS class.
 */

function add_atts_to_modal_popup_menu_link( $atts, $item, $args )
{
  // The ID of the target menu item
  $menu_target = 30;

  // inspect $item
  if ($item->ID == $menu_target) {
    $atts['data-toggle'] = 'modal';
    $atts['data-target'] = "#accountModal";
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_atts_to_modal_popup_menu_link', 10, 3 );