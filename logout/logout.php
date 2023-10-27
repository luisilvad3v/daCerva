<?php
include_once('../connect.php');

setcookie("id_user", "", time() - 3600, "/");
setcookie("login", "", time() - 3600, "/");
setcookie("password", "", time() - 3600, "/");
setcookie("admin", "", time() - 3600, "/");
setcookie("nav_admin", "", time() - 3600, "/");

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

header("location:$url");
