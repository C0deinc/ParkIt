<!DOCTYPE html>
<html lang="en">

<?php
    $title = 'Users';
    $users_page = 'active';
    require_once('../include/head.php');
?>

<body>
    <!-- Page Content -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <?php
            require_once('../include/sidebar.php');
            require_once('../include/modal.incident.php');
            ?>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-6">
            <div class="d-flex ms-5 mt-4">
                    <h4 class="h3 m" style="font-weight: bold;">Pending Accounts</h1>
                </div>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="row mb-2">
                                <div class="d-flex align-items-center">
                                    <div class="text-center mt-3">
                                        <button class="btn btn-success mr-2" onclick="exportToExcel()">Excel</button>
                                        <button class="btn btn-success mr-2" onclick="exportToPDF()">PDF</button>
                                        <button class="btn btn-success mr-2" onclick="copyToClipboard()">Copy</button>
                                    </div>
                                    <div class="search-keyword d-flex ms-auto">
                                        <div class="input-group pe-4">
                                            <input type="text" name="keyword" id="keyword" placeholder="Search..." class="form-control">
                                            <button class="btn btn-outline-secondary brand-bg-color" type="button">
                                                <i class="fa fa-search color-white" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <div id="MyButtons" class="d-flex mb-md-2 mb-lg-0 col-12 col-md-auto"></div>
                                    <div class="form-group col-2 col-sm-auto flex-sm-grow-1 flex-lg-grow-0 ms-lg-auto">
                                        <select name="staff-role" id="staff-role" class="form-select me-md-2">
                                            <option value="">Sort by</option>
                                            
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>  

                        <!-- Table -->
                        <div class="table-responsive mt-4">
                            <table class="table text-center ">
                                <colgroup>
                                    <col style="width: 5%;">
                                    <col style="width: 30%;">
                                    <col style="width: 20%;">
                                    <col style="width: 20%;">
                                    <col style="width: 10%;">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Name</th>
                                        <th scope="col">User Statu</th>
                                        <th scope="col">Incident</th>
                                        <th scope="col">More</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="vertical-align: middle;">
                                            <img class="rounded-circle" src="../images/jau.jpg" alt="Profile Image" width="50" height="50">
                                        </td>
                                        <td style="vertical-align: middle;">Mark Tan</td>
                                        <td style="vertical-align: middle;">Rentee</td>
                                        <td style="vertical-align: middle;">Carnap</td>
                                        <td style="vertical-align: middle;">
                                        <button class="butm" type="button" data-bs-toggle="modal" data-bs-target="#incident">
                                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                        </button>
                                        </td>
                                    </tr>
                                    <!-- Add more table rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-6 d-flex justify-content-end align-items-center">
                                <a href="users.php" class="btn btn-primary" id="return-btn"><i class="fa fa-arrow-left" aria-hidden="true"></i> Return</a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <?php
    require_once('../include/js.php');
    require_once('../scripts/script.php');
    ?>

</body>

</html>