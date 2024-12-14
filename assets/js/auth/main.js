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
    const passwordInputs = document.querySelectorAll('input[class="Pass-require"]');
    const passwordRequirements = document.getElementById('password_requirements');

    const requirementCheckboxes = {
        lowercase: document.getElementById('requirement-one'),
        uppercase: document.getElementById('requirement-two'),
        numeric: document.getElementById('requirement-three'),
        special: document.getElementById('requirement-four'),
        length: document.getElementById('requirement-five'),
    };

    function validatePassword(password) {
        const validations = {
            lowercase: /[a-z]/.test(password),
            uppercase: /[A-Z]/.test(password),
            numeric: /[0-9]/.test(password),
            special: /[!@#$%^&*(),.?":{}|<>]/.test(password),
            length: password.length >= 8,
        };

        // Update the checkboxes and styles
        for (const key in validations) {
            const checkbox = requirementCheckboxes[key];
            if (validations[key]) {
                checkbox.checked = true;
                checkbox.parentElement.style.color = 'green'; // Change label text color
            } else {
                checkbox.checked = false;
                checkbox.parentElement.style.color = 'red'; // Reset label text color
            }
        }
    }

    passwordInputs.forEach(passwordInput => {
        passwordInput.addEventListener('focus', (event) => {
            const rect = event.target.getBoundingClientRect();

            // Position the requirements below the focused password input
            passwordRequirements.style.top = `${rect.bottom + window.scrollY + 5}px`; // 5px gap
            passwordRequirements.style.left = `${rect.left + window.scrollX}px`;
            passwordRequirements.style.width = `${rect.width}px`;

            // Show the requirements box
            passwordRequirements.classList.remove('d-none');
            passwordRequirements.style.display = 'block';
        });

        passwordInput.addEventListener('blur', () => {
            // Hide the requirements box after blur
            passwordRequirements.style.display = 'none';
        });

        passwordInput.addEventListener('input', (event) => {
            validatePassword(event.target.value);
        });
    });
});