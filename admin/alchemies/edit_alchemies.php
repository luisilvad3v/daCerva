<?php
ob_start();

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
    $img_url = $row["img_url"];
  } else {
    echo "Error!";
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

if (isset($_POST["type"])) {
  if (!empty($_POST["type"]) && !empty($_POST["plant"]) && !empty($_POST["price"])) {
    if ($id_alchemy_type != $_POST["type"] || $id_plant != $_POST["plant"] || $price != $_POST["price"] || $stock != $_POST["stock"] || (!empty($_FILES["fileToUpload"]["name"]) && $img_url != $_FILES["fileToUpload"]["name"])) {

      $id_alchemy_type = $_POST["type"];
      $id_plant = $_POST["plant"];
      $price = $_POST["price"];
      $stock = $_POST["stock"];

      if (!empty($_FILES["fileToUpload"]["name"]) && $img_url != $_FILES["fileToUpload"]["name"]) {

        $target_dir = "../../shop/alchemies/img/";
        unlink($target_dir . $img_url);
        include_once("../upload_img.php");
        $img_url = $_FILES["fileToUpload"]["name"];
      }

      echo $sql = "UPDATE alchemies SET id_alchemy_type = '$id_alchemy_type', id_plant = '$id_plant', price = '$price', stock = '$stock', img_url = '$img_url'
          WHERE id_alchemy = $id_alchemy";

      if ($conn->query($sql) == true) {
        header("location:{$url}admin/alchemies");
      } else {
        echo "<p class='text-danger mt-2'>Error!</p>";
      }
    } else {
      echo "<p class='text-danger mt-2'>Values not changed!</p>";
    }
  } else {
    echo "<p class='text-danger mt-2'>Empty fields!</p>";
  }
}
?>