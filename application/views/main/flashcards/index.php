<link rel="stylesheet" href="<?= base_url("/assets/css/flashcards/cards.css?version=".uniqid()) ?>" />

<main>
	<div class="flash_container">
		<h1>FLASHCARDS GUESSING GAME</h1>
		<div class="cards_container">
				<?php foreach ($flashcard as $index => $column): ?>
					<div class="cards">
						<div class="card">
								<div class="front">
									<p><?= base64_decode($column["question"]) ?></p>
								</div>
								<div class="back">
									<p><?= base64_decode($column["answer"]) ?></p>
								</div>		
						</div>		
					</div>
				<?php endforeach; ?>
		</div>
	</div>
</main>
