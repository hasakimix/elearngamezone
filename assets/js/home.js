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

    popup.style.display = 'flex';
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

let lastActivePopup = null;
const previewModule = (description) => {
    let content = null;
    // Decode the String
    var decodedStringAtoB = atob(description);
    try {
        content = JSON.parse(decodedStringAtoB);
    } catch (error) {
        _this_swal_response("Something Went Wrong!", "Parsing Description Error", "error");
    }

    if(content !== null){
      
        const previewModal = document.getElementById('previewModal');
        const previewTitle = previewModal.querySelector('h2'); // Update the <h2> in the modal
        const previewText = previewModal.querySelector('p'); // Update the <p> in the modal
      
        // Update modal content
        previewTitle.textContent = content.title;
        previewText.innerHTML = `
          <strong>Overview:</strong> ${content.overview}<br><br>
          <strong>Modules:</strong>
          <ul>${content.modules.map(module => `<li>${module}</li>`).join('')}</ul>
        `;
      
        previewModal.style.display = 'flex';
        // Trigger the transition by adding active-preview class
        setTimeout(() => {
            $("#modal_pop_up_overlay").removeClass("d-none");
        }, 20); // Slight delay to allow DOM update
    }
};

// Function to close the preview modal and return to the main popup
const closePreview = () => {
    const previewModal = document.getElementById('previewModal');
    previewModal.style.display = 'none'; // Hide preview modal
};