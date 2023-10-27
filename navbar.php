<nav class="navbar navbar-expand bg-body-tertiary">
  <div class="container-fluid">

    <a class="navbar-brand col" href="<?= $url ?>">Logo</a>
    <ul class="navbar-nav col justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="<?= $url ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= $url ?>?o=blog">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= $url ?>?o=shop">Shop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= $url ?>?o=about">About</a>
      </li>
    </ul>
    <div class="d-flex col justify-content-end">
      <?php
      if (!empty($_SESSION['id_user'])) {
        if (!empty($_SESSION['admin'])) {
          echo "<a class='btn btn-primary me-1' href='$url?o=admin'>Admin</a>";
        }
        echo "<a class='btn btn-primary' href='$url?o=logout'>Logout</a>";
      } else {
        echo "<a class='btn btn-primary' href='$url?o=login'>Login</a>";
      }
      ?>
    </div>

  </div>
</nav>