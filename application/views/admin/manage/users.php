<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url("/assets/css/admin/users.css?version=" . uniqid()) ?>" />
    <title>User List</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Users <span>List</span></h1>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Is Admin</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ratbu</td>
                        <td>Kopal</td>
                        <td>ratbu@gmail.com</td>
                        <td>Yes</td>
                        <td>01-19-2025</td>
                        <td>
                            <button class="action-btn edit-btn">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <button class="action-btn delete-btn">
                                <i class="fas fa-trash-alt"></i> Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
