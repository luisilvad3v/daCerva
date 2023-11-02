<?php
// if (!empty($_COOKIE["admin"])) {
?>

<ul class="nav bg-body-tertiary">
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Admin</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= $url ?>admin/jewelries">Jewelries</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= $url ?>admin/jewelries_types">Jewelry Types</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= $url ?>admin/stones">Stones</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= $url ?>admin/alchemies">Alchemies</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= $url ?>admin/alchemies_types">Alchemy Types</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= $url ?>admin/plants">Plants</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= $url ?>admin/blogs">Blogs</a>
  </li>
</ul>

<?php
// }

?>