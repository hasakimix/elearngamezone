<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="<?= base_url("/assets/css/admin/library.css?version=" . uniqid()) ?>" />
<link rel="stylesheet" href="<?= base_url("/assets/css/croppie.css?version=" . uniqid()) ?>" />

<style>
    .edit-profile-btn{
        color: #007bff !important;
    }
    .edit-profile-btn:hover{
        color: #fff !important;
    }
    #change_profile{
        cursor: pointer;
    }
</style>

<?php 
    $avatar = base_url("/assets/img/avatars/default_avatar.png"); 
    if(!empty($user["profile"])){
        $avatar = $user["profile"];
    }
?>

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="card profile-card mb-4">
                <div class="card-body profile-card-body text-center">
                    <div class="profile-picture-container position-relative">
                        <img src="<?= $avatar ?>" alt="Profile Picture" class="rounded-circle p-1 bg-primary" width="110">
                        <div id="change_profile" onclick="showModal()" class="edit-icon">
                            <i class="fas fa-edit"></i>
                        </div>
                    </div>
                    <h4 class="mt-3"><?= $user["first_name"]." ".$user["last_name"] ?></h4>
                    <p class="text-secondary mb-1"><?= $user["email"] ?></p>
                    <?php if(to_boolean($user["is_verified"])): ?>
                        <p class="text-success font-size-sm">
                            Active
                        </p>
                    <?php else: ?>
                        <p class="text-danger font-size-sm">
                            Inactive
                        </p>
                    <?php endif; ?>
                    <a href="<?= base_url("admin/manage/users/update/".$user["id"]) ?>" class="btn btn-outline-primary edit-profile-btn">Edit</a>
                    <hr class="my-4">
                    <h5>About Me</h5>
                    <?php if(!empty($user["information"])): ?>
                        <p class="text-muted"><?= $user["information"] ?></p>
                    <?php else: ?>
                        <i class="text-muted">
                            Hi! I'm <?= $user["first_name"]." ".$user["last_name"] ?>
                        </i>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <!-- Progress Tabs -->
            <div class="progress-section">
                <ul class="nav nav-tabs" id="progressTabs" role="tablist">
                    <?php foreach ($libraries as $key => $value): ?>
                        <li class="nav-item">
                            <a class="nav-link <?= ($key==0) ? "active" : "" ?>" id="<?= strtolower($value['library_key']) ?>-tab" data-toggle="tab" href="#<?= strtolower($value['library_key']) ?>" role="tab">
                                <?= $value['library_key'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content mt-3" id="progressTabsContent">
                    <?php foreach ($libraries as $key => $value): ?>
                        <?php
                            $module = $progress[$value['library_id']]['modules']; 
                            $quizzes = $progress[$value['library_id']]['quizzes'];
                            $videos = $progress[$value['library_id']]['videos'];
                            $games = $progress[$value['library_id']]['games'];
                        ?>
                        <div class="tab-pane fade show <?= ($key==0) ? "active" : "" ?>" id="<?= strtolower($value['library_key']) ?>" role="tabpanel">
                            <div class="card bg-light p-3">
                                <h5><?= $value['library_key'] ?> Progress</h5>
                                <p>Modules <span class="float-right"><?= $module ?>%</span></p>
                                <div class="progress mb-3">
                                    <div class="progress-bar" role="progressbar" style="width: <?= $module ?>%"><?= $module ?>%</div>
                                </div>
                                <p>Quizzes <span class="float-right"><?= $quizzes ?>%</span></p>
                                <div class="progress mb-3">
                                    <div class="progress-bar" role="progressbar" style="width: <?= $quizzes ?>%"><?= $quizzes ?>%</div>
                                </div>
                                <p>Videos <span class="float-right"><?= $videos ?>%</span></p>
                                <div class="progress mb-3">
                                    <div class="progress-bar" role="progressbar" style="width: <?= $videos ?>%"><?= $videos ?>%</div>
                                </div>
                                <p>Games <span class="float-right"><?= $games ?>%</span></p>
                                <div class="progress mb-3">
                                    <div class="progress-bar" role="progressbar" style="width: <?= $games ?>%"><?= $games ?>%</div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="hideModal()">&times;</span>
        <h2 class="subejct-modal-title">Change Profile Photo</h2>
        <div class="row">
            <div class="col-md-12 p-2 text-center">
                <div id="upload-photo" class="d-none"></div>
            </div>
            <div class="col-md-12 p-2 text-center">
                <button class="btn btn-primary btn-upload-photo">Upload Photo</button>
                <input type="file" id="profile_image" name="profile_image" accept="image/*" class="d-none" />
                <button class="btn btn-dark btn-upload-cancel d-none">Cancel</button>
                <input type="submit" class="btn btn-primary btn-upload-save d-none" value="Save Changes" /> 
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url("assets/js/croppie.js?version=".uniqid()) ?>"></script>
<script>
    function showModal() {
        document.getElementById('modal').style.display = 'block';
        $('.btn-upload-cancel').trigger("click");
    }

    function hideModal() {
        document.getElementById('modal').style.display = 'none';
    }

    $(document).ready(function(){
        var resize = $('#upload-photo').croppie({
            enableExif: true,
            enableOrientation: true,    
            viewport: {
                width: 300,
                height: 300,
                type: 'circle'
            },
            boundary: {
                width: 300,
                height: 300
            },
        });
        
        $('.btn-upload-photo').on('click', function (e) {
            e.preventDefault();
            $('#profile_image').click();
        });

        $('#profile_image').on('change', function () {
            $('.btn-upload-photo').addClass('d-none');
            $('#upload-photo').removeClass('d-none');
            $('.btn-upload-cancel').removeClass('d-none');
            $('.btn-upload-save').removeClass('d-none');

            var reader = new FileReader();
            reader.onload = function (e) {
                resize.croppie('bind',{
                    url: e.target.result,
                }).then(function(){
                    console.log('jQuery bind complete');
                });
            }
            reader.readAsDataURL(this.files[0]);
        });

        $('.btn-upload-cancel').on('click', function(){
            $('#profile_image').val(null);
            $('.btn-upload-photo').removeClass('d-none');
            $('#upload-photo').addClass('d-none');
            $('.btn-upload-cancel').addClass('d-none');
            $('.btn-upload-save').addClass('d-none');
        });

        $('.btn-upload-save').on('click', function (e) {
            e.preventDefault();
            resize.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function (img) {
                $.ajax({
                    url: `<?= base_url('api/profile/upload_image/'.$user['id']); ?>`,
                    cache: false,
                    processData: false,
                    data: JSON.stringify({
                        image: img,
                        old_image: "<?= (!empty($user["profile"]) ) ? $user['profile'] : false ; ?>"
                    }),
                    type: 'post',
                    dataType: 'json',
                    contentType: 'application/json',
                    beforeSend: function (xhr) {
                        _this_swal_loader("Uploading");
                    },
                    success: function (data) {
                        _this_swal_loader("Reloading Page...");
                        window.location.reload();
                    }
                });
            });
        });
    });
</script>
