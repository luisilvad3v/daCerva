<?php

echo "<h2>Insert Jewelries</h2>";
include_once("form_jewelries.php");

if (!empty($_POST['type']) and !empty($_POST['stone']) and !empty($_POST['price']) and !empty($_POST['stock'])) {
  $type = $_POST["type"];
  $stone = $_POST['stone'];
  $price = $_POST['price'];
  $stock = $_POST['stock'];

  if (!empty($_FILES["fileToUpload"]["name"])) {
    include_once("upload_img.php");
    $img_url = $target_file;
  } else {
    $img_url = "";
  }

  $sql = "INSERT INTO jewelries (id_jewelry_type, id_stone, price, stock, img_url)
          VALUES ('$type', '$stone', '$price', '$stock', '$img_url')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
