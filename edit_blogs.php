<?php
ob_start();
include_once("connect.php");
include_once("funcoes.php");

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
  } else {
    echo "Erro!";
  }
}

echo "<h2>Edit Blogs</h2>";
include_once("form_blogs.php");

?>

<script>
  document.getElementById("title").value = "<?= $title ?>";
  document.getElementById("date").value = "<?= $date ?>";
</script>

<?php

if (
  !empty($_POST["title"]) &&
  ($title != $_POST["title"] ||
    $text != $_POST["text"] ||
    $youtube_url != $_POST["youtube_url"])
) {

  $title = $_POST["title"];
  $text = $_POST["text"];
  $youtube_url = $_POST["youtube_url"];

  $sql = "UPDATE blogs SET title = '$title', text = '$text', youtube_url = '$youtube_url'
          WHERE id_blog = $id_blog";

  $result = $conn->query($sql);

  header("location:$url?o=list_blogs");
}
?>