<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url("/assets/css/admin/flashcards.css?version=" . uniqid()) ?>" />
</head>
<body>
<div class="container">
    <div class="header">
        <h1><span>Flashcards</span></h1>
        <button class="btn add" onclick="showModal()">+ ADD FLASHCARD</button>
    </div>

    <ul class="flashcard-list">
        <li class="flashcard-item">
            <div class="content">
                <p class="library-name"><strong>Library:</strong> Java</p>
                <p class="quiz-name"><strong>Flashcard Name:</strong> Deputa </p>
                <p class="status"><strong>Status:</strong> Active</p>
            </div>
            <div class="actions">
                <button class="edit" onclick="editFlashcard()">
                    <i class="fas fa-edit"></i> Edit
                </button>
                <button class="delete" onclick="deleteFlashcard()">
                    <i class="fas fa-trash"></i> Delete
                </button>
            </div>
        </li>
    </ul>
</div>

<!-- Add Flashcard Modal -->
<div id="flashcardModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Create Flashcard</h2>

        <form>
            <label for="library-name">Library Name</label>
            <input type="text" id="library-name" placeholder="Enter library name here">

            <label for="quiz-name">Flashcard Name</label>
            <input type="text" id="quiz-name" placeholder="Enter flashcard name here">

            <div class="form-group">
                <label for="question">Question</label>
                <textarea id="question" rows="5" placeholder="Type your question here"></textarea>
            </div>

            <div class="form-group">
                <label for="answer">Answer</label>
                <textarea id="answer" rows="5" placeholder="Type your answer here"></textarea>
            </div>

            <div class="buttons">
                <button class="primary">Create Flashcard</button>
            </div>
        </form>
    </div>
</div>

<script>

	function showModal() {
    document.getElementById("flashcardModal").style.display = "block";
}

	function closeModal() {
    document.getElementById("flashcardModal").style.display = "none";
}

</script>
</body>
</html>
