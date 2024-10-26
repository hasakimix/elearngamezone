window.onload = function() {
    const openPopupBtn = document.querySelector("#open-popup");
    const closePopupBtn = document.querySelector(".popup .close-btn");

    // Check if openPopupBtn exists
    if (openPopupBtn) {
        openPopupBtn.addEventListener("click", function(e) {
            e.preventDefault(); // Prevent default behavior
            document.body.classList.add("active-popup");
        });
    }

    // Close Popup
    if (closePopupBtn) {
        closePopupBtn.addEventListener("click", function() {
            document.body.classList.remove("active-popup");
        });
    }

    // Close the popup if clicked outside of it
    window.addEventListener("click", function(e) {
        if (e.target.classList.contains("popup")) {
            document.body.classList.remove("active-popup");
        }
    });
};
