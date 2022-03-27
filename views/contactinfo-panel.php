<?php

$menuid = $args['menuid'];

//$menutitle = $args['menutitle'];

$active_class = ($menuid === 'topt-menu-0' ? 'active' : '');



echo '<div class="tab-pane fade show ' . $active_class . '" id="list-' . $menuid . '" role="tabpanel" aria-labelledby="list-' . $menuid . '-list">';



?>

<form method="post" action="options.php">

    <?php settings_fields('topt_contacts_options_group'); ?>



    <div class="row g-3">



        <div class="col-12">

            <div class="card m-0 p-0 mw-100">

                <h5 class="card-header">Contact Info</h5>

                <div class="card-body">

                    <div class="row g-3">

                        <div class="col-md-6">

                            <label for="topt_contact_info_webemail" class="form-label">Website

                                Email</label>

                            <input type="email" class="form-control" id="topt_contact_info_webemail" name="topt_contact_info_webemail" placeholder="Website Email" value="<?php echo get_option('topt_contact_info_webemail'); ?>" />

                        </div>



                        <div class="col-md-6">

                            <label for="topt_contact_info_phone" class="form-label">Website

                                Phone</label>

                            <input type="text" class="form-control" id="topt_contact_info_phone" name="topt_contact_info_phone" placeholder="Website Phone" value="<?php echo get_option('topt_contact_info_phone'); ?>" />

                        </div>



                        <div class="col-md-12">

                            <label for="topt_contact_info_address" class="form-label">Address</label>

                            <input type="text" class="form-control" id="topt_contact_info_address" name="topt_contact_info_address" placeholder="Address" value="<?php echo get_option('topt_contact_info_address'); ?>" />



                        </div>

                    </div>





                </div>

            </div>

        </div>



        <div class="col-12">

            <div class="card m-0 p-0 mw-100">

                <h5 class="card-header">Social Info</h5>

                <div class="card-body">

                    <div class="row g-3">

                        <div class="col-md-12">

                            <label for="topt_social_info_facebook" class="form-label">Facebook</label>

                            <input type="text" class="form-control" id="topt_social_info_facebook" name="topt_social_info_facebook" placeholder="Facebook" value="<?php echo get_option('topt_social_info_facebook'); ?>" />

                        </div>



                        <div class="col-md-12">

                            <label for="topt_social_info_instagram" class="form-label">Instagram</label>

                            <input type="text" class="form-control" id="topt_social_info_instagram" name="topt_social_info_instagram" placeholder="Instagram" value="<?php echo get_option('topt_social_info_instagram'); ?>" />

                        </div>



                        <div class="col-md-12">

                            <label for="topt_social_info_pinterest" class="form-label">Pinterest</label>

                            <input type="text" class="form-control" id="topt_social_info_pinterest" name="topt_social_info_pinterest" placeholder="Pinterest" value="<?php echo get_option('topt_social_info_pinterest'); ?>" />

                        </div>



                        <div class="col-md-12">

                            <label for="topt_social_info_twitter" class="form-label">Twitter</label>

                            <input type="text" class="form-control" id="topt_social_info_twitter" name="topt_social_info_twitter" placeholder="Twitter" value="<?php echo get_option('topt_social_info_twitter'); ?>" />

                        </div>


                        <div class="col-md-12">

                            <label for="topt_social_info_twitter" class="form-label">You Tube</label>

                            <input type="text" class="form-control" id="topt_social_info_youtube" name="topt_social_info_youtube" placeholder="You Tube" value="<?php echo get_option('topt_social_info_youtube'); ?>" />

                        </div>

                    </div>





                </div>

            </div>

        </div>





        <div class="d-grid gap-2 d-md-block">

            <input type="submit" name="submit" id="submit" class="btn btn-primary btn-lg mt-3" value="Save Changes">

        </div>



    </div>



</form>

</div>