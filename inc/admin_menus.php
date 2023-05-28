<?php

add_action('admin_menu', 'topt_settings');


function topt_settings()
{

  //creecho ate new top-level menu

  add_menu_page('Theme Options', 'Theme Options', 'administrator', 'topt_page', 'topt_display_settings');

  // add_submenu_page( 'topt_page', 'CPT', 'CPT', 'manage_options', 'topt_cpt', 'topt_cpt_settings');

  // add_submenu_page( null, 'Add New CPT', 'Add CPT', 'manage_options', 'add-cpt', 'add_cpt_function');   

}



function topt_display_settings()
{

  $data['side_nav_menus'] = array('Contact Info', 'Sections', 'API Keys');

  topt_get_view_part('views/settings', null, $data);
}



function topt_cpt_settings()
{

  // $data['side_nav_menus'] = array('Contact Info', 'Sections');

  topt_get_view_part('views/all-cpt-table');
}



function add_cpt_function()
{

  topt_get_view_part('views/cpt-settings');
}
