<?php
include_once('index_start.php');

include_once("connect.php");

// echo "<pre>";
// print_r($_COOKIE);
// echo "</pre>";

if (!empty($_GET["o"]) && strtolower($_GET["o"]) != "index") {
  include($_GET["o"] . ".php");
} else {
  include_once("home.php");
}

include_once('index_end.php');
