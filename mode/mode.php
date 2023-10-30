<?php

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

if (!isset($_COOKIE["mode"])) {
  setcookie("mode", "dark", time() + (86400 * 30), "/");
} elseif ($_COOKIE["mode"] == "dark") {
  setcookie("mode", "light", time() + (86400 * 30), "/");
} else {
  setcookie("mode", "dark", time() + (86400 * 30), "/");
}

header("location:$url");
