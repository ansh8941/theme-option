<?php

add_action('admin_enqueue_scripts', 'topt_scripts');

function topt_scripts($hook)
{  //echo $hook;
  if (
    $hook != 'toplevel_page_topt_page' &&
    $hook != 'howdoin_page_topt_cpt' &&
    $hook != 'admin_page_add-cpt'
  ) {
    return;
  }

  wp_enqueue_style('topt-bootstrap-min-css', plugin_dir_url(__FILE__) . 'css/bootstrap.min.css', array(), 20141119);
  wp_enqueue_style('topt-top-css', plugin_dir_url(__FILE__) . 'css/toptcss.css', array(), 20141119);
  wp_enqueue_script('topt-bootstrap-min-js', plugin_dir_url(__FILE__) . 'js/bootstrap.min.js', array('jquery'), '20120206', true);
  wp_register_script('topt_toptjs', plugins_url('js/topt.js', __FILE__));
  wp_enqueue_script('topt_toptjs');
  wp_localize_script('topt_toptjs', 'Purl', array('pluginUrl' => plugins_url('', __FILE__)));
}


add_action('wp_enqueue_scripts', 'topt_theme_scripts');

function topt_theme_scripts($hook)
{

  wp_enqueue_script('topt_theme', plugins_url('js/topt_theme.js', __FILE__), array('jquery'), _S_VERSION, true);
  wp_enqueue_script('topt_google_api', 'https://apis.google.com/js/platform.js?onload=renderButton', array('topt_theme'), _S_VERSION, true);
  $temp_params = array(
    'pluginUrl' => plugins_url('', __FILE__),
    'siteurl' => site_url()
  );
  wp_localize_script('topt_theme', 'Purl', $temp_params);
}
