<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #06283D;">
        <a class="navbar-brand ms-4" href="#">
            <img src="../images/logo1.png" alt="" style="width: 60px; height: 30px;">
        </a>
        <div class="navbar-collapse offcanvas-collapse ms-auto">
    <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle color-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true" style="font-weight: bold;">
                <img src="../images/photo.png" class="rounded-circle me-2" alt="User Image" width="30px" height="30px" style="position: relative; top: -2px;">
                Charl's
            </a>
            <ul class="dropdown-menu dropdown-profile mt-0" aria-labelledby="navbarDropdown" style="margin-left: -40px;">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="login.php">Logout</a></li>
            </ul>
        </li>
    </ul>
</div>
    </nav>

    <!-- Page Content -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar" style="font-weight: bold;">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link <?= $index_page?>" aria-current="page" href="index.php">
                                <img src="../images/dashboard.png" alt="dashboard" width="20" height="20" class="mr-2">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $users_page?>" aria-current="page" href="users.php">
                                <img src="../images/user.png" alt="users" width="20" height="20" class="mr-2">
                                Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $report_page?>" aria-current="page" href="reports.php">
                                <img src="../images/report.png" alt="report" width="20" height="20" class="mr-2">
                                Reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $staff_page?>" aria-current="page" href="staff.php">
                                <img src="../images/staff.png" alt="staff" width="20" height="20" class="mr-2">
                                Staff
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $setting_page?>" aria-current="page" href="setting.php">
                                <img src="../images/setting.png" alt="setting" width="20" height="20" class="mr-2">
                                Setting
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $wallet_page?>" href="wallet.php">
                                <img src="../images/wallet.png" alt="wallet" width="20" height="20" class="mr-2">
                                Wallet
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>