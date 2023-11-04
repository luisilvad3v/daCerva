<?php

if (!empty($_GET["e"]) && isset($_GET["e"])) {

  $sql = "SELECT * FROM jewelries_types
          WHERE id_jewelry_type = {$_GET["e"]}";

  $result = $conn->query($sql);

  if ($row = $result->fetch_assoc()) {
    $id_jewelry_type = $row["id_jewelry_type"];
    $jewelry_type = $row["jewelry_type"];
  } else {
    echo "Erro!";
  }
}

echo "<h2 class='text-center'>Edit Jewelry Type</h2>";
include_once("form_jewelries_types.php");

?>

<script>
  document.getElementById("type").value = "<?= $jewelry_type ?>";
</script>

<?php

if (!empty($_POST["type"]) && isset($_POST["type"]) && $jewelry_type != $_POST["type"]) {
  $jewelry_type = $_POST["type"];

  $sql = "UPDATE jewelries_types SET jewelry_type = '$jewelry_type' WHERE id_jewelry_type = $id_jewelry_type";

  $result = $conn->query($sql);

  header("location:{$url}admin/jewelries_types/");
}

?>