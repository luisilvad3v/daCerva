<?php

include_once("insert_stones.php");

?>

<hr>

<h2>Stones</h2>

<table class="table">
  <th scope="col">ID</th>
  <th scope="col">Name</th>
  <th scope="col"></th>
  <th scope="col"></th>

  <?php

  include_once("connect.php");

  $sql = "SELECT * FROM stones ORDER BY id_stone DESC";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["id_stone"] . "</td>";
      echo "<td>" . $row["stone"] . "</td>";
      echo "<td><a href='$url?o=edit_stones&e=" . $row["id_stone"] . "'><i class='bi bi-pencil'></i></a></td>";
      echo "<td><a href='$url?o=delete_stones&d=" . $row["id_stone"] . "'><i class='bi bi-trash'></i></a></td>";
      echo "</tr>";
    }
  } else {
    echo "0 results";
  }

  ?>

</table>