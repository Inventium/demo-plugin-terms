<?php
/**
 * At some point, rewrite to lay out as a table:
 * Name, value, doc link, source link.
 * Have each set of functions as an array, then
 * pass it to the table layout.
 * http://codex.wordpress.org/Function_Reference/get_template_directory_uri
 * 
 * Good conversation started here:
 * http://wordpress.org/support/topic/disambiguating-object_id-in-wp_term_relationships-table?replies=5
 */

function wiaw_layout_terms($terms) {
?>
<table>
  <tr>
    <th>ID</th>
    <th>Slug</th>
    <th>Name</th>
    <th>Description</th>
  </tr>
<?php
foreach($terms as $key => $value) {
  echo '<tr>';
  echo '<td>' . $value->term_id     . '</td>';
  echo '<td>' . $value->slug        . '</td>';
  echo '<td>' . $value->name        . '</td>';
  echo '<td>' . $value->description . '</td>';
  echo '</tr>';
}?>
</table><?php
}

?>
<div class="wrap">

  <h2>Demo Plugin Terms</h2>
	
    <h3><a href="http://codex.wordpress.org/Function_Reference/get_terms">get_terms</a></h3>
      <div>
        <?php wiaw_layout_terms(get_terms('case-studies')); var_dump(get_terms('case-studies')); ?>
      </div>


    <h3><a href="http://codex.wordpress.org/Function_Reference/get_objects_in_term">get_object_in_term</a></h3>
      <div>
        <?php //var_dump(get_objects_in_term()); ?>
      </div>

    <h3><a href="http://codex.wordpress.org/Function_Reference/wp_get_object_terms">wp_get_object_by_terms</a></h3>
<?php
if (0) {
$product_terms = wp_get_object_terms($post->ID, 'product');
if(!empty($product_terms)){
  if(!is_wp_error( $product_terms )){
    echo '<ul>';
    foreach($product_terms as $term){
      echo '<li><a href="'.get_term_link($term->slug, 'product').'">'.$term->name.'</a></li>'; 
    }
    echo '</ul>';
  }
}
}
?>
</div>
