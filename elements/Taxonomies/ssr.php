<?php 

// List terms in a given taxonomy using wp_list_categories (also useful as a widget if using a PHP Code plugin)

$taxonomy     = (string) ($propertiesData['content']['taxonomy']['taxonomy_slug'] ?? 'category');
$hide_empty   = (bool) ($propertiesData['content']['taxonomy']['hide_empty'] ?? false);
$orderby = (string) ($propertiesData['content']['taxonomy']['orderby'] ?? 'name');
$order = (string) ($propertiesData['content']['taxonomy']['order'] ?? 'ASC');
$number = (int) ($propertiesData['content']['taxonomy']['limit'] ?? 0);
$child_of = $propertiesData['content']['taxonomy']['child_of'] ?? 0;
$top_level   = $propertiesData['content']['taxonomy']['top_level'] ? 0 : '';

$taxonomies = get_terms( array(
	'taxonomy' => $taxonomy,
	'hide_empty' => $hide_empty,
    'orderby'      => $orderby,
    'order'      => $order,
    'number' => $number,
    'parent' => $top_level,
    'child_of' => get_term_by('name', $child_of, $taxonomy)->term_id
) );

if ( ! empty( $taxonomies ) && ! is_wp_error( $taxonomies ) ){
	echo '<ul class="taxonomies-container">';
	foreach ( $taxonomies as $term ) {
		
         echo'<li><a href="' . esc_url( get_term_link( $term ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term->name ) ) . '">' . $term->name . '</a></li>';
	}
	echo '</ul>';
}
