<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <img src="images/icon/stpeterslogo.jpg" alt="St.PeterCollege" style="height:60px">
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="index.html">Dashboard 1</a>
                        </li>
                        <li>
                            <a href="index2.html">Dashboard 2</a>
                        </li>
                        <li>
                            <a href="index3.html">Dashboard 3</a>
                        </li>
                        <li>
                            <a href="index4.html">Dashboard 4</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="chart.html">
                        <i class="fas fa-chart-bar"></i>Charts</a>
                </li>
                <li>
                    <a href="table.php">
                        <i class="fas fa-table"></i>Student List</a>
                </li>
                <li>
                    <a href="form.html">
                        <i class="far fa-check-square"></i>Forms</a>
                </li>
                <li>
                    <a href="calendar.html">
                        <i class="fas fa-calendar-alt"></i>Calendar</a>
                </li>
                <li>
                    <a href="map.html">
                        <i class="fas fa-map-marker-alt"></i>Maps</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Pages</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forget-pass.html">Forget Password</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>UI Elements</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="button.html">Button</a>
                        </li>
                        <li>
                            <a href="badge.html">Badges</a>
                        </li>
                        <li>
                            <a href="tab.html">Tabs</a>
                        </li>
                        <li>
                            <a href="card.html">Cards</a>
                        </li>
                        <li>
                            <a href="alert.html">Alerts</a>
                        </li>
                        <li>
                            <a href="progress-bar.html">Progress Bars</a>
                        </li>
                        <li>
                            <a href="modal.html">Modals</a>
                        </li>
                        <li>
                            <a href="switch.html">Switchs</a>
                        </li>
                        <li>
                            <a href="grid.html">Grids</a>
                        </li>
                        <li>
                            <a href="fontawesome.html">Fontawesome Icon</a>
                        </li>
                        <li>
                            <a href="typo.html">Typography</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block" style="background:rgb(143 2 2)">
    <div class="logo">
        <a href="#">
            <!-- <img src="images/icon/logo.png" alt="Cool Admin" /> -->
            <img src="images/icon/banner.jpg" alt="St.PeterCollege">
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="<?php echo isset($_GET["page"]) && $_GET["page"] == 'home' ? "active" : '' ?>">
                    <a href="index.php?page=home">
                        <i class="fas fa-chart-bar"></i>Dashboard</a>
                </li>
                <!-- <li>
                    <a href="chart.html">
                        <i class="fas fa-chart-bar"></i>Charts</a>
                </li> -->
                <li class="<?php echo isset($_GET["page"]) && $_GET["page"] == 'pending' ? "active" : '' ?>">
                    <a href="index.php?page=pending">
                        <i class="fas fa-cog"></i>Pending Request</a>
                </li>
                <li class="<?php echo isset($_GET["page"]) && $_GET["page"] == 'approved' ? "active" : '' ?>">
                    <a href="index.php?page=approved">
                        <i class="fas fa-table"></i>Approved</a>
                </li>
                <li class="<?php echo isset($_GET["page"]) && $_GET["page"] == 'denied' ? "active" : '' ?>">
                    <a href="index.php?page=denied">
                        <i class="fas fa-ban"></i>Disapproved</a>
                </li>
                <li class="<?php echo isset($_GET["page"]) && $_GET["page"] == 'postingjobs' ? "active" : '' ?>">
                    <a href="index.php?page=postingjobs">
                        <i class="fas fa-plus"></i>Posting Jobs</a>
                </li>
                <li class="<?php echo isset($_GET["page"]) && $_GET["page"] == 'joblist' ? "active" : '' ?>">
                    <a href="index.php?page=joblist">
                        <i class="fas fa-tasks"></i>Job List</a>
                </li>
                <li class="<?php echo isset($_GET["page"]) && $_GET["page"] == 'create_event' ? "active" : '' ?>">
                    <a href="index.php?page=create_event">
                        <i class="fas fa-plus"></i>Create Event</a>
                </li>
                <li class="<?php echo isset($_GET["page"]) && $_GET["page"] == 'events' ? "active" : '' ?>">
                    <a href="index.php?page=events">
                        <i class="fas fa-tasks"></i>Events</a>
                </li>
                <li class="<?php echo isset($_GET["page"]) && $_GET["page"] == 'course' ? "active" : '' ?>">
                    <a href="index.php?page=course">
                        <i class="fas fa-tasks"></i>Course</a>
                </li>
                <li class="<?php echo isset($_GET["page"]) && $_GET["page"] == 'sy' ? "active" : '' ?>">
                    <a href="index.php?page=sy">
                        <i class="fas fa-tasks"></i>School Year</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->