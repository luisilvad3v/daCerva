<?php

echo "<h2>Insert Stone</h2>";

include_once("form_stones.php");

if (!empty($_POST['stone'])) {
  $sql = "INSERT INTO stones (stone)
          VALUES ('" . $_POST['stone'] . "')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
