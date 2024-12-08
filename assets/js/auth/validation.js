$(document).ready(function () {
    const mailformat = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    // Remove Error Highlight
    $('#regform').find('input,select').on('click', function () {
        var field_name = $(this).attr('name');
        $(".field-error").each(function () {
            if ($(this).data('field') == field_name) {
                $(this).text('');
            }
        });
    });

    $('#regform').on('submit', function (e) {
        var error = [];
        var password = $('#password').val().trim();
        var confirmPassword = $('#confirm_password').val().trim();

        $(this).find('input,select').each(function () {
            $(this).val($(this).val().trim());
            const value = $(this).val();
            switch ($(this).attr('name')) {
                case "first_name":
                    if (isEmpty(value)) {
                        error.push(true);
                        show_error(this, "First Name is Required.");
                    } else if (value.length < 2) {
                        error.push(true);
                        show_error(this, "First Name must have at least two characters.");
                    }
					if (isValidName(value)== true) {
						error.push(true);
                        show_error(this, "Invalid first name format.");
					}
                    break;
                case "last_name":
                    if (isEmpty(value)) {
                        error.push(true);
                        show_error(this, "Last Name is Required.");
                    } else if (value.length < 2) {
                        error.push(true);
                        show_error(this, "Last Name must have at least two characters.");
                    }
					if (isValidName(value)== true) {
						error.push(true);
                        show_error(this, "Invalid last name format.");
					}
                    break;
                case "email":
                    if (isEmpty(value)) {
                        error.push(true);
                        show_error(this, "Email is Required.");
                    } else if (!value.match(mailformat)) {
                        error.push(true);
                        show_error(this, "Invalid email format.");
                    }
                    break;
                case "password":
                    if (isEmpty(value)) {
                        error.push(true);
                        show_error(this, "Password is Required.");
                    }
					if (check_password_requirements()== false) {
						error.push(true);
                        show_error(this, "Invalid password format.");
					}
                    break;
                case "confirm_password":
                    if (isEmpty(value)) {
                        error.push(true);
                        show_error(this, "Confirm Password is Required.");
                    } else if (password !== confirmPassword) {
                        error.push(true);
                        show_error(this, "Passwords do not match.");
                    }
                    break;
            }
        });

        if (error.length !== 0) {
            return e.preventDefault();
        }
    });

	// Password Checker
	$('input[name="password"]').on('keyup input', function (e) {
        $("#password_requirements").removeClass("d-none");
        if (checkPassword($(this).val())) {
            $('#submit_button').prop('disabled', false);
        } else {
            $('#submit_button').prop('disabled', true);
        }
    });

	const checkPassword = async (password) => {
		var strength = [];
		$(".pw-checkbox").prop("checked", false);
		if (password.match(/[a-z]+/)) {
			strength.push("lowercase");
			document.getElementById("requirement-one").checked = strength.includes("lowercase") ? true : false;
		}
		if (password.match(/[A-Z]+/)) {
			strength.push("uppercase");
			document.getElementById("requirement-two").checked = strength.includes("uppercase") ? true : false;
		}
		if (password.match(/[0-9]+/)) {
			strength.push("numeric");
			document.getElementById("requirement-three").checked = strength.includes("numeric") ? true : false;
		}
		if (password.match(/[$@#&!]+/)) {
			strength.push("special");
			document.getElementById("requirement-four").checked = strength.includes("special") ? true : false;
		}
		if (password.length >= 8) {
			strength.push("eight");
			document.getElementById("requirement-five").checked = strength.includes("eight") ? true : false;
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

    $(document).ready(function () {
    // Toggle Password Visibility
    $('.password-icon').on('click', function () {
        const targetId = $(this).data('target');
        const targetInput = $('#' + targetId);
        
        // Toggle input pass and text
        const type = targetInput.attr('type') === 'password' ? 'text' : 'password';
        targetInput.attr('type', type);
        
        // Toggle eye
        $(this).toggleClass('fa-eye fa-eye-slash');
    });
});
	
    // Function to check if a string is empty
    const isEmpty = (str) => {
        const string = str.trim();
        return (!string || string.length === 0);
    };

    // Show Error
    const show_error = (_this, msg) => {
        var field_name = $(_this).attr('name');
        $(".field-error").each(function () {
            if ($(this).data('field') == field_name) {
                $(this).text(msg);
            }
        });
    };
     
});

const check_password_requirements = () => {
	var allChecked = $(".pw-checkbox").not(':checked').length == 0;
	console.log(allChecked)
	return allChecked;
  };

  const isValidName = (str) => {
	var regex = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/g;
	return regex.test(str);
}


