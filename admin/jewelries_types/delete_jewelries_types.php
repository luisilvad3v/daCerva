<?php

if (!empty($_GET["d"])) {

  $sql = "DELETE FROM jewelries_types WHERE id_jewelry_type = " . $_GET["d"];

  $conn->query($sql);

  header("location:{$url}admin/jewelries_types/");
}
