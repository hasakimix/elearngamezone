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
        <h1>Create <?= $quiz["quiz_name"] ?> - <span class="text-info">Question</span></h1>
    </div>

    <form action="<?= base_url("admin/quizzes/question_save/create") ?>" method="POST" id="save-question-form">
        <input type="hidden" id="quiz_id" name="quiz_id" value="<?= $quiz["quiz_id"] ?>">
        <input type="hidden" id="answers_data" name="answers_data">
        <div class="form-group">
            <label for="quiz_name">
                Question: <small class="text-info"></small>
            </label>
            <input type="text" id="query" name="query" placeholder="Enter Question">
        </div>
        <div class="d-flex justify-content-between mb-3">
            <a href="javascript:void(0);" onclick="addQuestionOption()" class="mx-2">
                <button type="button" class="btn add">+ ADD Options</button>
            </a>
        </div>
        <table class="border border-2 border-dark rounded" id="question_solutions_table">
            <thead>
                <tr>
                    <th>Remove</th>
                    <th>Answer</th>
                    <th>Is Correct?</th>
                </tr>
            </thead>
            <tbody>
                <tr class="option-row">
                    <td class="actions" style="width: 110px;">
                        <a href="javascript:void(0);" onclick="removeQuestionOption(this)" class="mx-2 btn btn-danger">
                            <i class="fas fa-minus icon text-white"></i>
                        </a>
                    </td>
                    <td>
                        <input class="form-select" type="text" name="answer" placeholder="Enter Answer">
                    </td>
                    <td>
                        <input type="checkbox" name="is_correct">
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex mt-5">
            <button type="submit" class="btn save-btn mx-5">Save Question</button>
            <a href="<?= base_url("admin/quizzes/questions/".$quiz["quiz_id"]) ?>"  class="btn save-btn mx-5 bg-dark">
                Cancel
            </a>
        </div>
    </form>
</div>



<script>
    $(document).ready(function(){
        $("#save-question-form").on("submit", function(e){
            var query = $("#query").val();
            if(query.trim().length <= 0){
                _this_swal_response("Question", "Question Is Required", "error");
                e.preventDefault();
                return;
            }

            var answers = [];
            $("#question_solutions_table").find(".option-row").each(function(){
                var ans = $(this).find("input[name=answer]").val();
                console.log(ans);
                var is_correct = $(this).find("input[name=is_correct]").prop("checked");
                if(ans.trim().length > 0){
                    answers.push({
                        answer: ans,
                        is_correct: is_correct
                    })
                }
            });

            if(answers.length <= 0){
                _this_swal_response("Answers", "You must enter atleast one answer to continue.", "error");
                e.preventDefault();
                return;
            }

            $("#answers_data").val(`${JSON.stringify(answers)}`);
            _this_swal_loader("Saving");
        });
    });

    const removeQuestionOption = async(_this) => {
        $(_this).parents("tr").remove();
    };

    const addQuestionOption = async() => {
        $("#question_solutions_table").find("tbody").append(`
            <tr class="option-row">
                <td class="actions" style="width: 110px;">
                    <a href="javascript:void(0);" onclick="removeQuestionOption(this)" class="mx-2 btn btn-danger">
                        <i class="fas fa-minus icon text-white"></i>
                    </a>
                </td>
                <td>
                    <input class="form-select" type="text" name="answer" placeholder="Enter Answer">
                </td>
                <td>
                    <input type="checkbox" name="is_correct">
                </td>
            </tr>
        `);
    };

</script>