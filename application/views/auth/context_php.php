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
                    <button class="collapsible">Module 1: Getting started with PHP</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#">HTML Output From Web Server</a></li>
                            <li><a href="#">Hello, World!</a></li>
                            <li><a href="#">Non-HTML Output From Web Server</a></li>
                            <li><a href="#">PHP Build-in server</a></li>
                            <li><a href="#">PHP CLI</a></li>
                            <li><a href="#">Instruction Separation</a></li>
                            <li><a href="#">PHP Tags</a></li>
                        </ul>
                    </div>
                </div>
                <div class="module">
                    <button class="collapsible">Module 2: Variable</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#">Accessing A Variable Dynamically By Name (Variable variable)</a></li>
                            <li><a href="#">Data Type</a></li>
                            <li><a href="#">Global Variable Best Practice</a></li>
                            <li><a href="#">Default Values of Uninitialized Variables</a></li>
                            <li><a href="#">Variable Value Truthiness And Identical Operator</a></li>
                        </ul>
                    </div>
                </div>
                <div class="module">
                    <button class="collapsible">Module 3: Variable Scope</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#">Superglobal Variables</a></li>
                            <li><a href="#">Static Properties And Variables</a></li>
                            <li><a href="#">User-defined Global Variables</a></li>
                        </ul>
                    </div>
                </div>
                <div class="module">
                    <button class="collapsible">Module 4: Superglobal Variables PHP</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#">Superglobals Explained</a></li>
                            <li><a href="#">PHP5 SuperGlobals</a></li>
                        </ul>
                    </div>
                </div>
                <div class="module">
                    <button class="collapsible">Module 5: Outputting the Value of a Variable</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#">echo and print</a></li>
                            <li><a href="#">Outputting a Stractured View of Arrays and Objects</a></li>
                            <li><a href="#">String Concatenation with Echo</a></li>
                            <li><a href="#">printf vs sprinf</a></li>
                            <li><a href="#">Outputting large integers</a></li>
                            <li><a href="#">Output a Multidimensional Array with index and value and print into the table</a></li>
                        </ul>
                    </div>
                </div>
            </aside>
            

            <!-- Content Section -->
            <section id="content1" class="content">
                <h1>Module 1: Getting started with PHP</h1>
                <p>PHP 7.x</p>
                <p>Version Supported Until Release Date</p>
                <ul>
                    <li>7.1 2019-12-01 2016-12-01</li>
                    <li>7.0 2018-12-03 2015-12-03</li>
                </ul>
                <p>PHP 5.x</p>
                <p>Version Supported Until Release Date</p>
                <ul>
                    <li>5.6 2018-12-31 2014-08-28</li>
                    <li>5.5 2016-07-21 2013-06-20</li>
                    <li>5.4 2015-09-03 2012-03-01</li>
                    <li>5.3 2014-08-14 2009-06-30</li>
                    <li>5.2 2011-01-06 2006-11-02</li>
                    <li>5.1 2006-08-24 2005-11-24</li>
                    <li>5.0 2005-09-05 2004-07-13</li>
                </ul>
                <p>PHP 4.x</p>
                <p>Version Supported Until Release Date</p>
                <ul>
                    <li>4.4 2008-08-07 2005-07-11</li>
                    <li>4.3 2005-03-31 2002-12-27</li>
                    <li>4.2 2002-09-06 2002-04-22</li>
                    <li>4.1 2002-03-12 2001-12-10</li>
                    <li>4.0 2001-06-23 2000-05-22</li>
                </ul><p>Legacy Version</p>
                <p>Version Supported Until Release Date</p>
                <ul>
                    <li>3.0 2000-10-20 1998-06-06</li>
                    <li>2.0 __________1997-11-01</li>
                    <li>1.0 __________1995-06-08</li>
                </ul>
            </section>

            <section id="content2" class="content" style="display: none;">
                <h1>HTML output from web server</h1>
                <p>PHP can be used to add content to HTML files. While HTML is processed directly by a web browser, PHP scripts are executed by a web server and the resulting HTML is sent to the browser.</p>
                <p>The following HTML markup contains a PHP statement that will add Hello World! to the output:</p>
                <pre>
                    &lt;!DOCTYPE html&gt;
                    &lt;html&gt;
                        &lt;head&gt;
                            &lt;title&gt;PHP!&lt;/title&gt;
                        &lt;/head&gt;
                        &lt;body&gt;
                            &lt;p&gt;&lt;?php echo "Hello world!"; ?&gt;&lt;/p&gt;
                        &lt;/body&gt;
                    &lt;/html&gt;
                </pre>
                <p>When this is saved as a PHP script and executed by a web server, the following HTML will be sent to the user's browser:</p>
                <pre>
                    &lt;!DOCTYPE html&gt;
                    &lt;html&gt;
                        &lt;head&gt;
                            &lt;title&gt;PHP!&lt;/title&gt;
                        &lt;/head&gt;
                        &lt;body&gt;
                            &lt;p&gt;&lt;Hello world!&gt;&lt;/p&gt;
                        &lt;/body&gt;
                    &lt;/html&gt;
                </pre>
                <p>PHP 5.x Version ≥ 5.4</p>
                <p>echo also has a shortcut syntax, which lets you immediately print a value. Prior to PHP 5.4.0, this short syntax only works with the short_open_tag configuration setting enabled.</p>
                <p>For example, consider the following code:</p>
                <pre>
                    &lt;p&gt;&lt;?= "Hello world!" ?&gt;&lt;/p&gt;
                </pre>
                <p>Its output is identical to the output of the following:</p>
                <pre>
                    &lt;p&gt;&lt;?php echo "Hello world!"; ?&gt;&lt;/p&gt;
                </pre>
                <p>In real-world applications, all data output by PHP to an HTML page should be properly escaped to prevent XSS (Cross-site scripting) attacks or text corruption.</p>
                <p>See also: Strings and PSR-1, which describes best practices, including the proper use of short tags.</p>
            </section>
            <section id="content3" class="content" style="display: none;">
                <h1>Hello, World!</h1>
                <p>The most widely used language construct to print output in PHP is echo:</p>
                <pre>
                    &lt;echo "Hello, World!\n";&gt;
                </pre>
                <p>Alternatively, you can also use print:</p>
                <pre>
                    &lt;print "Hello, World!\n";&gt;
                </pre>
                <p>Both statements perform the same function, with minor differences:</p>
                <ul>
                    <li>echo has a void return, whereas print returns an int with a value of 1</li>
                    <li>echo can take multiple arguments (without parentheses only), whereas print only takes one argument</li>
                    <li>echo is slightly faster than print</li>
                </ul>
                <p>Both echo and print are language constructs, not functions. That means they do not require parentheses around their arguments. For cosmetic consistency with functions, parentheses can be included. Extensive examples of the use of echo and print are available elsewhere.</p>
                <p>C-style printf and related functions are available as well, as in the following example:</p>
            </section>
        </div>
    </div>
</body>
<script>
    window.onload = function() {
    // Popup and collapsible functionality
    const openPopupBtn = document.querySelector("#open-popup");
    const closePopupBtn = document.querySelector(".popup .close-btn");

    if (openPopupBtn) {
        openPopupBtn.addEventListener("click", function(e) {
            e.preventDefault();
            document.body.classList.add("active-popup");
        });
    }

    if (closePopupBtn) {
        closePopupBtn.addEventListener("click", function() {
            document.body.classList.remove("active-popup");
        });
    }

    window.addEventListener("click", function(e) {
        if (e.target.classList.contains("popup")) {
            document.body.classList.remove("active-popup");
        }
    });

    // Collapsible functionality for modules
    const collapsibleButtons = document.querySelectorAll(".collapsible");
    const content1 = document.getElementById("content1");
    const content2 = document.getElementById("content2");
    const content3 = document.getElementById("content3");

    collapsibleButtons.forEach(button => {
        button.addEventListener("click", function() {
            this.classList.toggle("active");
            const content = this.nextElementSibling;
            content.style.display = content.style.display === "block" ? "none" : "block";

            // Show content1 and hide other contents when any collapsible button is clicked
            content1.style.display = "block";
            content2.style.display = "none";
            content3.style.display = "none";
        });
    });

    // Content toggle based on link clicks
    const links = document.querySelectorAll(".module-content ul li a");

    links.forEach(link => {
        link.addEventListener("click", function(e) {
            e.preventDefault();

            // Hide all content sections initially
            content1.style.display = "none";
            content2.style.display = "none";
            content3.style.display = "none";

            // Show the corresponding content based on link text
            if (link.textContent.includes("Getting started with PHP")) {
                content1.style.display = "block";
            } else if (link.textContent.includes("HTML Output From Web Server")) {
                content2.style.display = "block";
            } else if (link.textContent.includes("Hello, World!")) {
                content3.style.display = "block";
            }
        });
    });
};
</script>
</html>
