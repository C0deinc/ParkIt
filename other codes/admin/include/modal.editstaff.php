<div class="modal fade" id="editstaff" data-bs-backdrop="static" tabindex="-1" aria-labelledby="editstaffmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header justify-content-center flex-column">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h1 class="modal-title fs-5" id="addstaffmodal" style="font-weight: bold;">ADD STAFF</h1>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <div class="row mb-2 d-flex flex-column">
                        <label for="image" class="form-label">Image</label>
                        <div class="col-sm-12"> 
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                    </div>

                    <div class="row mb-2 d-flex flex-column">
                        <label for="firstname" class="col-sm-2 col-form-label" style="width: max-content;">First Name:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="firstname" name="firstname" required placeholder="Enter your First name...">
                        </div>
                    </div>

                    <div class="row mb-2 d-flex flex-column">
                        <label for="lastname" class="col-sm-2 col-form-label" style="width: max-content;">Last Name:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="lastname" name="lastname" required placeholder="Enter your Surname...">
                        </div>
                    </div>

                    <div class="row mb-2 d-flex flex-column">
                        <label for="middlename" class="col-sm-2 col-form-label" style="width: max-content;">M. Initial:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="middlename" name="middlename" required placeholder="Enter your M. Initial...">
                        </div>
                    </div>

                    <div class="row form-group mb-2 d-flex flex-column">
                        <label for="position" class="col-sm-2 col-form-label">Position:</label>
                        <div class="col-sm-12">
                            <select name="position" id="position" class="form-select">
                                <option value="">Select Position</option>
                                <option value="Project Manager">Project Manager</option>
                                <option value="Senior Developer">Senior Developer</option>
                                <option value="Junior Developer">Junior Developer</option>
                                <option value="User Experience Designer">User Experience Designer</option>
                                <option value="User Interface Designer">User Interface Designer</option>
                                <option value="Business Analyst">Business Analyst</option>
                                <option value="Software Architect">Software Architect</option>
                                <option value="Quality Assurance">Quality Assurance</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2 d-flex flex-column">
                        <label for="contactno" class="col-sm-2 col-form-label" style="width: max-content;">Contact No.:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="contactno" name="contactno" placeholder="Enter your Contact No...">
                        </div>
                    </div>

                    <div class="row mb-2 d-flex flex-column">
                        <label for="email" class="col-sm-2 col-form-label" style="width: max-content;">Email:</label>
                        <div class="col-sm-12">
                            <input type="email" class="form-control" id="email" name="email" required placeholder="Enter your email...">
                        </div>
                    </div>
                    
                    <div class="row mb-2 d-flex flex-column">
                        <label for="password" class="col-sm-2 col-form-label" style="width: max-content;">Password:</label>
                        <div class="col-sm-12">
                            <input type="password" class="form-control" id="password" name="password" required placeholder="Enter password...">
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label class="form-label">Status</label>
                        <div class="d-flex justify-content-center"> <!-- Added justify-content-center class -->
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="statusActive" name="status" value="Active">
                                <label class="form-check-label" for="statusActive">Active</label>
                            </div>
                            <div class="form-check form-check-inline ms-3">
                                <input type="radio" class="form-check-input" id="statusDeactivated" name="status" value="Deactivated">
                                <label class="form-check-label" for="statusDeactivated">Deactivated</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mb-2 d-flex flex-column mt-4">
                        <div class="col-sm-12 text-center">
                            <button type="submit" name="ban_account" class="btn" style="background-color: #06283D; color: white;">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
