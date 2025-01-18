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
        <h1>Update  <span class="text-info">Quiz</span></h1>
    </div>

    <form action="<?= base_url("admin/quizzes/save/update") ?>" method="POST" id="save-quizzes-form">
        <input type="hidden" id="quiz_id" name="quiz_id" value="<?= $quiz["quiz_id"] ?>">
        <div class="form-group">
            <label for="library-name">Subject:</label>
            <select class="form-select" id="library_id" name="library_id">
                <option selected disabled>Select Subject</option>
                <?php foreach ($libraries as $key => $value): ?>
                    <?php $selected = (intval($value["library_id"]) == intval($quiz["library_id"])) ? "selected" : "" ;?>
                    <option value="<?= $value["library_id"] ?>" <?= $selected ?>>
                        <?= $value["library_name"] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="quiz_name">
                Quiz Name: <small class="text-info"></small>
            </label>
            <input type="text" id="quiz_name" name="quiz_name" value="<?= $quiz["quiz_name"] ?>" placeholder="Enter Quiz Name">
        </div>
        <div class="d-flex">
            <button type="submit" class="btn save-btn mx-5">Save Quiz</button>
            <a href="<?= base_url("admin/quizzes") ?>"  class="btn save-btn mx-5 bg-dark">
                Cancel
            </a>
        </div>
    </form>
</div>



<script>
    $(document).ready(function(){
        $("#save-quizzes-form").on("submit", function(e){
            var library_id = $("#library_id").val();
            library_id = (library_id == null) ? '' : library_id;
            if(library_id.trim().length <= 0){
                _this_swal_response("Subject", "Subject Is Required", "error");
                e.preventDefault();
                return;
            }

            var quiz_name = $("#quiz_name").val();
            quiz_name = (quiz_name == null) ? '' : quiz_name;
            if(quiz_name.trim().length <= 0){
                _this_swal_response("Quiz Name", "Quiz Name Is Required", "error");
                e.preventDefault();
                return;
            }

            _this_swal_loader("Saving");
        });
    });
</script>