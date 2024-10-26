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
});
        
