<?php
// List of words and their corresponding questions
$words_with_questions = [
    ["word" => "php", "question" => "A popular server-side scripting language."],
    ["word" => "html", "question" => "The standard markup language for creating web pages."],
    ["word" => "css", "question" => "A style sheet language used for describing the presentation of a document written in HTML."],
    ["word" => "javascript", "question" => "A programming language commonly used in web development."],
    ["word" => "mysql", "question" => "An open-source relational database management system."],
    ["word" => "python", "question" => "A high-level programming language known for its readability."],
    ["word" => "java", "question" => "A high-level programming language used to develop mobile apps, web apps, and more."],
    ["word" => "ruby", "question" => "A dynamic, open-source programming language with a focus on simplicity and productivity."],
    ["word" => "perl", "question" => "A high-level, general-purpose, interpreted, dynamic programming language."],
    ["word" => "swift", "question" => "A powerful and intuitive programming language for macOS, iOS, watchOS, and tvOS."],
    ["word" => "typescript", "question" => "A superset of JavaScript that adds static typing."],
    ["word" => "sql", "question" => "A standard language for accessing and manipulating databases."],
    ["word" => "node", "question" => "JavaScript runtime built on Chrome's V8 JavaScript engine."],
    ["word" => "react", "question" => "A JavaScript library for building user interfaces."],
    ["word" => "angular", "question" => "A platform for building mobile and desktop web applications."],
    ["word" => "vue", "question" => "A progressive JavaScript framework for building user interfaces."],
    ["word" => "sass", "question" => "A preprocessor scripting language that is interpreted or compiled into CSS."],
    ["word" => "flask", "question" => "A micro web framework written in Python."],
    ["word" => "django", "question" => "A high-level Python web framework that encourages rapid development."],
    ["word" => "kotlin", "question" => "A statically typed programming language for modern multiplatform applications."],
    ["word" => "go", "question" => "A statically typed, compiled programming language designed by Google."],
    ["word" => "rust", "question" => "A programming language focused on safety and concurrency."],
    ["word" => "bash", "question" => "A Unix shell and command language."],
    ["word" => "shell", "question" => "An interface that allows access to an operating system's services."],
    ["word" => "mongodb", "question" => "A NoSQL database known for its flexibility and scalability."],
    ["word" => "firebase", "question" => "A platform developed by Google for creating mobile and web applications."],
    ["word" => "graphql", "question" => "A data query language for APIs."],
    ["word" => "rest", "question" => "An architectural style for designing networked applications."],
    ["word" => "docker", "question" => "A platform for developing, shipping, and running applications in containers."],
    ["word" => "kubernetes", "question" => "An open-source system for automating deployment, scaling, and managing containerized applications."]
];

// Function to generate an empty crossword grid
function generate_grid($size) {
    $grid = [];
    for ($i = 0; $i < $size; $i++) {
        $grid[$i] = array_fill(0, $size, ["letter" => " ", "number" => ""]);
    }
    return $grid;
}

// Function to place words in the grid
function place_words(&$grid, $words) {
    $size = count($grid);
    $question_number = 1;
    foreach ($words as $word) {
        $placed = false;
        while (!$placed) {
            $direction = rand(0, 2); // 0: horizontal, 1: vertical, 2: diagonal
            if ($direction == 0) {
                $row = rand(0, $size - 1);
                $col = rand(0, $size - strlen($word['word']));
                if (can_place_word($grid, $word['word'], $row, $col, "horizontal")) {
                    for ($i = 0; $i < strlen($word['word']); $i++) {
                        $grid[$row][$col + $i]['letter'] = $word['word'][$i];
                        if ($i == 0) {
                            $grid[$row][$col + $i]['number'] = $question_number++;
                        }
                    }
                    $placed = true;
                }
            } elseif ($direction == 1) {
                $row = rand(0, $size - strlen($word['word']));
                $col = rand(0, $size - 1);
                if (can_place_word($grid, $word['word'], $row, $col, "vertical")) {
                    for ($i = 0; $i < strlen($word['word']); $i++) {
                        $grid[$row + $i][$col]['letter'] = $word['word'][$i];
                        if ($i == 0) {
                            $grid[$row + $i][$col]['number'] = $question_number;
                        }
                    }
                    $question_number++;
                    $placed = true;
                }
            } else {
                $row = rand(0, $size - strlen($word['word']));
                $col = rand(0, $size - strlen($word['word']));
                if (can_place_word($grid, $word['word'], $row, $col, "diagonal")) {
                    for ($i = 0; $i < strlen($word['word']); $i++) {
                        $grid[$row + $i][$col + $i]['letter'] = $word['word'][$i];
                        if ($i == 0) {
                            $grid[$row + $i][$col + $i]['number'] = $question_number;
                        }
                    }
                    $question_number++;
                    $placed = true;
                }
            }
        }
    }
}

// Function to check if a word can be placed in the grid
function can_place_word($grid, $word, $row, $col, $direction) {
    $length = strlen($word);
    if ($direction == "horizontal") {
        for ($i = 0; $i < $length; $i++) {
            if ($grid[$row][$col + $i]['letter'] != " " && $grid[$row][$col + $i]['letter'] != $word[$i]) {
                return false;
            }
        }
    } elseif ($direction == "vertical") {
        for ($i = 0; $i < $length; $i++) {
            if ($grid[$row + $i][$col]['letter'] != " " && $grid[$row + $i][$col]['letter'] != $word[$i]) {
                return false;
            }
        }
    } else { 
        for ($i = 0; $i < $length; $i++) {
            if ($grid[$row + $i][$col + $i]['letter'] != " " && $grid[$row + $i][$col + $i]['letter'] != $word[$i]) {
                return false;
            }
        }
    }
    return true;
}

// Function to display the grid with input fields
function display_grid($grid) {
    echo '<form id="crossword-form">';
    echo '<table class="crossword">';
    foreach ($grid as $row) {
        echo '<tr>';
        foreach ($row as $cell) {
            if ($cell['letter'] == " ") {
                echo '<td class="empty"><input type="text" maxlength="1" style="width: 30px; height: 30px; text-align: center; visibility: hidden;"></td>';
            } else {
                $number = $cell['number'] ? '<sup>' . $cell['number'] . '</sup>' : '';
                echo '<td data-letter="' . htmlspecialchars($cell['letter']) . '"><input type="text" maxlength="1" style="width: 30px; height: 30px; text-align: center;">' . $number . '</td>';
            }
        }
        echo '</tr>';
    }
    echo '</table>';
    echo '</form>';
}

// Function to display the questions
function display_questions($words) {
    echo '<div class="questions">';
    echo '<h2>Questions</h2>';
    echo '<ul>';
    foreach ($words as $index => $word) {
        echo '<li>' . ($index + 1) . '. ' . htmlspecialchars($word['question']) . '</li>';
    }
    echo '</ul>';
    echo '</div>';
}

// Main game loop
function main() {
    global $words_with_questions;
    $size = 10;
    $grid = generate_grid($size);
    shuffle($words_with_questions);
    place_words($grid, array_slice($words_with_questions, 0, 5));  // Place a subset of words
    display_grid($grid);
    display_questions(array_slice($words_with_questions, 0, 5));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Crossword Puzzle</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #e6f7ff;
        }
        .score {
            font-size: 24px;
            margin-bottom: 20px;
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            font-weight: bold;
        }
        .crossword {
            border-collapse: collapse;
            margin-top: 20px;
        }
        .crossword td {
            width: 30px;
            height: 30px;
            border: 1px solid #000;
            text-align: center;
            vertical-align: middle;
            font-size: 18px;
            background-color: #fff;
            position: relative;
        }
        .crossword td.empty {
            border: none;
            background-color: transparent;
        }
        .crossword sup {
            position: absolute;
            top: 2px;
            left: 2px;
            font-size: 10px;
            color: #000;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #4070f4;
            color: #fff;
            border: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .button-container {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        button:hover {
            background-color: #FFAF4D;
        }
        .questions {
            margin-top: 20px;
        }
        .questions h2 {
            margin-bottom: 10px;
        }
        .questions ul {
            list-style-type: none;
            padding: 0;
        }
        .questions li {
            margin-bottom: 5px;
        }
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }
        .popup {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }
        .popup button {
            margin: 5px;
        }
        .correct {
            background-color: green;
        }
        .incorrect {
            background-color: red;
        }
    </style>
</head>
<body>
    <?php main(); ?>
    <div class="score">Score: <span id="score">0</span></div>
    <div class="overlay" id="overlay">
        <div class="popup">
            <p>Do you want to play again?</p>
            <button onclick="location.reload()">Yes</button>
            <button onclick="hidePlayAgain()">No</button>
        </div>
    </div>
    <div class="button-container">
        <button type="button" onclick="checkAnswers()">Check Answers</button>
        <button type="button" onclick="location.reload()">Play Again</button>
    </div>
    <script>
        let score = 0;

        document.addEventListener('DOMContentLoaded', (event) => {
    const inputs = document.querySelectorAll('.crossword input[type="text"]');
    inputs.forEach(input => {
        input.addEventListener('input', (e) => {
            const userInput = e.target.value.toUpperCase();
            input.value = userInput; // Just update the value without changing colors
        });
    });
});
        function updateScore() {
            const inputs = document.querySelectorAll('.crossword input[type="text"]');
            let correctCount = 0;
            inputs.forEach(input => {
                const correctLetter = input.parentElement.dataset.letter.toUpperCase();
                if (input.value.toUpperCase() === correctLetter) {
                    correctCount++;
                }
            });
            score = correctCount;
            document.getElementById('score').textContent = score;
        }

        function checkAnswers() {
    const inputs = document.querySelectorAll('.crossword input[type="text"]');
    let correctCount = 0;
    
    inputs.forEach(input => {
        const correctLetter = input.parentElement.dataset.letter?.toUpperCase();
        const userInput = input.value.toUpperCase();
        
        if (correctLetter) {
            if (userInput === correctLetter) {
                input.style.backgroundColor = 'lightgreen';
                input.style.color = 'green';
                correctCount++;
            } else {
                input.style.backgroundColor = 'lightcoral';
                input.value = correctLetter;  // Fill in the correct answer
                input.style.color = 'red';
            }
        }
    });
    
    // Update score
    score = correctCount;
    document.getElementById('score').textContent = score;
    
    // Show the popup
    document.getElementById('overlay').style.display = 'flex';
}

function hidePlayAgain() {
    document.getElementById('overlay').style.display = 'none';
}
    </script>
</body>
</html>