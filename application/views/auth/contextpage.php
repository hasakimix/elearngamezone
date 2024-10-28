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
                        <li><a href="#">JavaScript in &lt;head&gt; or &lt;body&gt;</a></li>
                            <li><a href="#">JavaScript in &lt;head&gt;</a></li>
                            <li><a href="#">JavaScript in &lt;body&gt;</a></li>
                            <li><a href="#">External JavaScript Advantages</a></li>
                            <li><a href="#">External References</a></li>
                        </ul>
                    </div>
                </div>
                <div class="module">
                    <button class="collapsible">Module 1: JavaScript Introduction</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#">JavaScript in &lt;head&gt; or &lt;body&gt;</a></li>
                            <li><a href="#">JavaScript in &lt;head&gt;</a></li>
                            <li><a href="#">JavaScript in &lt;body&gt;</a></li>
                            <li><a href="#">External JavaScript Advantages</a></li>
                            <li><a href="#">External References</a></li>
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
            <section id="content1" class="content">
            <h1>JavaScript Can Change HTML Content</h1>
    <p>One of many JavaScript HTML methods is <code>getElementById()</code>.</p>
    <p>The example below "finds" an HTML element (with id="demo"), and changes the element content (innerHTML) to "Hello JavaScript":</p>

    <pre>
document.getElementById("demo").innerHTML = "Hello JavaScript";
    </pre>

    <h2>Example Output</h2>
    <div id="demo">This text will change when you run the JavaScript code.</div>

    <script>
        // Change the content of the demo element
        document.getElementById("demo").innerHTML = "Hello JavaScript";
    </script>

    <h1>JavaScript Can Change HTML Styles (CSS)</h1>
    <p>Changing the style of an HTML element is a variant of changing an HTML attribute:</p>
    <pre>
document.getElementById("demo").style.fontSize = "35px";
    </pre>

    <h2>JavaScript Can Hide HTML Elements</h2>
    <p>Hiding HTML elements can be done by changing the display style:</p>
    <pre>
document.getElementById("demo").style.display = "none";
    </pre>

    <h2>JavaScript Can Show HTML Elements</h2>
    <p>Showing hidden HTML elements can also be done by changing the display style:</p>
    <pre>
document.getElementById("demo").style.display = "block";
    </pre>

    <h2>Example Output</h2>
    <div id="demo">This text will change its style and visibility based on JavaScript actions.</div>
    <button onclick="changeStyle()">Change Style</button>
    <button onclick="hideElement()">Hide Element</button>
    <button onclick="showElement()">Show Element</button>

    <script>
        function changeStyle() {
            document.getElementById("demo").style.fontSize = "35px";
        }

        function hideElement() {
            document.getElementById("demo").style.display = "none";
        }

        function showElement() {
            document.getElementById("demo").style.display = "block";
        }
    </script>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript Style Manipulation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border: 1px solid #ddd;
            overflow: auto;
        }
        code {
            background-color: #eef;
            padding: 2px 4px;
            border-radius: 4px;
        }
        #demo {
            font-size: 20px; /* Initial font size */
        }
    </style>
</head>
<body>
<h1>JavaScript Can Change HTML Content</h1>
    <p>One of many JavaScript HTML methods is <code>getElementById()</code>.</p>
    <p>The example below "finds" an HTML element (with id="demo"), and changes the element content (innerHTML) to "Hello JavaScript":</p>
    <pre>
document.getElementById("demo").innerHTML = "Hello JavaScript";
    </pre>

    <h2>JavaScript Can Change HTML Styles (CSS)</h2>
    <p>Changing the style of an HTML element is a variant of changing an HTML attribute:</p>
    <pre>
document.getElementById("demo").style.fontSize = "35px";
    </pre>

    <h2>JavaScript Can Hide HTML Elements</h2>
    <p>Hiding HTML elements can be done by changing the display style:</p>
    <pre>
document.getElementById("demo").style.display = "none";
    </pre>

    <h2>JavaScript Can Show HTML Elements</h2>
    <p>Showing hidden HTML elements can also be done by changing the display style:</p>
    <pre>
document.getElementById("demo").style.display = "block";
    </pre>

    
</body>
</html>

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
