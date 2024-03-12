<div class="modal fade" id="reported" data-bs-backdrop="static" tabindex="-1" aria-labelledby="reportedaccount" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header justify-content-center flex-column">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <h1 class="modal-title fs-5" id="reportedaccount" style="font-weight: bold;">Reported Account</h1>
      </div>
      <form action="post" method="post">
        <div class="modal-body">
          <form action="#" method="post">
            <div class="row mb-3">
              <label for="user" class="col-sm-2 col-form-label">Name:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="user" required placeholder="Enter your Username..." style="width: 100%;">
              </div>
            </div>
            <div class="row mb-3">
              <label for="account" class="col-sm-2 col-form-label">Date:</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="account" required placeholder="Enter your email..." style="width: 100%;">
              </div>
            </div>
            <div class="row mb-3">
              <label for="pass" class="col-sm-2 col-form-label">Contact:</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="pass" required placeholder="Enter your password..." style="width: 100%;">
              </div>
            </div>
            <div class="row mb-3 d-flex flex-direction-column">
              <label for="descriptiom" class="col-form-label">Description of Violation: </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="account" required placeholder="Enter your statement..." style="width: 121%; height: 13vh;">
              </div>
            </div>
          </form>
        </div>
      </form>
      <div class="modal-footer d-flex justify-content-center">
        <button type="cancel" class="btn" style="background-color: #DFF6FF; color: black;">Cancel</button>
        <button type="submit" class="btn" style="background-color: #06283D; color: white;">Approved Report</button>
      </div>
    </div>
  </div>
</div>