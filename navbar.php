<?php
$url = '/dacerva/';
$name = 'daCerva';

function btnMode()
{
  if (isset($_COOKIE["mode"])) {
    return $_COOKIE["mode"] == "dark" ? "sun" : "moon";
  } else {
    return "moon";
  }
}
?>

<nav class="navbar navbar-expand bg-body-tertiary">
  <div class="container-fluid">

    <a class="navbar-brand col" href="<?= $url ?>"><img src="<?= $url ?>img/logo_no_background.png" width="25"></a>
    <ul class="navbar-nav col justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="<?= $url ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= $url ?>blog/">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= $url ?>shop/">Shop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= $url ?>about/">About</a>
      </li>
    </ul>
    <div class="d-flex col justify-content-end">
      <?php
      if (!empty($_COOKIE['id_user'])) {
        if (!empty($_COOKIE['admin'])) {
          echo "<a class='btn btn-primary me-1' href='{$url}admin/'>Admin</a>";
        }
        echo "<a class='btn btn-primary' href='{$url}logout/'>Logout</a>";
      } else {
        echo "<a class='btn btn-primary' href='{$url}login/'>Login</a>";
      }
      ?>
      <a href='<?= $url ?>mode/' class='btn btn-primary ms-1'><i class='bi bi-<?= btnMode() ?>'></i></a>
    </div>

  </div>
</nav>