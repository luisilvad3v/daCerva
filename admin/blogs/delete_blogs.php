<?php

if (!empty($_GET["d"])) {

  $sql = "DELETE FROM blogs WHERE id_blog = " . $_GET["d"];

  $conn->query($sql);

  header("location:{$url}admin/blogs/");
}
