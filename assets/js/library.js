$(document).ready(function () {
    $("#modal_pop_up_overlay").addClass("d-none");
});

// Function to show the popup
const showPopup = (popupId) => {
    const popup = document.getElementById(popupId);

    if (!popup) {
        console.error(`Popup with ID '${popupId}' not found.`);
        return; // Exit if the popup doesn't exist
    }

    popup.style.display = 'block';
    popup.style.width = '26%';
    $("#modal_pop_up_overlay").removeClass("d-none");
}

// Function to hide the popup
const hidePopup = () => {
    const popups = document.querySelectorAll(".popup");
    $("#modal_pop_up_overlay").addClass("d-none");
    popups.forEach(popup => {
        popup.style.display = 'none';
    });
}
