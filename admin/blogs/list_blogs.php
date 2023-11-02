<h2 class="text-center">Blogs</h2>

<table class="table">
  <th scope="col">ID</th>
  <th scope="col">Title</th>
  <th scope="col">Text</th>
  <th scope="col">Date</th>
  <th scope="col">Youtube</th>
  <th scope="col">Thumbnail</th>
  <th scope="col"></th>
  <th scope="col"></th>

  <?php

  $sql = "SELECT * FROM blogs ORDER BY id_blog DESC";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["id_blog"] . "</td>";
      echo "<td>" . $row["title"] . "</td>";
      echo "<td>" . $row["text"] . "</td>";
      echo "<td>" . $row["date"] . "</td>";
      echo "<td><iframe allowfullscreen src='" . $row["youtube_url"] . "' style='width: 10vw'></iframe></td>";
      echo "<td><img src='{$url}blog/img/" . $row["thumbnail_url"] . "'  style='width: 10vw'></td>";
      echo "<td><a href='{$url}admin/blogs/?o=edit_blogs&e=" . $row["id_blog"] . "'><i class='bi bi-pencil'></i></a></td>";
      echo "<td><a href='{$url}admin/blogs/?o=delete_blogs&d=" . $row["id_blog"] . "'><i class='bi bi-trash'></i></a></td>";
      echo "</tr>";
    }
  } else {
    echo "0 results";
  }

  ?>

</table>