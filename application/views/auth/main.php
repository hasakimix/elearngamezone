<link rel="stylesheet" href="<?= base_url("/assets/css/auth/main.css?version=" . uniqid()) ?>" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<?php if (isset($_SESSION["error"])): ?>
    <div class="alert alert-danger text-dark" role="alert">
        <h5 class="mb-0">Something went wrong : <?= $_SESSION["error"] ?></h5>
    </div>
    <?php unset($_SESSION["error"]) ?>
<?php endif; ?>

<?php if (isset($_SESSION["success"])): ?>
    <div class="alert alert-success text-dark" role="alert">
        <h5 class="mb-0">Congratulations!: <?= $_SESSION["success"] ?></h5>
    </div>
    <?php unset($_SESSION["success"]) ?>
<?php endif; ?>

<div class="container" id="container">
    <div class="form-container sign-up">
        <form action="<?= base_url("submit/register") ?>" id="regform" method="POST">
            <h1>Create Account</h1>
            <!-- First Name -->
            <input type="text" placeholder="First Name" name="first_name">
            <small class="text-danger mb-3"><strong class="field-error" data-field="first_name"></strong></small>
            <!-- Last Name -->
            <input type="text" placeholder="Last Name" name="last_name">
            <small class="text-danger mb-3"><strong class="field-error" data-field="last_name"></strong></small>
            <!-- Email -->
            <input type="email" placeholder="Email" name="email">
            <small class="text-danger mb-3"><strong class="field-error" data-field="email"></strong></small>
            <!-- Password -->
            <div class="password-container">
                <input type="password" placeholder="Password" name="password" id="password">
                <i class="fa fa-eye-slash password-icon" id="togglePassword" data-target="password"></i>
            </div>
            <small class="text-danger mb-3"><strong class="field-error" data-field="password"></strong></small>
            <!-- Confirm Password -->
            <div class="password-container">
                <input type="password" placeholder="Confirm Password" name="confirm_password" id="confirm_password">
                <i class="fa fa-eye-slash password-icon" id="toggleConfirmPassword" data-target="confirm_password"></i>
            </div>
            <small class="text-danger mb-3"><strong class="field-error" data-field="confirm_password"></strong></small>

            <button id="signUp1" type="submit">Sign Up</button>
        </form>
    </div>
    <div class="form-container sign-in">
        <form action="<?= base_url("submit/login") ?>" id="personal-info-form" method="POST">
            <h1>Sign In</h1>
            <input type="email" placeholder="Email" name="email">
            <small class="text-danger mb-3"><strong class="field-error" data-field="email"></strong></small>
            <input type="password" placeholder="Password" name="password">
            <small class="text-danger mb-3"><strong class="field-error" data-field="password"></strong></small>
            <a href="<?= base_url("forgotpass") ?>">Forget Your Password?</a>
            <button id="signIn1" type="submit">Sign In</button>
        </form>
    </div>
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-left">
                <h1>Welcome Back!</h1>
                <p>Sign in with your existing account</p>
                <button class="hidden" id="signIn2">Sign In</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Hello, Gamer!</h1>
                <p>Register to use all of eLearnGameZone features!</p>
                <button class="hidden" id="signUp2">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<div id="password_requirements" class="d-none mb-3 frame-box">
    <h6 class="text-dark"> Password must contain </h6>
    <ul class="list-group">
        <!-- Req 1 -->
        <div class="form-check">
            <input id="requirement-one" class="pw-checkbox" type="checkbox" hidden>
            <label class="custom-control-label" for="customCheck1">At least 1 lowercase</label>
        </div>
        <!-- Req 2 -->
        <div class="form-check">
            <input id="requirement-two" class="pw-checkbox" type="checkbox" hidden>
            <label class="custom-control-label" for="customCheck1">At least 1 uppercase</label>
        </div>
        <!-- Req 3 -->
        <div class="form-check">
            <input id="requirement-three" class="pw-checkbox" type="checkbox" hidden>
            <label class="custom-control-label" for="customCheck1">At least 1 numeric</label>
        </div>
        <!-- Req 4 -->
        <div class="form-check">
            <input id="requirement-four" class="pw-checkbox" type="checkbox" hidden>
            <label class="custom-control-label" for="customCheck1">At least 1 special character</label>
        </div>
        <!-- Req 5 -->
        <div class="form-check">
            <input id="requirement-five" class="pw-checkbox" type="checkbox" hidden>
            <label class="custom-control-label" for="customCheck1">At least 8 Characters ( length ).</label>
        </div>
    </ul>
</div>

<script src="<?= base_url("assets/js/auth/main.js?version=" . uniqid()) ?>"></script>
<script src="<?= base_url("assets/js/auth/validation.js?version=" . uniqid()) ?>"></script>