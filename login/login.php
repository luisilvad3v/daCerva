<?php
include_once("../connect.php");
?>


<ul class="nav nav-pills">
  <li class="nav-item">
    <a href="<?= $url ?>" class="nav-link active"><i class="bi bi-arrow-return-left"></i> Previous</a>
  </li>
</ul>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" class="mt-3">
  <div class="mb-3">
    <label for="login" class="form-label">Login</label>
    <input type="text" class="form-control" id="login" name="login">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button class="btn btn-primary">Login</button>
</form>

<?php

if (!empty($_POST['login']) and !empty($_POST['password'])) {

  $sql = "SELECT * FROM users WHERE login = '{$_POST['login']}' AND password = '{$_POST['password']}'";

  $result = $conn->query($sql);
  if ($row = $result->fetch_assoc()) {

    $cookie_time = 86400 * 30;
    setcookie('id_user', $row['id_user'], time() + $cookie_time, "/");
    setcookie('login', $row['login'], time() + $cookie_time, "/");
    setcookie('password', $row['password'], time() + $cookie_time, "/");
    setcookie('admin', $row['admin'], time() + $cookie_time, "/");

    header("location:$url");
  } else {
    echo "<p class='mt-3 text-danger'>Login e/ou password incorretos</p>";
  }
}

?>