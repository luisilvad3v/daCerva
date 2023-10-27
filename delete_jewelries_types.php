<?php
include_once("connect.php");

if (!empty($_GET["d"])) {

  $sql = "DELETE FROM jewelries_types WHERE id_jewelry_type = " . $_GET["d"];

  $conn->query($sql);

  header("location:$url?o=list_jewelries_types");
}
