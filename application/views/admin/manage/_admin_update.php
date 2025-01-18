<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="<?= base_url("/assets/css/admin/library.css?version=" . uniqid()) ?>" />
<style>
    .form-select{
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 14px;
        transition: border-color 0.3s;
    }
</style>
<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h1>Update  <span class="text-info">Admin User</span></h1>
    </div>
    <form action="<?= base_url("admin/manage/admins/save/update") ?>" method="POST" id="save-user-admin-form">
        <input type="hidden" id="id" name="id" value="<?= $user["id"] ?>">
        <div class="form-group">
            <label>
                First Name: 
            </label>
            <input type="text" id="first_name" name="first_name" placeholder="Enter First Name" value="<?= $user["first_name"] ?>">
        </div>
        <div class="form-group">
            <label>
                Last Name: 
            </label>
            <input type="text" id="last_name" name="last_name" placeholder="Enter Last Name" value="<?= $user["last_name"] ?>">
        </div>
        <div class="form-group">
            <label>
                Email: 
            </label>
            <input type="text" id="email" name="email" placeholder="Enter Email" value="<?= $user["email"] ?>">
        </div>
        <div class="form-group">
            <label>
                Password: 
            </label>
            <input type="password" id="password" name="password" placeholder="Enter Password">
        </div>
        <div id="password_requirements" class="d-none mb-3 frame-box">
            <h6 class="text-dark"> Password must contain </h6>
            <ul class="list-group">
                <!-- Req 1 -->
                <div class="">
                    <input id="requirement-one" class="pw-checkbox" type="checkbox">
                    <label class="custom-control-label" for="customCheck1">At least 1 lowercase</label>
                </div>
                <!-- Req 2 -->
                <div class="">
                    <input id="requirement-two" class="pw-checkbox" type="checkbox">
                    <label class="custom-control-label" for="customCheck1">At least 1 uppercase</label>
                </div>
                <!-- Req 3 -->
                <div class="">
                    <input id="requirement-three" class="pw-checkbox" type="checkbox">
                    <label class="custom-control-label" for="customCheck1">At least 1 numeric</label>
                </div>
                <!-- Req 4 -->
                <div class="">
                    <input id="requirement-four" class="pw-checkbox" type="checkbox">
                    <label class="custom-control-label" for="customCheck1">At least 1 special character</label>
                </div>
                <!-- Req 5 -->
                <div class="">
                    <input id="requirement-five" class="pw-checkbox" type="checkbox">
                    <label class="custom-control-label" for="customCheck1">At least 8 Characters ( length ).</label>
                </div>
            </ul>
        </div>
        <div class="form-group">
            <label>
                Confirm Password: 
            </label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
        </div>
        <div class="d-flex">
            <button id="submit_button" type="submit" class="btn save-btn mx-5">Save User</button>
            <a href="<?= base_url("admin/manage/admins") ?>"  class="btn save-btn mx-5 bg-dark">
                Cancel
            </a>
        </div>
    </form>
</div>



<script>
    const mailformat = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    $(document).ready(function(){
        $("#save-user-admin-form").on("submit", function(e){

            var first_name = $("#first_name").val();
            if(first_name.trim().length <= 0){
                _this_swal_response("First Name", "First Name Is Required", "error");
                e.preventDefault();
                return;
            }

            var last_name = $("#last_name").val();
            if(last_name.trim().length <= 0){
                _this_swal_response("Last Name", "Last Name Is Required", "error");
                e.preventDefault();
                return;
            }

            var email = $("#email").val();
            if(email.trim().length <= 0){
                _this_swal_response("Email", "Email Is Required", "error");
                e.preventDefault();
                return;
            }

            if (!email.match(mailformat)) {
                _this_swal_response("Email", "Invalid Email Format", "error");
                e.preventDefault();
                return;
            }

            var password = $("#password").val();
            if(password.trim().length > 0){
                if (check_password_requirements()== false) {
                    _this_swal_response("Password", "Invalid password format.", "error");
                    e.preventDefault();
                    return;
                }

                var confirm_password = $("#confirm_password").val();
                if(confirm_password !== password){
                    _this_swal_response("Password", "Password does not match", "error");
                    e.preventDefault();
                    return;
                }
            }

            _this_swal_loader("Saving");
        });

        // Password Checker
        $('input[name="password"]').on('keyup input', function (e) {
            $("#password_requirements").removeClass("d-none");
            checkPassword($(this).val());
        });
    });

    const checkPassword = async (password) => {
		var strength = [];
		$(".pw-checkbox").prop("checked", false);
		if (password.match(/[a-z]+/)) {
			strength.push("lowercase");
            $("#requirement-one").prop("checked", strength.includes("lowercase") ? true : false);
		}
		if (password.match(/[A-Z]+/)) {
			strength.push("uppercase");
            $("#requirement-two").prop("checked", strength.includes("uppercase") ? true : false);
		}
		if (password.match(/[0-9]+/)) {
			strength.push("numeric");
            $("#requirement-three").prop("checked", strength.includes("numeric") ? true : false);
		}
		if (password.match(/[$@#&!]+/)) {
			strength.push("special");
            $("#requirement-four").prop("checked", strength.includes("special") ? true : false);
		}
		if (password.length >= 8) {
			strength.push("eight");
            $("#requirement-five").prop("checked", strength.includes("eight") ? true : false);
		}
		if (password == '') {
			strength = [];
			$(".pw-checkbox").prop("checked", false);
		}
		if (strength.length == 5) {
			return true;
		}
		return false;
	};

    const check_password_requirements = () => {
        var allChecked = $(".pw-checkbox").not(':checked').length == 0;
        console.log(allChecked)
        return allChecked;
    };
</script>