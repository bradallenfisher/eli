<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * fb theme.
 */
function fb_menu_local_tasks(&$variables) {
  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
    $variables['primary']['#prefix'] .= '<ul class="tabs primary tabs--primary  links--inline">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables['secondary']['#prefix'] .= '<ul class="tabs secondary tabs--secondary links--inline">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }

  return $output;
}

function fb_breadcrumb($breadcrumb) {
  if (empty($breadcrumb)) {
    return $themed_breadcrumb = '';
  }
  else {
    $themed_breadcrumb = '';
    $array_size = count($breadcrumb['breadcrumb']);
    $i = 0;
    while ( $i < $array_size ) {
      $themed_breadcrumb .= '' . $breadcrumb['breadcrumb'][$i] . '';
      if ( $i + 1 != $array_size ) {
        $themed_breadcrumb .=  ' &#8594; ';
      }
      $i++;
    }
    $themed_breadcrumb .= '';
    return $themed_breadcrumb;
  }
}
