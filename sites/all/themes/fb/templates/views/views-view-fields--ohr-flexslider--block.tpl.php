<?php

  if(isset($fields['field_external_link']->content)) {
    $external = $fields['field_external_link']->content;

  }
  if(isset($fields['field_internal_page']->content)) {
    $nid = 'node/'. $fields['field_internal_page']->content;
    $internal = drupal_get_path_alias($nid);
  }
?>
<div class="image">

  <?php if(isset($fields['field_image']) && isset($external)):?>
    <?php print '<a href="'. $external.'">'. $fields['field_image']->content.'</a>';?>
  <?php endif;?>

  <?php if(isset($fields['field_image']) && isset($internal)):?>
    <?php print '<a href="/'. $internal .'">'. $fields['field_image']->content.'</a>';?>
  <?php endif;?>

</div>


  <div class="text">

    <div class="title">
      <?php if(isset($external)):?>
        <?php print '<a href="'. $external.'">'. $fields['title']->content.'</a>';?>
      <?php endif;?>

      <?php if(isset($internal)):?>
        <?php print '<a href="/'. $internal .'">'. $fields['title']->content.'</a>';?>
      <?php endif;?>
    </div>

    <div class="view-node">
        <?php if(isset($external)):?>
          <?php print '<span class="field-content"><a href="'. $external .'">Read More</a></span>';?>
        <?php endif;?>
        <?php if(isset($internal)):?>
          <?php print '<span class="field-content"><a href="'. $internal .'">Read More</a></span>';?>
        <?php endif;?>
    </div>
  </div>

  <div class="summary">
    <?php print $fields['field_summary']->content;?>
  </div>

