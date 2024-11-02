<link rel="stylesheet" href="<?= base_url("/assets/css/lib.css?version=".uniqid()) ?>" />

<main>
  <nav class="main-content">
    <div class="flex-container">
      <div class="box" onclick="showPopup('javaModal')" data-search="Java">
        <img src="<?= base_url('/assets/img/Java.png') ?>">
        <p>Java</p>
      </div>
	  
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
