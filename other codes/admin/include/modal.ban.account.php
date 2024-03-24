<div class="modal fade" id="ban" data-bs-backdrop="static" tabindex="-1" aria-labelledby="banaccount"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header justify-content-center flex-column">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h1 class="modal-title fs-5" id="banaccount" style="font-weight: bold;">Ban Account</h1>
            </div>
            <form action="post" method="post">
                <div class="modal-body">
                    <form action="post" method="post">
                        <div class="row mb-3">
                            <div class="dropdown d-flex align-items-center">
                                <label for="warning">Violation: </label>
                                <select name="warning" id="warninglevel" class="form-select"
                                    style="width: 50%; margin-left: 1rem;">
                                    <option value="">Select a Violation Level</option>
                                    <option value="Warning Level 1">Warning Level 1</option>
                                    <option value="Warning Level 2">Warning Level 2</option>
                                    <option value="Warning Level 3">Warning Level 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3 d-flex flex-direction-column">
                            <label for="descriptiom" class="col-form-label">Reason for Banning: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="account" required
                                    placeholder="Enter your statement..." style="width: 121%; height: 13vh;">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Okay</button>
                </div>
            </form>
        </div>
    </div>
</div>