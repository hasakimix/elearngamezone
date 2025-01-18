<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="<?= base_url("/assets/css/admin/library.css?version=" . uniqid()) ?>" />

<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h1>Module Topics <span class="text-info">List</span></h1>
        <a href="<?= base_url("admin/modules/create") ?>" class="mx-2">
            <button class="btn add">+ ADD Topic</button>
        </a>
    </div>

    <table class="border border-2 border-dark rounded">
        <thead>
            <tr>
                <th>Actions</th>
                <th>Subject</th>
                <th>Module</th>
                <th>Date Created</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($modules as $key => $value): ?>
                <tr>
                    <td class="actions">
                        <a href="<?= base_url("admin/modules/view/".$value["module_id"]) ?>" class="mx-2">
                            <i class="fas fa-eye icon"></i>
                        </a>
                        <a href="<?= base_url("admin/modules/update/".$value["module_id"]) ?>" class="mx-2">
                            <i class="fas fa-edit icon edit"></i>
                        </a>
                        <a href="<?= base_url("admin/modules/delete/".$value["module_id"]) ?>" class="mx-2">
                            <i class="fas fa-trash icon delete"></i>
                        </a>
                    </td>
                    <td>
                        <?= $value["library_name"]; ?>
                    </td>
                    <td>
                        <?= $value["module_topic"]; ?>
                    </td>
                    <td>
                        <?= $value["creted_at"]; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
