<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
        <div>
            <b class="font-black">Admin</b>
        </div>
    </div>
    <div class="menu is-menu-main">
        <p class="menu-label">General</p>
        <ul class="menu-list">
            <?php 
                if($_GET['page'] == 'dashboard') { ?>
                    <li class="active">
               <?php } else { ?>
                   <li class="">
               <?php } ?>
                <a href="index.php?page=dashboard">
                    <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
                    <span class="menu-item-la0bel">Dashboard</span>
                </a>
            </li>
        </ul>
        <p class="menu-label">Subscription</p>
        <ul class="menu-list">
            <?php 
                if($_GET['page'] == 'subscriber') { ?>
                    <li class="active">
               <?php } else { ?>
                   <li class="">
               <?php } ?>
                <a href="index.php?page=subscriber" class="dropdown">
                    <span class="icon"><i class="mdi mdi-account-cash"></i></span>
                    <span class="menu-item-label">Subscriber</span>
                </a>
            </li>
            <?php 
                if($_GET['page'] == 'subscription-plan') { ?>
                    <li class="active">
               <?php } else { ?>
                   <li class="">
               <?php } ?>
                <a href="index.php?page=subscription-plan" class="dropdown">
                    <span class="icon"><i class="mdi mdi-clipboard"></i></span>
                    <span class="menu-item-label">Subscription Plan</span>
                </a>
            </li>
        </ul>
        <p class="menu-label">Settings</p>
        <ul class="menu-list">
            <?php 
                if($_GET['page'] == 'profile') { ?>
                    <li class="active">
               <?php } else { ?>
                   <li class="">
               <?php } ?>
                <a href="index.php?page=profile" class="dropdown">
                    <span class="icon"><i class="mdi mdi-settings"></i></span>
                    <span class="menu-item-label">My Profile</span>
                </a>
            </li>
        </ul>
    </div>
</aside>