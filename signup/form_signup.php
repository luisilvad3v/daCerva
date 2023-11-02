<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" class="mt-3">
  <div class="mb-3">
    <label for="login" class="form-label">Login</label>
    <input type="text" class="form-control" id="login" name="login">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Signup</button>
</form>