<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url("/assets/css/admin/quiz.css?version=" . uniqid()) ?>" />
</head>
<body>
<div class="container">
	<div class="header">
		<h1>Quiz <span>List</span></h1>
		<button class="btn add" onclick="showModal()">+ ADD QUIZ</button>
	</div>

	<table>
		<thead>
			<tr>
				<th>Library Name</th>
				<th>Quiz Name</th>
				<th>Status</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Java</td>
				<td>Hello World</td>
				<td>Active</td>
				<td class="actions">
					<i class="fas fa-edit icon edit"></i>
					<i class="fas fa-trash icon delete"></i>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<!-- Modal for Create Question -->
<div class="modal" id="createQuestionModal">
    <div class="create-question-container">
        <button class="close-btn" onclick="closeModal()">×</button>
        <h1>Create Question</h1>

		<label for="library-name">Library Name</label>
		<input type="text" id="library-name" placeholder="Enter library name here">

		<label for="quiz-name">Quiz Name</label>
		<input type="text" id="quiz-name" placeholder="Enter quiz name here">

		<label for="question">Question</label>
		<textarea id="question" placeholder="Type the question here"></textarea>

		<div class="test-attributes">
			<label><input type="checkbox"> Is Active?</label>
		</div>

	<div class="answers">

    <h2>Answers</h2>
		<div class="answer-option">
			<input type="checkbox">Is Correct</input> 
			<input type="text" placeholder="Answer">
			<button class="secondary" onclick="removeAnswerOption(this)">Remove Option</button>
		</div>
    
			<button class="add-answer" onclick="addAnswerOption()">+ Add Answer</button>
		</div>

		<div class="buttons">
			<button class="primary">Create Question</button>
		</div>
	</div>
</div>

<script>
    function showModal() {
        document.getElementById('createQuestionModal').classList.add('active');
    }

	function closeModal() {
    document.getElementById('createQuestionModal').classList.remove('active');
	}

    function addAnswerOption() {
        const answersContainer = document.querySelector('.answers');
        const answerOption = document.createElement('div');
        answerOption.classList.add('answer-option');

        answerOption.innerHTML = `
            <input type="checkbox">Is Correct</input>
            <input type="text" placeholder="Answer">
            <button class="secondary" onclick="removeAnswerOption(this)">Remove Option</button>
        `;

        answersContainer.insertBefore(answerOption, answersContainer.querySelector('.add-answer'));
    }

    function removeAnswerOption(button) {
        const answerOption = button.parentElement;
        answerOption.remove();
    }
</script>
</body>
</html>
