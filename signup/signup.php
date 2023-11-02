<?php
include_once("../connect.php");
?>

<ul class="nav nav-pills justify-content-end me-2 mt-2">
  <li class="nav-item">
    <a href="../login/" class="nav-link active"><i class="bi bi-arrow-return-left"></i></a>
  </li>
</ul>
<?php

echo "<div class='container'>";
echo "<h1 class='text-center'>Signup</h1>";

include_once("form_signup.php");

if (isset($_POST['login']) || isset($_POST['password'])) {

  if (!empty($_POST['login']) && !empty($_POST['password'])) {

    $login = test_input($_POST['login']);
    $password = sha1(test_input($_POST['password']) . $enc_key);

    $sql = "SELECT * FROM users WHERE login = '$login'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "<p class='text-danger mt-2'>Login already taken</p>";
    } else {

      $sql = "INSERT INTO users (login, password) VALUES ('$login', '$password')";

      $result = $conn->query($sql);
      if ($result == true) {
        echo "<p class='text-success mt-2'>New user created successfully. Please login...</p>";
        header('location:');
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
  } else {
    echo "<p class='text-danger mt-2'>Empty login and/or password</p>";
  }
}
echo "</div>";
?>