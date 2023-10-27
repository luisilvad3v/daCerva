<?php
include_once("connect.php");

if (!empty($_GET["e"]) && isset($_GET["e"])) {

  $sql = "SELECT * FROM alchemies_types
          WHERE id_alchemy_type = {$_GET["e"]}";

  $result = $conn->query($sql);

  if ($row = $result->fetch_assoc()) {
    $id_alchemy_type = $row["id_alchemy_type"];
    $alchemy_type = $row["alchemy_type"];
  } else {
    echo "Erro!";
  }
}

echo "<h2>Edit Alchemy Type</h2>";
include_once("form_alchemies_types.php");

?>

<script>
  document.getElementById("type").value = "<?= $alchemy_type ?>";
</script>

<?php

if (!empty($_POST["type"]) && isset($_POST["type"]) && $alchemy_type != $_POST["type"]) {
  $alchemy_type = $_POST["type"];

  $sql = "UPDATE alchemies_types SET alchemy_type = '$alchemy_type' WHERE id_alchemy_type = $id_alchemy_type";

  $result = $conn->query($sql);

  header("location:$url?o=list_alchemies_types");
}

?>