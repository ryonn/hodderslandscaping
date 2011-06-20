<?php

/* Drupal 5 methods definitons */

function drupal_theme_61_regions() {
  return array(
'left' => t('Left sidebar'),
    'right' => t('Right sidebar'),
	'content'  => t('Content'),
	'navigation'  => t('Menu'),
	'banner1'  => t('Banner 1'),
	'banner2'  => t('Banner 2'),
	'banner3'  => t('Banner 3'),
	'banner4'  => t('Banner 4'),
	'banner5'  => t('Banner 5'),
	'banner6'  => t('Banner 6'),
	'user1'  => t('User 1'),
	'user2'  => t('User 2'),
	'user3'  => t('User 3'),
	'user4'  => t('User 4'),
	'copyright'  => t('Copyright'),
	'top1' => t('Top 1'),
    'top2' => t('Top 2'),
    'top3' => t('Top 3'),
    'bottom1' => t('Bottom 1'),
    'bottom2' => t('Bottom 2'),
    'bottom3' => t('Bottom 3'));
}

/**
 * Override or insert PHPTemplate variables into the templates.
 */
function _phptemplate_variables($hook, $vars) {
  if ($hook == 'page') {
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
 
    drupal_add_js(path_to_theme() .'/script.js', 'theme');
    $vars['scripts'] = drupal_get_js();
    return $vars;
  }
  return array();
}

function drupal_theme_61_comment_wrapper($content, $type = null) {
  return art_comment_woker($content, $type = null);
}

/**
 * Generate the HTML representing a given menu item ID as a tab.
 *
 * @param $mid
 *   The menu ID to render.
 * @param $active
 *   Whether this tab or a subtab is the active menu item.
 * @param $primary
 *   Whether this tab is a primary tab or a subtab.
 *
 * @ingroup themeable
 */
function drupal_theme_61_menu_local_task($mid, $active, $primary) {
  $active_class = "";
  if ($active) {
    $active_class .= "active ";
  }
  $link = menu_item_link($mid, FALSE);
  $output = '<span class="'.$active_class.'art-button-wrapper">'.
    '<span class="l"></span>'.
    '<span class="r"></span>'.
    '<a href="?q='.$link['href'].'" class="'.$active_class.'art-button">'.$link['title'].'</a></span>';
  return '<li>'.$output.'</li>';
}

