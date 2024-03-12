<div class="modal fade" id="cancel" data-bs-backdrop="static" tabindex="-1" aria-labelledby="cancelaccount"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header justify-content-center flex-column">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h1 class="modal-title fs-5" id="cancelaccount" style="font-weight: bold;">CANCELLATION ACCOUNT</h1>
            </div>
            <form action="post" method="post">
                <div class="modal-body">
                    <form action="post" method="post">
                        <div class="row mb-3">
                            <label for="user" class="col-sm-2 col-form-label" style="width: 15vw;">Space Name:</label>
                                <input type="text" class="form-control" id="user" required
                                    placeholder="Enter your Username..." style="width: 60%;">
                        </div>
                        <div class="row mb-3">
                            <label for="date" class="col-sm-2 col-form-label" style="width: 15vw;">Date
                                Cancelled:</label>
                            <input type="date" class="form-control" id="date" required placeholder="Enter your email..."
                                style="width: 30%;">
                        </div>
                        <div class="row mb-3 d-flex flex-direction-column">
                            <label for="location" class="col-form-label">Parking Location: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="location" required
                                    placeholder="Enter your Location..." style="width: 121%; height: 13vh;">
                            </div>
                        </div>
                        <div class="row mb-3 d-flex flex-direction-column">
                            <label for="reason" class="col-form-label">Reason for Cancellation: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="reason" required
                                    placeholder="Enter your statement..." style="width: 121%; height: 13vh;">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="containline d-flex justify-content-center" style="width: 100%;">
                    <div class="line" style="border-bottom: 1px solid black; width: 90%;"></div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Okay</button>
                </div>
            </form>
        </div>
    </div>
</div>