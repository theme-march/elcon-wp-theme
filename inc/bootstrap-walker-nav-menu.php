<?php



// class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu {
//     // Start Level
//     function start_lvl( &$output, $depth = 0, $args = null ) {
//         $indent = str_repeat( "\t", $depth );
//         $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
//     }

//     // Start Element
//     function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
//         $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

//         $classes = empty( $item->classes ) ? array() : (array) $item->classes;
//         $classes[] = 'nav-item';

//         if ( in_array( 'current-menu-item', $classes ) ) {
//             $classes[] = 'active';
//         }

//         if ( $args->walker->has_children ) {
//             $classes[] = 'dropdown'; // Add dropdown class for parent items
//         }

//         $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
//         $class_names = ' class="' . esc_attr( $class_names ) . '"';

//         $output .= $indent . '<li' . $class_names .'>';

//         $atts = array();
//         $atts['class'] = 'nav-link';
//         $atts['href'] = ( ! empty( $item->url ) ) ? esc_url( $item->url ) : '';
//         $atts['aria-current'] = ( $item->current || $item->current_item_ancestor ) ? 'page' : '';

//         if ( $args->walker->has_children ) {
//             $atts['class'] .= ' dropdown-toggle'; // Add class for dropdown toggle
//             $atts['data-toggle'] = 'dropdown'; // Add data-toggle attribute for dropdown
//         }

//         $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

//         $attributes = '';
//         foreach ( $atts as $attr => $value ) {
//             if ( ! empty( $value ) ) {
//                 $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
//                 $attributes .= ' ' . $attr . '="' . $value . '"';
//             }
//         }

//         $item_output = $args->before;
//         $item_output .= '<a' . $attributes . '>';
//         $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
//         $item_output .= '</a>';
//         $item_output .= $args->after;

//         $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
//     }
// }