<?php
/**
 * @file
 * Default theme implementation for beans.
 *
 * Available variables:
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $title: The (sanitized) entity label.
 * - $url: Direct url of the current entity if specified.
 * - $page: Flag for the full page state.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-{ENTITY_TYPE}
 *   - {ENTITY_TYPE}-{BUNDLE}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
//dpm($content);
$imgPath = file_create_url($content['field_image'][0]['#item']['uri']);
$image_path = drupal_get_path('theme', 'islandimagined') . '/images/';
?>

<div data-equalizer-watch class="card <?php print $classes; ?>">

  <div class="card-divider">

<span class="card_icon">
  <?php echo file_get_contents( $image_path . "ships-wheel_line.svg"); ?>
</span>
    <h2>
      <?php print $title; ?>
    </h2>
  </div>

  <img src="<?php print $imgPath; ?>">

  <div class="card-section">
    <?php print $content['field_body'][0]['#markup']; ?>
  </div>
</div>
