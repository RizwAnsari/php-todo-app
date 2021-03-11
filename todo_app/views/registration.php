<?php 
require_once "partials/header.php";
?>
<div class="container mt-5 form-container">
    <form method="POST" action="./registration.php" class="px-4 py-3 form">
        <p class="mb-4 lead">Register</p>
        <div class="mb-3">
            <label for="regFormUser" class="form-label">Name</label>
            <input type="text" name="regUser" class="form-control" id="regFormUser" placeholder="Full Name">
        </div>
        <div class="mb-3">
            <label for="regFormEmail" class="form-label">Email address</label>
            <input type="email" name="regEmail" class="form-control" id="regFormEmail" placeholder="email@example.com">
        </div>
        <div class="mb-3">
            <label for="regFormPassword" class="form-label">Password</label>
            <input type="password" name="regPass" class="form-control" id="regFormPassword" placeholder="Password">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Sign up</button>
        </div>
    </form>
</div>
<?php 
require_once "partials/footer.php";
?>