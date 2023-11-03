<h2 class="text-center">Insert Blog Post</h2>

<?php

include_once("form_blogs.php");

if (isset($_POST["title"])) {
  if (!empty($_POST['title'])) {
    $title = test_input($_POST['title']);
    $text = test_input($_POST['text']);
    $date = test_input($_POST['date']);
    $youtube_url = test_input($_POST['youtube_url']);

    if (!empty($_FILES["fileToUpload"]["name"])) {
      $target_dir = "../../blog/img/";
      include_once("../upload_img.php");
      $thumbnail_url = $file_name;
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
  } else {
    echo "<p class='text-danger mt-2'>Empty fields!</p>";
  }
}
