<?php
include_once("../../index_start.php");
include_once("../../connect.php");
include_once("../../funcoes.php");

if (!empty($_GET["o"]) && strtolower($_GET["o"]) != "index") {
  include($_GET["o"] . ".php");
} else {

  include_once("insert_stones.php");
  echo "<hr/>";
  include_once("list_stones.php");
}
include_once("../../index_end.php");
