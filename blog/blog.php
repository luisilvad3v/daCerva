<?php
include_once("../connect.php");
?>

<ul class="nav nav-pills">
  <li class="nav-item">
    <a href="<?= $_SERVER["PHP_SELF"] ?>" class="nav-link active"><i class="bi bi-arrow-return-left"></i> Previous</a>
  </li>
</ul>

<div class="container">
  <h1 class="text-center mb-5">Blog</h1>
  <div class="row">

    <?php

    $sql = "SELECT * FROM blogs ORDER BY id_blog DESC";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $id_blog = $row["id_blog"];
        $title = $row["title"];
        $text = $row["text"];
        $youtube_url = $row["youtube_url"];
        $thumbnail_url = $row["thumbnail_url"];

        echo "<div class='col-sm'>";
        echo "<a href='{$_SERVER["PHP_SELF"]}?o=view_blog&id=$id_blog' class='text-decoration-none'>";
        echo "<div class='card'>";
        echo "<img src='$thumbnail_url' alt='' class='card-img-top'>";
        echo "<div class='card-body'>";
        echo "<p class='text-capitalize'>$title</p>";
        echo "</div>";
        echo "</div>";
        echo "</a>";
        echo "</div>";
      }
    } else {
      echo "0 resultados";
    }

    ?>
  </div>
</div>