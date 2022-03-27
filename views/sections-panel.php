<?php

$menuid = $args['menuid'];

//$menutitle = $args['menutitle'];

$active_class = ($menuid === 'topt-menu-0' ? 'active' : '');



echo '<div class="tab-pane fade show ' . $active_class . '" id="list-' . $menuid . '" role="tabpanel" aria-labelledby="list-' . $menuid . '-list">';



?>






<form method="post" action="options.php">

    <?php




    settings_fields('topt_section_options_group');
    ?>

    <div class="row g-3">

        <?php



        $sectionsargs = Section_Args::$section_args_fields;

        foreach ($sectionsargs as $key => $value) {
            echo topt_section($value);
        }





        ?>





        <div class="d-grid gap-2 d-md-block">

            <input type="submit" name="submit" id="submit" class="btn btn-primary btn-lg mt-3" value="Save Changes">

        </div>

    </div>



</form>

</div>