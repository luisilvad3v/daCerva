<?php
include_once("../../index_start.php");
include_once('../nav_admin.php');

if (!empty($_GET["o"]) && strtolower($_GET["o"]) != "index") {
  btn_return('./');
  echo "<div class='container'>";
  include($_GET["o"] . ".php");
} else {
  btn_return('../');
  echo "<div class='container'>";
  include_once("insert_alchemies.php");
  echo "<hr/>";
  include_once("list_alchemies.php");
}
echo "</div>";
include_once("../../index_end.php");
