<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Staff';
$staff_page = 'active';
require_once('../include/head.php');
?>

<body>
    <!-- Page Content -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <?php
            require_once('../include/sidebar.php');
            require_once('../include/modal.addstaff.php');
            ?>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-6">
                <div class="d-flex justify-content-start align-items-center pt-3 text-center">
                    <h1 class="h2" style="font-weight: bold;">Staff</h1>
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

                                    <!-- Search and Sort Section -->
                                    <div class="d-flex ms-auto">
                                        <div class="input-group pe-4">
                                            <input type="text" name="keyword" id="keyword" placeholder="Search..." class="form-control">
                                            <button class="btn btn-outline-secondary brand-bg-color" type="button">
                                                <i class="fa fa-search color-white" aria-hidden="true"></i>
                                            </button>
                                        </div>

                                        <!-- Sort by Dropdown -->
                                        <div class="form-group col-2 col-sm-auto flex-sm-grow-1 flex-lg-grow-0 ms-2">
                                            <select name="staff-role" id="staff-role" class="form-select me-md-2">
                                                <option value="">Sort by</option>
                                            </select>
                                        </div>

                                        <!-- Add Button -->
                                        <button class="btn btn-outline-secondary btn-add ms-4" type="button" data-bs-toggle="modal" data-bs-target="#addstaff">
                                        <i class="fa fa-plus brand-color" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <table id="staff" class="table table-striped table-sm mt-4">
                            <thead>
                                <tr>
                                    <th scope="col" width="5%">ID</th>
                                    <th scope="col" width="10%"></th>
                                    <th scope="col" width="15%">Name</th>
                                    <th scope="col" width="15%">Position</th>
                                    <th scope="col" width="15%">Contact No.</th>
                                    <th scope="col" width="20%">Email</th>
                                    <th scope="col" width="10%">Status</th>
                                    <th scope="col" width="10%"></th>
                                </tr>
                            </thead>
                            <tbody id="staffTableBody">


                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>


    <?php
    require_once('../include/js.php');
    require_once('../scripts/script.php');
    ?>


</body>

</html>
