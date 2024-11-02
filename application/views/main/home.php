<?php if(isset($_SESSION["error"])): ?>
    <div class="alert alert-danger text-dark" role="alert">
        <h5 class="mb-0">Something went wrong : <?= $_SESSION["error"] ?></h5>
    </div>
    <?php unset($_SESSION["error"]) ?>
<?php endif; ?>

<?php if(isset($_SESSION["success"])): ?>
    <div class="alert alert-success text-dark" role="alert">
        <h5 class="mb-0">Congratulations!: <?= $_SESSION["success"] ?></h5>
    </div>
    <?php unset($_SESSION["success"]) ?>
<?php endif; ?>
<main>
  <nav class="main-content">
    <div class="flex-container">
      <div class="box" onclick="showPopup('javaModal')" data-search="Java">
        <img src="<?= base_url('/assets/img/Java.png') ?>">
        <p>Java</p>
      </div>
      <div class="box" onclick="showPopup('htmlModal')" data-search="HTML">
        <img src="<?= base_url('/assets/img/HTML.png') ?>">
        <p>Hyper Text Markup Language</p>
      </div>
      <div class="box" onclick="showPopup('javascriptModal')" data-search="JavaScript">
        <img src="<?= base_url('/assets/img/Javascript.png') ?>">
        <p>JavaScript</p>
      </div>
      <div class="box" onclick="showPopup('phpModal')" data-search="PHP">
        <img src="<?= base_url('/assets/img/php.png') ?>">
        <p>PHP: Hypertext Preprocessor</p>
      </div>
      <div class="box" onclick="showPopup('pythonModal')" data-search="Python">
        <img src="<?= base_url('/assets/img/Python.png') ?>">
        <p>Python</p>
      </div>
      <div class="box" onclick="showPopup('sqlModal')" data-search="SQL">
        <img src="<?= base_url('/assets/img/mySql.png') ?>">
        <p>Structured Query Language</p>
      </div>
    </div>
  </nav>

  <!-- Java PopUP -->
  <div id="javaModal" class="popup">
    <div class="popup-content">
      <button class="close-btn" onclick="closeModal()">&times;</button>
      <h2>Module</h2>
      <button class="preview-btn" onclick="previewModule('Java')">Preview</button>
      <h2 class="add-library-text">Add Java to Library?</h2>
      <div class="decision-buttons">
				<form action="<?= base_url("home/add_library") ?>" id="add-library-java" method="POST">
					<input type="hidden" value="<?= $user_id?>" name="user_id">
					<input type="hidden" value="java" name="library">
					<button class="yes-btn" type="submit">Yes</button>
					<button class="no-btn" onclick="closeModal()" type="button">No</button>
				</form>
      </div>
    </div>
  </div>

  <!-- HTML PopUP -->
  <div id="htmlModal" class="popup">
    <div class="popup-content">
      <button class="close-btn" onclick="closeModal()">&times;</button> 
      <h2>Module</h2>
      <button class="preview-btn" onclick="previewModule('HTML')">Preview</button>
      <h2 class="add-library-text">Add HTML to Library?</h2>
      <div class="decision-buttons">
        <button class="yes-btn" onclick="addToLibrary()">Yes</button>
        <button class="no-btn" onclick="closeModal()">No</button>
      </div>
    </div>
  </div>

  <!-- JavaScript PopUP -->
  <div id="javascriptModal" class="popup">
    <div class="popup-content">
      <button class="close-btn" onclick="closeModal()">&times;</button> 
      <h2>Module</h2>
      <button class="preview-btn" onclick="previewModule('JavaScript')">Preview</button>
      <h2 class="add-library-text">Add JavaScript to Library?</h2>
      <div class="decision-buttons">
        <button class="yes-btn" onclick="addToLibrary()">Yes</button>
        <button class="no-btn" onclick="closeModal()">No</button>
      </div>
    </div>
  </div>

  <!-- PHP PopUP -->
  <div id="phpModal" class="popup">
    <div class="popup-content">
      <button class="close-btn" onclick="closeModal()">&times;</button> 
      <h2>Module</h2>
      <button class="preview-btn" onclick="previewModule('PHP')">Preview</button>
      <h2 class="add-library-text">Add PHP to Library?</h2>
      <div class="decision-buttons">
        <button class="yes-btn" onclick="addToLibrary()">Yes</button>
        <button class="no-btn" onclick="closeModal()">No</button>
      </div>
    </div>
  </div>

  <!-- Python PopUP -->
  <div id="pythonModal" class="popup">
    <div class="popup-content">
      <button class="close-btn" onclick="closeModal()">&times;</button> 
      <h2>Module</h2>
      <button class="preview-btn" onclick="previewModule('Python')">Preview</button>
      <h2 class="add-library-text">Add Python to Library?</h2>
      <div class="decision-buttons">
        <button class="yes-btn" onclick="addToLibrary()">Yes</button>
        <button class="no-btn" onclick="closeModal()">No</button>
      </div>
    </div>
  </div>

  <!-- SQL PopUP -->
  <div id="sqlModal" class="popup">
    <div class="popup-content">
      <button class="close-btn" onclick="closeModal()">&times;</button> 
      <h2>Module</h2>
      <button class="preview-btn" onclick="previewModule('SQL')">Preview</button>
      <h2 class="add-library-text">Add SQL to Library?</h2>
      <div class="decision-buttons">
        <button class="yes-btn" onclick="addToLibrary()">Yes</button>
        <button class="no-btn" onclick="closeModal()">No</button>
      </div>
    </div>
  </div>

  <!-- PREVIEW POPUP -->
  <div id="previewModal" class="preview-popup" style="display: none;">
    <div class="preview-content">
        <button class="back-btn" onclick="closePreview()">&larr;</button> <!-- Back Button (Left Arrow) -->
        <h2>Java Preview</h2>
        <p>Here is a preview of the module...</p>
    </div>
  </div>
</main>
