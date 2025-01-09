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
            <button class="btn add" href="<?= base_url("admin/panel")?>">+ Add Library</button>
        </div>

        <table>
            <thead>
                <tr>
                    <th>library_name</th>
                    <th>library_id</th>
					<th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sampol</td>
                    <td>Ahk ahk</td>
                    <td>Hehehe</td>
                    <td class="actions">
                        <i class="fas fa-edit icon edit"></i>
                        <i class="fas fa-trash icon delete"></i>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="actions">
                        <i class="fas fa-edit icon edit"></i>
                        <i class="fas fa-trash icon delete"></i>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="actions">
                        <i class="fas fa-edit icon edit"></i>
                        <i class="fas fa-trash icon delete"></i>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
<!-- <script src="<?= base_url("assets/js/admin/crude.js?version=" . uniqid()) ?>"></script> -->
</html>
