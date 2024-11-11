<link rel="stylesheet" href="<?= base_url("/assets/css/lib.css?version=" . uniqid()) ?>" />

<div id="modal_pop_up_overlay"></div>

<main>
  <nav class="main-content">
    <div class="flex-container">
      <?php foreach ($libraries as $key => $library): ?>
        <?php if (in_array($library["library_id"], $user_libraries)): ?>
          <div class="box" onclick="showPopup('<?= pascal_to_snake_case($library['library_name']) ?>Modal')" data-search="Java">
            <!-- X Button -->
            <form action="<?= base_url("home/remove_library") ?>" method="POST" class="remove-form">
              <input type="hidden" value="<?= $user_id ?>" name="user_id">
              <input type="hidden" value="<?= $library['library_id'] ?>" name="library">
              <button type="submit" class="x-btn" onclick="event.stopPropagation()">×</button>
            </form>
            <img src="<?= $library['image_url'] ?>">
            <p><?= $library['library_name'] ?></p>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </nav>

  <?php foreach ($libraries as $key => $library): ?>
    <?php if (in_array($library["library_id"], $user_libraries)): ?>
      <div id="<?= pascal_to_snake_case($library['library_name']) ?>Modal" class="popup justify-items-center">
        <button class="close-btn" onclick="hidePopup()">&times;</button>
        <h2><?= $library['library_name'] ?></h2>
        <div class="button-grid">
          <button>Module</button>
          <button>Videos</button>
          <button>Flashcards</button>
          <button>Games</button>
        </div>
      </div>
    <?php endif; ?>
    </div>
  <?php endforeach; ?>

</main>


<script src="<?= base_url("assets/js/library.js?version=" . uniqid()) ?>"></script>