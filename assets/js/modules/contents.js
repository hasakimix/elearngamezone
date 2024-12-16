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
