document.addEventListener("DOMContentLoaded", () => {
    const wordText = document.querySelector(".word"),
        hintText = document.querySelector(".hint span"),
        timeText = document.querySelector(".time b"),
        scoreText = document.querySelector(".score"), // Score display
        inputField = document.querySelector(".input-word"),
        refreshBtn = document.querySelector(".refresh-word"),
        checkBtn = document.querySelector(".check-word"),
        backBtn = document.querySelector(".back-button");

    let correctWord, timer, score = 0, questionCount = 0, totalQuestions = 10;

    const updateProgressAndScore = () => {
        document.querySelector(".score").innerText = `${questionCount} / ${totalQuestions}`;
        scoreText.innerText = `${score}`;
    };

    const initTimer = maxTime => {
        clearInterval(timer);
        timer = setInterval(() => {
            if (maxTime > 0) {
                maxTime--;
                timeText.innerText = maxTime;
                return;
            }
            alert(`Time off! ${correctWord.toUpperCase()} was the correct word`);
            nextQuestion(false);
        }, 1000);
    };

    const initGame = () => {
        
        if (questionCount === totalQuestions) {
            endGame();
            return;
        }
        questionCount++;
    
        initTimer(30);
        let randomObj = words[Math.floor(Math.random() * words.length)];
        let wordArray = randomObj.word.split("");
        for (let i = wordArray.length - 1; i > 0; i--) {
            let j = Math.floor(Math.random() * (i + 1));
            [wordArray[i], wordArray[j]] = [wordArray[j], wordArray[i]];
        }
        wordText.innerText = wordArray.join(""); // Display scrambled word
        hintText.innerText = randomObj.hint; // Display hint
        correctWord = randomObj.word.toLowerCase();
        inputField.value = ""; // Clear input field
        inputField.setAttribute("maxlength", correctWord.length); // Set input length limit
        updateProgressAndScore();};

    const checkWord = () => {
        let userWord = inputField.value.toLowerCase().trim();
        if (!userWord) {
            alert("Please enter the word to check!");
            return;
        }
        if (userWord !== correctWord) {
            alert(`Oops! "${userWord}" is not the correct word.`);
            nextQuestion(false);
            return;
        }
        alert(`Congrats! "${correctWord.toUpperCase()}" is the correct word!`);
        nextQuestion(true);
    };

    const nextQuestion = (isCorrect) => {
        if (isCorrect) {
            score++;
        }
        initGame();
    };

    const endGame = () => {
        alert(`Game Over! Your final score is ${score} out of ${totalQuestions}.`);
        questionCount = 0;
        score = 0;
        initGame();
    };

    refreshBtn.addEventListener("click", initGame);
    checkBtn.addEventListener("click", checkWord);
    backBtn.addEventListener("click", () => {
        window.location.href = 'http://localhost/elearngamezone/games/index/1'; // Change this to the actual URL of your game selection page
    });

    initGame(); // Start the first game
});
