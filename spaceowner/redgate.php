<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'My Space';
    $dashboard_page = 'active';
    require_once('./include/head.php');
?>
<body class=" p-0 m-0">
    <div class="container-fluid d-flex justify-content-between py-2" style="background-color: #47B5FF;"> 
        <div class="d-flex align-items-center">
            <i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i>
        </div>
        <div class="d-flex align-items-center">
            <b>My Space</b>
            <i class="fa fa-user fa-2x" aria-hidden="true"></i>
        </div>
    </div>
    <div class="container d-flex justify-content-between" style="box-shadow: inset 0 -10px 5px -10px grey; padding: 20px;">
        <div><b style="font-size: 15px;">Building A</b><br><i style="font-size: 12px;">5 floors</i></div>
        <div class="d-flex align-items-center">
            <input type="text" class="form-control" id="search" name="search" style="font-size: 10px;">
            <i style="border: 1px groove; padding: 6px;" class="fa fa-search" aria-hidden="true"></i>
        </div>
    </div>
    <div class="container pt-4 mb-4 d-flex justify-content-between">
        <div style="font-size: 12px;"><b>Villa, Sta. Maria Zamboanga City</b><br><span style="font-size: 9px;"><i>Location</i></span></div>
        <div class="d-flex align-items-center">
            <button class="px-2" style="background-color: #06283D; border: none; font-size: 10px; color:white;">View Renters</button>
            <i class="mx-1 fa fa-pencil-square-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="container p-2 accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" style="font-size: 10px;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Floor 1
            </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body" >
                    <div class="container my-4 ">
                        <label for="spacedimension" style="font-size: 10px"><i>Space Dimension</i></label>
                        <div class="d-flex flex-direction-row justify-content-between">
                            <div class="container px-1">
                                <div style="font-size: 9px;"><b>Width</b></div>
                                <div class="d-flex justify-content-between p-2" style="border: 2px groove; border-radius:5px;">
                                    <div style="font-size: 9px;">200</div>
                                    <div style="font-size: 9px;">meter</div>
                                </div>
                            </div>
                            <div class="container px-1">
                                <div style="font-size: 9px;"><b>Length</b></div>
                                <div class="d-flex justify-content-between p-2" style="border: 2px groove; border-radius:5px;">
                                    <div style="font-size: 9px;">200</div>
                                    <div style="font-size: 9px;">meter</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container sm">
                        <div class="mb-2">
                            <div id="motorcycles" style="border: 2px groove; border-radius: 5px;">
                                <label class="form-check-label" style="font-size: 10px; margin-left: 5px;" for="motorcycles">
                                    A - for Motorcycles
                                </label>
                            </div>
                            <div class="parking-lot" id="motorcycles-lot" style="border: 2px groove; border-radius: 5px; margin-top: -3px; display: none;">
                                <div class="text-center p-2" style="font-size: 10px;">
                                    <i>Occupied spaces: 2 <br>
                                    Unavailable spaces: 2 <br>
                                    Available spaces: 3 <br>
                                    Reserved spaces: 3 <br></i>
                                </div>
                                <div class="d-flex justify-content-around align-items-center">
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M1</div>
                                        <div class="px-1" style="background-color: #C90B0B; font-size: 7px">Occupied</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M2</div>
                                        <div class="px-1" style="background-color: #0F9A36; font-size: 7px">Available</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M3</div>
                                        <div class="px-1" style="background-color: #0F9A36; font-size: 7px">Available</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M4</div>
                                        <div class="px-1" style="background-color: #0F9A36; font-size: 7px">Available</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M5</div>
                                        <div class="px-1" style="background-color: #C90B0B; font-size: 7px">Occupied</div>
                                    </div>
                                </div> 
                                <div style="display: flex; justify-content: space-around;">   
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M6</div>
                                        <div class="px-1" style="background-color: #F53C5D; font-size: 7px">Reserved</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M7</div>
                                        <div class="px-1" style="background-color: #F53C5D; font-size: 7px">Reserved</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M8</div>
                                        <div class="px-1" style="background-color: #F53C5D; font-size: 7px">Reserved</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M9</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 7px">Unavailable</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M10</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 7px">Unavailable</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div id="tricycles" style="border: 2px groove; border-radius: 5px;">
                                <label class="form-check-label" style="font-size: 10px; margin-left: 5px;" for="tricycles">
                                    A - for Tricycles
                                </label>
                            </div>
                            <div class="parking-lot" id="tricycles-lot" style="border: 2px groove; border-radius: 5px; margin-top: -3px; display: none;">
                                <div class="text-center p-2" style="font-size: 10px;">
                                    <i>Occupied spaces: 0 <br>
                                    Unavailable spaces: 4 <br>
                                    Available spaces: 2 <br>
                                    Reserved spaces: 2 <br></i>
                                </div>
                                <div class="d-flex justify-content-around align-items-center">
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">T1</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">T2</div>
                                        <div class="px-1" style="background-color: #0F9A36; font-size: 10px">Available</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">T3</div>
                                        <div class="px-1" style="background-color: #0F9A36; font-size: 10px">Available</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">T4</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div>
                                </div> 
                                <div style="display: flex; justify-content: space-around;">  
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">T5</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div> 
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">T6</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">T7</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">T8</div>
                                        <div class="px-1" style="background-color: #F53C5D; font-size: 10px">Reserved</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div id="cars" style="border: 2px groove; border-radius: 5px;">
                                <label class="form-check-label" style="font-size: 10px; margin-left: 5px;" for="cars">
                                    A - for Cars
                                </label>
                            </div>
                            <div class="parking-lot" id="cars-lot" style="border: 2px groove; border-radius: 5px; margin-top: -3px; display: none;">
                                <div class="text-center p-2" style="font-size: 10px;">
                                    <i>Occupied spaces: 0 <br>
                                    Unavailable spaces: 4 <br>
                                    Available spaces: 2 <br>
                                    Reserved spaces: 0 <br></i>
                                </div>
                                <div class="d-flex justify-content-around align-items-center">
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">C1</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">C2</div>
                                        <div class="px-1" style="background-color: #0F9A36; font-size: 10px">Available</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">C3</div>
                                        <div class="px-1" style="background-color: #0F9A36; font-size: 10px">Available</div>
                                    </div>
                                </div> 
                                <div style="display: flex; justify-content: space-around;"> 
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">C4</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div> 
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">C5</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div> 
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">C6</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container my-4">
                        <label for="photos" style="font-size: 10px"><i>Photos of your Space</i></label>
                        <div id="carouselExampleIndicators" class="carousel slide mt-1" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="../img/parking1.jpg" class="d-block w-100" alt="..." height="200">
                            </div>
                            <div class="carousel-item">
                            <img src="../img/parking2.jpg" class="d-block w-100" alt="..." height="200">
                            </div>
                            <div class="carousel-item">
                            <img src="../img/parking3.jpg" class="d-block w-100" alt="..." height="200">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" style="font-size: 10px;"  type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Floor 2
            </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <div class="container my-4 ">
                        <label for="spacedimension" style="font-size: 10px"><i>Space Dimension</i></label>
                        <div class="d-flex flex-direction-row justify-content-between">
                            <div class="container px-1">
                                <div style="font-size: 9px;"><b>Width</b></div>
                                <div class="d-flex justify-content-between p-2" style="border: 2px groove; border-radius:5px;">
                                    <div style="font-size: 9px;">200</div>
                                    <div style="font-size: 9px;">meter</div>
                                </div>
                            </div>
                            <div class="container px-1">
                                <div style="font-size: 9px;"><b>Length</b></div>
                                <div class="d-flex justify-content-between p-2" style="border: 2px groove; border-radius:5px;">
                                    <div style="font-size: 9px;">200</div>
                                    <div style="font-size: 9px;">meter</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container sm">
                        <div class="mb-2">
                            <div id="motorcycles" style="border: 2px groove; border-radius: 5px;">
                                <label class="form-check-label" style="font-size: 10px; margin-left: 5px;" for="motorcycles">
                                    A - for Motorcycles
                                </label>
                            </div>
                            <div class="parking-lot" id="motorcycles-lot" style="border: 2px groove; border-radius: 5px; margin-top: -3px; display: none;">
                                <div class="text-center p-2" style="font-size: 10px;">
                                    <i>Occupied spaces: 2 <br>
                                    Unavailable spaces: 2 <br>
                                    Available spaces: 3 <br>
                                    Reserved spaces: 3 <br></i>
                                </div>
                                <div class="d-flex justify-content-around align-items-center">
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M1</div>
                                        <div class="px-1" style="background-color: #C90B0B; font-size: 7px">Occupied</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M2</div>
                                        <div class="px-1" style="background-color: #0F9A36; font-size: 7px">Available</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M3</div>
                                        <div class="px-1" style="background-color: #0F9A36; font-size: 7px">Available</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M4</div>
                                        <div class="px-1" style="background-color: #0F9A36; font-size: 7px">Available</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M5</div>
                                        <div class="px-1" style="background-color: #C90B0B; font-size: 7px">Occupied</div>
                                    </div>
                                </div> 
                                <div style="display: flex; justify-content: space-around;">   
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M6</div>
                                        <div class="px-1" style="background-color: #F53C5D; font-size: 7px">Reserved</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M7</div>
                                        <div class="px-1" style="background-color: #F53C5D; font-size: 7px">Reserved</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M8</div>
                                        <div class="px-1" style="background-color: #F53C5D; font-size: 7px">Reserved</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M9</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 7px">Unavailable</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M10</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 7px">Unavailable</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div id="tricycles" style="border: 2px groove; border-radius: 5px;">
                                <label class="form-check-label" style="font-size: 10px; margin-left: 5px;" for="tricycles">
                                    A - for Tricycles
                                </label>
                            </div>
                            <div class="parking-lot" id="tricycles-lot" style="border: 2px groove; border-radius: 5px; margin-top: -3px; display: none;">
                                <div class="text-center p-2" style="font-size: 10px;">
                                    <i>Occupied spaces: 0 <br>
                                    Unavailable spaces: 4 <br>
                                    Available spaces: 2 <br>
                                    Reserved spaces: 2 <br></i>
                                </div>
                                <div class="d-flex justify-content-around align-items-center">
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">T1</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">T2</div>
                                        <div class="px-1" style="background-color: #0F9A36; font-size: 10px">Available</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">T3</div>
                                        <div class="px-1" style="background-color: #0F9A36; font-size: 10px">Available</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">T4</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div>
                                </div> 
                                <div style="display: flex; justify-content: space-around;">  
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">T5</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div> 
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">T6</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">T7</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">T8</div>
                                        <div class="px-1" style="background-color: #F53C5D; font-size: 10px">Reserved</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div id="cars" style="border: 2px groove; border-radius: 5px;">
                                <label class="form-check-label" style="font-size: 10px; margin-left: 5px;" for="cars">
                                    A - for Cars
                                </label>
                            </div>
                            <div class="parking-lot" id="cars-lot" style="border: 2px groove; border-radius: 5px; margin-top: -3px; display: none;">
                                <div class="text-center p-2" style="font-size: 10px;">
                                    <i>Occupied spaces: 0 <br>
                                    Unavailable spaces: 4 <br>
                                    Available spaces: 2 <br>
                                    Reserved spaces: 0 <br></i>
                                </div>
                                <div class="d-flex justify-content-around align-items-center">
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">C1</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">C2</div>
                                        <div class="px-1" style="background-color: #0F9A36; font-size: 10px">Available</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">C3</div>
                                        <div class="px-1" style="background-color: #0F9A36; font-size: 10px">Available</div>
                                    </div>
                                </div> 
                                <div style="display: flex; justify-content: space-around;"> 
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">C4</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div> 
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">C5</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div> 
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">C6</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container my-4">
                        <label for="photos" style="font-size: 10px"><i>Photos of your Space</i></label>
                        <div id="carouselExampleIndicators" class="carousel slide mt-1" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="../img/parking1.jpg" class="d-block w-100" alt="..." height="200">
                            </div>
                            <div class="carousel-item">
                            <img src="../img/parking2.jpg" class="d-block w-100" alt="..." height="200">
                            </div>
                            <div class="carousel-item">
                            <img src="../img/parking3.jpg" class="d-block w-100" alt="..." height="200">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" style="font-size: 10px;"  type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Floor 3
            </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <div class="container my-4 ">
                        <label for="spacedimension" style="font-size: 10px"><i>Space Dimension</i></label>
                        <div class="d-flex flex-direction-row justify-content-between">
                            <div class="container px-1">
                                <div style="font-size: 9px;"><b>Width</b></div>
                                <div class="d-flex justify-content-between p-2" style="border: 2px groove; border-radius:5px;">
                                    <div style="font-size: 9px;">200</div>
                                    <div style="font-size: 9px;">meter</div>
                                </div>
                            </div>
                            <div class="container px-1">
                                <div style="font-size: 9px;"><b>Length</b></div>
                                <div class="d-flex justify-content-between p-2" style="border: 2px groove; border-radius:5px;">
                                    <div style="font-size: 9px;">200</div>
                                    <div style="font-size: 9px;">meter</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container sm">
                        <div class="mb-2">
                            <div id="motorcycles" style="border: 2px groove; border-radius: 5px;">
                                <label class="form-check-label" style="font-size: 10px; margin-left: 5px;" for="motorcycles">
                                    A - for Motorcycles
                                </label>
                            </div>
                            <div class="parking-lot" id="motorcycles-lot" style="border: 2px groove; border-radius: 5px; margin-top: -3px; display: none;">
                                <div class="text-center p-2" style="font-size: 10px;">
                                    <i>Occupied spaces: 2 <br>
                                    Unavailable spaces: 2 <br>
                                    Available spaces: 3 <br>
                                    Reserved spaces: 3 <br></i>
                                </div>
                                <div class="d-flex justify-content-around align-items-center">
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M1</div>
                                        <div class="px-1" style="background-color: #C90B0B; font-size: 7px">Occupied</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M2</div>
                                        <div class="px-1" style="background-color: #0F9A36; font-size: 7px">Available</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M3</div>
                                        <div class="px-1" style="background-color: #0F9A36; font-size: 7px">Available</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M4</div>
                                        <div class="px-1" style="background-color: #0F9A36; font-size: 7px">Available</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M5</div>
                                        <div class="px-1" style="background-color: #C90B0B; font-size: 7px">Occupied</div>
                                    </div>
                                </div> 
                                <div style="display: flex; justify-content: space-around;">   
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M6</div>
                                        <div class="px-1" style="background-color: #F53C5D; font-size: 7px">Reserved</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M7</div>
                                        <div class="px-1" style="background-color: #F53C5D; font-size: 7px">Reserved</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M8</div>
                                        <div class="px-1" style="background-color: #F53C5D; font-size: 7px">Reserved</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M9</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 7px">Unavailable</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">M10</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 7px">Unavailable</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div id="tricycles" style="border: 2px groove; border-radius: 5px;">
                                <label class="form-check-label" style="font-size: 10px; margin-left: 5px;" for="tricycles">
                                    A - for Tricycles
                                </label>
                            </div>
                            <div class="parking-lot" id="tricycles-lot" style="border: 2px groove; border-radius: 5px; margin-top: -3px; display: none;">
                                <div class="text-center p-2" style="font-size: 10px;">
                                    <i>Occupied spaces: 0 <br>
                                    Unavailable spaces: 4 <br>
                                    Available spaces: 2 <br>
                                    Reserved spaces: 2 <br></i>
                                </div>
                                <div class="d-flex justify-content-around align-items-center">
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">T1</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">T2</div>
                                        <div class="px-1" style="background-color: #0F9A36; font-size: 10px">Available</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">T3</div>
                                        <div class="px-1" style="background-color: #0F9A36; font-size: 10px">Available</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">T4</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div>
                                </div> 
                                <div style="display: flex; justify-content: space-around;">  
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">T5</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div> 
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">T6</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">T7</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">T8</div>
                                        <div class="px-1" style="background-color: #F53C5D; font-size: 10px">Reserved</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div id="cars" style="border: 2px groove; border-radius: 5px;">
                                <label class="form-check-label" style="font-size: 10px; margin-left: 5px;" for="cars">
                                    A - for Cars
                                </label>
                            </div>
                            <div class="parking-lot" id="cars-lot" style="border: 2px groove; border-radius: 5px; margin-top: -3px; display: none;">
                                <div class="text-center p-2" style="font-size: 10px;">
                                    <i>Occupied spaces: 0 <br>
                                    Unavailable spaces: 4 <br>
                                    Available spaces: 2 <br>
                                    Reserved spaces: 0 <br></i>
                                </div>
                                <div class="d-flex justify-content-around align-items-center">
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">C1</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">C2</div>
                                        <div class="px-1" style="background-color: #0F9A36; font-size: 10px">Available</div>
                                    </div>
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">C3</div>
                                        <div class="px-1" style="background-color: #0F9A36; font-size: 10px">Available</div>
                                    </div>
                                </div> 
                                <div style="display: flex; justify-content: space-around;"> 
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">C4</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div> 
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">C5</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div> 
                                    <div class="my-2" style="border: 1px solid black; border-radius: 5px;">
                                        <div class="text-center" style="font-size: 10px;">C6</div>
                                        <div class="px-1" style="background-color: #D9D9D9; font-size: 10px">Unavailable</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container my-4">
                        <label for="photos" style="font-size: 10px"><i>Photos of your Space</i></label>
                        <div id="carouselExampleIndicators" class="carousel slide mt-1" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="../img/parking1.jpg" class="d-block w-100" alt="..." height="200">
                            </div>
                            <div class="carousel-item">
                            <img src="../img/parking2.jpg" class="d-block w-100" alt="..." height="200">
                            </div>
                            <div class="carousel-item">
                            <img src="../img/parking3.jpg" class="d-block w-100" alt="..." height="200">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
    <div class="container my-4 d-flex flex-direction-row align-items-center justify-content-around">
        <div class="text-center">
            <div style="font-size: 10px;"><b>Hourly</b></div>
            <label for="rate" style="font-size: 10px"><i>Rate</i></label>
        </div>
        <div class="text-center">
            <div style="font-size: 10px;"><b>₱150.00</b></div>
            <label for="amount" style="font-size: 10px"><i>Amount</i></label>
        </div>
        <div class="text-center">
            <div style="font-size: 10px;"><b>00:10:00</b></div>
            <label for="timeallowance" style="font-size: 10px"><i>Time allowance</i></label>
        </div>
    </div>
    <div class="container my-4 d-flex flex-direction-row align-items-center justify-content-around">
        <div class="text-center">
            <div style="font-size: 10px;"><b>₱100.00</b></div>
            <label for="basefee" style="font-size: 9px"><i>Base Fee</i></label>
        </div>
        <div class="text-center">
            <div style="font-size: 10px;"><b>₱50.00</b></div>
            <label for="depositbasefee" style="font-size: 9px"><i>Deposit Base Fee</i></label>
        </div>
    </div>
    <div class="container my-4">
        <label for="description" style="font-size: 10px"><i>Description</i></label>
        <ul style="font-size: 9px">
            <li><b>Security camera</b></li>
            <li><b>Security Personnel</b></li>
            <li><b>Wifi</b></li>
            <li><b>Gate</b></li>
        </ul>
    </div>
    <div class="container my-4">
        <label for="payment" style="font-size: 10px"><i>Payment Method</i></label>
        <div class="d-flex flex-direction-row ms-3 mt-2">
            <div class="px-2" style="border: 2px groove; border-radius: 5px; font-size: 9px"><b>Gcash</b></div>
            <div class="px-2 ms-2" style="border: 2px groove; border-radius: 5px; font-size: 9px"><b>Cash</b></div>
        </div>
    </div>
    <div class="container my-4">
        <div>
            <label for="reveiws" style="font-size: 10px;" class="mb-2"><i>Reviews(5.1k)</i></label>
            <div class="d-flex flex-direction-row mt-2" style="border-top: 1px groove black">
                <div>
                    <i class="fa fa-user-circle mt-2 me-2" aria-hidden="true"></i>
                </div>
                <div>
                    <b style="font-size: 10px;"> Mary Harolhette Rom</b>
                    <div class="d-flex flex-directin-column" style="font-size: 8px;">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o me-2" aria-hidden="true"></i>
                        2 weeks ago
                    </div>
                    <div class="mt-2" style="font-size: 10px;">
                        "I recently rented a parking space and had a fantastic experience. The online reservation was quick and easy, with transparent pricing..."<b style="text-decoration: underline">See more</b><br>
                        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 3 <i class="fa fa-thumbs-o-down" aria-hidden="true"></i> 0
                    </div>
                </div>
            </div>
            <div class="d-flex flex-direction-row mt-2" style="border-top: 1px groove black">
                <div>
                    <i class="fa fa-user-circle mt-2 me-2" aria-hidden="true"></i>
                </div>
                <div>
                    <b style="font-size: 10px;"> Mary Harolhette Rom</b>
                    <div class="d-flex flex-directin-column" style="font-size: 8px;">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o me-2" aria-hidden="true"></i>
                        2 weeks ago
                    </div>
                    <div class="mt-2" style="font-size: 10px;">
                        "I recently rented a parking space and had a fantastic experience. The online reservation was quick and easy, with transparent pricing..."<b style="text-decoration: underline">See more</b><br>
                        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 3 <i class="fa fa-thumbs-o-down" aria-hidden="true"></i> 0
                    </div>
                </div>
            </div>
            <div class="d-flex flex-direction-row mt-2" style="border-top: 1px groove black; border-bottom: 1px groove black;">
                <div>
                    <i class="fa fa-user-circle mt-2 me-2" aria-hidden="true"></i>
                </div>
                <div>
                    <b style="font-size: 10px;"> Mary Harolhette Rom</b>
                    <div class="d-flex flex-directin-column" style="font-size: 8px;">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o me-2" aria-hidden="true"></i>
                        2 weeks ago
                    </div>
                    <div class="my-2" style="font-size: 10px;">
                        "I recently rented a parking space and had a fantastic experience. The online reservation was quick and easy, with transparent pricing..."<b style="text-decoration: underline">See more</b><br>
                        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 3 <i class="fa fa-thumbs-o-down" aria-hidden="true"></i> 0
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center my-4">
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
    </div>
    <?php
    require_once('./include/js.php');
    ?>
</body>
</html>