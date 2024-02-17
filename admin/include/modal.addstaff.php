<div class="modal fade" id="addstaff" data-bs-backdrop="static" tabindex="-1" aria-labelledby="addstaffmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content p-4">
            <div class="modal-header justify-content-center flex-column">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h1 class="modal-title fs-5" id="addstaffmodal">ADD STAFF</h1>
            </div>
            <form action="post" method="post">
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="row mb-3 d-flex flex-column">
                            <label for="user" class="col-sm-2 col-form-label" style="width: max-content;">Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="user" required placeholder="Enter your Username..." style="width: 120%;">
                            </div>
                        </div>
                        <div class="row mb-3 d-flex flex-column">
                            <label for="account" class="col-sm-2 col-form-label" style="width: max-content;">Last Name:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="account" required placeholder="Enter your email..." style="width: 120%;">
                            </div>
                        </div>
                        <div class="row mb-3 d-flex flex-column">
                            <label for="pass" class="col-sm-2 col-form-label" style="width: max-content;">M. Initial:</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="pass" required placeholder="Enter your password..." style="width: 120%;">
                            </div>
                        </div>
                        <div class="row mb-3 d-flex flex-column">
                            <label for="pass" class="col-sm-2 col-form-label" style="width: max-content;">Position:</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="pass" required placeholder="Enter your password..." style="width: 120%;">
                            </div>
                        </div>
                        <div class="row mb-3 d-flex flex-column">
                            <label for="pass" class="col-sm-2 col-form-label" style="width: max-content;">Contact No.:</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="pass" required placeholder="Enter your password..." style="width: 120%;">
                            </div>
                        </div>
                        <div class="row mb-3 d-flex flex-column">
                            <label for="pass" class="col-sm-2 col-form-label" style="width: max-content;">Email:</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="pass" required placeholder="Enter your password..." style="width: 120%;">
                            </div>
                        </div>
                        <div class="row mb-3 d-flex flex-column">
                            <label for="pass" class="col-sm-2 col-form-label" style="width: max-content;">Status:</label>
                            <div class="col d-flex justify-content-center">
                                <form action="" method="post">
                                    <input type="radio" name="status" id="active" value="Active">
                                    <label for="active" class="pe-4">Active</label>
                                    <input type="radio" name="status" id="inactive" value="Inactive">
                                    <label for="inactive" class="pe-2">Inactive</label>
                                </form>
                            </div>
                        </div>
                    </form>
                </div>
            </form>
            <div class="containline d-flex justify-content-center" style="width: 100%;">
                <div class="line" style="border-bottom: 1px solid black; width: 90%;"></div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Okay</button>
            </div>
        </div>
    </div>
</div>