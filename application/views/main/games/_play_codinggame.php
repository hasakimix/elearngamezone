<link rel="stylesheet" href="<?= base_url("/assets/css/games/codinggame.css?version=".uniqid()) ?>" />

<div class="container">
    <h1>Code Quiz Game</h1>
    <p>Answer the following coding questions:</p>
    <div class="score" id="score">Score: 0</div>
    <div class="code-block" id="codeBlock">System.out.______("Hello, World!");</div>
    <input type="text" id="userInput" placeholder="Enter your answer here">
    <div class="d-flex" style="place-content: center;">
        <button id="submit" onclick="checkAnswer()">Submit</button>
        <button id="back" onclick="goBack()" class="bg-dark">Back</button>
    </div>
    <div class="result" id="result"></div>
</div>

<script>
	const PROGRESS_API_URL  = '<?= base_url("api/progress/game"); ?>';
	const GAME_ID = '<?= $game["games_id"] ?>';
	const LIBRARY_ID = '<?= $game["library_id"] ?>';
    const SUBJECT = '<?= strtolower($library["library_key"]) ?>';
	const USER_ID = '<?= $user_id ?>';
	const BACK_URL  = '<?= $back_url ?>';
</script>
<script src="<?= base_url("assets/js/games/codinggame.js?version=".uniqid()) ?>"></script>
