<!DOCTYPE html>
<html lang="en">

<?php
    $title = 'Wallet';
    $wallet_page = 'active';
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
                <div class="col-md-9 ms-sm-auto col-lg-12 px-md-4">
                    <div class="row justify-content-center"> <!-- Center the circle-container -->
                        <div class="circle-container">
                            <div class="circle-content">
                                <img src="../images/group-of-users.png" alt="Image">
                                <h5 style="font-weight: bold;">USER</h5>
                            </div>
                        </div>
                    </div>
                </div>

            
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <h1 class="card-title text-left" style="margin-left: 20px; margin-top: 15px; font-weight: bold;">Pending</h1>
                                <div class="card-body">
                                    <!-- Table -->
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <colgroup>
                                                <col style="width: 40%;">
                                                <col style="width: 30%;">
                                                <col style="width: 30%;">
                                            </colgroup>
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Proof of Payment</th>
                                                    <th scope="col">Amount Deposited</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Mark Tan</td>
                                                    <td><a href="#">See Attachment</a></td>
                                                    <td><a href="#" class="btn btn-secondary btn-add" data-bs-toggle="modal" data-bs-target="#enterbalance">
                                                        Enter Balance
                                                    </a></td>
                                                </tr>
                                                <!-- Add more table rows as needed -->
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <td>Mark Tan</td>
                                                    <td><a href="#">See Attachment</a></td>
                                                    <td>
                                                    <a href="#" class="btn btn-secondary btn-add" data-bs-toggle="modal" data-bs-target="#enterbalance">
                                                        Enter Balance
                                                    </a></td>
                                                </tr>
                                                <!-- Add more table rows as needed -->
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <td>Mark Tan</td>
                                                    <td><a href="#">See Attachment</a></td>
                                                    <td>
                                                    <a href="#" class="btn btn-secondary btn-add" data-bs-toggle="modal" data-bs-target="#enterbalance">
                                                        Enter Balance
                                                    </a></td>
                                                </tr>
                                                <!-- Add more table rows as needed -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-12 col-lg-6 offset-lg-6 d-flex justify-content-end align-items-center">
                            <a href="wallet_user.php" class="btn btn-primary" id="return-btn"><i class="fa fa-arrow-left" aria-hidden="true"></i> Return</a>
                        </div>
                    </div>
                </div>
            </div>      
        </main>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="enterbalance" data-bs-backdrop="static" tabindex="-1" aria-labelledby="enterbalancemodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header justify-content-center flex-column">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h1 class="modal-title fs-5" id="enterbalancemodal" style="font-weight: bold;">Customer Balance</h1>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                    <div class="mb-3 text-center">
                        <label for="enterbalance" class="form-label">Enter Customer Balance</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="enterbalance" aria-label="Amount (to the nearest peso)">
                            <span class="input-group-text">&#8369;</span>
                        </div>
                    </div>

                        <!-- Divider -->
                        <hr class="my-custom-hr my-4">

                        <div class="row mb-2 d-flex flex-column mt-4">
                            <div class="col-sm-12 text-center">
                                <a href="wallet_deposit.php" class="btn w-50" style="background-color: #06283D; color: white;">Enter</a>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
       require_once('../include/js.php');
       require_once('./scripts/script.php');
    ?>

    
</body>
</html>