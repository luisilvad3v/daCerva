<h2 class="text-center">Insert Alchemy</h2>

<?php

include_once("form_alchemies.php");

if (isset($_POST["type"])) {
  if (!empty($_POST['type']) && !empty($_POST['plant']) && !empty($_POST['price']) && !empty($_POST['stock'])) {

    $type = test_input($_POST["type"]);
    $plant = test_input($_POST['plant']);
    $price = test_input($_POST['price']);
    $stock = test_input($_POST['stock']);

    if (!empty($_FILES["fileToUpload"]["name"])) {
      $target_dir = "../../shop/alchemies/img/";
      include_once("../upload_img.php");
      $img_url = $file_name;
    } else {
      $img_url = "";
    }

    $sql = "INSERT INTO alchemies (id_alchemy_type, id_plant, price, stock, img_url)
          VALUES ('$type', '$plant', '$price', '$stock', '$img_url')";

    if ($conn->query($sql) === TRUE) {
      echo "<p class='text-success'>New record created successfully!</p>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  } else {
    echo "<p class='text-danger mt-2'>Empty fields!</p>";
  }
}
