<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
        <div class="navbar-brand">
            <img src="resources/img/owner_logo/<?php echo $_SESSION['profile_image']; ?>" alt="LOGO">
        </div>
    </div>
    <div class="menu is-menu-main ">
        <p class="menu-label mb-0">General</p>
        <ul class="menu-list mb-1">
            <?php if($_GET['page'] == 'dashboard') { ?>
                    <li class="active">
            <?php } else { ?>
                    <li class="">
            <?php } ?>
            <a href="index.php?page=dashboard">
                <span class="icon "><i class="mdi mdi-desktop-mac "></i></span>
                <span class="menu-item-label ">Dashboard</span>
            </a>
            </li>
            <?php if($_GET['page'] == 'assign-employee') { ?>
                <li class="active --set-active-tables-html ">
            <?php } else { ?>
                <li class="--set-active-tables-html ">
            <?php } ?>
                <a href="index.php?page=assign-employee">
                    <span class="icon"><i class="mdi mdi-account-check"></i></span>
                    <span>Assign Role</span>
                </a>
            </li>
            <?php if($_GET['page'] == 'passengers') { ?>
                    <li class="active --set-active-tables-html">
            <?php } else { ?>
                    <li class="--set-active-tables-html">
            <?php } ?>
                <a href="index.php?page=passengers">
                    <span class="icon "><i class="mdi mdi-account-multiple "></i></span>
                    <span class="menu-item-label ">Passengers</span>
                </a>
            </li>
            <?php if($_GET['page'] == 'my_subscription') { ?>
                    <li class="active --set-active-tables-html">
            <?php } else { ?>
                    <li class="--set-active-tables-html">
            <?php } ?>
                <a href="index.php?page=my_subscription" class="dropdown">
                    <span class="icon"><i class="mdi mdi-folder-edit-outline"></i></span>
                    <span class="menu-item-label">My Subscription</span>
                </a>
            </li>
        </ul>
        <p class="menu-label mb-0">Ticket</p>
        <ul class="menu-list mb-1">
            <?php if($_GET['page'] == 'discounts') { ?>
                    <li class="active">
            <?php } else { ?>
                    <li class="">
            <?php } ?>
                <a href="index.php?page=discounts" target="_blank " class="has-icon ">
                    <span class="icon "><i class="mdi mdi-sale "></i></span>
                    <span class="menu-item-label ">Discounts</span>
                </a>
            </li>
            <?php if($_GET['page'] == 'promo') { ?>
                    <li class="active">
            <?php } else { ?>
                    <li class="">
            <?php } ?>
                <a href="index.php?page=promo" class="has-icon ">
                    <span class="icon "><i class="mdi mdi-tag-multiple "></i></span>
                    <span class="menu-item-label ">Promo</span>
                </a>
            </li>
        </ul>
        <p class="menu-label mb-0">Settings</p>
        <ul class="menu-list ">
            <?php if($_GET['page'] == 'profile') { ?>
                    <li class="active --set-active-profile-html">
            <?php } else { ?>
                    <li class="--set-active-profile-html">
            <?php } ?>
                <a href="index.php?page=profile">
                    <span class="icon "><i class="mdi mdi-face-profile"></i></span>
                    <span class="menu-item-label ">My Profile</span>
                </a>
            </li>
        </ul>
    </div>
</aside>