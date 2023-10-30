<form action="" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>

  <div class="mb-3">
    <label for="text" class="form-label">Text</label>
    <textarea name="text" id="text" rows="10" class="form-control"></textarea>
    <!-- <input type="text" class="form-control" id="text" name="text"> -->
  </div>

  <div class="mb-3">
    <label for="date" class="form-label">Date</label>
    <input type="text" name="date" id="date" class="form-control">
  </div>

  <div class="mb-3">
    <label for="youtube_url" class="form-label">Youtube</label>
    <!-- <input type="text" class="form-control" id="youtube_url" name="youtube_url"> -->
    <input type="text" name="youtube_url" id="youtube_url" rows="10" class="form-control" />
  </div>

  <div class="mb-3">
    <label for="fileToUpload" class="form-label">Thumbnail</label>
    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>

</form>