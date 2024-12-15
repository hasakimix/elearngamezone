<link rel="stylesheet" href="<?= base_url("/assets/css/modules/modules.css?version=" . uniqid()) ?>" />
<?php
$_this_chapters = array_filter($chapters, function ($chapter) use ($module_id) {
    return intval($chapter['module_id']) == intval($module_id);
});

?>

<div class="module-content">
    <ul>
        <?php foreach ($_this_chapters as $key => $value): ?>
            <li>
                <a class="topic" onclick="displayModuleChapterContents(<?= $value['chapter_id'] ?>)">
                    <?= $value["chapter_name"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
<script src="<?= base_url("assets/js/modules/sidebar.js?version=" . uniqid()) ?>"></script>
<script src="<?= base_url("assets/js/modules/contents.js?version=" . uniqid()) ?>"></script>