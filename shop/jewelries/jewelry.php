<ul class="nav nav-pills">
  <li class="nav-item">
    <a href="./" class="nav-link active"><i class="bi bi-arrow-return-left"></i> Previous</a>
  </li>
</ul>

<?php
include_once("../../connect.php");

if (!empty($_GET["id"]) && isset($_GET["id"])) {
  $id_jewelry = $_GET["id"];

  $sql = "SELECT * FROM jewelries
          INNER JOIN jewelries_types ON jewelries_types.id_jewelry_type = jewelries.id_jewelry_type
          INNER JOIN stones ON stones.id_stone = jewelries.id_stone  
          WHERE id_jewelry = $id_jewelry";

  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    if ($row = $result->fetch_assoc()) {
      $jewelry_type = $row["jewelry_type"];
      $stone = $row["stone"];
      $price = $row["price"];
      $stock = $row["stock"];
      $img_url = $row["img_url"];


      echo "<div class='row mt-3'>";

      echo "<div class='col-sm-6'>";
      echo "<img src='img/{$img_url}' alt='' class='img-fluid rounded img-thumbnail shadow'>";
      echo "</div>";

      echo "<div class='col-sm-6 mt-3'>";
      echo "<h2 class='text-capitalize'>$stone $jewelry_type</h2>";
      echo "<p>{$price}€</p>";
      echo "</div>";

      echo "</div>";
    }
  } else {
    echo "0 results";
  }
}
