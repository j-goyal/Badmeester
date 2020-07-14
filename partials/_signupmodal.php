<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Sign Up for Badmeester account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/capstone/partials/_handlesignup.php">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Choose a unique username"required>
                    </div>

                    <div class="form-group">
                        <label for="pass">Enter Password</label>
                        <input type="password" class="form-control" id="pass" name="pass"
                            placeholder="Choose your Password" required>
                    </div>
                    <div class="form-group">
                        <label for="cpass">Confirm Password </label>
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