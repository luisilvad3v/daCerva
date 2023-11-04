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
    $img_url = $row["img_url"];
  } else {
    echo "Error!";
  }
}

echo "<h2 class='text-center'>Edit Jewelry</h2>";
include_once("form_jewelries.php");

?>

<script>
  document.getElementById("type").value = "<?= $id_jewelry_type ?>";
  document.getElementById("stone").value = "<?= $id_stone ?>";
  document.getElementById("price").value = "<?= $price ?>";
  document.getElementById("stock").value = "<?= $stock ?>";
</script>

<?php

if (isset($_POST["type"])) {
  if (!empty($_POST["type"]) && !empty($_POST["stone"]) && !empty($_POST["price"])) {
    if ($id_jewelry_type != $_POST["type"] || $id_stone != $_POST["stone"] || $price != $_POST["price"] || $stock != $_POST["stock"] || (!empty($_FILES["fileToUpload"]["name"]) && $img_url != $_FILES["fileToUpload"]["name"])) {

      $id_jewelry_type =  test_input($_POST["type"]);
      $id_stone =  test_input($_POST["stone"]);
      $price =  test_input($_POST["price"]);
      $stock =  test_input($_POST["stock"]);

      if (!empty($_FILES["fileToUpload"]["name"]) && $img_url != $_FILES["fileToUpload"]["name"]) {

        $target_dir = "../../shop/jewelries/img/";
        unlink($target_dir . $img_url);
        include_once("../upload_img.php");
        $img_url = $_FILES["fileToUpload"]["name"];
      }

      echo $sql = "UPDATE jewelries SET id_jewelry_type = '$id_jewelry_type', id_stone = '$id_stone', price = '$price', stock = '$stock', img_url = '$img_url'
          WHERE id_jewelry = $id_jewelry";

      if ($conn->query($sql) == true) {
        header("location:{$url}admin/jewelries");
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