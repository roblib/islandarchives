<?php

/**
* set variables for pulling block in directly
*/
////#######################################################################
//$simpleSearch = module_invoke('islandora_solr', 'block_view', 'simple');
//$mainMenu = module_invoke('menu_block', 'block_view', '1');
////#######################################################################

//image path
$image_path = drupal_get_path('theme', 'islandarchives') . '/images/';


?>

<style>
</style>
<div<?php print $attributes; ?>>


<div id="offcanvas-full-screen" class="offcanvas-full-screen" data-off-canvas data-transition="overlap">
  <div class="offcanvas-full-screen-inner">
    <button class="offcanvas-full-screen-close" aria-label="Close menu" type="button" data-close>
      <span aria-hidden="true">&times;</span>
    </button>

    <ul class="offcanvas-full-screen-menu">
      <li><a href="#">Home</a></li>
      <li><a href="#">About us</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact us</a></li>
    </ul>

      <?php print render($page['navigation']); ?>
  </div>
</div>

<div class="off-canvas-content" data-off-canvas-content>
  <div class="top-bar">

			<div class="top-bar-title site-branding">
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

    <div class="top-bar-right">
      <button class="menu-icon dark" type="button" data-toggle="offcanvas-full-screen"></button>
      <?php print render($page['navigation']); ?>
    </div>
  </div>
</div>





  <div class="nav-wrapper">
    <nav class="topnav" role="navigation">
      <div class="site-branding">
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

<!--bottom stuff removed-->


</div>
