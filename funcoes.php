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

function btn_return($path)
{
  echo "<ul class='nav nav-pills justify-content-end me-2 mt-2'>";
  echo "<li class='nav-item'>";
  echo "<a href='$path' class='nav-link active'>";
  echo "<i class='bi bi-arrow-return-left'></i>";
  echo "</a>";
  echo "</li>";
  echo "</ul>";
}
