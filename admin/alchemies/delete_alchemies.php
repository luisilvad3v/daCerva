<?php

if (!empty($_GET["d"])) {

  $sql = "SELECT * FROM alchemies WHERE id_alchemy = " . $_GET["d"];
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $img_url = $row["img_url"];

    // delete img
    unlink("../../shop/alchemies/img/$img_url");

    // delete from database
    $sql = "DELETE FROM alchemies WHERE id_alchemy = " . $_GET["d"];
    $conn->query($sql);
  }
}

header("location:{$url}admin/alchemies/");
