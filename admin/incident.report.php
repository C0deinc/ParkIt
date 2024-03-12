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

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-6 p-4">
                <div class="details card text-center p-4">
                    <h2 style="font-weight: bold;">INCIDENT REPORT</h2>
                    <hr class="line mx-3" style="border-top: 2px solid #06283D;">
                    <div class="subpart pb-4">
                        <h4 style="font-weight: bold;">PERSONAL DETAILS</h4>
                        <div class="info">
                            <table class="border-table" style="width:100%">
                                <tr>
                                    <th style="width: 20%;">NAME:</th>
                                    <td>Cismale</td>
                                </tr>
                                <tr>
                                    <th>ACCOUNT:</th>
                                    <td>Cismale</td>
                                </tr>
                                <tr>
                                    <th>PHONE NUMBER:</th>
                                    <td>Cismale</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="subpart pb-4">
                        <div class="container" style="width:100%">
                            <div class="row border">
                                <div class="col">
                                    <table>
                                        <tr>
                                            <th>Location:</th>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 p-0">
                                    <div class="box border">
                                        <table>
                                            <tr>
                                                <th style="padding-left: 10px;">Date:</th>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="box border">
                                        <table>
                                            <tr>
                                                <th style="padding-left: 10px;">Time:</th>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="box border">
                                        <table>
                                            <tr>
                                                <th style="padding-left: 10px;">Police Notified:</th>
                                            </tr>
                                            <tr> <!-- New row for the checkboxes -->
                                                <td colspan="2">
                                                    <input type="checkbox" id="police_yes" name="police_notified"
                                                        value="yes">
                                                    <label for="police_yes">Yes</label>
                                                </td>
                                                <td>
                                                    <input type="checkbox" id="police_no" name="police_notified"
                                                        value="no">
                                                    <label for="police_no">No</label>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-8 border">
                                    <table>
                                        <tr>
                                            <th>Incident Details:</th>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12">
                            <table class="table table-bordered text-start" style="width: 100%;">
                            <colgroup>
                                <col style="width: 40%;">
                                <col style="width: 60%;">  
                            </colgroup>
                                <thead>
                                    <tr>
                                        <th>Incident Cause:</th>
                                        <th>Follow up Recommendation:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <p style="font-size: smaller;">
                                                <em>(How the incident happened, factors leading to the event, and what took place. 
                                                    Be as specific as possible.)</em>
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Left Column: Long Note -->
                        <div class="col-md-5">
                            <p style="font-size: smaller;">
                                <em>Incident reports are necessary for documenting details of the occurrence while they are the most 
                                    present in the minds of the witnesses and incident reporter. The information that is included  
                                    in the report can be useful for decision-making on future incidents, identify behavioral patterns 
                                    and identifying larger issues. To maintain a safe and healthy work environment, a thorough investigation 
                                    should be undertaken following an incident in order to initiate corrective actions.</em>
                            </p>
                        </div>

                        <!-- Right Column: Card with Inputs -->
                        <div class="col-md-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-md-6">
                                    <h6 class="card-title" style="font-weight: bold; text-align: left;">Reported By</h6>
                                </div>

                                    <table class="text-start mt-2">
                                        <tr>
                                            <th style="font-weight: normal;">Name:</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th style="font-weight: normal;">Address:</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th style="font-weight: normal;">Contact Number:</th>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
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