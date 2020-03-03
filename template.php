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
function islandarchives_menu_tree__main_menu(&$variables) {
    return '<ul class="main-menu__items dropdown menu" data-dropdown-menu>' . $variables['tree'] . '</ul>';
}
function islandarchives_menu_tree__menu_block__1(&$variables) {
    return '<ul class="main-menu__items dropdown menu" data-dropdown-menu>' . $variables['tree'] . '</ul>';
}
//main menu (top) using the menu block module
function islandarchives_menu_tree__menu_block__2(&$variables) {
    return '<ul class="main-menu__items dropdown menu" data-dropdown-menu>' . $variables['tree'] . '</ul>';
}

function islandarchives_form_alter(&$form, &$form_state, $form_id) {
	// target a single form
	if($form_id == "islandora_solr_simple_search_form"){
		$form['simple']['islandora_simple_search_query']['#default_value'] = t('Search the archives...'); // Set a default value for the textfield
		$form['simple']['islandora_simple_search_query']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search the archives...';}";
		$form['simple']['islandora_simple_search_query']['#attributes']['onfocus'] = "if (this.value == 'Search the archives...') {this.value = '';}";
	}
}


