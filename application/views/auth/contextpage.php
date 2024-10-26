<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background-color: #e7ebf8;
}

.container {
    display: flex;
    flex-direction: column;
    height: 100vh;
}

.header {
    background-color: #7091E6;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
}

.logo img {
    height: 40px;
    vertical-align: middle;
}

.logo span {
    color: white;
    font-size: 20px;
    margin-left: 10px;
}

.search-bar input {
    padding: 8px;
    border-radius: 5px;
    border: none;
    width: 300px;
}

.profile-icon img {
    height: 40px;
    border-radius: 50%;
}

.main-content {
    display: flex;
    flex: 1;
}

.sidebar {
    width: 250px;
    background-color: #f5f5f5;
    padding: 20px;
    border-right: 2px solid #ccc;
    max-height: 100vh; /* Full viewport height */
    overflow-y: auto; /* Enable scrolling */
}

/* Hide scrollbar for WebKit browsers (Chrome, Safari) */
.sidebar::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for Firefox */
.sidebar {
    scrollbar-width: none; /* Firefox */
}

/* Collapsible button styling */
.collapsible {
    background-color: #7091E6;
    color: white;
    cursor: pointer;
    padding: 10px;
    border: none;
    text-align: left;
    outline: none;
    font-size: 16px;
    width: 100%;
    border-radius: 5px;
    margin-bottom: 10px;
    position: relative;
    transition: background-color 0.3s;
}

.collapsible::after {
    content: '\25BC'; /* Unicode for down arrow */
    font-size: 14px;
    position: absolute;
    right: 10px;
    transition: transform 0.3s;
}

.collapsible.active::after {
    transform: rotate(180deg); /* Rotates arrow to point up */
}

.collapsible:hover {
    background-color: #5f7cc6;
}

/* Module content styling */
.module-content {
    display: none; /* Hidden by default */
    overflow: hidden;
    padding-left: 10px;
    margin-top: 10px;
}

.module-content ul {
    list-style: none;
}

.module-content ul li a {
    display: block;
    padding: 8px;
    background-color: #7091E6;
    color: white;
    border-radius: 5px;
    margin-bottom: 5px;
    text-decoration: none;
    transition: background-color 0.3s;
}

.module-content ul li a:hover {
    background-color: #5f7cc6;
}

.content {
    flex: 1;
    padding: 40px;
    background-color: white;
    border-radius: 10px;
    margin: 20px;
    max-height: 500px; /* Set a maximum height */
    overflow-y: auto; /* Enable vertical scroll */
}

.content h1 {
    margin-bottom: 20px;
    font-size: 24px;
}

.content p {
    margin-bottom: 15px;
}

.content ul {
    list-style-type: disc;
    padding-left: 20px;
}

.content ul li {
    margin-bottom: 10px;
}

</style>
      <!-- Main Content Section -->
        <div class="main-content">
            <!-- Left Sidebar -->
            <aside class="sidebar">
                <button class="back-btn">&larr;</button>
                <div class="module">
                    <button class="collapsible">Module 1: Introduction of Java</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#">Overview of Java</a></li>
                            <li><a href="#">Setting Up Environment</a></li>
                            <li><a href="#">Basic Java Syntax</a></li>
                            <li><a href="#">Data Type and Variable</a></li>
                            <li><a href="#">Operators in Java</a></li>
                        </ul>
                    </div>
                </div>
                <div class="module">
                    <button class="collapsible">Module 1: Introduction of Java</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#">Overview of Java</a></li>
                            <li><a href="#">Setting Up Environment</a></li>
                            <li><a href="#">Basic Java Syntax</a></li>
                            <li><a href="#">Data Type and Variable</a></li>
                            <li><a href="#">Operators in Java</a></li>
                        </ul>
                    </div>
                </div>
                <div class="module">
                    <button class="collapsible">Module 2: Introduction of Java</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#">Java Output</a></li>
                            <li><a href="#">Print Text</a></li>
                        </ul>
                    </div>
                </div>
            </aside>
            

            <!-- Content Section -->
            <section class="content">
                <h1>What is Java?</h1>
                <p>Java is a popular programming language, created in 1995.</p>
                <p>It is owned by Oracle, and more than 3 billion devices run Java.</p>
                <p>It is used for:</p>
                <ul>
                    <li>Mobile applications (especially Android apps)</li>
                    <li>Desktop applications</li>
                    <li>Web applications</li>
                    <li>Web servers and application servers</li>
                    <li>Games</li>
                    <li>Database connections</li>
                    <li>And much more!</li>
                    <li>Mobile applications (especially Android apps)</li>
                    <li>Desktop applications</li>
                    <li>Web applications</li>
                    <li>Web servers and application servers</li>
                    <li>Games</li>
                    <li>Database connections</li>
                    <li>And much more!</li>
                    <li>Mobile applications (especially Android apps)</li>
                    <li>Desktop applications</li>
                    <li>Web applications</li>
                    <li>Web servers and application servers</li>
                    <li>Games</li>
                    <li>Database connections</li>
                    <li>And much more!</li>
                    <li>Mobile applications (especially Android apps)</li>
                    <li>Desktop applications</li>
                    <li>Web applications</li>
                    <li>Web servers and application servers</li>
                    <li>Games</li>
                    <li>Database connections</li>
                    <li>And much more!</li>
                    <li>Mobile applications (especially Android apps)</li>
                    <li>Desktop applications</li>
                    <li>Web applications</li>
                    <li>Web servers and application servers</li>
                    <li>Games</li>
                    <li>Database connections</li>
                    <li>And much more!</li>
        
                </ul>
            </section>
        </div>
    </div>
</body>
<script>
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

    // Collapsible functionality for each module
    const collapsibleButtons = document.querySelectorAll(".collapsible");

    collapsibleButtons.forEach(button => {
        button.addEventListener("click", function() {
            this.classList.toggle("active");
            const content = this.nextElementSibling;
            content.style.display = content.style.display === "block" ? "none" : "block";
        });
    });
};

</script>
</html>
