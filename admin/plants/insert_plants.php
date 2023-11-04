<?php

echo "<h2 class='text-center'>Insert Plant</h2>";

include_once("form_plants.php");


if (!empty($_POST['plant_eng']) and !empty($_POST['plant_la'])) {
  $plant_eng = test_input($_POST['plant_eng']);
  $plant_la = test_input($_POST['plant_la']);

  $sql = "INSERT INTO plants (plant_eng, plant_la)
          VALUES ('$plant_eng', '$plant_la')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
