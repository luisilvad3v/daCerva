<h2>Plants</h2>

<table class="table">
  <th scope="col">ID</th>
  <th scope="col">English name</th>
  <th scope="col">Latin name</th>
  <th scope="col"></th>
  <th scope="col"></th>

  <?php

  $sql = "SELECT * FROM plants ORDER BY id_plant DESC";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["id_plant"] . "</td>";
      echo "<td>" . $row["plant_eng"] . "</td>";
      echo "<td>" . $row["plant_la"] . "</td>";
      echo "<td><a href='{$url}admin/plants/?o=edit_plants&e=" . $row["id_plant"] . "'><i class='bi bi-pencil'></i></a></td>";
      echo "<td><a href='{$url}admin/plants/?o=delete_plants&d=" . $row["id_plant"] . "'><i class='bi bi-trash'></i></a></td>";
      echo "</tr>";
    }
  } else {
    echo "0 results";
  }

  ?>

</table>