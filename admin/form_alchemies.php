<?php
include_once("funcoes.php");
?>

<form action="" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="type" class="form-label">Type</label>
    <select class="form-select" id="type" name="type">
      <option value="0" selected></option>
      <?php
      $sql = "SELECT * FROM alchemies_types";
      $result = $conn->query($sql);
      select1($result, "id_alchemy_type", "alchemy_type");
      ?>
    </select>
  </div>

  <div class="mb-3">
    <label for="plant" class="form-label">Plant</label>
    <select class="form-select" id="plant" name="plant">
      <option value="0" selected></option>
      <?php
      $sql = "SELECT * FROM plants";
      $result = $conn->query($sql);
      select1($result, "id_plant", "plant_eng");
      ?>
    </select>
  </div>

  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="number" class="form-control" id="price" name="price" min="0" step="0.01" value="0">
  </div>

  <div class="mb-3">
    <label for="stock" class="form-label">Stock</label>
    <input type="number" class="form-control" id="stock" name="stock" min="0" value="0">
  </div>

  <div class="mb-3">
    <label for="fileToUpload" class="form-label">Image</label>
    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>

</form>