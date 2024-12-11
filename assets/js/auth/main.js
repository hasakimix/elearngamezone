$(document).ready(function () {
    const container = document.getElementById('container');
    const registerBtn = document.getElementById('signUp2');
    const loginBtn = document.getElementById('signIn2');

    registerBtn.addEventListener('click', () => {
        container.classList.add("active");
    });

    loginBtn.addEventListener('click', () => {
        container.classList.remove("active");
    });

    // Password requirements logic
    const passwordInputs = document.querySelectorAll('input[type="password"]');
    const passwordRequirements = document.getElementById('password_requirements');

    passwordInputs.forEach(passwordInput => {
        passwordInput.addEventListener('focus', () => {
            passwordRequirements.classList.remove('d-none');
        });

        passwordInput.addEventListener('blur', () => {
            passwordRequirements.classList.add('d-none');
        });
    });
});