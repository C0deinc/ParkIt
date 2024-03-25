<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Add Space';
    $dashboard_page = 'active';
    require_once('./include/head.php');
?>
<body>
    <div class="w-100" style="min-height: 64px; background-color: #06283D;"></div>
    <div class="w-100 bg-info" style="min-height: 48px;"></div>
    <div class="w-100 flex-shrink-1 d-flex flex-column">
        <div class="w-100 bg-white p-2 d-flex align-items-center" style="height: 48px; filter: drop-shadow(0px 1px 3px #a6a6a6);">
            <p class="m-0 ms-2 fw-bold" style="font-size: 15px">My Space</p>
        </div>
        <div class="container">
            <div class="row">
                <form action="" method="post">
                    <div class="my-3" style="font-size: 12px;">
                        <label for="spacenumber" class="form-label"><b>Enter building name</b><i>(optional)</i></label>
                        <input type="text" class="form-control" id="spacenumber" name="spacenumber" placeholder=" space name" style="font-size: 10px;">
                    </div>
                    <div class="mb-3" style="font-size: 12px;">
                        <label for="location" class="form-label"><b>Enter location</b></label>
                        <input type="text" class="form-control" id="location" name="location" placeholder=" location" style="font-size: 10px;" value="<?php if(isset($_POST['location'])){ echo $_POST['location']; } ?>">
                        <?php
                        if(isset($_POST['location']) && !validate_field($_POST['location'])){
                        ?>
                        <p class="text-danger my-1">Please enter location.</p>
                        <?php
                        }
                        ?>
                    </div> 
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="floors" style="font-size: 12px;" class="form-label"><b>Number of floors</b></label>
                            <input type="number" class="form-control" id="floors" name="floors" style="font-size: 10px;">
                        </div>
                        <div id="accordion"></div>
                    </div>
                    <div class="mb-3">
                        <label style="font-size: 12px;" for="rate"><b>Choose Rate</b></label><br>
                        <div class="form-check form-check-inline mx-3">
                            <input class="form-check-input" type="checkbox" id="hourlyCheckbox" value="option1">
                            <label class="form-check-label" style="font-size: 10px;" for="hourlyCheckbox">Hourly</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="dailyCheckbox" value="option2">
                            <label class="form-check-label" style="font-size: 10px;" for="dailyCheckbox">Daily</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="weeklyCheckbox" value="option3">
                            <label class="form-check-label" style="font-size: 10px;" for="weeklyCheckbox">Weekly</label>
                        </div><br>
                        <div class="form-check mx-3 form-check-inline">
                            <input class="form-check-input" type="checkbox" id="monthlyCheckbox" value="option4">
                            <label class="form-check-label" style="font-size: 10px;" for="monthlyCheckbox">Monthly</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="yearlyCheckbox" value="option5">
                            <label class="form-check-label" style="font-size: 10px;" for="yearlyCheckbox">Yearly</label>
                        </div>
                    </div>
                    <div id="amountAndAllowanceHourly" class="mb-3" style="border: 2px groove; border-radius: 7px;  margin-left: 20px; padding: 10px; display: none;">
                        <div class="mx-3" style="font-size: 12px;">
                            <label for="amount" class="form-label"><b>Enter Amount for Hourly</b></label>
                            <input type="text" class="form-control" id="amount" name="amount" placeholder=" ₱ 00.00" style="font-size: 10px;"><br>
                        </div>
                        <div class="mx-3" style="font-size: 12px;">
                            <label for="allowance" class="form-label"><b>Enter time allowance</b></label>
                            <input type="text" class="form-control" id="allowance" name="allowance" placeholder=" 00h : 00m : 00s " style="font-size: 10px;"><br>
                        </div>
                    </div>
                    <div id="amountAndAllowanceDaily" class="mb-3" style="border: 2px groove; border-radius: 7px;  margin-left: 20px; padding: 10px; display: none;">
                        <div class="mx-3" style="font-size: 12px;">
                            <label for="amount" class="form-label"><b>Enter Amount for Daily</b></label>
                            <input type="text" class="form-control" id="amount" name="amount" placeholder=" ₱ 00.00" style="font-size: 10px;"><br>
                        </div>
                        <div class="mx-3" style="font-size: 12px;">
                            <label for="allowance" class="form-label"><b>Enter time allowance</b></label>
                            <input type="text" class="form-control" id="allowance" name="allowance" placeholder=" 00h : 00m : 00s " style="font-size: 10px;"><br>
                        </div>
                    </div>
                    <div id="amountWeekly" class="mb-3" style="border: 2px groove; border-radius: 7px;  margin-left: 20px; padding: 10px; display: none;">
                        <div class="mx-3" style="font-size: 12px;">
                            <label for="amount" class="form-label"><b>Enter Amount for Weekly</b></label>
                            <input type="text" class="form-control" id="amount" name="amount" placeholder=" ₱ 00.00" style="font-size: 10px;"><br>
                        </div>
                    </div>
                    <div id="amountMonthly" class="mb-3" style="border: 2px groove; border-radius: 7px;  margin-left: 20px; padding: 10px; display: none;">
                        <div class="mx-3" style="font-size: 12px;">
                            <label for="amount" class="form-label"><b>Enter Amount for Monthly</b></label>
                            <input type="text" class="form-control" id="amount" name="amount" placeholder=" ₱ 00.00" style="font-size: 10px;"><br>
                        </div>
                    </div>
                    <div id="amountYearly" class="mb-3" style="border: 2px groove; border-radius: 7px;  margin-left: 20px; padding: 10px; display: none;">
                        <div class="mx-3" style="font-size: 12px;">
                            <label for="amount" class="form-label"><b>Enter Amount for Yearly</b></label>
                            <input type="text" class="form-control" id="amount" name="amount" placeholder=" ₱ 00.00" style="font-size: 10px;"><br>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="depositbase" class="form-label" style="font-size: 12px;"><b>Deposit Base Fee</b></label>
                        <div class="form-check form-switch mx-3">
                            <label class="form-check-label" style="font-size: 10px;" for="flexSwitchCheckChecked">allow</label>
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"><br>
                        </div>
                        <div class="mx-3" id="amountInput">
                            <label for="amount" class="form-label" style="font-size: 10px;">Enter Amount</label>
                            <input type="text" class="form-control" id="amount" name="amount" placeholder=" ₱ 00.00" style="font-size: 10px;">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="payment" class="form-label" style="font-size: 12px;"><b>Choose Payment Method</b></label><br>
                        <div class="form-check form-check-inline mx-3">
                            <input class="form-check-input" type="checkbox" id="payment" value="option1">
                            <label class="form-check-label" style="font-size: 10px;" for="payment">Gcash</label>
                        </div>
                        <div class="form-check form-check-inline mx-3">
                            <input class="form-check-input" type="checkbox" id="payment" value="option1">
                            <label class="form-check-label" style="font-size: 10px;" for="payment">Cash</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="payment" class="form-label" style="font-size: 12px;"><b>Choose Description</b></label><br>
                        <div class="mx-3 d-flex">
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" style="font-size: 10px;" for="flexCheckChecked">Security camera</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" style="font-size: 10px;" for="flexCheckChecked">Security Personnel</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" style="font-size: 10px;" for="flexCheckChecked">Regularly maintenance</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" style="font-size: 10px;" for="flexCheckChecked">Wifi</label>
                                </div>
                            </div>  
                            <div class="ms-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" style="font-size: 10px;" for="flexCheckChecked">Lighting</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" style="font-size: 10px;" for="flexCheckChecked">Gate</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" style="font-size: 10px;" for="flexCheckChecked">EV Charging Station</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" style="font-size: 10px;" for="flexCheckChecked">Emergency call station</label>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="w-100 d-flex justify-content-around px-4 my-1">
                        <button type="button" class="container btn mx-3 text-default px-2" style="font-size: 12px; background-color: #E8E8E8; color: grey;">Cancel</button>
                        <button type="submit" name="createspace" class="container mx-3 btn text-default px-2" style="font-size: 12px; background-color: #06283D; color: white">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    require_once('./include/js.php');
    ?>
</body>
</html>