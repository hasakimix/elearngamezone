<link rel="stylesheet" href="<?= base_url("/assets/css/games/guessinggame.css?version=".uniqid()) ?>" />

<title>Guess the Word Game - <?= $library["library_name"] ?> Basics</title>

<body>
<div class="wrapper">
	<h1>Guess the Word - <?= $library["library_name"] ?> Basics</h1>
	<div class="score-board">
	Question <span class="question-number">1</span> | Score: <span class="score">0</span>/10
	</div>
	<div class="content">
	<input type="text" class="typing-input" maxlength="1">
	<div class="inputs"></div>
	<div class="details">
		<p class="hint">Hint: <span></span></p>
		<p class="guess-left">Remaining guesses: <span></span></p>
		<p class="wrong-letter">Wrong letters: <span></span></p>
		<p class="timer">Time left: <span class="time">30</span> seconds</p>
	</div>
	<div class="buttons">
		<button class="reset-btn">Reset Game</button>
		<button class="next-btn">Next Word</button>
	</div>
		<button class="back-button">Back to Game Selection</button> <!-- Added back button -->
	</div>
</div>
</body>

<script>
	const PROGRESS_API_URL  = '<?= base_url("api/progress/game"); ?>';
	const GAME_ID = '<?= $game["games_id"] ?>';
	const LIBRARY_ID = '<?= $game["library_id"] ?>';
	const USER_ID = '<?= $user_id ?>';
	const BACK_URL  = '<?= $back_url ?>';
</script>
<script src="<?= base_url("assets/js/games/wordguess.js?version=".uniqid()) ?>"></script>
<script src="<?= base_url("assets/js/games/guess.js?version=".uniqid()) ?>"></script>

