<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="<?= base_url("/assets/css/admin/library.css?version=" . uniqid()) ?>" />

<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h1>Quizzes <span class="text-info">List</span></h1>
        <a href="<?= base_url("admin/quizzes/manage/create/0") ?>" class="mx-2">
            <button class="btn add">+ ADD Quiz</button>
        </a>
    </div>

    <table class="border border-2 border-dark rounded">
        <thead>
            <tr>
                <th>Actions</th>
                <th>Library</th>
                <th>Quiz Name</th>
                <th>Date Created</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($quizzes as $key => $value): ?>
                <tr>
                    <td class="actions">
                        <a href="<?= base_url("admin/quizzes/questions/".$value["quiz_id"]) ?>" class="mx-2">
                            <i class="fas fa-question icon"></i>
                        </a>
                        <a href="<?= base_url("admin/quizzes/manage/update/".$value["quiz_id"]) ?>" class="mx-2">
                            <i class="fas fa-edit icon edit"></i>
                        </a>
                        <a href="<?= base_url("admin/quizzes/manage/delete/".$value["quiz_id"]) ?>" class="mx-2">
                            <i class="fas fa-trash icon delete"></i>
                        </a>
                    </td>
                    <td>
                        <?= $value["library_name"]; ?>
                    </td>
                    <td>
                        <?= $value["quiz_name"]; ?>
                    </td>
                    <td>
                        <?= $value["created_at"]; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
