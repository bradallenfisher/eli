<div class="team-member-profile">

  <?php // print out image and link it to the alias. ?>
  <a href="<?php print $fields['field_external_link']->content;?>"><img class="circle" src="<?php print $fields['field_image']->content; ?>"/>
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