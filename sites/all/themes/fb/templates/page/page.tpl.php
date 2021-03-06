<div class="page">

  <header class="header" role="banner">
    <div class="header-inner">

    <div class="top-row">
      <?php // search and top links ?>

      <span class="top-search-expander">
        <a href="/search">Search <i class="fa fa-search"></i></a>
      </span>
      <?php print render($page['top_row']);?>
    </div>

    <div class="brand">
      <div class="mark">
        <a href="http://psu.edu">
          <img src="/sites/all/themes/fb/images/mark.svg" alt="Penn State Logo">
        </a>
      </div>

      <div class="dept-name-left">
        <?php print render($page['department_name_tier_2']);?>
      </div>

      <div class="dept-name-right">
        <?php print render($page['department_name_tier_3']);?>
      </div>

    </div>


      <div class="toggle-wrap">
        <span class="menu-expander">Menu<i class="fa fa-bars"></i></span>
        <span class="search-expander"><a href="/search">Search<i class="fa fa-search"></i></a></span>
        <?php if($page['quicklinks_jump']):?>
          <?php print render($page['quicklinks_jump']);?>
        <?php endif; ?>
      </div>
    </div>
  </header>

  <div class="main-menu">
    <?php print render($page['main_menu']);?>
  </div>

  <div class="mobile-menu">
    <?php print render($page['mobile_menu']);?>
  </div>

  <div class="page-image">
    <?php print render($page['page_image']);?>
  </div>

  <?php if($page['callout']):?>
	  <div class="row">
	    <?php print render($page['callout']);?>
	  </div>
  <?php endif;?>

  <div class="main">
    <div class="content" role="main">

      <?php if($page['team']):?>
        <div class="team">
          <?php print render($page['team']);?>
        </div>
      <?php endif;?>

      <?php print render($page['highlighted']); ?>

      <a id="main-content"></a>

      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>

    <?php if($page['sidebar_first']):?>
      <div class="left">
        <?php print render($page['sidebar_first']); ?>
      </div>
    <?php endif;?>

    <?php if($page['sidebar_second']):?>
      <div class="right">
        <?php print render($page['sidebar_second']); ?>
      </div>
    <?php endif;?>



  </div>

  <div class="footer-wrapper">
    <footer class="footer" role="contentinfo">

      <div class="footer">
        <?php print render($page['footer']); ?>
      </div>

    </footer>
  </div>
</div>
