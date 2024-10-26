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
                    break;
                case "last_name":
                    if (isEmpty(value)) {
                        error.push(true);
                        show_error(this, "Last Name is Required.");
                    } else if (value.length < 2) {
                        error.push(true);
                        show_error(this, "Last Name must have at least two characters.");
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




