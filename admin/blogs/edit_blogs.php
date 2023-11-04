<?php
ob_start();

if (!empty($_GET["e"]) && isset($_GET["e"])) {

  $sql = "SELECT * FROM blogs
          WHERE id_blog = {$_GET["e"]}";

  $result = $conn->query($sql);

  if ($row = $result->fetch_assoc()) {
    $id_blog = $row["id_blog"];
    $title = $row["title"];
    $text = $row["text"];
    $date = $row["date"];
    $youtube_url = $row["youtube_url"];
    $thumbnail_url = $row["thumbnail_url"];
  } else {
    echo "Erro!";
  }
}

echo "<h2 class='text-center'>Edit Blogs</h2>";
include_once("form_blogs.php");

?>

<script>
  document.getElementById("title").value = "<?= $title ?>";
  document.getElementById("text").value = "<?= htmlspecialchars_decode($text) ?>";
  document.getElementById("date").value = "<?= $date ?>";
  document.getElementById("youtube_url").value = "<?= $youtube_url ?>";
</script>

<?php

if (isset($_POST["title"])) {
  if (!empty($_POST["title"])) {
    if ($title != $_POST["title"] || $text != $_POST["text"] || $date != $_POST["date"] || $youtube_url != $_POST["youtube_url"] || (!empty($_FILES["fileToUpload"]["name"]) && $thumbnail_url != $_FILES["fileToUpload"]["name"])) {

      $title = test_input($_POST["title"]);
      $text = test_input($_POST["text"]);
      $date = test_input($_POST["date"]);
      $youtube_url = test_input($_POST["youtube_url"]);

      if (!empty($_FILES["fileToUpload"]["name"]) && $thumbnail_url != $_FILES["fileToUpload"]["name"]) {

        $target_dir = "../../blog/img/";
        unlink($target_dir . $thumbnail_url);
        include_once("../upload_img.php");
        $thumbnail_url = $_FILES["fileToUpload"]["name"];
      }

      $sql = "UPDATE blogs SET title = '$title', text = '$text', date = '$date', youtube_url = '$youtube_url', thumbnail_url = '$thumbnail_url'
         WHERE id_blog = $id_blog";

      if ($conn->query($sql) == true) {
        header("location:{$url}admin/blogs");
      } else {
        echo "<p class='text-danger mt-2'>Error!</p>";
      }
    } else {
      echo "<p class='text-danger mt-2'>Values not changed!</p>";
    }
  } else {
    echo "<p class='text-danger mt-2'>Empty fields!</p>";
  }
}
?>