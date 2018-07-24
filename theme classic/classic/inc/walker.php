<?php
/* collection of wolker classes */

/*
 * wp_nav_menu();
 * 
 * <div class="menu-container">
 * 	<ul>  start-lvl()
 * 		<li><a>link</a><span>description</span></li> // start_el()
 * 		<li><a>link</a><span>start_el()</span></li> // end_el()
 * 		<li><a>link</a></li>	
 * 	</ul>// end_lvl()
 * </div>
 * 
 */

class Walker_Nav_Primary extends Walker_Nav_Menu{
	
	function start_lvl(&$output, $depth=0, $args=array()) {
		$output .= "\n<ul class=\"nav navbar-nav\">\n";
	} 
	
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0){
		
		
		
		$li_attribtes = '';
		$class_name = $value =' ';
		
		$classes = empty($item->clasess) ? array(): (array)$item->classes;
		
		$classes[] = ($args->has_walker->has_children) ? 'dropdown' : 'nav-item';
		$classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';
		$classes[] = 'menu-item-'.$item->ID;
		
		$class_name = join(' ', apply_filters('nav_menu_css_class',array_filter($classes), $item, $args) );
		$class_name = ' class="'.esc_attr($class_name).'"';
		$output .='<li '.$class_name.'>';
		
		$attributes = ! empty($item->attr_title)? 'title= "'.esc_attr($item->attr_title).'"':'';
		$attributes .= ! empty($item->target)? 'target= "'.esc_attr($item->target).'"':'';
		$attributes .= ! empty($item->xfn)? 'rel= "'.esc_attr($item->xfn).'"':'';
		$attributes .= ! empty($item->url)? 'href= "'.esc_attr($item->url).'"':'';
		
		
		$attributes .= ! ($args->has_children)? '':'';
		$item_output = $args->before;
		$item_output .= '<a '.$attributes.' class="nav-link">';
		$item_output .= $args->link_before.apply_filters('the_title', $item->title, $item->post_name).$args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
		
		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
		
		
		
		
	}
}