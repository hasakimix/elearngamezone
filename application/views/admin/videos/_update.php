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
        <h1>Update Video - <span class="text-info"><?= $video["name"] ?></span></h1>
    </div>

    <form action="<?= base_url("admin/videos/save/update") ?>" method="POST" id="save-videos-form">
        <input type="hidden" id="video_id" name="video_id" value="<?= $video["video_id"] ?>">
        <div class="form-group">
            <label for="library-name">Subject:</label>
            <select class="form-select" id="library_id" name="library_id">
                <option selected disabled>Select Subject</option>
                <?php foreach ($libraries as $key => $value): ?>
                    <?php $selected = (intval($value["library_id"]) == intval($video["library_id"])) ? "selected" : "" ;?>
                    <option value="<?= $value["library_id"] ?>" <?= $selected ?>>
                        <?= $value["library_name"] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>
                Video Name: <small class="text-info"></small>
            </label>
            <input type="text" id="name" name="name" placeholder="Enter Video Name" value="<?= $video["name"] ?>">
        </div>
        <div class="form-group">
            <label for="preview">Description:</label>
            <textarea id="description" name="description" placeholder="Write a brief description..." rows="4"><?= $video["description"] ?></textarea>
        </div>
        <div class="form-group">
            <label>
                Video URL: <small class="text-info"></small>
            </label>
            <input type="text" id="video_url" name="video_url" placeholder="Enter Video URL" value="<?= $video["video_url"] ?>">
        </div>
        <div class="d-flex">
            <button type="submit" class="btn save-btn mx-5">Save Video</button>
            <a href="<?= base_url("admin/videos") ?>"  class="btn save-btn mx-5 bg-dark">
                Cancel
            </a>
        </div>
    </form>
</div>



<script>
    $(document).ready(function(){
        $("#save-videos-form").on("submit", function(e){
            var library_id = $("#library_id").val();
            library_id = (library_id == null) ? '' : library_id;
            if(library_id.trim().length <= 0){
                _this_swal_response("Subject", "Subject Is Required", "error");
                e.preventDefault();
                return;
            }

            var name = $("#name").val();
            if(name.trim().length <= 0){
                _this_swal_response("Video Name", "Video Name Is Required", "error");
                e.preventDefault();
                return;
            }

            var description = $("#description").val();
            if(description.trim().length <= 0){
                _this_swal_response("Description", "Description Is Required", "error");
                e.preventDefault();
                return;
            }

            var video_url = $("#video_url").val();
            if(video_url.trim().length <= 0){
                _this_swal_response("Video URL", "Video URL Is Required", "error");
                e.preventDefault();
                return;
            }

            _this_swal_loader("Saving");
        });
    });
</script>