<link rel="stylesheet" href="<?= base_url("/assets/css/modules/main.css?version=".uniqid()) ?>" />
<main class="main">
    <nav>
        <div class="flex-container">
            <a class="box" id="open-popup">
                <img src="<?= base_url("/assets/img/Java.png") ?>" alt="Java">
                <p>Java</p>
            </a>
        </div>
    </nav>
</main>

<!-- Popup for Java Module -->
<div class="popup">
    <button class="close-btn">&times;</button>
    <h2>Java</h2>
    <div class="button-grid">
        <button>Module</button>
        <button>Videos</button>
        <button>Flashcards</button>
        <button>Games</button>
    </div>
</div>

<!-- Include JavaScript at the end of the body -->
<script src="<?= base_url("/assets/js/modules/main.js") ?>"></script>
