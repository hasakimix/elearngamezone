<link rel="stylesheet" href="<?= base_url("/assets/css/lib.css?version=".uniqid()) ?>" />

<main>
  <nav class="main-content">
    <div class="flex-container">
      <div class="box" onclick="showCustomPopup()" data-search="Java">
        <img src="<?= base_url('/assets/img/Java.png') ?>">
        <p>Java</p>
      </div>
    </div>
  </nav>

      <!-- Overlay -->
      <div id="overlay" class="overlay"></div>

      <!-- Custom Popup Structure -->
      <div id="java-popup" class="custom-popup">
        <button class="close-btn">&times;</button>
        <h2>Java</h2>
        <div class="button-grid">
          <button>Module</button>
          <button>Videos</button>
          <button>Flashcards</button>
          <button>Games</button>
        </div>
      </div>
    </main>
