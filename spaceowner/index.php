<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'My Space';
    $dashboard_page = 'active';
    require_once('./include/head.php');
?>
<body style="display: flex; align-items:center; flex-direction: column;">
    <div class="container d-flex justify-content-between" style="box-shadow: inset 0 -10px 5px -10px grey; padding: 20px;">
        <b>My Space</b>
        <div class="d-flex align-items-center">
            <input type="text" class="form-control" id="search" name="search" style="font-size: 10px;">
            <i style="border: 1px groove; padding: 6px;" class="fa fa-search" aria-hidden="true"></i>
        </div>
    </div><br>
    <div class=" container d-flex justify-content-end">
        <div class="d-flex align-items-center">
            <select class="form-select mx-1" style="font-size: 12px;" aria-label="sort">
                <option style="font-size: 12px;" selected>Filter</option>
                <option style="font-size: 12px;" value="1">One</option>
                <option style="font-size: 12px;" value="2">Two</option>
                <option style="font-size: 12px;" value="3">Three</option>
            </select>
            <select class="form-select mx-1" style="font-size: 12px;" aria-label="sort">
                <option style="font-size: 12px;" selected>Sort By</option>
                <option style="font-size: 12px;" value="spacename">Space Name</th>
                <option style="font-size: 12px;" value="location">Location</th>
                <option style="font-size: 12px;" value="availablespace">Available Space</th>
                <option style="font-size: 12px;" value="occupiedspace">Occupied Space</th>
                <option style="font-size: 12px;" value="overduespace">Overdue Space</th>
                <option style="font-size: 12px;" value="arrivalreservation">Arrival Reservation</th>
            </select>
            <div>
                <button type="button" style="border: none; background-color: white;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="fa fa-plus-circle fa-2x px-2" aria-hidden="true"></i>
                </button>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h5 class="modal-title" id="staticBackdropLabel" style="font-size: 15px;"><b>Facility style</b></h5>
                                <button type="button" class="btn-close" style="font-size: 12px;" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <a style="font-size: 12px; color: black; text-decoration: none;" href="privatespace.php">
                                    <div class="d-flex justify-content-center align-items-center mb-1" style="border: 1px groove; border-radius: 5px; padding: 5px;">
                                        Common ground
                                        <i class="fa fa-home mx-2" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <a style="font-size: 12px; color: black; text-decoration: none;" href="buildingspace.php">
                                    <div class="d-flex justify-content-center align-items-center" style="border: 1px groove; border-radius: 5px; padding: 5px;">
                                        Building Tier
                                        <i class="fa fa-building mx-2" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr class="text-center" style="font-size: 12px;">
                        <th scope="col">#</th>
                        <th scope="col">Space Name</th>
                        <th scope="col">Location</th>
                        <th scope="col">Available Space</th>
                        <th scope="col">Occupied Space</th>
                        <th scope="col">Overdue Space</th>
                        <th scope="col">Arrival Reservation</th>
                        <th scope="col">More</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center" style="font-size: 12px;">
                        <td>1</td>
                        <td>Mcqueen's Lot</td>
                        <td>Villa Sta. Maria Z.C.</td>
                        <td>5</td>
                        <td>5</td>
                        <td>5</td>
                        <td>5</td>
                        <td><a href="mcqueens.php"><i class="fa fa-ellipsis-h" style="color:black" aria-hidden="true"></i></a></td>
                    </tr>
                    <tr class="text-center" style="font-size: 12px;">
                        <td>2</td>
                        <td>Red Gate</td>
                        <td>Pasonanca, Z.C.</td>
                        <td>3</td>
                        <td>3</td>
                        <td>3</td>
                        <td>3</td>
                        <td><a href="redgate.php"><i class="fa fa-ellipsis-h" style="color:black" aria-hidden="true"></i></a></td>
                    </tr>
                    <tr class="text-center" style="font-size: 12px;">
                        <td>3</td>
                        <td>Mcqueen's Lot</td>
                        <td>Villa Sta. Maria Z.C.</td>
                        <td>5</td>
                        <td>5</td>
                        <td>5</td>
                        <td>5</td>
                        <td><a href="mcqueens.php"><i class="fa fa-ellipsis-h" style="color:black" aria-hidden="true"></i></a></td>
                    </tr>
                    <tr class="text-center" style="font-size: 12px;">
                        <td>4</td>
                        <td>Red Gate</td>
                        <td>Pasonanca, Z.C.</td>
                        <td>3</td>
                        <td>3</td>
                        <td>3</td>
                        <td>3</td>
                        <td><a href="redgate.php"><i class="fa fa-ellipsis-h" style="color:black" aria-hidden="true"></i></a></td>
                    </tr>
                    <tr class="text-center" style="font-size: 12px;">
                        <td>5</td>
                        <td>Mcqueen's Lot</td>
                        <td>Villa Sta. Maria Z.C.</td>
                        <td>5</td>
                        <td>5</td>
                        <td>5</td>
                        <td>5</td>
                        <td><a href="mcqueens.php"><i class="fa fa-ellipsis-h" style="color:black" aria-hidden="true"></i></a></td>
                    </tr>
                </tbody>
            </table>                                             
        </div>
        <div class="d-flex justify-content-end">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                    <a class="page-link" style="font-size: 10px;" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active" aria-current="page"><a class="page-link" style="font-size: 10px;" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" style="font-size: 10px;" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" style="font-size: 10px;" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" style="font-size: 10px;" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <?php
    require_once('./include/js.php');
    ?>
</body>
</html>