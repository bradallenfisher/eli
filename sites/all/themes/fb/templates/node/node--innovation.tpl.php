<article<?php print $attributes; ?>>

  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
    ?>
     <?php print render($content['field_image']);?>
        <h1><?php print $title;?></h1>
        <?php print render($content['field_title']);?>
      <?php print render($content['body']);?>
  </div>

  <?php print render($content['links']); ?>
  <?php print render($content['comments']); ?>
</article>
