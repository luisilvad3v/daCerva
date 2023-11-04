<h2 class="text-center">Insert Jewelries</h2>

<?php

include_once("form_jewelries.php");

if (isset($_POST["type"])) {
  if (!empty($_POST['type']) and !empty($_POST['stone']) and !empty($_POST['price']) and !empty($_POST['stock'])) {

    $type = test_input($_POST["type"]);
    $stone = test_input($_POST['stone']);
    $price = test_input($_POST['price']);
    $stock = test_input($_POST['stock']);

    if (!empty($_FILES["fileToUpload"]["name"])) {
      $target_dir = "../../shop/jewelries/img/";
      include_once("../upload_img.php");
      $img_url = $file_name;
    } else {
      $img_url = "";
    }

    $sql = "INSERT INTO jewelries (id_jewelry_type, id_stone, price, stock, img_url)
          VALUES ('$type', '$stone', '$price', '$stock', '$img_url')";

    if ($conn->query($sql) === TRUE) {
      echo "<p class='text-success'>New record created successfully!</p>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  } else {
    echo "<p class='text-danger mt-2'>Empty fields!</p>";
  }
}
