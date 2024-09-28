<!DOCTYPE html>
<html lang="en">

<?php
    $title = 'Dashboard';
    $index_page = 'active';
    require_once('../include/head.php');
?>

<body>

    <!-- Page Content -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <?php
            require_once('../include/sidebar.php');
            ?>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-6">
                <!-- Overall Users -->
                <div class="d-flex justify-content-center align-items-center pt-3 text-center">
                    <div class="d-flex justify-content-center align-items-center pt-4 text-center numbered-heading">
                        <h1 class="h2 mx-auto" style="font-weight: bold;">
                            <img src="../images/user.png" alt="Total User Image" class="img-fluid" width="35" height="35">
                            OVERALL USERS
                        </h1>
                    </div>
                </div>

                <!-- Personal Users -->
                <div class="container mt-3">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="row mb-2">
                                <div class="d-flex align-items-center">
                                    <h5 class="card-title text-left" style="font-weight: bold;">PERSONAL</h5>
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
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center">
                                            <colgroup>
                                                <col style="width: 5%;">
                                                <col style="width: 15%;"> <!-- Adjust the width as needed -->
                                                <col style="width: 15%;">
                                                <col style="width: 5%;">
                                                <col style="width: 10%;">
                                                <col style="width: 10%;">
                                                <col style="width: 15%;">
                                                <col style="width: 15%;">
                                                <col style="width: 15%;">
                                                <col style="width: 10%;">
                                            </colgroup>
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">FIRSTNAME</th>
                                                    <th scope="col">LASTNAME</th>
                                                    <th scope="col">MIDDLE</th>
                                                    <th scope="col">BIRTHDATE</th>
                                                    <th scope="col">GENDER</th>
                                                    <th scope="col">ADDRESS</th>
                                                    <th scope="col">PHONE NO.</th>
                                                    <th scope="col">EMAIL</th>
                                                    <th scope="col">PASSWORD</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Divider -->
                <hr class="my-custom-hr my-4">

                <!-- Company Users -->
                <div class="container mt-4">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="row mb-2">
                                <div class="d-flex align-items-center">
                                    <h5 class="card-title text-left" style="font-weight: bold;">COMPANY</h5>
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
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center">
                                            <colgroup>
                                                <col style="width: 5%;">
                                                <col style="width: 15%;"> <!-- Adjust the width as needed -->
                                                <col style="width: 10%;">
                                                <col style="width: 15%;">
                                                <col style="width: 15%;">
                                                <col style="width: 15%;">
                                                <col style="width: 15%;">
                                                <col style="width: 15%;">
                                            </colgroup>
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">CONTACT NAME</th>
                                                    <th scope="col">ADDRESS</th>
                                                    <th scope="col">PHONE NO.</th>
                                                    <th scope="col">EMAIL</th>
                                                    <th scope="col">CONTACT PERSON</th>
                                                    <th scope="col">CONTACT POSITION</th>
                                                    <th scope="col">PASSWORD</th>
                                                    
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Divider -->
                <hr class="my-custom-hr my-4">

                <!-- Yearly Scaling Chart -->
                <div class="container mt-4">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div style="position: relative;">
                                                        <canvas id="userChart" height="200" style="border: none;"></canvas>
                                                        <div style="position: absolute; top: 50%; right: -400px; transform: translateY(-50%); text-align: right;">
                                                            <div class="card-body text-center">
                                                                <h5 class="card-title" style="font-size: 50px; font-weight: bold;">
                                                                    YEARLY <br> SCALING
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <?php
        require_once('../include/js.php');
        require_once('../scripts/script.tus.php');
        require_once('../scripts/script.php');
    ?>
    
    
  </body>
  </html>