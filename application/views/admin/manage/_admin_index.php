<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="<?= base_url("/assets/css/admin/library.css?version=" . uniqid()) ?>" />

<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h1>Admin Users <span class="text-info">List</span></h1>
        <a href="<?= base_url("admin/manage/admins/create") ?>" class="mx-2">
            <button class="btn add text-white">+ ADD Admin User</button>
        </a>
    </div>

    <table class="border border-2 border-dark rounded">
        <thead>
            <tr>
                <th>Actions</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $key => $value): ?>
                <tr>
                    <td class="actions" style="width: 100px;">
                        <a href="<?= base_url("admin/manage/admins/update/".$value["id"]) ?>" class="mx-2">
                            <i class="fas fa-edit icon edit"></i>
                        </a>
                        <a href="<?= base_url("admin/manage/admins/delete/".$value["id"]) ?>" class="mx-2">
                            <i class="fas fa-trash icon delete"></i>
                        </a>
                    </td>
                    <td>
                        <?= $value["first_name"]." ".$value["last_name"]; ?>
                    </td>
                    <td>
                        <?= $value["email"]; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
