<?php

function topt_social_buttons($type) {
  extract(shortcode_atts(array(
      'type' => 'type'
  ), $type));
  
  // check what type user entered
  switch ($type) {
      case 'facebook':
          return '<div class="social"><a href="' .plugins_url().'/api/fb/fb.php"><div class="loginBtn loginBtn--facebook">Login with Facebook</div></a></div>';
          break;
      case 'google':
          return '<div onclick="ClickLogin()" id="my-signin2"></div>';
          break;
  }
}
add_shortcode('topt_scode_social_button', 'topt_social_buttons');












function add_meta_tags() {
echo '<meta name="google-signin-client_id" content="'.get_option('hwd_google_client_id').'">';
}
add_action('wp_head', 'add_meta_tags');








// Creating the widget 
class subscribe_widget extends WP_Widget {

function __construct() {
parent::__construct(

// Base ID of your widget
'subscribe_widget', 

// Widget name will appear in UI
__('Subscriber Widget', 'subscribe_widget_domain'), 

// Widget description
array( 'description' => __( 'Subscriber Widget', 'subscribe_widget_domain' ), ) 
);
}

// Creating widget front-end

public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
$text = $instance['text'];

// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
if ( ! empty( $text ) )
echo '<div class="textwidget"><p><span style="color: #a9a9a9;">' . $text . '</span></p></div>';

// This is where you run the code and display the output
echo '<div class="widget qodef-contact-form-7-widget ">
            <div role="form" class="wpcf7" id="wpcf7-f800-o1" lang="en-US" dir="ltr">
              <div class="mc4wp-response"> </div>
              <form action=" " method="post" class="wpcf7-form cf7_custom_style_3" novalidate="novalidate">

                <div class="qodef-custom-nlf-footer">
                  <div class="qodef-grid-row qodef-grid-normal-gutter">
                    <div>
                      <span class="qodef-newsletter-icon qodef-newsletter-name-icon tloon-icon-user"></span>
                      <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" id="subs_username" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name"></span>
                    </div>
                    <div>
                      <span class="qodef-newsletter-icon qodef-newsletter-email-icon tloon-icon-mail-alt"></span><span class="wpcf7-form-control-wrap your-email"><input type="email" id="subs_email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email"></span>
                    </div>
                  </div>
                  <p><input id="subscribeBtn" type="button" value="Subscribe" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></p>
                  </div>
                </form>
              </div>
            </div>';

echo $args['after_widget'];
}
        
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) { $title = $instance[ 'title' ]; } else { $title = __( 'New title', 'subscribe_widget_domain' ); }
// Widget admin form
$text = ! empty( $instance['text'] ) ? $instance['text'] : 'Description After Title';

?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id( 'text'); ?>">Description After Title:</label>
<input class="widefat" type="text" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>" value="<?php echo esc_attr( $text ); ?>" />
</p>
<?php 
}
    
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['text'] = ( ! empty( $new_instance['text'] ) ) ? strip_tags( $new_instance['text'] ) : '';

return $instance;
}

// Class subscribe_widget ends here
} 


// Register and load the widget
function topt_load_widget() {
  register_widget( 'subscribe_widget' );
}
add_action( 'widgets_init', 'topt_load_widget' );








function topt_contactus_form($type) {
  extract(shortcode_atts(array(
      'type' => 'type'
  ), $type));
  
  // check what type user entered
  switch ($type) {
      case 'contact':
          return '<div class="qodef-row-grid-section-wrapper contactus-form">
          <div class="qodef-row-grid-section">
         <div class="vc_custom_1536660598404">
<div class="heading">
<h3><span style="color: #ffffff;">Leave a Reply</span></h3>
</div>

<form action="#" method="post" class="cf7_custom_style_1">

 <textarea name="your-message" id="sc_contact_form_message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message*"></textarea><p></p>
<div class="qodef-grid-row qodef-grid-tiny-gutter">
<div class="qodef-grid-col-6">
<span class="qodef-cf-icon qodef-cf-email-icon icon_mail_alt"></span><span class="wpcf7-form-control-wrap your-email">
<input type="email" id="cont_email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email*"></span>
</div>
<div class="qodef-grid-col-6">
<span class="qodef-cf-icon qodef-cf-name-icon icon_profile"></span><span class="wpcf7-form-control-wrap your-name">
<input id="cont_username" type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name*"></span>
</div>
</div>
<div class="btn-div"><input type="button" onclick="mail('."'".'contact'."'".')" value="Send" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span>
</div> 
<div class="wpcf7-response-output wpcf7-display-none"></div>
</form>


</div>
</div>
</div>';
          break;
      case 'subscribe':
          return 'no form';
          break;
  }
}
add_shortcode('topt_scode_contactus_form', 'topt_contactus_form');



$product_metabox = new Hwd_Metabox( 'Booking Additional Information', 'book_add_info', array( 'product' ) );

$product_metabox->add_field(
	array(
		'name' => 'tour_details',
		'title' => 'Details',
    'type' => 'wpeditor',
		'desc' => 'Details' ));

$product_metabox->add_field(
	array(
		'name' => 'tour_destination',
		'title' => 'Destination',
		'desc' => 'India,France,Peris' ));

    $product_metabox->add_field(
      array(
        'name' => 'tour_departure',
        'title' => 'Departure',
        'desc' => 'Main Square, Old Town' ));

        $product_metabox->add_field(
          array(
            'name' => 'tour_included',
            'title' => 'Included',
            'desc' => 'Airport Transfer, Breakfast, Personal Guide' ));

            $product_metabox->add_field(
              array(
                'name' => 'tour_notincluded',
                'title' => 'Not Included',
                'desc' => 'Airport Transfer, Breakfast, Personal Guide' ));



                $tour_plan_metabox = new Hwd_Metabox( 'Tour Plan', 'tour_plan', array( 'product' ) );

                for ($i=1; $i < 6; $i++) { 
                  $tour_plan_metabox->add_field(
                    array(
                      'name' => 'tour_days'.$i,
                      'title' => 'Day '.$i,
                      'type' => 'textarea',
                      'desc' => 'Days Description' ));
                }
               
