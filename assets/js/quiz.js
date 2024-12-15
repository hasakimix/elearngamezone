document.addEventListener("DOMContentLoaded", () => {
    const options = document.querySelectorAll(".option");

    options.forEach(option => {
        option.addEventListener("click", () => {
            const parentGroup = option.parentNode;
            parentGroup.querySelectorAll(".option").forEach(opt => {
                opt.classList.remove("selected");
            });
            option.classList.add("selected");
            option.querySelector("input[type='radio']").checked = true;
        });
    });
});
