<?php
ob_start();

if (!empty($_GET["e"]) && isset($_GET["e"])) {

  $sql = "SELECT * FROM jewelries
          WHERE id_jewelry = {$_GET["e"]}";

  $result = $conn->query($sql);

  if ($row = $result->fetch_assoc()) {
    $id_jewelry = $row["id_jewelry"];
    $id_jewelry_type = $row["id_jewelry_type"];
    $id_stone = $row["id_stone"];
    $price = $row["price"];
    $stock = $row["stock"];
  } else {
    echo "Erro!";
  }
}

echo "<h2>Edit jewelry</h2>";
include_once("form_jewelries.php");

?>

<script>
  document.getElementById("type").value = "<?= $id_jewelry_type ?>";
  document.getElementById("stone").value = "<?= $id_stone ?>";
  document.getElementById("price").value = "<?= $price ?>";
  document.getElementById("stock").value = "<?= $stock ?>";
</script>

<?php

if (
  !empty($_POST["type"]) && isset($_POST["type"]) &&
  !empty($_POST["stone"]) && isset($_POST["stone"]) &&
  !empty($_POST["price"]) && isset($_POST["price"]) &&
  !empty($_POST["stock"]) && isset($_POST["stock"]) &&
  ($id_jewelry_type != $_POST["type"] ||
    $id_stone != $_POST["stone"] ||
    $price != $_POST["price"] ||
    $stock != $_POST["stock"])
) {

  $id_jewelry_type = $_POST["type"];
  $id_stone = $_POST["stone"];
  $price = $_POST["price"];
  $stock = $_POST["stock"];

  $sql = "UPDATE jewelries SET id_jewelry_type = '$id_jewelry_type', id_stone = '$id_stone', price = '$price', stock = '$stock'
          WHERE id_jewelry = $id_jewelry";

  $result = $conn->query($sql);

  header("location:{$url}admin/jewelries");
}
?>