<?php
$side_nav_menus = $args['side_nav_menus'];

?>
<div class="container-fluid">
    <div class="row mt-2">
        <nav class="navbar navbar-dark bg-primary rounded-2">
            <div class="container-fluid">
                <h2 class="navbar-brand">Theme Settings</h2>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-secondary" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>

    <div class="row mt-4">

        <div class="col-3">
            <div class="list-group" id="list-tab" role="tablist">
                <?php
                foreach ($side_nav_menus as $key => $menutitle) {
                    $nav_id = 'topt-menu-' . $key;
                    $active_class = ($nav_id === 'topt-menu-0' ? 'active' : '');
                    echo '<a class="list-group-item list-group-item-action ' . $active_class . '" id="list-' . $nav_id . '-list" data-bs-toggle="list"
    href="#list-' . $nav_id . '" role="tab" aria-controls="list-' . $nav_id . '">' . $menutitle . '</a>';
                }

                ?>
            </div>
        </div>



        <div class="col-9">


            <div class="tab-content" id="nav-tabContent">


                <?php
                foreach ($side_nav_menus as $key => $menutitle) {
                    $data['menuid'] = 'topt-menu-' . $key;
                    $data['menutitle'] = $menutitle;
                    $template_panel = strtolower(str_replace(" ", "", $menutitle));
                    topt_get_view_part('views/' . $template_panel . '-panel', null, $data);
                }
                ?>


            </div>
        </div>

    </div>

</div>