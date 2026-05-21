<?php
require_once('../../../wp-load.php');
global $wpdb;
$fields = $wpdb->get_results("SELECT post_name, post_excerpt, post_parent FROM {$wpdb->posts} WHERE post_type = 'acf-field' AND post_parent = 19");
foreach ($fields as $field) {
    echo "{$field->post_excerpt} => {$field->post_name} (Parent: {$field->post_parent})\n";
}


