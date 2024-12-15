<div class="module-contents d-none" data-chapter="<?= $chapter_id ?>">
    <?= base64_decode($contents); ?>
</div>
<script src="<?= base_url("assets/js/modules/sidebar.js?version=" . uniqid()) ?>"></script>
<script src="<?= base_url("assets/js/modules/contents.js?version=" . uniqid()) ?>"></script>