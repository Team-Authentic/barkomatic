<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
        <div>
            <b class="font-black">Staff</b>
        </div>
    </div>
    <div class="menu is-menu-main">
        <p class="menu-label mb-0">General</p>
        <ul class="menu-list mb-0">
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
        <p class="menu-label mb-0">Ship Management</p>
        <ul class="menu-list mb-0">
            <?php 
                if($_GET['page'] == 'ports') { ?>
                    <li class="active">
               <?php } else { ?>
                   <li class="">
               <?php } ?>
                <a href="index.php?page=ports" class="dropdown">
                    <span class="icon"><i class="mdi mdi-anchor"></i></span>
                    <span class="menu-item-label">Port Location</span>
                </a>
            </li>
            <?php 
                if($_GET['page'] == 'accomodation-type') { ?>
                    <li class="active">
               <?php } else { ?>
                   <li class="">
               <?php } ?>
                <a href="index.php?page=accomodation-type" class="dropdown">
                    <span class="icon"><i class="mdi mdi-pencil-box-multiple"></i></span>
                    <span class="menu-item-label">Accomodation Type</span>
                </a>
            </li>
            <?php 
                if($_GET['page'] == 'add-schedules') { ?>
                    <li class="active">
               <?php } else { ?>
                   <li class="">
               <?php } ?>
                <a href="index.php?page=add-schedules" class="dropdown">
                    <span class="icon"><i class="mdi mdi-calendar-multiple-check"></i></span>
                    <span class="menu-item-label">Schedules</span>
                </a>
            </li>
        </ul>
        <p class="menu-label">Passengers</p>
        <ul class="menu-list">
            <?php 
                if($_GET['page'] == 'passenger-booking') { ?>
                    <li class="active">
               <?php } else { ?>
                   <li class="">
               <?php } ?>
                <a href="index.php?page=passenger-booking" class="dropdown">
                    <span class="icon"><i class="mdi mdi-notebook-multiple"></i></span>
                    <span class="menu-item-label">Booking</span>
                </a>
            </li>
            <?php 
                if($_GET['page'] == 'passenger-payment') { ?>
                    <li class="active">
               <?php } else { ?>
                   <li class="">
               <?php } ?>
                <a href="index.php?page=passenger-payment" class="dropdown">
                    <span class="icon"><i class="mdi mdi-account-cash"></i></span>
                    <span class="menu-item-label">Payment</span>
                </a>
            </li>
        </ul>
        <p class="menu-label">Settings</p>
        <ul class="menu-list">
            <?php 
                if($_GET['page'] == 'staff-profile-setting') { ?>
                    <li class="active">
               <?php } else { ?>
                   <li class="">
               <?php } ?>
                <a href="index.php?page=staff-profile-setting" class="dropdown">
                    <span class="icon"><i class="mdi mdi-settings"></i></span>
                    <span class="menu-item-label">My Profile</span>
                </a>
            </li>
        </ul>
    </div>
</aside>