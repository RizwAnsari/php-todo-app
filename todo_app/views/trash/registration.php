<div class="modal fade" id="registerModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Register Now</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="index.php" class="px-4 py-3">
                    <div class="mb-3">
                        <label for="regFormUser" class="form-label">Name</label>
                        <input type="text" name="regUser" class="form-control" id="regFormUser" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="regFormEmail" class="form-label">Email address</label>
                        <input type="email" name="regEmail" class="form-control" id="regFormEmail" placeholder="email@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="regFormPassword" class="form-label">Password</label>
                        <input type="password" name="regPass" class="form-control" id="regFormPassword" placeholder="Password">
                    </div>
                    <div class="mb-3">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Sign up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>