<!-- MENU SIDEBAR-->
<?php

$number_of_new_request = $db->select("SELECT count(*) total
                                    FROM users
                                    inner join personal_info pi using (user_id)
                                    where status = 0 and user_type = 2");
 ?>
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
                        <i class="fas fa-cog"></i>New Request  <span class="badge badge-warning"><?php echo $number_of_new_request[0]["total"]; ?></span></a>
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
                        <i class="fas fa-plus"></i>Create Announcement</a>
                </li>
                <li class="<?php echo isset($_GET["page"]) && $_GET["page"] == 'events' ? "active" : '' ?>">
                    <a href="index.php?page=events">
                        <i class="fas fa-tasks"></i>Announcement</a>
                </li>
                <li class="<?php echo isset($_GET["page"]) && $_GET["page"] == 'course' ? "active" : '' ?>">
                    <a href="index.php?page=course">
                        <i class="fas fa-tasks"></i>Course</a>
                </li>
                <li class="<?php echo isset($_GET["page"]) && $_GET["page"] == 'sy' ? "active" : '' ?>">
                    <a href="index.php?page=sy">
                        <i class="fas fa-tasks"></i>School Year</a>
                </li>
                <li class="<?php echo isset($_GET["page"]) && $_GET["page"] == 'list_of_survey' ? "active" : '' ?>">
                    <a href="index.php?page=list_of_survey">
                        <i class="fas fa-tasks"></i>List of Survey</a>
                </li>
               <!--  <li class="<?php echo isset($_GET["page"]) && $_GET["page"] == 'survey_report' ? "active" : '' ?>">
                    <a href="index.php?page=survey_report">
                        <i class="fas fa-tasks"></i>Survey Report</a>
                </li> -->
                 <li>
                    <a class="js-arrow" href="#">Generate Report</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list"  style="background:rgb(143 2 2)">
                        <li class="<?php echo isset($_GET["page"]) && $_GET["page"] == 'survey_report' ? "active" : '' ?>">
                            <a href="index.php?page=survey_report"><i class="fas fa-file"></i>Survey Report</a>
                        </li>
                        <li class="<?php echo isset($_GET["page"]) && $_GET["page"] == 'job_reports' ? "active" : '' ?>">
                            <a href="index.php?page=job_reports"><i class="fas fa-users"></i>Job Report</a>
                        </li>
                        <li class="<?php echo isset($_GET["page"]) && $_GET["page"] == 'alumni_report' ? "active" : '' ?>">
                            <a href="index.php?page=alumni_report"><i class="fas fa-users"></i>Alumni Report</a>
                        </li>
                        <li class="<?php echo isset($_GET["page"]) && $_GET["page"] == 'user_report' ? "active" : '' ?>">
                            <a href="index.php?page=user_report"><i class="fas fa-users"></i>User Report</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->