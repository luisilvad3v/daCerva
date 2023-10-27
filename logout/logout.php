<?php

setcookie("id_user", "", time() - 3600);
setcookie("login", "", time() - 3600);
setcookie("password", "", time() - 3600);
setcookie("admin", "", time() - 3600);

header("location:$url");
