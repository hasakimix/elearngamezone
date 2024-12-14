<link rel="stylesheet" href="<?= base_url("/assets/css/games/main.css?version=" . uniqid()) ?>" />
<link rel="stylesheet" href="<?= base_url("/assets/css/games/index.css?version=" . uniqid()) ?>" />

<main>
  <div class="button-container">
    <button class="back-button" data-url="<?= base_url("library") ?>">Back to Library</button>
  </div>
  <section class="hero">
    <p>🎮 Let the games begin! Play more and Learn more.</p>
  </section>
  <nav>
    <div class="flex-container">
      <a class="box" href="<?= base_url("games/play/hangman") ?>">
        <img src="<?= base_url("/assets/img/hangman.png") ?>" alt="Hangman">
        <p>Hangman Game</p>
      </a>
      <a class="box" href="<?= base_url("games/play/scramble") ?>">
        <img src="<?= base_url("/assets/img/scramble.png") ?>" alt="Word Scramble">
        <p>Word Scramble Game</p>
      </a>
      <a class="box" href="<?= base_url("games/play/guessinggame") ?>">
        <img src="<?= base_url("/assets/img/guessinggame.png") ?>" alt="Guessing Game">
        <p>Guessing Game</p>
      </a>
    </div>
  </nav>
</main>

<script src="<?= base_url("assets/js/games/main.js?version=" . uniqid()) ?>"></script>