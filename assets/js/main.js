const body = document.querySelector("body");
const darkLight = document.querySelector("#darkLight");
const submenuItems = document.querySelectorAll(".submenu_item");

$(document).ready(function () {
    
    // Apply saved theme on page load
    window.onload = function() {
        if (localStorage.getItem("theme") === "dark") {
            body.classList.add("dark");
            darkLight.classList.add("bx-moon");
            darkLight.classList.remove("bx-sun");
        } else {
            darkLight.classList.add("bx-sun");
            darkLight.classList.remove("bx-moon");
        }
    }

    // Toggle dark mode and save preference
    darkLight?.addEventListener("click", () => {
        body.classList.toggle("dark");
        const isDarkMode = body.classList.contains("dark");

        // Toggle icon classes based on mode
        darkLight.classList.toggle("bx-sun", !isDarkMode);
        darkLight.classList.toggle("bx-moon", isDarkMode);

        // Save the theme in localStorage
        localStorage.setItem("theme", isDarkMode ? "dark" : "light");
    });

    // Search Engine Logic
    const searchBar = document.querySelector('.search-bar');
    const boxes = document.querySelectorAll('.box');

    searchBar?.addEventListener('input', function () {
        const searchTerm = searchBar.value.toLowerCase();
        boxes.forEach(box => {
            const language = box.getAttribute('data-search').toLowerCase();
            box.style.display = language.includes(searchTerm) ? 'block' : 'none';
        });
    });

});

const toggleDropdown = () => {
    document.getElementById("DropDown").classList.toggle("show");
}

// Notification Dropdown
const toggleNotification = () => {
    const dropdown = document.getElementById("notificationDropdown");
    dropdown.style.display = dropdown.style.display === "none" || dropdown.style.display === "" ? "block" : "none";
}

const _this_swal_loader = (doing) => {
    swal.fire({
        html: `<h2>${doing}...</h2>
        <h1><img src="assets/img/waiting-7579_256.gif" class="img-fluid"></h1>`,
        showConfirmButton: false
    });
};

const _this_swal_response = (title, message, response) => {
  current_swal = new swal({
      title: title,
      text: message,
      icon: response,
      buttonsStyling: false,
      confirmButtonClass: "bg-gradient-success swal2-confirm btn bg-gradient-success",
      confirmButtonText: 'OK',
      allowOutsideClick: false,
  }).then((result) => {
      if (result.isConfirmed) {
          swal.close();
      }
  });
};