<?php

echo "<h2>Insert Blog Post</h2>";

include_once("form_blogs.php");

if (!empty($_POST['title'])) {
  $title = test_input($_POST['title']);
  $text = test_input($_POST['text']);
  $date = test_input($_POST['date']);
  $youtube_url = $_POST['youtube_url'];

  if (!empty($_FILES["fileToUpload"]["name"])) {
    $target_dir = "blog/img/";
    include_once("upload_img.php");
    $thumbnail_url = $target_file;
  } else {
    $thumbnail_url = "";
  }

  $sql = "INSERT INTO blogs (title, text, date, youtube_url, thumbnail_url)
          VALUES ('$title', '$text', '$date', '$youtube_url', '$thumbnail_url')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
