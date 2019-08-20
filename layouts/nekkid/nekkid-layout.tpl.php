<?php

/**
* set variables for pulling block in directly
*/
////#######################################################################
//$simpleSearch = module_invoke('islandora_solr', 'block_view', 'simple');
//$mainMenu = module_invoke('menu_block', 'block_view', '1');
////#######################################################################

//image path
$image_path = drupal_get_path('theme', 'islandimagined') . '/images/';


?>

<div<?php print $attributes; ?>>
  <div class="nav-wrapper">

    <nav class="topnav" role="navigation">
      <div class="site-branding">
        <!--<?php if ($logo): ?>-->
        <!--<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-branding__logo">-->
        <!--<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />-->
        <!--</a>-->
        <!--<?php endif; ?>-->

        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-branding__logo">

          <?php echo file_get_contents( $image_path . "upei.svg"); ?>
        </a>

        <?php if ($site_name): ?>
        <a href="<?php print $front_page; ?>" class="site-branding__name" title="<?php print t('Home'); ?>" rel="home">IslandArchives </a>
        <?php endif; ?>
        <?php if ($site_slogan): ?>
        <h2 class="site-branding__slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
      </div>
      <?php print render($page['navigation']); ?>

    </nav>

  </div>
  <header class="l-header l-constrained" role="banner">
    <!--site branding-->

    <div class="site-name__container">
      <div class="site-name__icon">

        <?php echo file_get_contents( $image_path . "compass.svg"); ?>

      </div>

      <?php if ($site_name): ?>
      <h1>
        <a href="<?php print $front_page; ?>" class="site-name" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
      </h1>
      <?php endif; ?>

      <div class="site-name__icon">
        <?php echo file_get_contents( $image_path . "compass.svg"); ?>
      </div>
    </div>
    <?php if ($site_slogan): ?>
    <h2 class="site-branding__slogan"><?php print $site_slogan; ?></h2>
    <?php endif; ?>
    <!--/site branding-->






    <?php print render($page['header']); ?>
  </header>

  <?php print render($page['hero']); ?>
  <?php print render($page['branding']); ?>

  <?php if (!empty($page['highlighted'])): ?>
  <div class="l-highlighted-wrapper">
    <?php print render($page['highlighted']); ?>
  </div>
  <?php endif; ?>

  <div class="l-main l-constrained">
    <?php print $breadcrumb; ?>
    <a id="main-content"></a>

    <div class="l-content" role="main">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
      <h1 class="pageTitle"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($page['help']); ?>
      <?php print render($tabs); ?>
      <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>

    <?php print render($page['sidebar_first']); ?>
    <?php print render($page['sidebar_second']); ?>
  </div>

  <footer class="l-footer-wrapper" role="contentinfo">

    <div class="footer-logos">
    <?php print render($page['footer']); ?>
    </div>
    <div class="subfooter">
    </div>

  </footer>
</div>
