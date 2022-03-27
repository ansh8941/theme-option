<?php
$menuid = $args['menuid'];
//$menutitle = $args['menutitle'];
$active_class = ($menuid === 'topt-menu-0' ? 'active' : '');

echo '<div class="tab-pane fade show ' . $active_class . '" id="list-' . $menuid . '" role="tabpanel" aria-labelledby="list-' . $menuid . '-list">';

?>
<form method="post" action="options.php">
    <?php settings_fields('topt_api_options_group'); ?>

    <div class="row g-3">

        <div class="col-12">
            <div class="card m-0 p-0 mw-100">
                <h5 class="card-header">Facebook</h5>
                <div class="card-body">

                    <div class="row mb-3">
                        <label for="topt_fb_api_key" class="col-sm-2 col-form-label">API KEY</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="topt_fb_api_key" name="topt_fb_api_key" placeholder="API KEY" value="<?php echo get_option('topt_fb_api_key'); ?>" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="topt_fb_api_secret" class="col-sm-2 col-form-label">API
                            SECRET</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="topt_fb_api_secret" name="topt_fb_api_secret" placeholder="API SECRET" value="<?php echo get_option('topt_fb_api_secret'); ?>" />
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="col-12">
            <div class="card m-0 p-0 mw-100">
                <h5 class="card-header">Google</h5>
                <div class="card-body">

                    <div class="row mb-3">
                        <label for="topt_google_api_key" class="col-sm-2 col-form-label">API
                            KEY</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="topt_google_api_key" name="topt_google_api_key" placeholder="API KEY" value="<?php echo get_option('topt_google_api_key'); ?>" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="topt_google_client_id" class="col-sm-2 col-form-label">Client
                            ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="topt_google_client_id" name="topt_google_client_id" placeholder="Client ID" value="<?php echo get_option('topt_google_client_id'); ?>" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="topt_google_client_secret" class="col-sm-2 col-form-label">Client SECRET</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="topt_google_client_secret" name="topt_google_client_secret" placeholder="Client SECRET" value="<?php echo get_option('topt_google_client_secret'); ?>" />
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