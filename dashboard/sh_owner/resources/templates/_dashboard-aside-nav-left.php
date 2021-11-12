<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
        <div class="navbar-brand">
            <img src="resources/img/owner_logo/<?php echo $_SESSION['profile_image']; ?>" alt="LOGO">
        </div>
    </div>
    <div class="menu is-menu-main ">
        <p class="menu-label ">General</p>
        <ul class="menu-list ">
            <li class="active ">
                <a href="index.php">
                    <span class="icon "><i class="mdi mdi-desktop-mac "></i></span>
                    <span class="menu-item-label ">Dashboard</span>
                </a>
            </li>
        </ul>
        <p class="menu-label ">Accounts</p>
        <ul class="menu-list ">
            <li class="--set-active-tables-html ">
                <a href="#" class="dropdown ">
                    <span class="icon "><i class="mdi mdi-table "></i></span>
                    <span class="menu-item-label ">Employee</span>
                    <span class="icon "><i class="mdi mdi-plus "></i></span>
                </a>
                <ul>
                    <li>
                        <a href="employee.php">
                            <span>Assign Task (Role)</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="--set-active-forms-html ">
                <a href="passengers.php">
                    <span class="icon "><i class="mdi mdi-account-multiple "></i></span>
                    <span class="menu-item-label ">Passengers</span>
                </a>
            </li>
        </ul>
        <p class="menu-label">Subscription</p>
        <ul class="menu-list">
            <li class="--set-active-tables-html">
                <a href="my_subscription.php" class="dropdown">
                    <span class="icon"><i class="mdi mdi-folder-edit-outline"></i></span>
                    <span class="menu-item-label">My Subscription</span>
                </a>
            </li>
        </ul>
        <p class="menu-label ">Ticket</p>
        <ul class="menu-list ">
            <li>
                <a href="discounts.php" target="_blank " class="has-icon ">
                    <span class="icon "><i class="mdi mdi-sale "></i></span>
                    <span class="menu-item-label ">Discounts</span>
                </a>
            </li>
            <li>
                <a href="promo.php" class="has-icon ">
                    <span class="icon "><i class="mdi mdi-tag-multiple "></i></span>
                    <span class="menu-item-label ">Promo</span>
                </a>
            </li>
        </ul>
        <p class="menu-label ">Settings</p>
        <ul class="menu-list ">
            <li class="--set-active-profile-html ">
                <a href="profile.php">
                    <span class="icon "><i class="mdi mdi-face-profile"></i></span>
                    <span class="menu-item-label ">My Profile</span>
                </a>
            </li>
        </ul>
    </div>
</aside>