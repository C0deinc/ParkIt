<div class="modal fade" id="payment" data-bs-backdrop="static" tabindex="-1" aria-labelledby="paymentmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content p-4">
            <div class="modal-header justify-content-center flex-column">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h1 class="modal-title fs-5" id="paymentmodal" style="font-weight: bold; color: #06283D;">Proof of Payment</h1>
            </div>
            <div class="col-md-4 mt-2">
                <div class="receipt-item">
                    <span style="font-size: 20px;">ID:</span>
                    <span class="highlight" style="font-weight: bold; color: #06283D; font-size: 20px;">123456789</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="receipt-item">
                        <span>February 8, 2024</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="receipt-item mb-0"> <!-- Added mb-3 class for margin bottom -->
                        <div class="text-center">
                            <span>Time Arrived:</span>
                            <span>10:00 AM</span>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-custom-hr my-3" style="margin-top: 20px;">


            <!-- Number of Vehicles Used -->
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p class="text-center">Number of Vehicles Used: <strong style="font-weight: bold; color: #06283D;"> 10</strong></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <tr>
                            <td>Base Rate:</td>
                            <td>PHP 50.00</td>
                        </tr>
                        <tr>
                            <td>Deposit Base Fee:</td>
                            <td>PHP 100.00</td>
                        </tr>
                        <tr>
                            <td>Deposit Rate (optional):</td>
                            <td>PHP 20.00</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12 p-2">
                    <!-- Right side -->
                    <table style="width:100%;">
                        <tr>
                            <th style="padding-left: 10px;">Payment Method:</th>
                            <td style="padding-left: 100px;">GCash</td>
                        </tr>
                        <tr>
                            <th style="padding-left: 10px;">Total Time Used:</th>
                            <td style="padding-left: 100px;">2 hours</td>
                        </tr>
                        <tr style="font-weight: bold; color: #06283D;">
                            <th style="padding-left: 10px;">Total Payment:</th>
                            <td style="padding-left: 100px;">PHP 220.00</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="modal-footer d-flex justify-content-center mt-3">
                <button type="return" class="btn w-50 mt-2" style="background-color: #06283D; color: white;">Okay</button>
            </div>
        </div>
    </div>
</div>