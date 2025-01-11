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
        <div class="header">
            <h1>Subject <span>Details</span></h1>
            <button class="btn add" onclick="showModal()">+ ADD LIBRARY</button>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Library Name</th>
                    <th>Library ID</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sampol</td>
                    <td>Ahk ahk</td>
                    <td>Active</td>
                    <td class="actions">
                        <i class="fas fa-edit icon edit"></i>
                        <i class="fas fa-trash icon delete"></i>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

   <!-- Modal -->
<div id="modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="hideModal()">&times;</span>
        <h2>Add Library</h2>
        <form>
            <div class="form-group">
                <label for="library-name">Library Name:</label>
                <input type="text" id="library-name" name="library-name" placeholder="Enter library name" required>
            </div>
            <div class="form-group">
                <label for="library-id">Library ID:</label>
                <input type="text" id="library-id" name="library-id" placeholder="Enter library ID" required>
            </div>
            <div class="form-group">
                <label for="preview">Preview:</label>
                <textarea id="preview" name="preview" placeholder="Write a brief description..." rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Upload Image:</label>
                <input type="file" id="image" name="image">
            </div>
            <div class="test-attributes">
				<label for="is-active">
				<input type="checkbox" id="is-active" name="is-active"> Is Active?</label>
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
    </script>
</body>
</html>
