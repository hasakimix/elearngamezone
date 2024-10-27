const body = document.querySelector("body");
const darkLight = document.querySelector("#darkLight");
const submenuItems = document.querySelectorAll(".submenu_item");

/* Profile dropdown */
function toggleDropdown() {
  const dropdown = document.getElementById("myDropdown");
  dropdown.classList.toggle("show");
}


document.addEventListener("DOMContentLoaded", function () {
// Dark Mode Toggle
const body = document.querySelector("body");
const darkLight = document.querySelector("#darkLight");

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

  document.addEventListener("click", function (event) {
    const activePopup = document.querySelector(".popup:not([style*='display: none'])");
    if (activePopup && !activePopup.contains(event.target) && !event.target.classList.contains("box")) {
      hidePopup();
    }
  });
});

// Function to show the popup
function showPopup(popupId) {
  const popup = document.getElementById(popupId);
  
  if (!popup) {
    console.error(`Popup with ID '${popupId}' not found.`);
    return; // Exit if the popup doesn't exist
  }

  document.body.classList.add("active-popup");
  document.body.classList.add("blur");
  popup.style.display = 'flex'; // Ensure it displays as a flex container
}



// Function to hide the popup
function hidePopup() {
  const popups = document.querySelectorAll(".popup");
  document.body.classList.remove("active-popup");
  document.body.classList.remove("blur");
  popups.forEach(popup => {
      popup.style.display = 'none';
  });
}

// Adding event listeners for each menu box
function initializePopups() {
  const boxes = document.querySelectorAll(".box");
  boxes.forEach(box => {
    box.addEventListener("click", () => {
      const popupId = `${box.getAttribute("data-search").toLowerCase()}Modal`;
      showPopup(popupId);
    });
  });

  // Add close event to all close buttons
  const closeBtns = document.querySelectorAll(".popup .close-btn");
  closeBtns.forEach(btn => {
    btn.addEventListener("click", hidePopup);
  });

  // Close popup if clicked outside
  window.addEventListener("click", (event) => {
    if (event.target.classList.contains("popup")) {
      hidePopup();
    }
  });
}

// Call the initialization function on page load
document.addEventListener("DOMContentLoaded", initializePopups);

let lastActivePopup = null; // Store the last active main popup

// Code for Preview Modules
// Function to show the preview modal with specific content
function previewModule(language) {
  const previewContent = {
    Java: {
      title: "Java Preview",
      overview: "Understanding core concepts like variables, data type, control structures, and object-oriented programming(OOP).",
      modules: [
        "Introduction to Java: Setting up your environment and writing your first program.",
        "Data Tpyes & Variables: Learn how to store and manipulate data.",
        "Control Flow: Master conditional statements and loops.",
        "OOP Basics: Classes, objects, methods, and inheritance."
      ]
    },
    HTML: {
      title: "HTML Preview",
      overview: "This is a preview of the HTML module. You'll understand the structure of web pages and elements.",
      modules: [
        "HTML Basics",
        "Forms and Input Elements",
        "Semantic HTML",
        "HTML5 Features",
        "Accessibility in HTML"
      ]
    },
    JavaScript: {
      title: "JavaScript Preview",
      overview: "This is a preview of the JavaScript module. You'll dive into dynamic web content and scripting.",
      modules: [
        "JavaScript Basics",
        "DOM Manipulation",
        "Event Handling",
        "Asynchronous JavaScript",
        "JavaScript ES6 Features"
      ]
    },
    PHP: {
      title: "PHP Preview",
      overview: "This is a preview of the PHP module. You'll explore server-side scripting and database interactions.",
      modules: [
        "PHP Basics",
        "Forms and User Input",
        "Database Interactions with MySQL",
        "Sessions and Cookies",
        "Error Handling"
      ]
    },
    Python: {
      title: "Python Preview",
      overview: "This is a preview of the Python module. You'll cover syntax, data types, and more.",
      modules: [
        "Python Basics",
        "Data Structures",
        "File Handling",
        "Modules and Packages",
        "Web Development with Flask/Django"
      ]
    },
    SQL: {
      title: "SQL Preview",
      overview: "This is a preview of the SQL module. You'll learn about querying databases and data manipulation.",
      modules: [
        "Introduction to SQL",
        "Basic Queries",
        "Joins and Subqueries",
        "Data Manipulation Language (DML)",
        "Data Definition Language (DDL)"
      ]
    }
  };

  const activePopup = document.querySelector(".popup:not(#previewModal):not([style*='display: none'])");
  if (activePopup) {
    lastActivePopup = activePopup; // Store the currently active main popup
    hidePopup(); // Hide the main popup
  }

  const previewModal = document.getElementById('previewModal');
  const previewTitle = previewModal.querySelector('h2'); // Update the <h2> in the modal
  const previewText = previewModal.querySelector('p'); // Update the <p> in the modal
  const content = previewContent[language] || { title: "Preview Unavailable", overview: "", modules: [] };

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
    document.body.classList.add("active-preview");
  }, 10); // Slight delay to allow DOM update
}

// Function to close the preview modal and return to the main popup
function closePreview() {
  const previewModal = document.getElementById('previewModal');

  // Start fade-out transition by adding 'remove-active-popup' class
  document.body.classList.remove("active-preview");
  document.body.classList.add("remove-active-preview");

  setTimeout(() => {
    previewModal.style.display = 'none'; // Hide preview modal

  // Show the previously active main popup
  if (lastActivePopup) {
    lastActivePopup.style.display = 'flex';
    setTimeout(() => {
        document.body.classList.remove("remove-active-popup");
        document.body.classList.add("active-popup");
      }, 10); // Delay to re-enable the smooth fade-in transition for the main popup
    }
  }, 300); // Match the CSS transition duration (300ms)
}

// Function to hide all popups
function hidePopup() {
  const popups = document.querySelectorAll(".popup");
  document.body.classList.remove("active-popup");
  popups.forEach(popup => {
      popup.style.display = 'none'; // Hide all popups
  });
}

// Example function to close the main modal
function closeModal() {
  hidePopup();
}

// Example functions for the buttons within the popup
function addToLibrary() {
  alert("Added to library!");
}