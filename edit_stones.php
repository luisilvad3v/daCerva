<?php
include_once("connect.php");

if (!empty($_GET["e"]) && isset($_GET["e"])) {

  $sql = "SELECT * FROM stones
          WHERE id_stone = {$_GET["e"]}";

  $result = $conn->query($sql);

  if ($row = $result->fetch_assoc()) {
    $id_stone = $row["id_stone"];
    $stone = $row["stone"];
  } else {
    echo "Erro!";
  }
}

echo "<h2>Edit Stone</h2>";
include_once("form_stones.php");

?>

<script>
  document.getElementById("stone").value = "<?= $stone ?>";
</script>

<?php

if (!empty($_POST["stone"]) && isset($_POST["stone"]) && $stone != $_POST["stone"]) {
  $stone = $_POST["stone"];

  $sql = "UPDATE stones SET stone = '$stone' WHERE id_stone = $id_stone";

  $result = $conn->query($sql);

  header("location:$url?o=list_stones");
}

?>