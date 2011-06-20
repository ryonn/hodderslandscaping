<?php

/* Drupal 6 methods definitons */

/**
 * Override or insert PHPTemplate variables into the templates.
 */
function phptemplate_preprocess_page(&$vars) {
  $vars['tabs'] = '';    
  $primary = menu_primary_local_tasks();
  if (!empty($primary)) {
    $vars['tabs'] = '<ul class="arttabs_primary">'.$primary.'</ul>';
  }
  
  $vars['tabs2'] = '';
  $secondary = menu_secondary_local_tasks();
  if (!empty($secondary)) {
    $vars['tabs2'] = '<ul class="arttabs_secondary">'.$secondary.'</ul>';
  }
  
  // Hook into color.module
  if (module_exists('color')) {
    _color_page_alter($vars);
  }
}

/**
 * Generate the HTML output for a single local task link.
 *
 * @ingroup themeable
 */
 
function drupal_theme_61_menu_local_task($link, $active = FALSE) {
  $active_class = "";
  if ($active) {
    $active_class .= "active ";
  }
  $output = preg_replace('~<a href="([^"]*)"[^>]*>([^<]*)</a>~',
    '<span class="'.$active_class.'art-button-wrapper">'.
    '<span class="l"></span>'.
    '<span class="r"></span>'.
    '<a href="$1" class="'.$active_class.'art-button">$2</a></span>', $link);
  return '<li>'.$output.'</li>';
}

function drupal_theme_61_comment_wrapper($content, $type = null) {
  return art_comment_woker($content, $type = null);
}
