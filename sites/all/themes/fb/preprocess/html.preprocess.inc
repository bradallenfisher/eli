<?php
  //add side-true class when there is content placed in the side region
  function fb_preprocess_html(&$variables) {


  $siteCLass = $_SERVER['HTTP_HOST'];
  $siteCLass = explode('.', $siteCLass);
  $siteCLass = array_shift($siteCLass);

  $variables['attributes_array']['class'][] = $siteCLass;

  if (!empty($variables['page']['sidebar_first'])) {
    $variables['attributes_array']['class'][] = 'first-sidebar';
  }

  if (!empty($variables['page']['sidebar_second'])) {
    $variables['attributes_array']['class'][] = 'second-sidebar';
  }

}