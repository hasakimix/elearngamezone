$(document).ready(function () {
    
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