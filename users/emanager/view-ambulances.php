<?php

/**
 * Can access direcly by URL
 */

define("_DIRECT_ACCESS", true);

?>

<?php require_once dirname(__FILE__, 3) . "/helper/functions.php"; ?>

<?php

if (!_get_is_logged_in()) {
    header("Location: " . _get_url("login.php"));
    exit();
}

if (_get_session_val('utype') != "emanager") {
    header("Location: " . _get_url("dashboard/dashboard.php"));
    exit();
}

// $users = isset($messages['data']['users']) ? $messages['data']['users'] : [];

// if(!isset($messages['data']['users']) && empty($users)) {
//     // require_once _ROOT_DIR . "model/UserModel.php";

//     // $users = _view_users();
// }

?>

<?php header_section("EMS | View Ambulances"); ?>

<main class="container py-2 my-3 border">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">View Ambulances</h1>
        </div>
    </div>

    <hr>

    <div class="row d-flex justify-content-center align-items-center">
        <div class="row">

            <?php if (_get_is_logged_in()) side_menu(); ?>

            <div class="col-md-<?php echo _get_is_logged_in() ? "9" : "12"; ?>">

            </div>

        </div>
    </div>
</main>

<?php footer_section(); ?>