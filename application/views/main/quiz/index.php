<link rel="stylesheet" href="<?= base_url("/assets/css/quiz/main.css?version=" . uniqid()) ?>" />

<div class="quiz-container">
    <h1><?= $quiz['quiz_name'] ?></h1>
    <h6 class="items-count">1/<?= count($solutions) ?></h6>

    <div id="items-contents">
        <?php foreach ($solutions as $key => $value): ?>
            <div class="solution-container <?= ($key == 0) ? "" : "d-none" ?>">
                <div class="question"><?= ($key+1) ?>. <?= strip_tags($value["query"]) ?></div>
                <div class="options">
                    <?php foreach ($value["options"] as $k => $v): ?>
                        <label class="option">
                            <input type="radio" value="<?= $v['options_id'] ?>" data-correct="<?= $v['is_correct'] ?>"> <?= strip_tags($v["answer"]) ?>
                        </label>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <button type="submit" class="submit-btn">Continue</button>
</div>

<script src="<?= base_url("assets/js/quiz/main.js?version=" . uniqid()) ?>"></script>