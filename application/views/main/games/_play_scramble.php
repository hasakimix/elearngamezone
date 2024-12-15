<link rel="stylesheet" href="<?= base_url("/assets/css/games/scramble.css?version=" . uniqid()) ?>" />
<title>Word Scramble Game</title>

<body>
    <div class="container">
        <h2>Word Scramble</h2>
        <div class="content">
            <p class="word"></p>
            <div class="details">
                <p class="hint">Hint: <span></span></p>
                <p class="time">Time Left: <span><b>30</b>s</span></p>
                <p>Score: <span class="score">0</span></p> <!-- Added score display -->
            </div>
            <input class="input-word" type="text" spellcheck="false" placeholder="Enter a valid word">
            <div class="buttons">
                <button class="refresh-word">Next Word</button>
                <button class="check-word">Check Word</button>
            </div>
            <button class="back-button">Back to Game Selection</button> <!-- Added back button -->
        </div>
    </div>
</body>

</html>

<script>
	const PROGRESS_API_URL  = '<?= base_url("api/progress/game"); ?>';
	const GAME_ID = '<?= $game["games_id"] ?>';
	const LIBRARY_ID = '<?= $game["library_id"] ?>';
	const USER_ID = '<?= $user_id ?>';
	const BACK_URL  = '<?= $back_url ?>';
</script>
<script src="<?= base_url("assets/js/games/words.js?version=" . uniqid()) ?>"></script>
<script src="<?= base_url("assets/js/games/scramble.js?version=" . uniqid()) ?>"></script>
