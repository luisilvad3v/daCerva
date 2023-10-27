<?php
include_once("connect.php");

if (!empty($_GET["d"])) {

  $sql = "DELETE FROM alchemies WHERE id_alchemy = " . $_GET["d"];

  $conn->query($sql);

  header("location:$url?o=list_alchemies");
}
