<?php
include_once("../../index_start.php");
include_once('../nav_admin.php');
btn_return('../');
echo "<div class='container'>";

if (!empty($_GET["o"]) && strtolower($_GET["o"]) != "index") {
  include($_GET["o"] . ".php");
} else {

  include_once("insert_stones.php");
  echo "<hr/>";
  include_once("list_stones.php");
}
echo "</div>";
include_once("../../index_end.php");
