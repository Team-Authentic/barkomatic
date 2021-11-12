<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - <?php echo $_SESSION['shipping_name']; ?></title>
    <link rel="stylesheet" href="resources/css/main.css">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.png" />
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
</head>

<body>
    <div id="app">
        <!-- Dashboard Nav Top Start -->
            <?php require "./resources/templates/_dashboard-top-nav.php"; ?>
        <!-- Dashboard Nav Top Start -->

        <!-- Dashboard Nav Aside Left Start -->
            <?php require "./resources/templates/_dashboard-aside-nav-left.php"; ?>
        <!-- Dashboard Nav Aside Left End -->
    
        <!-- Dashboard Hero Bar Start -->
        <section class="is-hero-bar">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                <h1 class="title">
                    Profile
                </h1>
            </div>
        </section>
        <!-- Dashboard Hero Bar End -->

        <!-- Dashboard Main Section Start -->
        <section class="section main-section">
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 mb-6">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            <span class="icon"><i class="mdi mdi-account-circle"></i></span> Edit Profile
                        </p>
                    </header>
                    <div class="card-content">
                        <form>
                            <div class="field">
                                <label class="label">Avatar</label>
                                <div class="field-body">
                                    <div class="field file">
                                        <label class="upload control">
                                            <a class="button blue">
                                            Upload
                                            </a>
                                            <input type="file">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="field">
                                <label class="label">Name</label>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input type="text" autocomplete="on" name="name" value="John Doe" class="input" required>
                                        </div>
                                        <p class="help">Required. Your name</p>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">E-mail</label>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input type="email" autocomplete="on" name="email" value="user@example.com" class="input" required>
                                        </div>
                                        <p class="help">Required. Your e-mail</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="field">
                                <div class="control">
                                    <button type="submit" class="button green">
                                    Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            <span class="icon"><i class="mdi mdi-account"></i></span> Profile
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="image w-48 h-48 mx-auto">
                            <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe" class="rounded-full">
                        </div>
                        <hr>
                        <div class="field">
                            <label class="label">Name</label>
                            <div class="control">
                                <input type="text" readonly value="John Doe" class="input is-static">
                            </div>
                        </div>
                        <hr>
                        <div class="field">
                            <label class="label">E-mail</label>
                            <div class="control">
                                <input type="text" readonly value="user@example.com" class="input is-static">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon"><i class="mdi mdi-lock"></i></span> Change Password
                    </p>
                </header>
                <div class="card-content">
                    <form>
                        <div class="field">
                            <label class="label">Current password</label>
                            <div class="control">
                                <input type="password" name="password_current" autocomplete="current-password" class="input" required>
                            </div>
                            <p class="help">Required. Your current password</p>
                        </div>
                        <hr>
                        <div class="field">
                            <label class="label">New password</label>
                            <div class="control">
                                <input type="password" autocomplete="new-password" name="password" class="input" required>
                            </div>
                            <p class="help">Required. New password</p>
                        </div>
                        <div class="field">
                            <label class="label">Confirm password</label>
                            <div class="control">
                                <input type="password" autocomplete="new-password" name="password_confirmation" class="input" required>
                            </div>
                            <p class="help">Required. New password one more time</p>
                        </div>
                        <hr>
                        <div class="field">
                            <div class="control">
                                <button type="submit" class="button green">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- Dashboard Main Section End -->

        <!-- Dashboard Footer Start -->
        <?php require "./resources/templates/_dashboard-footer.php"; ?>
        <!-- Dashboard Footer End -->
    </div>
    <script type="text/javascript " src="resources/js/main.min.js"></script>
    <script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js "></script>
</body>
</html>