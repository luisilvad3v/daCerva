<?php
btn_return("../");
?>

<h1 class="text-center">Jewelries</h1>

<div class="container">

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

        echo "<div class='col-sm-6 col-md-4 col-lg-3'>";
        echo "<a href='?o=jewelry&id=$id_jewelry' class='text-decoration-none'>";
        echo "<div class='card mb-3 shadow'>";
        echo "<img src='img/{$img_url}' alt='' class='card-img-top'>";
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