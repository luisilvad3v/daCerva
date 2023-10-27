<?php
include_once("funcoes.php")
?>

<h2>Insert Jewelries Types</h2>

<?php

include_once("form_jewelries_types.php");

if (!empty($_POST['type'])) {
  $sql = "INSERT INTO jewelries_types (jewelry_type)
          VALUES ('" . $_POST['type'] . "')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

?>