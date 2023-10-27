<?php

if (!isset($_COOKIE["nav_admin"])) {
  $_COOKIE["nav_admin"] = 1;
  setcookie("nav_admin", 1, time() + (86400 * 30), "/");
} elseif ($_COOKIE["nav_admin"] == 0) {
  setcookie("nav_admin", 1, time() + (86400 * 30), "/");
} else {
  setcookie("nav_admin", 0, time() + (86400 * 30), "/");
}

header("location:$url");
