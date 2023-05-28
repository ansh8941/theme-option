<?php

/**
 * Plugin Name: Theme Options
 * Description:Manage Your Theme
 * Version: 1.1.7
 * Author: Himanshu Raghav
 */



if (!defined('ABSPATH')) exit; // Exit if accessed directly

include_once(ABSPATH . 'wp-includes/pluggable.php');

define('PLUGIN_DIR_PATH', plugin_dir_path(__FILE__));

require_once PLUGIN_DIR_PATH . 'enqueue_scripts.php';

require_once PLUGIN_DIR_PATH . 'inc/admin_menus.php';

 require_once PLUGIN_DIR_PATH . 'custom.php';




 







function topt_get_view_part($slug, $name = null, $args = array())
{

    if (isset($name) && $name !== 'none') $slug = "{$slug}-{$name}.php";

    else $slug = "{$slug}.php";

    $dir = PLUGIN_DIR_PATH;

    $file = "{$dir}/{$slug}";



    ob_start();

    $args = wp_parse_args($args);

    $slug = $dir = $name = null;

    require($file);

    echo ob_get_clean();
}





function topt_contact_info_settings()
{

    add_option('topt_contact_info_webemail', '');

    register_setting('topt_contacts_options_group', 'topt_contact_info_webemail', 'topt_contact_callback');



    add_option('topt_contact_info_address', '');

    register_setting('topt_contacts_options_group', 'topt_contact_info_address', 'topt_contact_callback');



    add_option('topt_contact_info_phone', '');

    register_setting('topt_contacts_options_group', 'topt_contact_info_phone', 'topt_contact_callback');







    add_option('topt_social_info_pinterest', '');

    register_setting('topt_contacts_options_group', 'topt_social_info_pinterest', 'topt_contact_callback');



    add_option('topt_social_info_facebook', '');

    register_setting('topt_contacts_options_group', 'topt_social_info_facebook', 'topt_contact_callback');



    add_option('topt_social_info_instagram', '');

    register_setting('topt_contacts_options_group', 'topt_social_info_instagram', 'topt_contact_callback');



    add_option('topt_social_info_twitter', '');

    register_setting('topt_contacts_options_group', 'topt_social_info_twitter', 'topt_contact_callback');

    add_option('topt_social_info_youtube', '');

    register_setting('topt_contacts_options_group', 'topt_social_info_youtube', 'topt_contact_callback');
}

add_action('admin_init', 'topt_contact_info_settings');







function topt_api_register_settings()
{

    add_option('topt_fb_api_key', '');

    register_setting('topt_api_options_group', 'topt_fb_api_key', 'topt_api_callback');



    add_option('topt_fb_api_secret', '');

    register_setting('topt_api_options_group', 'topt_fb_api_secret', 'topt_api_callback');



    add_option('topt_google_api_key', '');

    register_setting('topt_api_options_group', 'topt_google_api_key', 'topt_api_callback');



    add_option('topt_google_client_id', '');

    register_setting('topt_api_options_group', 'topt_google_client_id', 'topt_api_callback');



    add_option('topt_google_client_secret', '');

    register_setting('topt_api_options_group', 'topt_google_client_secret', 'topt_api_callback');
}

add_action('admin_init', 'topt_api_register_settings');

class Section_Args
{
    // Add additional Arrays to dynamically create more inputs. That's it!
    static $section_args_fields = array(
        'min_price' => array(
            'label' => 'Minimum Price Banner',
            'field_image_url' => 'topt_minimum_price_banner_image',
        ),
        'feature_cat' => array(
            'label' => 'Featured Categories',
            'field_title_id' => 'topt_featured_cat_title',
            'field_desc_id' => 'topt_featured_cat_desc'
        ),
        'our_collection' => array(
            'label' => 'Our Collections',
            'field_title_id' => 'topt_our_collection_title'
        ),

    );
}

function sections_register_settings()
{
    $sectionsargs = Section_Args::$section_args_fields;
    foreach ($sectionsargs as $arrkey => $valuearr) {
        foreach ($valuearr as $key => $value) {

            if ($value != 'label') {

                register_setting('topt_section_options_group', $value);
            }
        }
    }
}

add_action('admin_init', 'sections_register_settings');



function topt_section($args)
{



    $div = '<div class="col-12">

      <div class="card m-0 p-0 mw-100">

          <h5 class="card-header">' . $args['label'] . '</h5>

          <div class="card-body">';



    if (array_key_exists("field_title_id",$args) && $args['field_title_id'] != '') {

        $div .= '<div class="row mb-3">

                  <label for="' . $args['field_title_id'] . '" class="col-sm-2 col-form-label">Title</label>

                  <div class="col-sm-10">

                      <input type="text" class="form-control" id="' . $args['field_title_id'] . '"

                          name="' . $args['field_title_id'] . '" placeholder="Title"

                          value="' . get_option($args['field_title_id']) . '" />

                  </div>

              </div>';
    }



    if (array_key_exists("field_desc_id",$args) && $args['field_desc_id'] != '') {

        $div .= '<div class="row mb-3">

                  <label for="' . $args['field_desc_id'] . '" class="col-sm-2 col-form-label">Description</label>

                  <div class="col-sm-10">

                      <input type="text" class="form-control" id="' . $args['field_desc_id'] . '"

                          name="' . $args['field_desc_id'] . '" placeholder="Description"

                          value="' . get_option($args['field_desc_id']) . '" />

                  </div>

              </div>';
    }


    if (array_key_exists("field_image_url",$args) && $args['field_image_url'] != '') {

        $div .= '<div class="row mb-3">

                  <label for="' . $args['field_image_url'] . '" class="col-sm-2 col-form-label">Image URL</label>

                  <div class="col-sm-10">

                      <input type="text" class="form-control" id="' . $args['field_image_url'] . '"

                          name="' . $args['field_image_url'] . '" placeholder="Url"

                          value="' . get_option($args['field_image_url']) . '" />

                  </div>

              </div>';
    }


    if (array_key_exists("field_scode_id",$args) && $args['field_scode_id'] != '') {

        $div .= '<div class="row mb-3">

                  <label for="' . $args['field_scode_id'] . '" class="col-sm-2 col-form-label">Shortcode</label>

                  <div class="col-sm-10">

                      <input type="text" class="form-control" id="' . $args['field_scode_id'] . '"

                          name="' . $args['field_scode_id'] . '" placeholder="Shortcode"

                          value="' . get_option($args['field_scode_id']) . '" />

                  </div>

              </div>';
    }



    $div .= '</div>

      </div>

  </div>';



    return $div;
}
