<?php
$post = $wp_query->post;
if ( in_category('') ) {
include(TEMPLATEPATH . '/'); } 

elseif ( in_category('sagacompleta') ) {
include(TEMPLATEPATH . '/clips.php'); }

else {
include(TEMPLATEPATH . '/');
}
?>