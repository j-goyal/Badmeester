<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Sign Up for Badmeester account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form  method="post" action="/capstone/partials/_handlesignup.php">
                    <div class="form-group">
                        <label for="h_name">Hospital Name</label>
                        <input type="text" class="form-control" id="h_name" name="h_name" 
                        placeholder="Enter Your Hospital Name" required>
                    </div>
                    <div class="form-group">
                        <label for="h_address">Hospital Address</label>
                        <textarea class="form-control" id="h_address" name="h_address" rows="2" placeholder="Enter Hospital Address" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone"
                            placeholder="Enter your Phone no." required>
                    </div>

                    <div class="form-group">
                        <label for="pass">Enter Password</label>
                        <input type="password" class="form-control" id="pass" name="pass"
                            placeholder="Choose your Password" required>
                    </div>
                    <div class="form-group">
                        <label for="cpass">Confirm Password</label>
                        <input type="password" class="form-control" id="cpass" name="cpass"
                            placeholder="Enter your Password again" required>
                    </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                <button type="submit" class="btn btn-success">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</div>