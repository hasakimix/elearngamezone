<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url("/assets/css/admin/library.css?version=" . uniqid()) ?>" />
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-between mb-3">
            <h1>Subjects <span class="text-info">List</span></h1>
            <button class="btn add" onclick="addLibraryButton()">+ ADD Subject</button>
        </div>

        <table class="border border-2 border-dark rounded">
            <thead>
                <tr>
                    <th>Actions</th>
                    <th>ID</th>
                    <th>Subject Name</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($libraries as $key => $value): ?>
                    <tr>
                        <td class="actions" data-library="<?= base64_encode(json_encode($value)) ?>">
                            <a href="javascript:void(0);" onclick="updateLibraryButton(this)" class="mx-2">
                                <i class="fas fa-edit icon edit"></i>
                            </a>
                            <a href="<?= base_url("admin/library/delete/".$value["library_id"]) ?>" class="mx-2">
                                <i class="fas fa-trash icon delete"></i>
                            </a>
                        </td>
                        <td>
                            <?= $value["library_id"]; ?>
                        </td>
                        <td>
                            <?= $value["library_name"]; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

   <!-- Modal -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="hideModal()">&times;</span>
            <h2 class="subejct-modal-title">Add Subject</h2>
            <form action="<?= base_url("admin/library/save") ?>" method="POST" id="save-library-form">
                <input type="hidden" id="library_id" name="library_id">
                <div class="form-group">
                    <label for="library-name">Name:</label>
                    <input type="text" id="library-name" name="library-name" placeholder="Enter Subject name">
                </div>
                <div class="form-group">
                    <label for="ibrary-image">
                        ImageURL: <small class="text-info"> format (assets/img/subject.png) </small>
                    </label>
                    <input type="text" id="library-image" name="library-image" placeholder="Enter Image URL">
                </div>
                <div class="form-group">
                    <label for="preview">Description:</label>
                    <textarea id="preview" name="description" placeholder="Write a brief description..." rows="4"></textarea>
                </div>
                <button type="submit" class="btn save-btn">Save Library</button>
            </form>
        </div>
    </div>

    <script>
        function showModal() {
            document.getElementById('modal').style.display = 'block';
        }

        function hideModal() {
            document.getElementById('modal').style.display = 'none';
        }

        const addLibraryButton = async() => {
            showModal();
            $(".subejct-modal-title").empty().text("Add Subject");
            $("#library_id").val('');
            $("#library-name").val('');
            $("#library-image").val('');
            $("#preview").val('');
        };

        const updateLibraryButton = async(_this) => {
            var _data = $(_this).parent().data("library");
            _data = atob(_data);
            try {
                _data = JSON.parse(_data);
            } catch (error) {
                _data = null;
            }
            if(_data == null){
                _this_swal_response("Something Went Wrong", "Invalid Subject Data", "error");
                return;
            }
            showModal();
            $(".subejct-modal-title").empty().text("Update Subject");
            $("#library_id").val(`${_data.library_id}`);
            $("#library-name").val(`${_data.library_name}`);
            $("#library-image").val(`${_data.image_url}`);
            $("#preview").val(`${atob(_data.description)}`);
        };

        $(document).ready(function(){
            $("#save-library-form").on("submit", function(e){
                var library_name = $("#library-name").val();
                if(library_name.trim().length <= 0){
                    _this_swal_response("Subject Name", "Subject Name Is Required", "error");
                    e.preventDefault();
                    return;
                }

                var library_image = $("#library-image").val();
                if(library_image.trim().length <= 0){
                    _this_swal_response("Subject Image", "Subject Image Is Required", "error");
                    e.preventDefault();
                    return;
                }

                var preview = $("#preview").val();
                if(preview.trim().length <= 0){
                    _this_swal_response("Subject Description", "Subject Description Is Required", "error");
                    e.preventDefault();
                    return;
                }
                _this_swal_loader("Saving");
            });
        });
    </script>
</body>
</html>
