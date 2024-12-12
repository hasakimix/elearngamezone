const wordDisplay = document.querySelector(".word-display");
const guessesText = document.querySelector(".guesses-text b");
const progressText = document.querySelector(".progress-text b");
const scoreText = document.querySelector(".score-text b");
const keyboardDiv = document.querySelector(".keyboard");
const hangmanImage = document.querySelector(".hangman-box img");
const gameModal = document.querySelector(".game-modal");
const playAgainBtn = gameModal.querySelector("button");
const backBtn = document.querySelector(".back-button");

const preloadGif = (src) => {
    const img = new Image();
    img.src = src;
};
preloadGif("../../assets/img/pics/hangman/victory.gif");
preloadGif("../../assets/img/pics/hangman/lost.gif");

let currentWord, correctLetters, wrongGuessCount, questionCount, score;
const maxGuesses = 6;
const totalQuestions = 10;

const updateProgressAndScore = () => {
    progressText.innerText = `${questionCount} / ${totalQuestions}`;
    scoreText.innerText = `${score}`;
};

const resetGame = () => {
    correctLetters = [];
    wrongGuessCount = 0;
    hangmanImage.src = "../../assets/img/pics/hangman/hangman-0.svg";
    guessesText.innerText = `${wrongGuessCount} / ${maxGuesses}`;
    wordDisplay.innerHTML = currentWord.split("").map(() => `<li class="letter"></li>`).join("");
    keyboardDiv.querySelectorAll("button").forEach(btn => btn.disabled = false);
    gameModal.classList.remove("show");
    updateProgressAndScore();
};

const getRandomWord = () => {
    const { word, hint } = wordList[Math.floor(Math.random() * wordList.length)];
    currentWord = word;
    document.querySelector(".hint-text b").innerText = hint;
    resetGame();
};

const gameOver = (isVictory) => {
    const modalText = isVictory ? `You found the word:` : 'The correct word was:';
    gameModal.querySelector("img").src = `../../assets/img/pics/hangman/${isVictory ? 'victory' : 'lost'}.gif`;
    gameModal.querySelector("h4").innerText = isVictory ? 'Correct!' : 'Game Over!';
    gameModal.querySelector("p").innerHTML = `${modalText} <b>${currentWord}</b>`;
    gameModal.classList.add("show");

    if (isVictory) {
        score++;
        playAgainBtn.innerText = "Next Question";
        playAgainBtn.onclick = nextQuestion;
    } else {
        playAgainBtn.innerText = "Play Again";
        playAgainBtn.onclick = () => {
            questionCount = 0;
            score = 0;
            getRandomWord();
            updateProgressAndScore();
        };
    }
    updateProgressAndScore();
};

const nextQuestion = () => {
    if (questionCount < totalQuestions) {
        questionCount++;
        getRandomWord();
        updateProgressAndScore();
    } else {
        endGame();
    }
};

const endGame = () => {
    gameModal.querySelector("img").src = "../../assets/img/pics/hangman/victory.gif";
    gameModal.querySelector("h4").innerText = "Congratulations!";
    gameModal.querySelector("p").innerHTML = `You completed ${totalQuestions} questions with a score of <b>${score}</b> out of ${totalQuestions}.`;
    gameModal.classList.add("show");
    playAgainBtn.innerText = "Play Again";
    playAgainBtn.onclick = () => {
        questionCount = 0;
        score = 0;
        getRandomWord();
        updateProgressAndScore();
    };
};

const initGame = (button, clickedLetter) => {
    if (currentWord.includes(clickedLetter)) {
        [...currentWord].forEach((letter, index) => {
            if (letter === clickedLetter) {
                correctLetters.push(letter);
                wordDisplay.querySelectorAll("li")[index].innerText = letter;
                wordDisplay.querySelectorAll("li")[index].classList.add("guessed");
            }
        });
    } else {
        wrongGuessCount++;
        hangmanImage.src = `../../assets/img/pics/hangman/hangman-${wrongGuessCount}.svg`;
    }
    button.disabled = true;
    guessesText.innerText = `${wrongGuessCount} / ${maxGuesses}`;
    if (wrongGuessCount === maxGuesses) return gameOver(false);
    if (correctLetters.length === currentWord.length) return gameOver(true);
};

for (let i = 97; i <= 122; i++) {
    const button = document.createElement("button");
    button.innerText = String.fromCharCode(i);
    keyboardDiv.appendChild(button);
    button.addEventListener("click", (e) => initGame(e.target, String.fromCharCode(i)));
}

questionCount = 0;
score = 0;
updateProgressAndScore();
getRandomWord();

playAgainBtn.addEventListener("click", getRandomWord);

backBtn.addEventListener("click", () => {
    window.location.href = 'http://localhost/elearngamezone/games/index/1';
});
