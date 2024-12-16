<link rel="stylesheet" href="<?= base_url("/assets/css/modules/modules.css?version=" . uniqid()) ?>" />
<link rel="stylesheet" href="<?= base_url("/assets/css/modules/sidebar.css?version=" . uniqid()) ?>" />

<!-- Main Content Section -->
<div class="main-content">
    <!-- Left Sidebar -->
    <aside class="sidebar">
        <a href="<?= base_url("library") ?>">
            <button class="back-btn">
                <div class="left-arrow">&larr;</div>
            </button></a>
        <?php foreach ($modules as $key => $value): ?>
            <div class="module">
                <button class="collapsible"><?= $value["module_topic"] ?></button>
                <?php $chapter_data["module_id"] = $value["module_id"]; ?>
                <?php $chapter_data["chapters"] = $chapters; ?>
                <?php $this->load->view("main/modules/_module_chapters", $chapter_data) ?>
            </div>
        <?php endforeach; ?>
        <div class="module">
            <button class="collapsible-quiz">Take A Quiz!</button>
        </div>
    </aside>

    <?php foreach ($chapters as $k => $chapter): ?>
        <?php $this->load->view("main/modules/_module_chapter_contents", $chapter) ?>
    <?php endforeach; ?>
</div>
<!-- Main Content Section END -->

<script>
    const QUIZ_URL = '<?= $quiz ?>';
</script>
<script src="<?= base_url("assets/js/modules/sidebar.js?version=" . uniqid()) ?>"></script>
<script src="<?= base_url("assets/js/modules/contents.js?version=" . uniqid()) ?>"></script>