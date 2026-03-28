<?php
require_once('../../../wp-load.php');
global $wpdb;
$fields = $wpdb->get_results("SELECT post_name, post_excerpt FROM {$wpdb->posts} WHERE post_type = 'acf-field'");
foreach ($fields as $field) {
    if (in_array($field->post_excerpt, ['title2', 'show_on_home_page_services', 'small_services_boxes', 'icon', 'title'])) {
        echo "{$field->post_excerpt} => {$field->post_name}\n";
    }
}
