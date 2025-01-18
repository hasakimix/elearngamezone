<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="<?= base_url("/assets/css/admin/library.css?version=" . uniqid()) ?>" />

<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h5><?= $module["module_topic"] ?> - <span class="text-info">Chapters List</span></h5>
        <div class="d-flex justify-content-end mb-3">
            <a href="<?= base_url("admin/modules/chapter/create/".$module["module_id"]) ?>" class="mx-2">
                <button class="btn add">+ ADD Chapter</button>
            </a>
            <a href="<?= base_url("admin/modules") ?>"  class="btn bg-dark text-white">
                Back
            </a>
        </div>
    </div>

    <table class="border border-2 border-dark rounded">
        <thead>
            <tr>
                <th>Actions</th>
                <th>Chapter</th>
                <th>Date Created</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach ($chapters as $key => $value): ?>
                    <tr>
                        <td class="actions">
                            <a href="<?= base_url("admin/modules/chapter/update/".$value["chapter_id"]) ?>" class="mx-2">
                                <i class="fas fa-edit icon edit"></i>
                            </a>
                            <a href="<?= base_url("admin/modules/chapter/delete/".$value["chapter_id"]) ?>" class="mx-2">
                                <i class="fas fa-trash icon delete"></i>
                            </a>
                        </td>
                        <td>
                            <?= $value["chapter_name"]; ?>
                        </td>
                        <td>
                            <?= $value["created_at"]; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
    
</div>
