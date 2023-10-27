<?php
include_once("connect.php");
?>

<ul class="nav nav-pills">
  <li class="nav-item">
    <a href="<?= $url ?>?o=shop" class="nav-link active"><i class="bi bi-arrow-return-left"></i> Previous</a>
  </li>
</ul>

<div class="container">
  <h1 class="text-center mb-5">Jewelries</h1>
  <div class="row">

    <?php

    $sql = "SELECT * FROM jewelries
        INNER JOIN jewelries_types ON jewelries_types.id_jewelry_type = jewelries.id_jewelry_type
        INNER JOIN stones ON stones.id_stone = jewelries.id_stone";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $id_jewelry = $row["id_jewelry"];
        $jewelry_type = $row["jewelry_type"];
        $stone = $row["stone"];
        $price = $row["price"];
        $stock = $row["stock"];
        $img_url = $row["img_url"];

        echo "<div class='col-sm'>";
        echo "<a href='$url?o=view_jewelry&id=$id_jewelry' class='text-decoration-none'>";
        echo "<div class='card'>";
        echo "<img src='$img_url' alt='' class='card-img-top'>";
        echo "<div class='card-body'>";
        echo "<h2 class='text-capitalize'>$stone $jewelry_type</h2>";
        echo "<p>{$price}€</p>";
        // echo "<p>$stock unit in stock</p>";
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