<?php

if (!empty($_GET["d"])) {

  $sql = "SELECT * FROM jewelries WHERE id_jewelry = " . $_GET["d"];
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $img_url = $row["img_url"];

    // delete img
    unlink("../../shop/jewelries/img/$img_url");

    // delete from database
    $sql = "DELETE FROM jewelries WHERE id_jewelry = " . $_GET["d"];
    $conn->query($sql);
  }
}

header("location:{$url}admin/jewelries/");
