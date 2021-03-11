<div class="dropdown-menu">
    <form method="POST" action="index.php" class="px-4 py-3">
        <div class="mb-3">
            <label for="logFormEmail" class="form-label">Email address</label>
            <input type="email" name="logEmail" class="form-control" id="logFormEmail" placeholder="email@example.com">
        </div>
        <div class="mb-3">
            <label for="logFormPassword" class="form-label">Password</label>
            <input type="password" name="logPass" class="form-control" id="logFormPassword" placeholder="Password">
        </div>
        <div class="mb-3">
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">New around here? Sign up</a>
    <a class="dropdown-item" href="#">Forgot password?</a>
</div>