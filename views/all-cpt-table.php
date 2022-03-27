<?php
//$side_nav_menus = $args['side_nav_menus'];

?>
<div class="container-fluid">
    <div class="row mt-2">
        <nav class="navbar navbar-dark bg-primary rounded-2">
            <div class="container-fluid">
                <h2 class="navbar-brand">All CPT</h2>
                <form class="d-flex">
                    <?php $addcptUrl = menu_page_url('add-cpt', false); ?>
                    <a href="<?php echo $addcptUrl; ?>">
                        <button class="btn btn-secondary" type="button">Add New</button>
                    </a>
                </form>
            </div>
        </nav>
    </div>

    <div class="row mt-4">


        <div class="col-12">


            <?php

            echo 'hiiii';
            ?>

        </div>

    </div>

</div>