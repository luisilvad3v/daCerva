    <?php
    include_once("../../index_start.php");

    if (!empty($_GET["o"]) && strtolower($_GET["o"]) != "index") {
      include($_GET["o"] . ".php");
    } else {
      include_once("shop_jewelries.php");
    }

    include_once("../../index_end.php");
