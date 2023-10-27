<?php

include_once("connect.php");

?>

<form action="" method="post">
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
    $_SESSION['id_user'] = $row['id_user'];
    $_SESSION['login'] = $row['login'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['admin'] = $row['admin'];

    header("location:$url");
  } else {
    echo "Login e/ou password incorretos";
  }
}

?>