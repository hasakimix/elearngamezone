let QUIZ_CORRECT_ANSWERS = 0;
let QUIZ_FINAL_SCORE = 0;

$(document).ready(function () {
    $(".submit-btn").on("click",async  function(){
        let parent_container = $(this).parent();
        let index = parent_container.data("index");
        parent_container.find("input[type=radio]").each(function(){
            if($(this).prop("checked")){
                if( parseInt($(this).data('correct')) == 1){
                    QUIZ_CORRECT_ANSWERS ++;
                }
            }
        });
        $(`.questionIndex${index+1}`).removeClass("d-none");
        parent_container.addClass("d-none");
        $(".items-count").empty().text(`${(index+2)}/${QUIZ_TOTAL_ITEMS}`);

        if((index+2) > QUIZ_TOTAL_ITEMS){
            var current_swal = new swal({
                title: "Score",
                text: `${QUIZ_CORRECT_ANSWERS} correct answers out of ${QUIZ_TOTAL_ITEMS} questions`,
                icon: null,
                buttonsStyling: false,
                confirmButtonClass: "bg-gradient-success swal2-confirm btn bg-gradient-success",
                confirmButtonText: 'OK',
                allowOutsideClick: false,
            }).then(async (result) => {
                if (result.isConfirmed) {
                    await getQuizFinalScore();
                    await saveQuizProgress();
                }
            });
        }
    });
});

const getQuizFinalScore = async() => {
	var a = QUIZ_CORRECT_ANSWERS / QUIZ_TOTAL_ITEMS;
	var percentage = (a * 100).toFixed(2);
	QUIZ_FINAL_SCORE = percentage;
};

const saveQuizProgress = async () => {
	await $.ajax({
        url: `${PROGRESS_API_URL}`,
        crossDomain: true,
        type: 'POST',
        contentType: "application/json",
        dataType: "json",
        data: JSON.stringify({
			user_id : USER_ID,
			quiz_id : QUIZ_ID,
			score : QUIZ_FINAL_SCORE
		}),
        beforeSend: function (xhr) {
            console.log("sending");
        },
        error: (error) => {
            if (error.responseJSON == undefined) {
                alert("Something Went Wrong", "Please report it to the team.", 'error');
            } else {
                alert("Something Went Wrong", error.responseJSON.message, 'error');
            }
        },
        success: (response) => {
            window.location.replace(HOME_URL);
        }
    });
};

