<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="<?= base_url("/assets/css/admin/library.css?version=" . uniqid()) ?>" />
<style>
    .form-select{
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 14px;
        transition: border-color 0.3s;
    }
</style>
<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h1>Update  <span class="text-info">Flashcard</span></h1>
    </div>

    <form action="<?= base_url("admin/flashcards/save/update") ?>" method="POST" id="save-flashcard-form">
        <input type="hidden" id="flashcard_id" name="flashcard_id" value="<?= $flashcard["flashcard_id"] ?>">
        <div class="form-group">
            <label for="library-name">Subject:</label>
            <select class="form-select" id="library_id" name="library_id">
                <option selected disabled>Select Subject</option>
                <?php foreach ($libraries as $key => $value): ?>
                    <?php $selected = (intval($value["library_id"]) == intval($flashcard["library_id"])) ? "selected" : "" ;?>
                    <option value="<?= $value["library_id"] ?>" <?= $selected ?>>
                        <?= $value["library_name"] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="preview">Question:</label>
            <textarea id="question" name="question" placeholder="Write a brief question..." rows="4"><?= base64_decode($flashcard["question"]) ?></textarea>
        </div>
        <div class="form-group">
            <label for="preview">Answer:</label>
            <textarea id="answer" name="answer" placeholder="Write a brief answer..." rows="4"><?= base64_decode($flashcard["answer"]) ?></textarea>
        </div>
        <div class="d-flex">
            <button type="submit" class="btn save-btn mx-5">Save Flashcard</button>
            <a href="<?= base_url("admin/flashcards") ?>"  class="btn save-btn mx-5 bg-dark">
                Cancel
            </a>
        </div>
    </form>
</div>



<script>
    $(document).ready(function(){
        $("#save-flashcard-form").on("submit", function(e){
            var library_id = $("#library_id").val();
            library_id = (library_id == null) ? '' : library_id;
            if(library_id.trim().length <= 0){
                _this_swal_response("Subject", "Subject Is Required", "error");
                e.preventDefault();
                return;
            }

            var question = $("#question").val();
            if(question.trim().length <= 0){
                _this_swal_response("Question", "Question Is Required", "error");
                e.preventDefault();
                return;
            }

            var answer = $("#answer").val();
            if(answer.trim().length <= 0){
                _this_swal_response("Answer", "Answer Is Required", "error");
                e.preventDefault();
                return;
            }

            _this_swal_loader("Saving");
        });
    });
</script>