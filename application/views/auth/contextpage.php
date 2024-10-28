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
    font-size: 35px;
}

.content p {
    margin-bottom: 15px;
    font-size: 25px;
}

.content ul {
    list-style-type: disc;
    padding-left: 25px;
}

.content ul li {
    margin-bottom: 10px;
}
pre {
    padding: 20px;
    margin-left: 0;
    background-color: #f4f4f4;
    border: 1px solid #ddd;
    font-family: monospace;
    white-space: pre-wrap; /* Allows wrapping */
    word-wrap: break-word; /* Prevents long lines from overflowing */
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
                    <button class="collapsible">Module 2: JavaScript Introduction</button>
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
                    <button class="collapsible">Module 3: Introduction of Java</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#">Java Output</a></li>
                            <li><a href="#">Print Text</a></li>
                        </ul>
                    </div>
                </div>
            </aside>
            

            <!-- Content Section -->
            
            <section id="content1" class="content">
           <h1>JavaScript Can Change HTML Content</h1>
    <p>One of many JavaScript HTML methods is <code>getElementById()</code>.</p>
    <p>The example below "finds" an HTML element (with id="demo"), and changes the element content (innerHTML) to "Hello JavaScript":</p>
    <pre>
document.getElementById("demo").innerHTML = "Hello JavaScript";
    </pre>

    <p>JavaScript accepts both double and single quotes:</p>
    <pre>
document.getElementById('demo').innerHTML = 'Hello JavaScript';
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

    <h2>Example Output</h2>
    <div id="demo">This text can be changed, hidden, or shown again.</div>
</section>
    <section id="content2" class="content" style="display: none;">
    <h1>The <code>&lt;script&gt;</code> Tag</h1>
    <p>In HTML, JavaScript code is inserted between <code>&lt;script&gt;</code> and <code>&lt;/script&gt;</code> tags.</p>
    <p>Example:</p>
    <pre>
&lt;script&gt;
document.getElementById("demo").innerHTML = "My First JavaScript";
&lt;/script&gt;
    </pre>

    <h2>JavaScript Functions and Events</h2>
    <p>A JavaScript function is a block of JavaScript code that can be executed when "called" for.</p>
    <p>For example, a function can be called when an event occurs, like when the user clicks a button.</p>

    <h2>JavaScript in <code>&lt;head&gt;</code> or <code>&lt;body&gt;</code></h2>
    <p>You can place any number of scripts in an HTML document.</p>
    <p>Scripts can be placed in the <code>&lt;body&gt;</code>, or in the <code>&lt;head&gt;</code> section of an HTML page, or in both.</p>

    <h3>JavaScript in <code>&lt;head&gt;</code></h3>
    <p>In this example, a JavaScript function is placed in the <code>&lt;head&gt;</code> section of an HTML page.</p>
    <p>The function is invoked (called) when a button is clicked:</p>
    <pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;script&gt;
function myFunction() {
  document.getElementById("demo").innerHTML = "Paragraph changed.";
}
&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h2&gt;Demo JavaScript in Head&lt;/h2&gt;

&lt;p id="demo"&gt;A Paragraph&lt;/p&gt;
&lt;button type="button" onclick="myFunction()"&gt;Try it&lt;/button&gt;

&lt;/body&gt;
&lt;/html&gt;
    </pre>

    <h3>JavaScript in <code>&lt;body&gt;</code></h3>
    <p>In this example, a JavaScript function is placed in the <code>&lt;body&gt;</code> section of an HTML page.</p>
    <p>The function is invoked (called) when a button is clicked:</p>
    <pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;h2&gt;Demo JavaScript in Body&lt;/h2&gt;

&lt;p id="demo"&gt;A Paragraph&lt;/p&gt;

&lt;button type="button" onclick="myFunction()"&gt;Try it&lt;/button&gt;

&lt;script&gt;
function myFunction() {
  document.getElementById("demo").innerHTML = "Paragraph changed.";
}
&lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;
    </pre>

    <h2>External JavaScript</h2>
    <p>Scripts can also be placed in external files:</p>
    <p>External file: <code>myScript.js</code></p>
    <pre>
function myFunction() {
  document.getElementById("demo").innerHTML = "Paragraph changed.";
}
    </pre>
    <p>External scripts are practical when the same code is used in many different web pages.</p>
    <p>JavaScript files have the file extension <code>.js</code>.</p>
    <p>To use an external script, put the name of the script file in the <code>src</code> (source) attribute of a <code>&lt;script&gt;</code> tag:</p>
    <pre>
&lt;script src="myScript.js"&gt;&lt;/script&gt;
    </pre>

    <h2>External JavaScript Advantages</h2>
    <p>Placing scripts in external files has some advantages:</p>
    <ul>
        <li>It separates HTML and code</li>
        <li>It makes HTML and JavaScript easier to read and maintain</li>
        <li>Cached JavaScript files can speed up page loads</li>
    </ul>
    <p>To add several script files to one page - use several script tags:</p>
    <pre>
&lt;script src="myScript1.js"&gt;&lt;/script&gt;
&lt;script src="myScript2.js"&gt;&lt;/script&gt;
    </pre>

    <h2>External References</h2>
    <p>An external script can be referenced in 3 different ways:</p>
    <ul>
        <li>With a full URL (a full web address)</li>
        <li>With a file path (like <code>/js/</code>)</li>
        <li>Without any path</li>
    </ul>
    <p>This example uses a full URL to link to <code>myScript.js</code>:</p>
    <pre>
&lt;script src="https://www.w3schools.com/js/myScript.js"&gt;&lt;/script&gt;
    </pre>
    <p>This example uses a file path to link to <code>myScript.js</code>:</p>
    <pre>
&lt;script src="/js/myScript.js"&gt;&lt;/script&gt;
    </pre>
    <p>This example uses no path to link to <code>myScript.js</code>:</p>
    <pre>
&lt;script src="myScript.js"&gt;&lt;/script&gt;
    </pre>
    </section>
           
    </div>
    </div>
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
