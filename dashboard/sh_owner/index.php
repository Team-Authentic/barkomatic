<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" class="">

<head>
    <?php require "./resources/templates/_dashboard-head.php"; ?>
</head>

<body class="pt-0">
    <div id="app">
        <?php require "./resources/templates/_dashboard-top-nav.php"; ?>
        <?php require "./resources/templates/_dashboard-aside-nav-left.php"; ?>
        <section class="section main-section ">
            <?php 
                if($_GET['page'] == 'dashboard') {
                    require "./resources/templates/_dashboard_landing.php";
                }

                if($_GET['page'] == 'assign-employee') {
                    require "./resources/templates/_dashboard_emplyee_assign_task.php";
                }

                if($_GET['page'] == 'passengers') {
                    require "./resources/templates/_dashboard_passengers-list.php";
                }

                if($_GET['page'] == 'my_subscription') {
                    require "./resources/templates/_dashboard_my-subscription.php";
                }

                if($_GET['page'] == 'discounts') {
                    require "./resources/templates/_dashboard_discount.php";
                }

                if($_GET['page'] == 'promo') {
                    require "./resources/templates/_dashboard_promo.php";
                }

                if($_GET['page'] == 'profile') {
                    require "./resources/templates/_dashboard_profile.php";
                }
            ?>
        </section>
    </div>
    <script type="text/javascript" src="resources/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="resources/js/popper.min.js"></script>
    <script type="text/javascript" src="resources/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="resources/js/main.min.js?v=1628755089081"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script type="text/javascript" src="resources/js/chart.sample.min.js"></script>
    <script type="text/javascript" src="resources/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="resources/js/create-account-assign-role/sh_owner-assign-task.js"></script>
</body>

</html>