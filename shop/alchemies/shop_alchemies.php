<?php
btn_return("../");
?>

<h1 class="text-center">Alchemies</h1>

<div class="container mt-3">

  <div class="row">

    <?php

    $sql = "SELECT * FROM alchemies
        INNER JOIN alchemies_types ON alchemies_types.id_alchemy_type = alchemies.id_alchemy_type
        INNER JOIN plants ON plants.id_plant = alchemies.id_plant";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $id_alchemy = $row["id_alchemy"];
        $alchemy_type = $row["alchemy_type"];
        $plant_eng = $row["plant_eng"];
        $price = $row["price"];
        $stock = $row["stock"];
        $img_url = $row["img_url"];

        echo "<div class='col-sm-6 col-md-4 col-lg-3'>";
        echo "<a href='?o=alchemy&id=$id_alchemy' class='text-decoration-none'>";
        echo "<div class='card mb-3 shadow'>";
        echo "<img src='img/{$img_url}' alt='' class='card-img-top'>";
        echo "<div class='card-body'>";
        echo "<h2 class='text-capitalize'>$plant_eng $alchemy_type</h2>";
        echo "<p>{$price}€</p>";
        echo "<p>$stock unit in stock</p>";
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