<!DOCTYPE html>
<html lang="en">
    
<?php
    $title = 'Staff';
    $staff_page = 'active';
    require_once('./include/head.php');
?>
<body>
    <!-- Page Content -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <?php
            require_once('./include/sidebar.php');
            ?>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-6">
                <div class="d-flex justify-content-start align-items-center pt-3 text-center">
                    <h1 class="h2">Staff</h1>
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
                                    <div class="search-keyword d-flex ms-auto mt-3">
                                        <div class="input-group">
                                            <input type="text" name="keyword" id="keyword" placeholder="Search..." class="form-control">
                                            <button class="btn btn-outline-secondary brand-bg-color" type="button">
                                                <i class="fa fa-search color-white" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group col-2 col-sm-auto flex-sm-grow-1 flex-lg-grow-0 ms-lg-auto mt-3">
                                        <select name="staff-role" id="staff-role" class="form-select me-md-2">
                                            <option value="">Sort by</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-outline-secondary btn-add mt-3" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="fa fa-plus brand-color" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>  

                        <table id="staff" class="table table-striped table-sm mt-4">
                            <thead>
                                <tr>
                                    <th scope="col" width="10%"></th>
                                    <th scope="col" width="20%">Name</th>
                                    <th scope="col" width="15%">Position</th>
                                    <th scope="col" width="15%">Contact No.</th>
                                    <th scope="col" width="20%">Email</th>
                                    <th scope="col" width="10%">Status</th>
                                    <th scope="col" width="10%"></th>
                                </tr>
                            </thead>
                            <tbody id="productTableBody">


                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>


    <?php
        require_once('./include/js.php')
    ?>
    
    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   
</body>
</html>
