<?php

include_once("insert_alchemies.php");

?>

<hr>

<h2>Alchemies</h2>

<table class="table">
  <th scope="col">ID</th>
  <th scope="col">Type</th>
  <th scope="col">Plant (ENG)</th>
  <th scope="col">Plant (LA)</th>
  <th scope="col">Price</th>
  <th scope="col">Stock</th>
  <th scope="col">Image</th>
  <th scope="col"></th>
  <th scope="col"></th>

  <?php

  include_once("connect.php");

  $sql = "SELECT * FROM alchemies
          INNER JOIN alchemies_types ON alchemies_types.id_alchemy_type = alchemies.id_alchemy_type
          INNER JOIN plants ON plants.id_plant = alchemies.id_plant
          ORDER BY id_alchemy DESC";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["id_alchemy"] . "</td>";
      echo "<td>" . $row["alchemy_type"] . "</td>";
      echo "<td>" . $row["plant_eng"] . "</td>";
      echo "<td>" . $row["plant_la"] . "</td>";
      echo "<td>" . $row["price"] . "</td>";
      echo "<td>" . $row["stock"] . "</td>";
      echo "<td><a href='" . $row["img_url"] . "'><img src='" . $row["img_url"] . "' alt='' style='width:100px'></td>";
      echo "<td><a href='$url?o=edit_alchemies&e=" . $row["id_alchemy"] . "'><i class='bi bi-pencil'></i></a></td>";
      echo "<td><a href='$url?o=delete_alchemies&d=" . $row["id_alchemy"] . "'><i class='bi bi-trash'></i></a></td>";
      echo "</tr>";
    }
  } else {
    echo "0 results";
  }

  ?>

</table>