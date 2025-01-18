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
        <h5>Create  <span class="text-info"><?= $module["module_topic"] ?></span> - Chapter</h5>
    </div>

    <form action="<?= base_url("admin/modules/chapter_save/create") ?>" method="POST" id="save-chapter-form">
        <input type="hidden" id="module_id" name="module_id" value="<?= $module["module_id"] ?>">
        <div class="form-group">
            <label for="library-name">Chapter Name:</label>
            <input type="text" id="chapter_name" name="chapter_name" placeholder="Enter Chapter name">
        </div>
        <div class="form-group">
            <label for="preview">Contents:</label>
            <textarea id="contents" name="contents" placeholder="Write a chapter contents..." rows="4"></textarea>
        </div>
        <div class="d-flex">
            <button type="submit" class="btn save-btn mx-5">Save Chapter</button>
            <a href="<?= base_url("admin/modules/view/".$module["module_id"]) ?>"  class="btn save-btn mx-5 bg-dark">
                Cancel
            </a>
        </div>
    </form>
</div>



<script>
    $(document).ready(function(){
        $("#save-chapter-form").on("submit", function(e){
            var chapter_name = $("#chapter_name").val();
            if(chapter_name.trim().length <= 0){
                _this_swal_response("Chapter", "Chapter Name Is Required", "error");
                e.preventDefault();
                return;
            }

            var contents = $("#contents").val();
            if(contents.trim().length <= 0){
                _this_swal_response("Contents", "Contents Is Required", "error");
                e.preventDefault();
                return;
            }

            _this_swal_loader("Saving");
        });
    });
</script>