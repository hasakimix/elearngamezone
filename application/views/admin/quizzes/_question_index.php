<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="<?= base_url("/assets/css/admin/library.css?version=" . uniqid()) ?>" />

<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h1>Quiz - <span class="text-info"><?= $quiz["quiz_name"] ?></span></h1>
        <div class="d-flex justify-content-end mb-3">
            <a href="<?= base_url("admin/quizzes/question_manage/create/".$quiz["quiz_id"]) ?>" class="mx-2">
                <button class="btn add">+ ADD Question</button>
            </a>
            <a href="<?= base_url("admin/quizzes") ?>"  class="btn bg-dark text-white">
                Back
            </a>
        </div>
    </div>

    <table class="border border-2 border-dark rounded">
        <thead>
            <tr>
                <th>Actions</th>
                <th>Question</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($questions as $key => $value): ?>
                <tr>
                    <td class="actions" style="width: 110px;">
                        <a href="<?= base_url("admin/quizzes/question_manage/update/".$value["solution_id"]) ?>" class="mx-2">
                            <i class="fas fa-edit icon edit"></i>
                        </a>
                        <a href="<?= base_url("admin/quizzes/question_manage/delete/".$value["solution_id"]) ?>" class="mx-2">
                            <i class="fas fa-trash icon delete"></i>
                        </a>
                    </td>
                    <td>
                        <?= $value["query"]; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    
</div>
