<div class="team-member-profile">
  <?php // create alias from nid ?>
  <?php $path = "node/". $fields['nid']->content;?>
  <?php $alias = drupal_get_path_alias($path);?>

  <?php // print out image and link it to the alias. ?>
  <a href="<?php print $alias;?>"><img class="circle" src="<?php print $fields['field_image']->content; ?>"/>
  	<span class="profile-info-reveal">
	    <?php // create container for show/hide name and title. ?>
	    <span class="profile-name">
	      <?php print $fields['title']->content;?>
	    </span>
	    <span class="profile-jobtitle">
	      <?php print $fields['field_title']->content;?>
	    </span>
	  </span>
  </a>
</div>