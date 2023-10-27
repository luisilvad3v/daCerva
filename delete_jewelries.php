<?php
include_once("connect.php");

if (!empty($_GET["d"])) {

  $sql = "DELETE FROM jewelries WHERE id_jewelry = " . $_GET["d"];

  $conn->query($sql);

  header("location:$url?o=list_jewelries");
}
