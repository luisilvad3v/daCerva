<?php
include_once("funcoes.php");

echo "<h2>Insert Alchemies</h2>";

include_once("form_alchemies.php");

if (!empty($_POST['type']) && !empty($_POST['plant']) && !empty($_POST['price']) && !empty($_POST['stock'])) {
  $type = $_POST["type"];
  $plant = $_POST['plant'];
  $price = $_POST['price'];
  $stock = $_POST['stock'];
  if (!empty($_FILES["fileToUpload"]["name"])) {
    include_once("upload_img.php");
    $img_url = $target_file;
  } else {
    $img_url = "";
  }


  $sql = "INSERT INTO alchemies (id_alchemy_type, id_plant, price, stock, img_url)
          VALUES ('$type', '$plant', '$price', '$stock', '$img_url')";


  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
