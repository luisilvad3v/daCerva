<h2>Jewelry types</h2>

<table class="table">
  <th scope="col">ID</th>
  <th scope="col">Type</th>
  <th scope="col"></th>
  <th scope="col"></th>

  <?php

  $sql = "SELECT * FROM jewelries_types ORDER BY id_jewelry_type DESC";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["id_jewelry_type"] . "</td>";
      echo "<td>" . $row["jewelry_type"] . "</td>";
      echo "<td><a href='{$url}admin/jewelries_types/?o=edit_jewelries_types&e=" . $row["id_jewelry_type"] . "'><i class='bi bi-pencil'></i></a></td>";
      echo "<td><a href='{$url}admin/jewelries_types/?o=delete_jewelries_types&d=" . $row["id_jewelry_type"] . "'><i class='bi bi-trash'></i></a></td>";
      echo "</tr>";
    }
  } else {
    echo "0 results";
  }

  ?>

</table>