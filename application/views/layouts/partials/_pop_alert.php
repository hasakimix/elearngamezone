<?php if(isset($_SESSION["error"])): ?>
    <div class="modal fade" id="_serverFlashData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content border border-danger rounded border-3">
                <div class="modal-body">
                    <h3 class="text-center text-danger">Something went wrong!</h3>
                    <strong><?= $_SESSION["error"] ?></strong>
                </div>
                <button type="button" class="btn btn-secondary w-50 align-self-center" onclick="closeServerFlash()">
                    Close
                </button>
            </div>
        </div>
    </div>
    <?php unset($_SESSION["error"]) ?>
<?php endif; ?>

<?php if(isset($_SESSION["success"])): ?>
    <div class="modal fade" id="_serverFlashData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content border border-success rounded border-3">
                <div class="modal-body">
                    <h3 class="text-center text-success">Success!</h3>
                    <strong><?= $_SESSION["success"] ?></strong>
                </div>
                <button type="button" class="btn btn-secondary w-50 align-self-center" onclick="closeServerFlash()">
                    Close
                </button>
            </div>
        </div>
    </div>
    <?php unset($_SESSION["success"]) ?>
<?php endif; ?>

<script>
$(document).ready(function () {
    $("#_serverFlashData").modal("toggle");
});
const closeServerFlash = () => {
    $("#_serverFlashData").modal("toggle");
};
</script>