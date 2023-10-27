<?php
ob_start();
include_once("connect.php");

if (!empty($_GET["e"]) && isset($_GET["e"])) {

  $sql = "SELECT * FROM alchemies
          WHERE id_alchemy = {$_GET["e"]}";

  $result = $conn->query($sql);

  if ($row = $result->fetch_assoc()) {
    $id_alchemy = $row["id_alchemy"];
    $id_alchemy_type = $row["id_alchemy_type"];
    $id_plant = $row["id_plant"];
    $price = $row["price"];
    $stock = $row["stock"];
  } else {
    echo "Erro!";
  }
}

echo "<h2>Edit Alchemy</h2>";
include_once("form_alchemies.php");

?>

<script>
  document.getElementById("type").value = "<?= $id_alchemy_type ?>";
  document.getElementById("plant").value = "<?= $id_plant ?>";
  document.getElementById("price").value = "<?= $price ?>";
  document.getElementById("stock").value = "<?= $stock ?>";
</script>

<?php

if (
  !empty($_POST["type"]) && isset($_POST["type"]) &&
  !empty($_POST["plant"]) && isset($_POST["plant"]) &&
  !empty($_POST["price"]) && isset($_POST["price"]) &&
  !empty($_POST["stock"]) && isset($_POST["stock"]) &&
  ($id_alchemy_type != $_POST["type"] ||
    $id_plant != $_POST["plant"] ||
    $price != $_POST["price"] ||
    $stock != $_POST["stock"])
) {

  $id_alchemy_type = $_POST["type"];
  $id_plant = $_POST["plant"];
  $price = $_POST["price"];
  $stock = $_POST["stock"];

  $sql = "UPDATE alchemies SET id_alchemy_type = '$id_alchemy_type', id_plant = '$id_plant', price = '$price', stock = '$stock'
          WHERE id_alchemy = $id_alchemy";

  $result = $conn->query($sql);

  header("location:$url?o=list_alchemies");
}
?>