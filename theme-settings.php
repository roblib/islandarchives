<?php

/**
 * @file
 * Theme settings file for the islandarchives theme.
 */

require_once dirname(__FILE__) . '/template.php';

/**
 * Implements hook_form_FORM_alter().
 */
function islandarchives_form_system_theme_settings_alter(&$form, $form_state) {
  $default_file_dir = 'public://';
  $folder = file_prepare_directory($default_file_dir, FILE_CREATE_DIRECTORY);
  $settings_theme = $form_state['build_info']['args'][0];

  if ($folder) {
    $new_logo = theme_get_setting('new_logo');
    // BUG: Force file to be permanent.
    if (!empty($new_logo)) {
      _fix_permanent_image('new_logo', $settings_theme);
    }
    $form['new_logo'] = array(
      '#type'               => 'managed_file',
      '#title'              => t('New Logo'),
      '#description' => t("Image should be less than 400 pixels wide and in PNG format."),
      '#default_value'      => $new_logo,
      '#progress_message'   => t('Please wait...'),
      '#progress_indicator' => 'bar',
      '#upload_location'    => $default_file_dir,
      '#upload_validators'  => array(
        'file_validate_extensions' => array('png')
      ),
    );
  }
}

function _fix_permanent_image($image, $theme) {
  $fid = theme_get_setting($image, $theme);
  if ($fid > 0) {
    $file = file_load($fid);
    if (is_object($file) && $file->status == 0) {
      $file->status = FILE_STATUS_PERMANENT;
      file_save($file);
      file_usage_add($file, $theme, 'theme', 1);
      drupal_set_message($image . ' saved permanently.', 'status');
    }
  }
}
