<nav id="navbar-main" style="align-items:unset;" class="navbar flex-nowrap p-0">
    <div class="navbar-brand">
        <a class="navbar-item mobile-aside-button">
            <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
        </a>
    </div>
    <div class="navbar-brand">
        <a class="navbar-item">
            <?php 
                if($_GET['page'] == 'dashboard') { ?>
                    <span class="icon"><i class="mdi mdi-desktop-mac" style="margin-left:90px;"></i> &nbsp;Dashboard</span>
            <?php } ?>
            <?php 
                if($_GET['page'] == 'add-schedules') { ?>
                    <span class="icon add-sched-hero-title" style="margin-left:150px;"><i class="mdi mdi-plus-thick"></i> &nbsp;Add Available Schedules For Booking</span>
            <?php } ?>
            <?php 
                if($_GET['page'] == 'passenger-booking') { ?>
                    <span class="icon add-sched-hero-title" style="margin-left:90px;"><i class="mdi mdi-notebook-multiple"></i> &nbsp;Passengers Booking</span>
            <?php } ?>
            <?php 
                if($_GET['page'] == 'passenger-payment') { ?>
                    <span class="icon add-sched-hero-title" style="margin-left:90px;"><i class="mdi mdi-account-cash"></i> &nbsp;Passengers Payment</span>
            <?php } ?>
            <?php 
                if($_GET['page'] == 'staff-profile-setting') { ?>
                    <span class="icon add-sched-hero-title" style="margin-left:50px;"><i class="mdi mdi-settings"></i> &nbsp;Staff Profile</span>
            <?php } ?>
        </a>
    </div>
    <div class="navbar-brand is-right">
        <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
            <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
        </a>
    </div>
    <div class="navbar-menu" id="navbar-menu">
        <div class="navbar-end">
            <div class="navbar-item has-divider has-user-avatar">
                <a class="navbar-link">
                    <div class="user-avatar">
                        <img src="https://media-exp1.licdn.com/dms/image/C5603AQHipC7N7XF5Bg/profile-displayphoto-shrink_800_800/0/1607875357547?e=1642636800&v=beta&t=L7w8vUK8rYcNmVsbeoOJTzYUxO4XZG6bQMVnEzlWerw" alt="kimdavetorres" class="rounded-full">
                    </div>
                    <div class="is-user-name"><span>username</span></div>
                </a>
            </div>
        </div>
        <a title="Notifications" href="#" class="navbar-item has-divider desktop-icon-only">
            <span class="icon"><i class="mdi mdi-bell-outline"></i></span>
            <span>Notifications</span>
        </a>
        <a title="Messages" href="#" class="navbar-item has-divider desktop-icon-only">
            <span class="icon"><i class="mdi mdi-email-outline"></i></span>
            <span>Messages</span>
        </a>
        <a title="Log out" class="navbar-item desktop-icon-only">
            <span class="icon"><i class="mdi mdi-logout"></i></span>
            <span>Log out</span>
        </a>
    </div>
</nav>