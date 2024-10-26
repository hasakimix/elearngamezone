<link rel="stylesheet" href="<?= base_url("/assets/css/games/scramble.css?version=".uniqid()) ?>" />
    <title>Word Scramble Game</title>
  <body>
    <div class="container">
        <h2>Word Scramble</h2>
        <div class="content">
            <p class="word"></p>
            <div class="details">
                <p class="hint">Hint: <span></span></p>
                <p class="time">Time Left: <span><b>30</b>s</span></p>
            </div>
            <input type="text" spellcheck="false" placeholder="Enter a valid word">
            <div class="buttons">
                <button class="refresh-word">Next Word</button>
                <button class="check-word">Check Word</button>
            </div>
        </div>
    </div>
  </body>
</html>

<script src="<?= base_url("assets/js/games/words.js?version=".uniqid()) ?>"></script>
<script src="<?= base_url("assets/js/games/scramble.js?version=".uniqid()) ?>"></script>
