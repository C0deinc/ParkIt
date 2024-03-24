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
            require_once('../include/modal.proof.php');
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
                                <h1 class="card-title text-left" style="margin-left: 20px; margin-top: 15px; font-weight: bold;">History</h1>
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
                                                        <td>
                                                            <button class="butm" type="button" data-bs-toggle="modal" data-bs-target="#payment">
                                                                <a href="#">See Attachment</a>
                                                            </button>
                                                        </td>
                                                        <td>100.00</td>
                                                    </tr>
                                                    <!-- Add more table rows as needed -->
                                                </tbody>
                                                <tbody>
                                                    <tr>
                                                        <td>Mark Tan</td>
                                                        <td>
                                                            <button class="butm" type="button" data-bs-toggle="modal" data-bs-target="#payment">
                                                                <a href="#">See Attachment</a>
                                                            </button>
                                                        </td>
                                                        <td>100.00</td>
                                                    </tr>
                                                    <!-- Add more table rows as needed -->
                                                </tbody>
                                                <tbody>
                                                    <tr>
                                                        <td>Mark Tan</td>
                                                        <td>
                                                            <button class="butm" type="button" data-bs-toggle="modal" data-bs-target="#payment">
                                                                <a href="#">See Attachment</a>
                                                            </button>
                                                        </td>
                                                        <td>100.00</td>
                                                    </tr>
                                                    <!-- Add more table rows as needed -->
                                                </tbody>
                                            </table>
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
