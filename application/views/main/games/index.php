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
			<?php foreach ($games as $key => $game): ?>
				<a class="box" href="<?= base_url($game["game_url"]."/".$game["game_key"]."/".$game["library_id"]) ?>">
					<img src="<?= base_url("/assets/img/".$game["game_key"].".png") ?>" alt="<?= $game["game_name"] ?>">
					<p><?= $game["game_name"] ?> Game</p>
				</a>
			<?php endforeach; ?>
    </div>
  </nav>
</main>

<script src="<?= base_url("assets/js/games/main.js?version=" . uniqid()) ?>"></script>
