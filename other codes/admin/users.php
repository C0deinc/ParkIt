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
            ?>
    <style>
        tr[data-href] {
            cursor: pointer;
        }
    </style>
    
            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-6 d-flex justify-content-center align-items-center " style=" height: 82vh;">
                <div class="title">
                    <table class="table" style="width: 50vw;">
                        <thead>
                            <tr style="border-bottom: 2px solid #000000;">
                                <th>
                                    <h3 style="font-weight: bold; padding-left: 2rem;">Account</h3>
                                </th>
                            </tr>
                        </thead>
                        <tbody style="font-weight: bold;">
                            <tr style="border-bottom: 2px solid #000000;" data-href="pending.accounts.php">
                                <td style="padding-left: 3em; width: 5em;"><i class="fa fa-user" aria-hidden="true" style="font-size: 1.5rem;"></i></td>
                                <td>Pending Accounts</td>
                                <td><i class="fa fa-angle-right" aria-hidden="true" style="font-size: 1.5rem;"></i></td>
                            </tr>
                            <tr style="border-bottom: 2px solid #000000;" data-href="verified.account.php">
                                <td style="padding-left: 3em;"><i class="fa fa-user" aria-hidden="true" style="font-size: 1.5rem;"></i></td>
                                <td>List of Users Account</td>
                                <td><i class="fa fa-angle-right" aria-hidden="true" style="font-size: 1.5rem;"></i></td>
                            </tr>
                            <tr style="border-bottom: 2px solid #000000;" data-href="warning.account.php">
                                <td style="padding-left: 3em;"><i class="fa fa-user" aria-hidden="true" style="font-size: 1.5rem;"></i></td>
                                <td>Warning Accounts</td>
                                <td><i class="fa fa-angle-right" aria-hidden="true" style="font-size: 1.5rem;"></i></td>
                            </tr>
                            <tr style="border-bottom: 2px solid #000000;" data-href="banned.account.php">
                                <td style="padding-left: 3em;"><i class="fa fa-user" aria-hidden="true" style="font-size: 1.5rem;"></i></td>
                                <td>Banned Accounts</td>
                                <td><i class="fa fa-angle-right" aria-hidden="true" style="font-size: 1.5rem;"></i></td>
                            </tr>
                            <tr style="border-bottom: 2px solid #000000;" data-href="reported.account.php">
                                <td style="padding-left: 3em;"><i class="fa fa-user" aria-hidden="true" style="font-size: 1.5rem;"></i></i></td>
                                <td>Reported Accounts</td>
                                <td><i class="fa fa-angle-right" aria-hidden="true" style="font-size: 1.5rem;"></i></td>
                            </tr>
                            <tr style="border-bottom: 2px solid #000000;" data-href="reported.incidents.php">
                                <td style="padding-left: 3em;"><i class="fa fa-user" aria-hidden="true" style="font-size: 1.5rem;"></i></i></td>
                                <td>Reported Incidents</td>
                                <td><i class="fa fa-angle-right" aria-hidden="true" style="font-size: 1.5rem;"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>

        </div>
    </div>

    <?php
        require_once('../include/js.php');
        require_once('../scripts/script.user.php');
        require_once('../scripts/script.php');
    ?>
    


</body>

</html>