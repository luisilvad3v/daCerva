    <?php
    include_once("../index_start.php");
    include_once("../connect.php");

    if (!empty($_GET["o"]) && strtolower($_GET["o"]) != "index") {
      include($_GET["o"] . ".php");
    } else {
      include_once("blog.php");
    }

    include_once("../index_end.php");
