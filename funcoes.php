<?php
include_once("connect.php");

function select1($result, $id, $str)
{
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo '<option value="' . $row[$id] . '">';
      echo $row[$str];
      echo "</option>";
    }
  }
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
