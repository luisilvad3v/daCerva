<?php

if (!isset($_SESSION["nav_admin"])) {
  $_SESSION["nav_admin"] = 1;
} elseif ($_SESSION["nav_admin"] == 0) {
  $_SESSION["nav_admin"] = 1;
} else {
  $_SESSION["nav_admin"] = 0;
}

header("location:$url");
