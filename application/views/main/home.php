<div id="modal_pop_up_overlay"></div>

<?php if (isset($_SESSION["error"])): ?>
  <div class="alert alert-danger text-dark" role="alert">
    <h5 class="mb-0">Something went wrong : <?= $_SESSION["error"] ?></h5>
  </div>
  <?php unset($_SESSION["error"]) ?>
<?php endif; ?>

<main>
  <nav class="main-content">
    <div class="flex-container">
      <?php foreach ($libraries as $key => $library): ?>
        <?php if (!in_array($library["library_id"], $user_libraries)): ?>
          <div class="box" onclick="showPopup('<?= pascal_to_snake_case($library['library_name']) ?>Modal')" data-search="<?= htmlspecialchars($library['library_name']) ?>">
            <img src="<?= $library['image_url'] ?>">
            <p><?= $library['library_name'] ?></p>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </nav>

  <?php foreach ($libraries as $key => $library): ?>
    <?php if (!in_array($library["library_id"], $user_libraries)): ?>
      <div id="<?= pascal_to_snake_case($library['library_name']) ?>Modal" class="popup">
        <div class="popup-content">
          <button class="close-btn" onclick="hidePopup()">&times;</button>
          <h2>Module</h2>
          <button class="preview-btn" onclick="previewModule('<?= $library['description'] ?>')">Preview</button>
          <h2 class="add-library-text">Add <?= $library['library_name'] ?> to Library?</h2>
          <div class="decision-buttons">
            <form action="<?= base_url("home/add_library") ?>" method="POST">
              <input type="hidden" value="<?= $user_id ?>" name="user_id">
              <input type="hidden" value="<?= $library['library_id'] ?>" name="library">
              <button class="yes-btn" type="submit">Yes</button>
              <button class="no-btn" onclick="hidePopup()" type="button">No</button>
            </form>
          </div>
        </div>
      <?php endif; ?>
      </div>
    <?php endforeach; ?>

    <!-- PREVIEW POPUP -->
    <div id="previewModal" class="preview-popup" style="display: none;">
      <div class="preview-content">
        <button class="back-btn" onclick="closePreview()">
          <div class="left-arrow">&larr;</div>
        </button>
        <h2>Java Preview</h2>
        <p>Here is a preview of the module...</p>
      </div>
    </div>

</main>

<script src="<?= base_url("assets/js/home.js?version=" . uniqid()) ?>"></script>