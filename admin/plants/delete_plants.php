<?php
include_once("connect.php");

if (!empty($_GET["d"])) {

  $sql = "DELETE FROM plants WHERE id_plant = " . $_GET["d"];

  $conn->query($sql);

  header("location:$url?o=list_plants");
}
