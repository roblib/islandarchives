<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * islandarchives theme.
 */


//######################
// Manipulation of menus
//######################


//main menu (top) using the menu block module
function islandarchives_menu_tree__menu_block__1(&$variables) {
    return '<ul class="main-menu__items dropdown menu" data-dropdown-menu>' . $variables['tree'] . '</ul>';
}
//main menu (top) using the menu block module
function islandarchives_menu_tree__menu_block__2(&$variables) {
    return '<ul class="main-menu__items dropdown menu" data-dropdown-menu>' . $variables['tree'] . '</ul>';
}

function islandarchives_menu_local_tasks(&$variables) {
  if (!path_is_admin(current_path())) {
    $output = '';

    if (!empty($variables['primary'])) {
      $variables['primary']['#prefix'] = '<div class="config-dropdown">';
			//$variables['primary']['#prefix'] .= '<span class="config-dropdown__button js-config-dropdown__button"><i class="fa fa-cogs" aria-hidden="true"></i> </span>';
      $variables['primary']['#prefix'] .= '<button class="small button config-dropdown__button hover float-right" type="button" data-toggle="config-dropdown"><i class="fi-list"></i><span>&nbsp;Edit</span></button>';
      $variables['primary']['#prefix'] .= '<h2 class="element-invisible">' . t('Configuration Menu') . '</h2>';
      $variables['primary']['#prefix'] .= '<ul class="config-dropdown__menu bottom menu vertical dropdown-pane" id="config-dropdown" data-dropdown data-auto-focus="true">';
      $variables['primary']['#suffix'] = '</ul>';
      $variables['primary']['#suffix'] .= '</div><!--end config dropdown menu-->';
      $output .= drupal_render($variables['primary']);
    }

    return $output;
  }
}

function islandarchives_menu_local_task($variables) {
  if (!path_is_admin(current_path())) {   $link = $variables['element']['#link'];
  $link_text = $link['title'];

  if (!empty($variables['element']['#active'])) {
    // Add text to indicate active tab for non-visual users.
    $active = '<span class="element-invisible">' . t('(active tab)') . '</span>';

    // If the link does not contain HTML already, check_plain() it now.
    // After we set 'html'=TRUE the link will not be sanitized by l().
    if (empty($link['localized_options']['html'])) {
      $link['title'] = check_plain($link['title']);
    }
    $link['localized_options']['html'] = TRUE;
    $link_text = t('!local-task-title!active', array('!local-task-title' => $link['title'], '!active' => $active));
  }

  return '<li class="config-dropdown__menu__item' . (!empty($variables['element']['#active']) ? ' active' : '') . '">' . l($link_text, $link['href'], $link['localized_options']) . "</li>\n";


  }
}

function islandarchives_form_alter(&$form, &$form_state, $form_id) {
	// target a single form
	if($form_id == "islandora_solr_simple_search_form"){
		$form['simple']['islandora_simple_search_query']['#default_value'] = t('Search IslandScholar:'); // Set a default value for the textfield
		$form['simple']['islandora_simple_search_query']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search IslandScholar:';}";
		$form['simple']['islandora_simple_search_query']['#attributes']['onfocus'] = "if (this.value == 'Search IslandScholar:') {this.value = '';}";
	}
}
