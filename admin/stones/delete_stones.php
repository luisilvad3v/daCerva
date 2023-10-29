<?php

if (!empty($_GET["d"])) {

  $sql = "DELETE FROM stones WHERE id_stone = " . $_GET["d"];

  $conn->query($sql);

  header("location:{$url}admin/stones/");
}
