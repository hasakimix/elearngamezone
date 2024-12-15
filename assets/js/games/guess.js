const inputs = document.querySelector(".inputs"),
hintTag = document.querySelector(".hint span"),
guessLeft = document.querySelector(".guess-left span"),
wrongLetter = document.querySelector(".wrong-letter span"),
timerTag = document.querySelector(".time"),
scoreTag = document.querySelector(".score"),
resetBtn = document.querySelector(".reset-btn"),
nextBtn = document.querySelector(".next-btn"),
typingInput = document.querySelector(".typing-input");
backBtn = document.querySelector(".back-button"); // Select the back button

let word, maxGuesses, incorrectLetters = [], correctLetters = [];
let score = 0, questionCount = 0, questionNumber = 1, timer;

function startTimer() {
  let timeLeft = 30;
  timerTag.innerText = timeLeft;
  timer = setInterval(() => {
    timeLeft--;
    timerTag.innerText = timeLeft;
    if (timeLeft <= 0) {
      clearInterval(timer);
      alert("Time's up! The word was " + word.toUpperCase());
      showAnswer();
    }
  }, 1000);
}

function stopTimer() {
  clearInterval(timer);
}

function updateQuestionNumber() {
  document.querySelector('.question-number').textContent = questionNumber;
}

function randomWord() {
  if (questionCount >= 10) {
    alert(`Game over! You scored ${score}/10.`);
    return;
  }
  let ranItem = wordList[Math.floor(Math.random() * wordList.length)];
  word = ranItem.word;
  maxGuesses = word.length >= 5 ? 8 : 6;
  correctLetters = []; incorrectLetters = [];
  hintTag.innerText = ranItem.hint;
  guessLeft.innerText = maxGuesses;
  wrongLetter.innerText = incorrectLetters.join(", ");
  scoreTag.innerText = score;
  questionCount++;
  questionNumber = questionCount;
  updateQuestionNumber();

  let html = "";
  for (let i = 0; i < word.length; i++) {
    html += `<input type="text" disabled>`;
  }
  inputs.innerHTML = html;
  stopTimer();
  startTimer();
}

function showAnswer() {
  for (let i = 0; i < word.length; i++) {
    inputs.querySelectorAll("input")[i].value = word[i];
  }
  setTimeout(() => randomWord(), 2000);
}

function initGame(e) {
  let key = e.target.value.toLowerCase();
  if (key.match(/^[A-Za-z]+$/) && !incorrectLetters.includes(` ${key}`) && !correctLetters.includes(key)) {
    if (word.includes(key)) {
      for (let i = 0; i < word.length; i++) {
        if (word[i] === key) {
          correctLetters += key;
          inputs.querySelectorAll("input")[i].value = key;
        }
      }
      if (correctLetters.length === word.length) {
        score++;
        stopTimer();
        randomWord();
      }
    } else {
      maxGuesses--;
      incorrectLetters.push(` ${key}`);
      guessLeft.innerText = maxGuesses;
      wrongLetter.innerText = incorrectLetters.join(", ");
      if (maxGuesses < 1) {
        alert("Game over! You don't have remaining guesses");
        showAnswer();
      }
    }
  }
  typingInput.value = "";
}

resetBtn.addEventListener("click", () => {
  score = 0;
  questionCount = 0;
  questionNumber = 1;
  updateQuestionNumber();
  scoreTag.innerText = score;
  randomWord();
});

nextBtn.addEventListener("click", randomWord);
typingInput.addEventListener("input", initGame);
inputs.addEventListener("click", () => typingInput.focus());
document.addEventListener("keydown", () => typingInput.focus());

randomWord();

// Event listener for the back button tests
backBtn.addEventListener("click", () => {
  window.location.href = BACK_URL; // Change this to the actual URL of your game selection page
});
