<link rel="stylesheet" href="<?= base_url("/assets/css/games/hangman.css?version=".uniqid()) ?>" />
<title>Hangman Game</title>
<body>
    <div class="game-modal">
        <div class="content">
            <img src="#" alt="gif">
            <h4>Game Over!</h4>
            <p>The correct word was: <b>rainbow</b></p>
            <button class="play-again">Play Again</button>
        </div>
    </div>
    <div class="container">
        <div class="hangman-box">
            <img src="#" draggable="false" alt="hangman-img">
            <h1>Hangman Game</h1>
        </div>
        <div class="game-box">
            <h4 class="progress-text">Question: <b>1 / 10</b></h4>
            <h4 class="score-text">Score: <b>0</b></h4>
            <ul class="word-display"></ul>
            <h4 class="hint-text">Hint: <b></b></h4>
            <h4 class="guesses-text">Incorrect guesses: <b></b></h4>
            <div class="keyboard"></div>
            <button class="back-button">Back to Game Selection</button>
        </div>
    </div>
</body>

<script src="<?= base_url("assets/js/games/wordlist.js?version=".uniqid()) ?>"></script>
<script src="<?= base_url("assets/js/games/hangman.js?version=".uniqid()) ?>"></script>
