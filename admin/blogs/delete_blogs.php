<?php

if (!empty($_GET["d"])) {

  $sql = "SELECT * FROM blogs WHERE id_blog = " . $_GET["d"];
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $thumbnail_url = $row["thumbnail_url"];

    // delete thumbnail
    unlink("../../blog/img/$thumbnail_url");

    // delete from database
    $sql = "DELETE FROM blogs WHERE id_blog = " . $_GET["d"];
    $conn->query($sql);
  }
}

header("location:{$url}admin/blogs/");
