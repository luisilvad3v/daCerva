<?php

if (!empty($_GET["e"]) && isset($_GET["e"])) {

  $sql = "SELECT * FROM plants
          WHERE id_plant = {$_GET["e"]}";

  $result = $conn->query($sql);

  if ($row = $result->fetch_assoc()) {
    $id_plant = $row["id_plant"];
    $plant_eng = $row["plant_eng"];
    $plant_la = $row["plant_la"];
  } else {
    echo "Erro!";
  }
}

echo "<h2>Edit Plant</h2>";
include_once("form_plants.php");

?>

<script>
  document.getElementById("plant_eng").value = "<?= $plant_eng ?>";
  document.getElementById("plant_la").value = "<?= $plant_la ?>";
</script>

<?php

if (!empty($_POST["plant_eng"]) && isset($_POST["plant_eng"]) && !empty($_POST["plant_la"]) && isset($_POST["plant_la"]) && ($plant_eng != $_POST["plant_eng"] || $plant_la != $_POST["plant_la"])) {
  $plant_eng = $_POST["plant_eng"];
  $plant_la = $_POST["plant_la"];

  $sql = "UPDATE plants SET plant_eng = '$plant_eng', plant_la = '$plant_la' WHERE id_plant = $id_plant";

  $result = $conn->query($sql);

  header("location:{$url}admin/plants/");
}

?>