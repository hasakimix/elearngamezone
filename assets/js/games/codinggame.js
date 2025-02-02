const questions = {
    "java" : [
        { question: "System.out.______(\"Hello, World!\");", answer: "println" },
        { question: "int x = 5; int y = 10; System.out.println(x + ____);", answer: "y" },
        { question: "String name = \"John\"; System.out.println(____);", answer: "name" },
        { question: "for(int i = 0; i < 5; i____) { }", answer: "+" },
        { question: "int[] arr = new ____[10];", answer: "int" },
        { question: "public ____ void main(String[] args) { }", answer: "static" },
        { question: "double x = Math.____(16);", answer: "sqrt" },
        { question: "String s = \"Java\".____(0);", answer: "charAt" },
        { question: "int max = Math.____(x, y);", answer: "max" },
        { question: "boolean result = x ____ y;", answer: "==" }
    ],
    "html" : [
        { question: "<h1>____</h1>", answer: "Hello World" },
        { question: "<a href=\"____\">Click Here</a>", answer: "#" },
        { question: "<img src=\"image.jpg\" alt=\"____\">", answer: "Description" },
        { question: "<ul>\n    <li>____</li>\n</ul>", answer: "Item" },
        { question: "<form action=\"____\">", answer: "submit.php" },
        { question: "<input type=\"____\">", answer: "text" },
        { question: "<table>\n    <tr>\n        <td>____</td>\n    </tr>\n</table>", answer: "Data" },
        { question: "<div id=\"____\">", answer: "container" },
        { question: "<span class=\"____\">", answer: "highlight" },
        { question: "<button onclick=\"____\">", answer: "alert('Clicked!')" }
    ],
    "javascript" : [
        { question: "console.____(\"Hello, World!\");", answer: "log" },
        { question: "let x = [1, 2, 3]; x.____(4);", answer: "push" },
        { question: "document.____('id');", answer: "getElementById" },
        { question: "x = x ____ 1;", answer: "+=" },
        { question: "let func = (x) => x ____ 2;", answer: "*" },
        { question: "let arr = [1, 2, 3]; console.log(arr.____);", answer: "length" },
        { question: "x = [1, 2, 3].map(num => num.____);", answer: "toString" },
        { question: "window.____('Hello, World!');", answer: "alert" },
        { question: "setTimeout(() => console.____('Done!'), 1000);", answer: "log" },
        { question: "let obj = { name: \"Alice\" }; console.log(obj.____);", answer: "name" }
    ],
    "php" : [
        { question: "$x = 'Hello'; echo $x.____(' World!');", answer: "=" },
        { question: "$arr = array(1, 2, 3); echo count(____);", answer: "$arr" },
        { question: "$str = 'PHP'; echo strtoupper(____);", answer: "$str" },
        { question: "$x = 5; $y = 10; echo $x ____ $y;", answer: "+" },
        { question: "function sayHello() { echo 'Hello'; } say____();", answer: "Hello" },
        { question: "$arr = [1, 2, 3]; echo implode(', ', ____);", answer: "$arr" },
        { question: "$file = fopen('test.txt', ____);", answer: "'r'" },
        { question: "$x = null; echo is____($x);", answer: "null" },
        { question: "$arr = ['name' => 'Alice']; echo $arr['____'];", answer: "name" },
        { question: "$time = time(); echo date('Y-m-d', ____);", answer: "$time" }
    ],
    "python" : [
        { question: "print(____(\"Hello, World!\"))", answer: "str" },
        { question: "x = [1, 2, 3] \n x.____(4)", answer: "append" },
        { question: "y = {\"name\": \"Alice\"} \n print(y.____(\"name\"))", answer: "get" },
        { question: "for i in range(5): \n    print(i____)", answer: "," },
        { question: "import math \n result = math.____(25)", answer: "sqrt" },
        { question: "def func(x): \n    return x ** 2 \n result = func(____)", answer: "5" },
        { question: "list = [1, 2, 3] \n print(len(____))", answer: "list" },
        { question: "str = \"Hello\" \n print(str.____(0))", answer: "upper" },
        { question: "x = lambda a, b : a ____ b", answer: "+" },
        { question: "result = [x for x in range(10) if x ____ 2 == 0]", answer: "%" }
    ],
    "sql" : [
        { question: "SELECT * FROM users WHERE id = ____;", answer: "1" },
        { question: "INSERT INTO users(name, age) VALUES(____);", answer: "'John', 25" },
        { question: "UPDATE users SET name = ____ WHERE id = 1;", answer: "'Alice'" },
        { question: "DELETE FROM users WHERE id = ____;", answer: "1" },
        { question: "CREATE TABLE users(____);", answer: "id INT, name VARCHAR(50)" },
        { question: "ALTER TABLE users ADD COLUMN ____;", answer: "email VARCHAR(100)" },
        { question: "SELECT COUNT(*) FROM ____;", answer: "users" },
        { question: "SELECT name FROM users WHERE age > ____;", answer: "18" },
        { question: "SELECT name FROM users ORDER BY ____;", answer: "age" },
        { question: "DROP TABLE ____;", answer: "users" }
    ],

	"laravel": [
    { question: "What command is used to create a new Laravel project? ____", "answer": "composer create-project laravel/laravel project-name" },
    { question: "Which command is used to start the Laravel development server? ____", "answer": "php artisan serve" },
    { question: "To create a new model in Laravel, you use the command ____", "answer": "php artisan make:model ModelName" },
    { question: "Which file in Laravel contains the application's main routes? ____", "answer": "routes/web.php" },
    { question: "In Laravel, to migrate database changes, you use the command ____", "answer": "php artisan migrate" },
    { question: "Which command is used to create a new controller in Laravel? ____", "answer": "php artisan make:controller ControllerName" },
    { question: "How do you retrieve all records from a table using Eloquent? ____", "answer": "ModelName::all()" },
    { question: "Which Blade directive is used for displaying a variable? ____", "answer": "{{ \$variable }}" },
    { question: "How do you define a route for a controller method in Laravel? ____", "answer": "Route::get('/path', [ControllerName::class, 'method']);" },
    { question: "Which Laravel command is used to generate authentication scaffolding? ____", "answer": "php artisan make:auth" }
	]
};

let currentQuestion = 0;
let score = 0;

function updateQuestion() {
    if (currentQuestion < questions[SUBJECT].length) {
        document.getElementById('codeBlock').textContent = questions[SUBJECT][currentQuestion].question;
        document.getElementById('userInput').value = "";
    } else {
        $("#submit").addClass("d-none");
        $("#back").empty().html("Close");
        document.getElementById('codeBlock').textContent = "Quiz Completed!";
        document.getElementById('userInput').style.display = "none";
        document.querySelector('button').style.display = "none";
        document.getElementById('result').textContent = `Final Score: ${score}/${questions[SUBJECT].length}`;
        saveGameProgress();
    }
}

function checkAnswer() {
    const userAnswer = document.getElementById('userInput').value.trim();
    const resultElement = document.getElementById('result');

    let icon = "error";
    let title = "Wrong!";
    let message = `The correct answer was: ${questions[SUBJECT][currentQuestion].answer}`;
    if (userAnswer.toLowerCase() === questions[SUBJECT][currentQuestion].answer.toLowerCase()) {
        icon = "success";
        title = "Correct!";
        message = `Great job!`;
        score++;
    }

    currentQuestion++;
    document.getElementById('score').textContent = `Score: ${score}`;

    new swal({
        title: title,
        text: message,
        icon: icon,
        buttonsStyling: false,
        confirmButtonClass: "bg-gradient-success swal2-confirm btn bg-gradient-success",
        confirmButtonText: 'OK',
        allowOutsideClick: false,
    }).then(async (result) => {
        if (result.isConfirmed) {
            updateQuestion();
        }
    });
}

function goBack(){
    window.location.replace(BACK_URL);
}

updateQuestion();

const getGameScorePercentage = () => {
    var a = score / questions[SUBJECT].length;
    var percentage = (a * 100).toFixed(2);
    return percentage;
};

const saveGameProgress = async () => {
    await $.ajax({
        url: `${PROGRESS_API_URL}`,
        crossDomain: true,
        type: 'POST',
        contentType: "application/json",
        dataType: "json",
        data: JSON.stringify({
            user_id : USER_ID,
            game_id : GAME_ID,
            progress : getGameScorePercentage()
        }),
        beforeSend: function (xhr) {
            console.log("sending");
        },
        error: (error) => {
            if (error.responseJSON == undefined) {
              _this_swal_response("Something Went Wrong", "Please report it to the team.", 'error');
            } else {
              _this_swal_response("Something Went Wrong", "Please report it to the team.", 'error');
            }
        },
        success: (response) => {
            console.log(response);
        }
    });
  };
