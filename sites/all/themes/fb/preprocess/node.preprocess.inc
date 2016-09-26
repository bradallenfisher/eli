<?php
/**
 * Implements of hook_preprocess_node().
 */
function fb_preprocess_node(&$variables) {
  if(isset($variables['field_file_page'][0]['uri'])) {
    $filepath = $variables['field_file_page'][0]['uri'];
    $path = file_create_url($filepath);
    drupal_goto($path);
  }
}