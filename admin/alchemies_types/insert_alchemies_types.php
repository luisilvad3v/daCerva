<?php

echo "<h2>Insert Alchemy Type</h2>";

include_once("form_alchemies_types.php");

if (!empty($_POST['type'])) {
  $sql = "INSERT INTO alchemies_types (alchemy_type)
          VALUES ('" . $_POST['type'] . "')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
