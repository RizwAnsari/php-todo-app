<?php 
require_once "partials/header.php";
?>

<div class="container mt-5">
      <form method="POST" action="./login.php" class="px-4 py-3 form">
      <p class="mb-4 lead">Login</p>
      <div class="mb-3">
            <label for="logFormEmail" class="form-label">Email address</label>
            <input type="email" name="logEmail" class="form-control" id="logFormEmail" placeholder="email@example.com">
      </div>
      <div class="mb-3">
            <label for="logFormPassword" class="form-label">Password</label>
            <input type="password" name="logPass" class="form-control" id="logFormPassword" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
</div>
<?php 
require_once "partials/footer.php";
?>