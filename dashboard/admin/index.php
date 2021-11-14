<!DOCTYPE html>
<html lang="en" class="">
<head>
    <?php require "./resources/templates/_dashboard-head.php";?>
</head>
<body>
    <div id="app">
        <?php require "./resources/templates/_dashboard-top-nav.php"; ?>
        <?php require "./resources/templates/_dashboard-aside-nav.php"; ?>
        <section class="is-hero-bar">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                <h1 class="title">
                    <?php 
                        if($_GET['page'] == 'dashboard') {
                            echo 'Dashboard';
                        } else if($_GET['page'] == 'subscriber') {
                            echo 'Subscriber';
                        } else if($_GET['page'] == 'subscription-plan') {
                            echo 'Subscription Plan';
                        }  else if($_GET['page'] == 'profile') {
                            echo 'My Profile';
                        }
                    ?>
                </h1>
            </div>
        </section>
        <section class="section main-section">
            <?php 
                if($_GET['page'] == 'dashboard') {
                    require "./resources/templates/_dashboard-landing.php";
                }

                if($_GET['page'] == 'subscriber') {
                    require "./resources/templates/_dashboard-subscriber.php";
                }

                if($_GET['page'] == 'subscription-plan') {
                    require "./resources/templates/_dashboard-subscription-plan.php";
                }

                if($_GET['page'] == 'profile') {
                    require "./resources/templates/_dashboard-profile.php";
                }
            ?>
        </section>
    </div>
    <script type="text/javascript" src="resources/js/main.min.js?v=1628755089081"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script type="text/javascript" src="resources/js/chart.sample.min.js"></script>
</body>
</html>