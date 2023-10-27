<?php
if (!empty($_SESSION["admin"])) {
?>

  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Admin</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= $url ?>?o=list_jewelries">Jewelries</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= $url ?>?o=list_jewelries_types">Jewelry Types</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= $url ?>?o=list_stones">Stones</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= $url ?>?o=list_alchemies">Alchemies</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= $url ?>?o=list_alchemies_types">Alchemy Types</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= $url ?>?o=list_plants">Plants</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= $url ?>?o=list_blogs">Blogs</a>
    </li>
  </ul>

<?php
}

?>