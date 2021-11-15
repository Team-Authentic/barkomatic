<!DOCTYPE html>
<html lang="en" class="">
<head>
    <?php require "./resources/templates/_dashboard-head.php";?>
</head>
<body style="font-family:'Roboto', sans-serif !important;" class="pt-0">
    <div id="app">
        <?php require "./resources/templates/_dashboard-top-nav.php"; ?>
        <?php require "./resources/templates/_dashboard-aside-nav.php"; ?>
        <section class="section main-section">
            <?php 
                if($_GET['page'] == 'dashboard') {
                    require "./resources/templates/_dashboard-landing.php";
                }

                if($_GET['page'] == 'add-schedules') {
                    require "./resources/templates/_dashboard-add-schedule.php";
                }

                if($_GET['page'] == 'passenger-payment') {
                    require "./resources/templates/_dashboard-subscription-plan.php";
                }

                if($_GET['page'] == 'staff-profile-setting') {
                    require "./resources/templates/_dashboard-profile.php";
                }
            ?>
        </section>
    </div>
    <?php  require "./resources/templates/_dashboard-bottom-cdn.php"; ?>
</body>
</html>