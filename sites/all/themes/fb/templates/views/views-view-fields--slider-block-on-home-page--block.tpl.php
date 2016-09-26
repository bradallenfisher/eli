<?php

  if(isset($fields['field_external_link']->content)) {
    $external = $fields['field_external_link']->content;
  }
  if(isset($fields['nid']->content)) {
    $nid = 'node/'. $fields['nid']->content;
    $internal = drupal_get_path_alias($nid);
  }

?>
<div class="image">

  <?php if(isset($fields['field_page_image']) && isset($external)):?>
    <?php print '<a href="'. $external.'">'. $fields['field_page_image']->content.'</a>';?>
  <?php endif;?>

  <?php if(isset($fields['field_page_image']) && !isset($external)):?>
    <?php print '<a href="/'. $internal .'">'. $fields['field_page_image']->content.'</a>';?>
  <?php endif;?>


  <?php if(isset($fields['field_image']) && isset($external)):?>
    <?php print '<a href="'. $external.'">'. $fields['field_image']->content.'</a>';?>
  <?php endif;?>

  <?php if(isset($fields['field_image']) && !isset($external)):?>
    <?php print '<a href="/'. $internal .'">'. $fields['field_image']->content.'</a>';?>
  <?php endif;?>

</div>

<?php if($is_front):?>

  <div class="text">

    <div class="title">
      <?php if(isset($external)):?>
        <?php print '<a href="'. $external.'">'. $fields['title']->content.'</a>';?>
      <?php endif;?>

      <?php if(!isset($external)):?>
        <?php print '<a href="/'. $internal .'">'. $fields['title']->content.'</a>';?>
      <?php endif;?>
    </div>

    <div class="view-node">
        <?php if(isset($external)):?>
          <?php print '<span class="field-content"><a href="'. $external .'">Read More</a></span>';?>
        <?php endif;?>
        <?php if(!isset($external)):?>
          <?php print $fields['view_node']->content;?>
        <?php endif;?>
    </div>
  </div>

  <div class="summary">
    <?php print $fields['body']->content . ' ...';?>
  </div>

<?php endif;?>