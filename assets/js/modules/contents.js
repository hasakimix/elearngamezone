$(document).ready(function () {
    $(".collapsible-quiz").on("click", function(){
        window.location.replace(QUIZ_URL);
    });
});

const displayModuleChapterContents = (chapter_id) => {
    $(".module-contents").addClass("d-none");
    $(".module-contents").each(function(){
        var chapterID = $(this).data("chapter");
        if( parseInt(chapterID) == parseInt(chapter_id) ){
            $(this).removeClass("d-none");
        }
    });
    saveModuleProgress(chapter_id);
};

const topics = document.querySelectorAll(".topic");

topics.forEach(topic => {
    topic.addEventListener("click", function (event) {
        // Prevent the default action if necessary
        event.preventDefault();

        // Remove 'active' class from all topics
        topics.forEach(t => t.classList.remove("active"));

        // Add 'active' class to the clicked topic
        this.classList.add("active");
    });
});


const saveModuleProgress = async (chapter_id) => {
	await $.ajax({
        url: `${PROGRESS_API_URL}`,
        crossDomain: true,
        type: 'POST',
        contentType: "application/json",
        dataType: "json",
        data: JSON.stringify({
			user_id : USER_ID,
			chapter_id : chapter_id
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
            console.log(response);
        }
    });
};