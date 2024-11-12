<link rel="stylesheet" href="<?= base_url("/assets/css/games/index.css?version=".uniqid()) ?>" />
<link rel="stylesheet" href="<?= base_url("/assets/css/games/main.css?version=".uniqid()) ?>" /> 
<main>
  <nav>
    <h1 class="headertitle"> Games </h1>
    <div class="flex-container">
      <a class="box" href="<?= base_url("games/play/hangman")?>">
        <img src="<?= base_url("/assets/img/hangman.png") ?>">
        <p>hangman game</p>
      </a>
      <a class="box" href="<?= base_url("games/play/scramble")?>">
        <img src="<?= base_url("/assets/img/scramble.png") ?>">
        <p>word scramble game</p>
      </a>
      <a class="box" href="<?= base_url("games/play/guessinggame")?>">
        <img src="<?= base_url("/assets/img/guessinggame.png") ?>">
        <p>Guessing Game</p>
      </a>
			<a class="box">
        <p></p>
      </a>
			<a class="box">
        <p></p>
      </a>
      <a class="box" href="<?= base_url("games/play/")?>">
        
        <p></p>
      </a>
    </div>
  </nav>
</main>
