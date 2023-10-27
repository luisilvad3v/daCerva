<?php
include_once("connect.php");

if (!empty($_GET["d"])) {

  $sql = "DELETE FROM alchemies_types WHERE id_alchemy_type = " . $_GET["d"];

  $conn->query($sql);

  header("location:$url?o=list_alchemies_types");
}
