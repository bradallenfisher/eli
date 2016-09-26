<?php

/**
 * Implements hook_preprocess_page().
 */
function fb_preprocess_page(&$variables) {
  drupal_add_css('//fonts.googleapis.com/css?family=Roboto:100,300,400,900', array('group' => CSS_THEME));
  drupal_add_css('//fonts.googleapis.com/css?family=Roboto+Slab:400,300,700', array('group' => CSS_THEME));
  drupal_add_library('system', 'ui.accordion');
}


