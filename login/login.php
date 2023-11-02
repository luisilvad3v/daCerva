<ul class="nav nav-pills justify-content-end me-2 mt-2">
  <li class="nav-item">
    <a href="../" class="nav-link active"><i class="bi bi-arrow-return-left"></i></a>
  </li>
</ul>

<div class="container">
  <h1 class="text-center">Login</h1>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" class="mt-3">
    <div class="mb-3">
      <label for="login" class="form-label">Login</label>
      <input type="text" class="form-control" id="login" name="login">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
    <button type="button" class="btn btn-primary" onclick="window.location.href='<?= $url ?>signup/'">Signup</button>

    <?php
    if (isset($_POST['login']) || isset($_POST['password'])) {
      if (!empty($_POST['login']) && !empty($_POST['password'])) {

        $login = test_input($_POST['login']);
        $password = sha1(test_input($_POST['password']) . $enc_key);

        $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";

        $result = $conn->query($sql);
        if ($row = $result->fetch_assoc()) {

          $cookie_time = 86400 * 30;
          setcookie('id_user', $row['id_user'], time() + $cookie_time, "/");
          setcookie('login', $row['login'], time() + $cookie_time, "/");
          setcookie('password', $row['password'], time() + $cookie_time, "/");
          setcookie('admin', $row['admin'], time() + $cookie_time, "/");

          header("location:$url");
        } else {
          echo "<p class='mt-2 text-danger'>Invalid login and/or password</p>";
        }
      } else {
        echo "<p class='mt-2 text-danger'>Empty login and/or password</p>";
      }
    }
    ?>
</div>