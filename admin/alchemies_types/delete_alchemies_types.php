<?php

if (!empty($_GET["d"])) {

  $sql = "DELETE FROM alchemies_types WHERE id_alchemy_type = " . $_GET["d"];

  $conn->query($sql);

  header("location:{$url}admin/alchemies_types/");
}
