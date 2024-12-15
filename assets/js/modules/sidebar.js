window.onload = function() {

    // Collapsible functionality and default content display based on module
    const collapsibleButtons = document.querySelectorAll(".collapsible");
    const content1 = document.getElementById("content1"); // Reference to Module 1 default content

    // Initially hide all content sections and display content1 for Module 1
    const contentSections = document.querySelectorAll(".content");
    contentSections.forEach(section => section.style.display = "none");
    content1.style.display = "block"; // Show Module 1 content by default

    collapsibleButtons.forEach(button => {
        button.addEventListener("click", function() {
            // Toggle the collapsible button
            this.classList.toggle("active");
            const content = this.nextElementSibling;
            content.style.display = content.style.display === "block" ? "none" : "block";

            // Hide all content sections initially
            contentSections.forEach(section => section.style.display = "none");

            const module = this.getAttribute("data-module");
            if (module === "1") {
                content1.style.display = "block"; // Show Module 1 content
            } else if (module === "2") {
                document.getElementById("content-JavaScript-Variables").style.display = "block"; // Show Module 2 content
            } else if (module === "3") {
                // Show Module 3 default content (Superglobal Variables)
                const superglobalContent = document.getElementById("content-JavaScript-Data-Types");
                superglobalContent.style.display = "block";
            }
        });
    });

    // Content toggle based on link clicks in Module 3
    const links = document.querySelectorAll(".module-content ul li a");

    links.forEach(link => {
        link.addEventListener("click", function(e) {
            e.preventDefault();

            // Hide all content sections initially
            contentSections.forEach(section => section.style.display = "none");

            // Show the content based on the link's data-target attribute
            const targetContentId = this.getAttribute("data-target");
            const targetContent = document.getElementById(targetContentId);
            if (targetContent) {
                targetContent.style.display = "block"; // Display the specific content
            }
        });
    });
    // Highlight active topic
    const topics = document.querySelectorAll('.topic');

    topics.forEach(topic => {
        topic.addEventListener('click', () => {
            // Remove active class from all topics
            topics.forEach(t => t.classList.remove('active'));

            // Add active class to the clicked topic
            topic.classList.add('active');
        });
    });
};