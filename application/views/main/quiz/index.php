<link rel="stylesheet" href="<?= base_url("/assets/css/quiz/main.css?version=" . uniqid()) ?>" />

<div class="quiz-container">
    <h1><?= $quiz['quiz_name'] ?></h1>
    <h6 class="items-count">1/<?= count($solutions) ?></h6>

    <div id="items-contents">
        <?php foreach ($solutions as $key => $value): ?>
            <div class="solution-container questionIndex<?= $key ?> <?= ($key == 0) ? "" : "d-none" ?>" data-index="<?= $key ?>">
                <div class="question"><?= ($key+1) ?>. <?= strip_tags($value["query"]) ?></div>
                <div class="options">
                    <?php foreach ($value["options"] as $k => $v): ?>
                        <label class="option">
                            <input type="radio" value="<?= $v['options_id'] ?>" data-correct="<?= $v['is_correct'] ?>"> <?= strip_tags($v["answer"]) ?>
                        </label>
                    <?php endforeach; ?>
                </div>
                <button type="submit" class="submit-btn">Continue</button>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script>
    const QUIZ_TOTAL_ITEMS = `<?= count($solutions) ?>`;
    const USER_ID = `<?= $user_id ?>`;
    const QUIZ_ID = `<?= $quiz['quiz_id'] ?>`;
    const PROGRESS_API_URL  = '<?= base_url("api/progress/quiz"); ?>';
    const HOME_URL = `<?= base_url("home") ?>`;
</script>
<script src="<?= base_url("assets/js/quiz/main.js?version=" . uniqid()) ?>"></script>