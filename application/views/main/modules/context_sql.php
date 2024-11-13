<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $score = $data['score'];

    // Database connection
    $conn = new mysqli('localhost', 'username', 'password', 'database_name');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert score into the database
    $stmt = $conn->prepare("INSERT INTO scores (score) VALUES (?)");
    $stmt->bind_param("i", $score);

    if ($stmt->execute()) {
        echo "Score saved successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

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
        background-color: #2C84D5;
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
        height: 97vh;
        /* Full viewport height */
        overflow-y: auto;
        /* Enable scrolling */
    }

    /* Hide scrollbar for WebKit browsers (Chrome, Safari) */
    .sidebar::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for Firefox */
    .sidebar {
        scrollbar-width: none;
        /* Firefox */
    }

    /* Collapsible button styling */
    .collapsible {
        background-color: #2C84D5;
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
        content: '\25BC';
        /* Unicode for down arrow */
        font-size: 14px;
        position: absolute;
        right: 10px;
        transition: transform 0.3s;
    }

    .collapsible.active::after {
        transform: rotate(180deg);
        /* Rotates arrow to point up */
    }

    .collapsible:hover {
        background-color: #5f7cc6;
    }

    /* Module content styling */
    .module-content {
        display: none;
        /* Hidden by default */
        overflow: hidden;
        padding-left: 10px;
        margin-top: 10px;
        margin-bottom: 20px;
    }

    .module-content ul {
        list-style: none;
    }

    .module-content ul li a {
        display: block;
        padding: 8px;
        background-color: #2C84D5;
        color: white;
        border-radius: 5px;
        margin-bottom: 5px;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .module-content ul li a:hover {
        background-color: #1f5c96;
    }

    .content {
        flex: 1;
        padding: 40px;
        background-color: white;
        border-radius: 10px;
        margin: 20px;
        height: 94vh;
        overflow-y: auto;
        /* Enable vertical scroll */
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
        white-space: pre-wrap;
        /* Allows wrapping */
        word-wrap: break-word;
        /* Prevents long lines from overflowing */
    }

    /* Apply general styles for both tables */
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid black;
        padding: 8px;
    }

    .question {
        margin: 20px 0;
    }

    .correct {
        color: green;
    }

    .incorrect {
        color: red;
    }

    .check-button {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        margin-top: 20px;
    }

    .check-button:hover {
        background-color: #45a049;
    }

    /**.back-btn styling */
    .sidebar .back-btn {
        top: 10px;
        left: 10px;
        width: 40px;
        height: 40px;
        font-size: 30px;
        background-color: #cccccc;
        border: none;
        border-radius: 15%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0;
        margin-bottom: 20px;
    }

    .sidebar .back-btn:hover {
        background-color: #8e8e8e;
    }

    .left-arrow {
        color: #fff;
        margin-bottom: 5px;

    }

    /**active page styling */
    .topic {
        padding: 10px;
        color: #000;
    }

    .topic.active {
        background-color: #1f5c96;
        /* Dark background */
        color: #fff;
        /* Light text */
    }
</style>
<!-- Main Content Section -->
<div class="main-content">
    <!-- Left Sidebar -->
    <aside class="sidebar">
        <button class="back-btn">
            <div class="left-arrow">&larr;</div>
        </button>
        <div class="module">
            <button class="collapsible" data-module='module1'>Module 1: Introduction to MySQL</button>
            <div class="module-content">
                <ul>
                    <li><a class="topic" href="#" data-target='content-mysql-rdbms'>MySQL RDBMS</a></li>
                    <li><a class="topic" href="#" data-target='content-select-statement'>MySQL SELECT Statement</a></li>
                    <li><a class="topic" href="#" data-target='content-where-clause'>MySQL WHERE Clause</a></li>
                    <li><a class="topic" href="#" data-target='content-operators'>MySQL AND, OR and NOT Operators</a></li>
                    <li><a class="topic" href="#" data-target='content-order-by-keyword'>MySQL ORDER BY Keyword</a></li>
                    <li><a class="topic" href="#" data-target='content-insert-statement'>MySQL INSERT INTO Statement</a></li>
                    <li><a class="topic" href="#" data-target='content-null-values'>MySQL NULL Values</a></li>
                    <li><a class="topic" href="#" data-target='content-update-statement'>MySQL UPDATE Statement</a></li>
                    <li><a class="topic" href="#" data-target='content-delete-statement'>MySQL DELETE Statement</a></li>
                    <li><a class="topic" href="#" data-target='content-module1-quiz'>Module 1 Quiz</a></li>
                </ul>
            </div>
        </div>
        <div class="module">
            <button class="collapsible" data-module='module2'>Module 2: MySQL Joins</button>
            <div class="module-content">
                <ul>
                    <li><a class="topic" href="#" data-target='content-inner-join'>MySQL INNER JOIN Keyword</a></li>
                    <li><a class="topic" href="#" data-target='content-left-join'>MySQL LEFT JOIN Keyword</a></li>
                    <li><a class="topic" href="#" data-target='content-right-join'>MySQL RIGHT JOIN Keyword</a></li>
                    <li><a class="topic" href="#" data-target='content-cross-join'>MySQL CROSS JOIN Keyword</a></li>
                    <li><a class="topic" href="#" data-target='content-self-join'>MySQL Self Join</a></li>
                    <li><a class="topic" href="#" data-target='content-union'>MySQL UNION Operator</a></li>
                    <li><a class="topic" href="#" data-target='content-module2-quiz'>Module 2 Quiz</a></li>
                </ul>
            </div>
        </div>
        <div class="module">
            <button class="collapsible" data-module='module3'>Module 3: MySQL COUNT, AVG, and SUM Functions</button>
            <div class="module-content">
                <ul>
                    <li><a class="topic" href="#" data-target='content-min-max'>MySQL MIN and MAX Functions</a></li>
                    <li><a class="topic" href="#" data-target='content-group-by'>MySQL GROUP BY Statement</a></li>
                    <li><a class="topic" href="#" data-target='content-module3-quiz'>Module 3 Quiz</a></li>
                </ul>
            </div>
        </div>
    </aside>

    <!-- Content Section -->
    <section id="content1" class="content" style="display: none;">
        <h1>Module 1: Introduction to MySQL</h1>
        <p>MySQL is a very popular open-source relational database management system (RDBMS).</p>
        <h1>What is MySQL?</h1>
        <ul>
            <li>MySQL is a relational database management system</li>
            <li>MySQL is open-source</li>
            <li>MySQL is free</li>
            <li>MySQL is ideal for both small and large applications</li>
            <li>MySQL is very fast, reliable, scalable, and easy to use</li>
            <li>MySQL is cross-platform</li>
            <li>MySQL is compliant with the ANSI SQL standard</li>
            <li>MySQL was first released in 1995</li>
            <li>MySQL is developed, distributed, and supported by Oracle Corporation</li>
            <li>MySQL is named after co-founder Monty Widenius's daughter: My</li>
        </ul>
        <h1>Who Uses MySQL?</h1>
        <ul>
            <li>Huge websites like Facebook, Twitter, Airbnb, Booking.com, Uber, GitHub, YouTube, etc.</li>
            <li>Content Management Systems like WordPress, Drupal, Joomla!, Contao, etc.</li>
            <li>A very large number of web developers around the world</li>
        </ul>
        <h1>Show Data On Your Web Site</h1>
        <p>To build a web site that shows data from a database, you will need:</p>
        <ul>
            <li>An RDBMS database program (like MySQL)</li>
            <li>A server-side scripting language, like PHP</li>
            <li>To use SQL to get the data you want</li>
            <li>To use HTML / CSS to style the page</li>
        </ul>
    </section>
    <section id="content-mysql-rdbms" class="content" style="display: none;">
        <h1>MySQL RDBMS</h1>
        <h1>What is RDBMS?</h1>
        <p>RDBMS stands for Relational Database Management System.</p>
        <p>RDBMS is a program used to maintain a relational database.</p>
        <p>RDBMS is the basis for all modern database systems such as MySQL, Microsoft SQL Server, Oracle, and Microsoft Access.</p>
        <p>RDBMS uses SQL queries to access the data in the database.</p>
        <h1>What is a Database Table?</h1>
        <p>A table is a collection of related data entries, and it consists of columns and rows.</p>
        <p>A column holds specific information about every record in the table.</p>
        <p>A record (or row) is each individual entry that exists in a table.</p>
        <p>Look at a selection from the Northwind "Customers" table:</p>

        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Obere Str. 57</td>
                    <td>Berlin</td>
                    <td>12209</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ana Trujillo Emparedados y helados</td>
                    <td>Ana Trujillo</td>
                    <td>Avda. de la Constitución 2222</td>
                    <td>México D.F.</td>
                    <td>05021</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Antonio Moreno Taquería</td>
                    <td>Antonio Moreno</td>
                    <td>Mataderos 2312</td>
                    <td>México D.F.</td>
                    <td>05023</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Around the Horn</td>
                    <td>Thomas Hardy</td>
                    <td>120 Hanover Sq.</td>
                    <td>London</td>
                    <td>WA1 1DP</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Berglunds snabbköp</td>
                    <td>Christina Berglund</td>
                    <td>Berguvsvägen 8</td>
                    <td>Luleå</td>
                    <td>S-958 22</td>
                    <td>Sweden</td>
                </tr>
            </tbody>
        </table>
        <ul>The columns in the "Customers" table above are: CustomerID, CustomerName, ContactName, Address, City, PostalCode and Country. The table has 5 records (rows).</ul>
        <h1>What is a Relational Database?</h1>
        <p>A relational database defines database relationships in the form of tables. The tables are related to each other - based on data common to each.</p>
        <p>Look at the following three tables "Customers", "Orders", and "Shippers" from the Northwind database:</p>
        <p>Customers Table</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th style="border:3px solid green">CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border:3px solid green">1</td>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Obere Str. 57</td>
                    <td>Berlin</td>
                    <td>12209</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td style="border:3px solid green">2</td>
                    <td>Ana Trujillo Emparedados y helados</td>
                    <td>Ana Trujillo</td>
                    <td>Avda. de la Constitución 2222</td>
                    <td>México D.F.</td>
                    <td>05021</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td style="border:3px solid green">3</td>
                    <td>Antonio Moreno Taquería</td>
                    <td>Antonio Moreno</td>
                    <td>Mataderos 2312</td>
                    <td>México D.F.</td>
                    <td>05023</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td style="border:3px solid green">4</td>
                    <td>Around the Horn</td>
                    <td>Thomas Hardy</td>
                    <td>120 Hanover Sq.</td>
                    <td>London</td>
                    <td>WA1 1DP</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td style="border:3px solid green">5</td>
                    <td>Berglunds snabbköp</td>
                    <td>Christina Berglund</td>
                    <td>Berguvsvägen 8</td>
                    <td>Luleå</td>
                    <td>S-958 22</td>
                    <td>Sweden</td>
                </tr>
            </tbody>
        </table>
        <ul>The relationship between the "Customers" table and the "Orders" table is the CustomerID column:</ul>
        <p>Orders Table</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>OrderID</th>
                    <th style="border:3px solid green">CustomerID</th>
                    <th>EmployeeID</th>
                    <th>OrderDate</th>
                    <th style="border:3px solid violet">ShipperID</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>10278</td>
                    <td style="border:3px solid green">5</td>
                    <td>8</td>
                    <td>1996-08-12</td>
                    <td style="border: 3px solid violet">2</td>
                </tr>
                <tr>
                    <td>10280</td>
                    <td style="border:3px solid green">5</td>
                    <td>2</td>
                    <td>1996-08-14</td>
                    <td style="border: 3px solid violet">1</td>
                </tr>
                <tr>
                    <td>10308</td>
                    <td style="border:3px solid green">2</td>
                    <td>7</td>
                    <td>1996-09-18</td>
                    <td style="border: 3px solid violet">3</td>
                </tr>
                <tr>
                    <td>10355</td>
                    <td style="border:3px solid green">4</td>
                    <td>6</td>
                    <td>1996-11-15</td>
                    <td style="border: 3px solid violet">1</td>
                </tr>
                <tr>
                    <td>10365</td>
                    <td style="border:3px solid green">3</td>
                    <td>3</td>
                    <td>1996-11-27</td>
                    <td style="border: 3px solid violet">2</td>
                </tr>
                <tr>
                    <td>10383</td>
                    <td style="border:3px solid green">4</td>
                    <td>8</td>
                    <td>1996-12-16</td>
                    <td style="border: 3px solid violet">3</td>
                </tr>
                <tr>
                    <td>10384</td>
                    <td style="border:3px solid green">5</td>
                    <td>3</td>
                    <td>1996-12-16</td>
                    <td style="border: 3px solid violet">3</td>
                </tr>
            </tbody>
        </table>
        <ul>The relationship between the "Orders" table and the "Shippers" table is the ShipperID column:</ul>
        <p>Shippers Table</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th style="border:3px solid violet">ShipperID</th>
                    <th>ShipperName</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border: 3px solid violet">1</td>
                    <td>Speedy Express</td>
                    <td>(503) 555-9831</td>
                </tr>
                <tr>
                    <td style="border: 3px solid violet">2</td>
                    <td>United Package</td>
                    <td>(503) 555-3199</td>
                </tr>
                <tr>
                    <td style="border: 3px solid violet">3</td>
                    <td>Federal Shipping</td>
                    <td>(503) 555-9931</td>
                </tr>
            </tbody>
        </table>
    </section>
    <section id="content-select-statement" class="content" style="display: none;">
        <h1>The MySQL SELECT Statement</h1>
        <p>The <span style="color: red;">SELECT</span> statement is used to select data from a database.</p>
        <p>The data returned is stored in a result table, called the result-set.</p>
        <h1>SELECT Syntax</h1>
        <pre>
<span style="color: blue;">SELECT</span> column1, column2, ...
<span style="color: blue;">FROM</span> table_name;</pre>
        <p>Here, column1, column2, ... are the field names of the table you want to select data from. If you want to select all the fields available in the table, use the following syntax:</p>
        <pre>
<span style="color: blue;">SELECT</span> * <span style="color: blue;">FROM</span> table_name;</pre>
        <h1>Demo Database</h1>
        <p>In this tutorial we will use the well-known Northwind sample database.</p>
        <p>Below is a selection from the "Customers" table in the Northwind sample database:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Obere Str. 57</td>
                    <td>Berlin</td>
                    <td>12209</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ana Trujillo Emparedados y helados</td>
                    <td>Ana Trujillo</td>
                    <td>Avda. de la Constitución 2222</td>
                    <td>México D.F.</td>
                    <td>05021</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Antonio Moreno Taquería</td>
                    <td>Antonio Moreno</td>
                    <td>Mataderos 2312</td>
                    <td>México D.F.</td>
                    <td>05023</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Around the Horn</td>
                    <td>Thomas Hardy</td>
                    <td>120 Hanover Sq.</td>
                    <td>London</td>
                    <td>WA1 1DP</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Berglunds snabbköp</td>
                    <td>Christina Berglund</td>
                    <td>Berguvsvägen 8</td>
                    <td>Luleå</td>
                    <td>S-958 22</td>
                    <td>Sweden</td>
                </tr>
            </tbody>
        </table>
        <h1>SELECT Columns Example</h1>
        <p>The following SQL statement selects the "CustomerName", "City", and "Country" columns from the "Customers" table:</p>
        <pre>ExampleGet 

<span style="color: blue;">SELECT</span> CustomerName, City, Country <span style="color: blue;">FROM</span> Customers;</pre>
        <h1>SELECT * Example</h1>
        <p>The following SQL statement selects ALL the columns from the "Customers" table:</p>
        <pre>Example

<span style="color: blue;">SELECT</span> * <span style="color: blue;">FROM</span> Customers;</pre>
        <h1>The MySQL SELECT DISTINCT Statement</h1>
        <p>The <span style="color: red;">SELECT DISTINCT</span> statement is used to return only distinct (different) values.</p>
        <p>Inside a table, a column often contains many duplicate values; and sometimes you only want to list the different (distinct) values.</p>
        <h1>SELECT DISTINCT Syntax</h1>
        <pre>
<span style="color: blue;">SELECT DISTINCT</span> column1, column2, ...
<span style="color: blue;">FROM</span> table_name;</pre>
        <h1>SELECT Example Without DISTINCT</h1>
        <p>The following SQL statement selects all (including the duplicates) values from the "Country" column in the "Customers" table:</p>
        <pre>Example

<span style="color: blue;">SELECT</span> Country <span style="color: blue;">FROM</span> Customers;</pre>
        <p>Now, let us use the <span style="color: red;">SELECT DISTINCT</span> statement and see the result.</p>
        <h1>SELECT DISTINCT Examples</h1>
        <p>The following SQL statement selects only the DISTINCT values from the "Country" column in the "Customers" table:</p>
        <pre>Example

<span style="color: blue;">SELECT DISTINCT</span> Country <span style="color: blue;">FROM</span> Customers;</pre>
        <p>The following SQL statement counts and returns the number of different (distinct) countries in the "Customers" table:</p>
        <pre>Example

<span style="color: blue;">SELECT COUNT</span>(<span style="color: blue;">DISTINCT</span> Country) <span style="color: blue;">FROM</span> Customers;</pre>
    </section>
    <section id="content-where-clause" class="content" style="display: none;">
        <h1>The MySQL WHERE Clause</h1>
        <p>The <span style="color: red;">WHERE</span> clause is used to filter records.</p>
        <p>It is used to extract only those records that fulfill a specified condition.</p>
        <h1>WHERE Syntax</h1>
        <pre>
<span style="color: blue;">SELECT</span> column1, column2, ...
<span style="color: blue;">FROM</span> table_name
<span style="color: blue;">WHERE</span> condition;</pre>
        <ul>
            <ul>
                <p>Note: The <span style="color: red;">WHERE</span> clause is not only used in <span style="color: red;">SELECT</span> statements, it is also used in <span style="color: red;">UPDATE</span>, <span style="color: red;">DELETE</span>, etc.!</p>
            </ul>
        </ul>
        <h1>Demo Database</h1>
        <p>Below is a selection from the "Customers" table in the Northwind sample database:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Obere Str. 57</td>
                    <td>Berlin</td>
                    <td>12209</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ana Trujillo Emparedados y helados</td>
                    <td>Ana Trujillo</td>
                    <td>Avda. de la Constitución 2222</td>
                    <td>México D.F.</td>
                    <td>05021</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Antonio Moreno Taquería</td>
                    <td>Antonio Moreno</td>
                    <td>Mataderos 2312</td>
                    <td>México D.F.</td>
                    <td>05023</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Around the Horn</td>
                    <td>Thomas Hardy</td>
                    <td>120 Hanover Sq.</td>
                    <td>London</td>
                    <td>WA1 1DP</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Berglunds snabbköp</td>
                    <td>Christina Berglund</td>
                    <td>Berguvsvägen 8</td>
                    <td>Luleå</td>
                    <td>S-958 22</td>
                    <td>Sweden</td>
                </tr>
            </tbody>
        </table>
        <h1>WHERE Clause Example</h1>
        <p>The following SQL statement selects all the customers from "Mexico":</p>
        <pre>Example

<span style="color: blue;">SELECT</span> * <span style="color: blue;">FROM</span> Customers
<span style="color: blue;">WHERE</span> Country = <span style="color: red;">'Mexico'</span>;</pre>
        <h1>Text Fields vs. Numeric Fields</h1>
        <p>SQL requires single quotes around text values (most database systems will also allow double quotes).</p>
        <p>However, numeric fields should not be enclosed in quotes:</p>
        <pre>Example
<span style="color: blue;">SELECT</span> * <span style="color: blue;">FROM</span> Customers
<span style="color: blue;">WHERE</span> CustomerID = <span style="color: red;">'1'</span>;</pre>
        <h1>Operators in The WHERE Clause</h1>
        <p>The following operators can be used in the <span style="color: red;">WHERE</span> clause:</p>
        <table>
            <thead>
                <tr>
                    <th>Operator</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>=</th>
                    <th>Equal</th>
                </tr>
                <tr>
                    <th>></th>
                    <th>Greater than</th>
                </tr>
                <tr>
                    <th>
                        << /th>
                    <th>Less than</th>
                </tr>
                <tr>
                    <th>>=</th>
                    <th>Greater than or equal </th>
                </tr>
                <tr>
                    <th>
                        <=< /th>
                    <th>Less than or equal </th>
                </tr>
                <tr>
                    <th>
                        <>
                    </th>
                    <th>Not equal. Note: In some versions of SQL this operator may be written as !=</th>
                </tr>
                <tr>
                    <th>BETWEEN</th>
                    <th>Between a certain range </th>
                </tr>
                <tr>
                    <th>LIKE</th>
                    <th>Search for a pattern</th>
                </tr>
                <tr>
                    <th>IN</th>
                    <th>To specify multiple possible values for a column</th>
                </tr>
            </tbody>
        </table>
    </section>
    <section id="content-operators" class="content" style="display: none;">
        <h1>The MySQL AND, OR and NOT Operators</h1>
        <p>The <span style="color: red;">WHERE</span> clause can be combined with <span style="color: red;">AND</span>, <span style="color: red;">OR</span>, and <span style="color: red;">NOT</span> operators.</p>
        <p>The <span style="color: red;">AND</span> and <span style="color: red;">OR</span> operators are used to filter records based on more than one condition:</p>
        <ul>
            <li>The <span style="color: red;">AND</span> operator displays a record if all the conditions separated by <span style="color: red;">AND</span> are TRUE.</li>
            <li>The <span style="color: red;">OR</span> operator displays a record if any of the conditions separated by <span style="color: red;">OR</span> is TRUE.</li>
        </ul>
        <p>The <span style="color: red;">NOT</span> operator displays a record if the condition(s) is NOT TRUE.</p>
        <h1>AND Syntax</h1>
        <pre>
<span style="color: blue;">SELECT</span> column1, column2, ...
<span style="color: blue;">FROM</span> table_name
<span style="color: blue;">WHERE</span> condition1 <span style="color: blue;">AND</span> condition2 <span style="color: blue;">AND</span> condition3 ...;</pre>
        <h1>OR Syntax</h1>
        <pre>
<span style="color: blue;">SELECT</span> column1, column2, ...
<span style="color: blue;">FROM</span> table_name
<span style="color: blue;">WHERE</span> condition1 <span style="color: blue;">OR</span> condition2 <span style="color: blue;">OR</span> condition3 ...;</pre>
        <h1>NOT Syntax</h1>
        <pre>
<span style="color: blue;">SELECT</span> column1, column2, ...
<span style="color: blue;">FROM</span> table_name
<span style="color: blue;">WHERE NOT</span> condition;</pre>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Obere Str. 57</td>
                    <td>Berlin</td>
                    <td>12209</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ana Trujillo Emparedados y helados</td>
                    <td>Ana Trujillo</td>
                    <td>Avda. de la Constitución 2222</td>
                    <td>México D.F.</td>
                    <td>05021</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Antonio Moreno Taquería</td>
                    <td>Antonio Moreno</td>
                    <td>Mataderos 2312</td>
                    <td>México D.F.</td>
                    <td>05023</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Around the Horn</td>
                    <td>Thomas Hardy</td>
                    <td>120 Hanover Sq.</td>
                    <td>London</td>
                    <td>WA1 1DP</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Berglunds snabbköp</td>
                    <td>Christina Berglund</td>
                    <td>Berguvsvägen 8</td>
                    <td>Luleå</td>
                    <td>S-958 22</td>
                    <td>Sweden</td>
                </tr>
            </tbody>
        </table>
        <h1>AND Example</h1>
        <p>The following SQL statement selects all fields from "Customers" where country is "Sweden" AND city is "Luleå":</p>
        <pre>Example

<span style="color: blue;">SELECT</span> * <span style="color: blue;">FROM</span> Customers
<span style="color: blue;">WHERE</span> Country = <span style="color: red;">'Sweden'</span> <span style="color: blue;">AND</span> City = <span style="color: red;">'Luleå'</span>;</pre>
        <h1>OR Example</h1>
        <pre>Example

<span style="color: blue;">SELECT</span> * <span style="color: blue;">FROM</span> Customers
<span style="color: blue;">WHERE</span> City = <span style="color: red;">'Sweden'</span> <span style="color: blue;">OR</span> City = <span style="color: red;">'Berlin'</span>;</pre>
        <p>The following SQL statement selects all fields from "Customers" where country is "Germany" OR "UK":</p>
        <pre>Example

<span style="color: blue;">SELECT</span> * <span style="color: blue;">FROM</span> Customers
<span style="color: blue;">WHERE</span> Country = <span style="color: red;">'Germany'</span> <span style="color: blue;">OR</span> Country = <span style="color: red;">'UK'</span>;</pre>
        <h1>NOT Example</h1>
        <p>The following SQL statement selects all fields from "Customers" where country is NOT "Germany":</p>
        <pre>Example

<span style="color: blue;">SELECT</span> * <span style="color: blue;">FROM</span> Customers
<span style="color: blue;">WHERE NOT</span> Country = <span style="color: red;">'Germany'</span>;</pre>
        <h1>Combining AND, OR and NOT</h1>
        <p>You can also combine the <span style="color: red;">AND</span>, <span style="color: red;">OR</span> and <span style="color: red;">NOT</span> operators.</p>
        <p>The following SQL statement selects all fields from "Customers" where country is "Mexico" AND city must be "Mexico D.F" OR "Mexico D.F" (use parenthesis to form complex expressions):</p>
        <pre>Example

<span style="color: blue;">SELECT</span> * <span style="color: blue;">FROM</span> Customers
<span style="color: blue;">WHERE</span> Country = <span style="color: red;">'Mexico'</span> <span style="color: blue;">AND</span> (City = <span style="color: red;">'Mexico D.F.'</span> <span style="color: blue;">OR</span> City = <span style="color: red;">'Mexico D.F'</span>);</pre>
        <p>The following SQL statement selects all fields from "Customers" where country is NOT "Germany" and NOT "UK":</p>
        <pre>Example

<span style="color: blue;">SELECT</span> * <span style="color: blue;">FROM</span> Customers
<span style="color: blue;">WHERE NOT</span> Country = <span style="color: red;">'Germany'</span> <span style="color: blue;">AND NOT</span> Country = <span style="color: red;">'UK'</span>;</pre>
    </section>
    <section id="content-order-by-keyword" class="content" style="display: none;">
        <h1>The MySQL ORDER BY Keyword</h1>
        <p>The <span style="color: red;">ORDER BY</span> keyword is used to sort the result-set in ascending or descending order.</p>
        <p>The <span style="color: red;">ORDER BY</span> keyword sorts the records in ascending order by default. To sort the records in descending order, use the <span style="color: red;">DESC</span> keyword</p>
        <h1>ORDER BY Syntax</h1>
        <pre>
<span style="color: blue;">SELECT</span> column1, column2, ...
<span style="color: blue;">FROM</span> table_name
<span style="color: blue;">ORDER BY</span> column1, column2, ... <span style="color: blue;">ASC</span>|<span style="color: blue;">DESC</span>;</pre>
        <h1>Demo Database</h1>
        <p>Below is a selection from the "Customers" table in the Northwind sample database:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Obere Str. 57</td>
                    <td>Berlin</td>
                    <td>12209</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ana Trujillo Emparedados y helados</td>
                    <td>Ana Trujillo</td>
                    <td>Avda. de la Constitución 2222</td>
                    <td>México D.F.</td>
                    <td>05021</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Antonio Moreno Taquería</td>
                    <td>Antonio Moreno</td>
                    <td>Mataderos 2312</td>
                    <td>México D.F.</td>
                    <td>05023</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Around the Horn</td>
                    <td>Thomas Hardy</td>
                    <td>120 Hanover Sq.</td>
                    <td>London</td>
                    <td>WA1 1DP</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Berglunds snabbköp</td>
                    <td>Christina Berglund</td>
                    <td>Berguvsvägen 8</td>
                    <td>Luleå</td>
                    <td>S-958 22</td>
                    <td>Sweden</td>
                </tr>
            </tbody>
        </table>
        <h1>ORDER BY Example</h1>
        <p>The following SQL statement selects all customers from the "Customers" table, sorted by the "Country" column:</p>
        <pre>Example

<span style="color: blue;">SELECT</span> * <span style="color: blue;">FROM</span> Customers
<span style="color: blue;">ORDER BY</span> Country;</pre>
        <h1>ORDER BY DESC Example</h1>
        <p>The following SQL statement selects all customers from the "Customers" table, sorted DESCENDING by the "Country" column:</p>
        <pre>Example

<span style="color: blue;">SELECT</span> * <span style="color: blue;">FROM</span> Customers
<span style="color: blue;">ORDER BY</span> Country <span style="color: blue;">DESC</span>;</pre>
        <h1>ORDER BY Several Columns Example</h1>
        <p>The following SQL statement selects all customers from the "Customers" table, sorted by the "Country" and the "CustomerName" column. This means that it orders by Country, but if some rows have the same Country, it orders them by CustomerName:</p>
        <pre>Example

<span style="color: blue;">SELECT</span> * <span style="color: blue;">FROM</span> Customers
<span style="color: blue;">ORDER BY</span> Country, CustomerName;</pre>
        <h1>ORDER BY Several Columns Example 2</h1>
        <p>The following SQL statement selects all customers from the "Customers" table, sorted ascending by the "Country" and descending by the "CustomerName" column:</p>
        <pre>Example

<span style="color: blue;">SELECT</span> * <span style="color: blue;">FROM</span> Customers
<span style="color: blue;">ORDER BY</span> Country <span style="color: blue;">ASC</span>, CustomerName <span style="color: blue;">DESC</span>;</pre>
    </section>
    <section id="content-insert-statement" class="content" style="display: none;">
        <h1>The MySQL INSERT INTO Statement</h1>
        <p>The <span style="color: red;">INSERT INTO</span> statement is used to insert new records in a table.</p>
        <p>INSERT INTO Syntax</p>
        <p>It is possible to write the <span style="color: red;">INSERT INTO</span> statement in two ways:</p>
        <ul>1. Specify both the column names and the values to be inserted:</ul>
        <pre>
<span style="color: blue;">INSERT INTO</span> table_name (column1, column2, column3, ...)
<span style="color: blue;">VALUES</span> (value1, value2, value3, ...);</pre>
        <ul>2. If you are adding values for all the columns of the table, you do not need to specify the column names in the SQL query. However, make sure the order of the values is in the same order as the columns in the table. Here, the <span style="color: red;">INSERT INTO</span> syntax would be as follows:</ul>
        <pre>
<span style="color: blue;">INSERT INTO</span> table_name
<span style="color: blue;">VALUES</span> (value1, value2, value3, ...);</pre>
        <h1>Demo Database</h1>
        <p>Below is a selection from the "Customers" table in the Northwind sample database:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>89</td>
                    <td>White Clover Markets</td>
                    <td>Karl Jablonski</td>
                    <td>305 - 14th Ave. S. Suite 3B</td>
                    <td>Seattle</td>
                    <td>98128</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td>90</td>
                    <td>Wilman Kala</td>
                    <td>Matti Karttunen</td>
                    <td>Keskuskatu 45</td>
                    <td>Helsinki</td>
                    <td>21240</td>
                    <td>Finland</td>
                </tr>
                <tr>
                    <td>91</td>
                    <td>Wolski</td>
                    <td>Zbyszek</td>
                    <td>ul. Filtrowa 68</td>
                    <td>Walla</td>
                    <td>01-012</td>
                    <td>Poland</td>
                </tr>
            </tbody>
        </table>
        <h1>INSERT INTO Example</h1>
        <p>The following SQL statement inserts a new record in the "Customers" table:</p>
        <pre>Example
<span style="color: blue;">INSERT INTO</span> Customers (CustomerName, ContactName, Address, City, PostalCode, Country)
<span style="color: blue;">VALUES</span> (<span style="color: red;">'Cardinal'</span>, <span style="color: red;">'Tom B. Erichsen'</span>, <span style="color: red;">'Skagen 21'</span>, <span style="color: red;">'Stavanger'</span>, <span style="color: red;">'Norway'</span>, <span style="color: red;">'Norway'</span>);</pre>
        <p>The selection from the "Customers" table will now look like this:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>89</td>
                    <td>White Clover Markets</td>
                    <td>Karl Jablonski</td>
                    <td>305 - 14th Ave. S. Suite 3B</td>
                    <td>Seattle</td>
                    <td>98128</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td>90</td>
                    <td>Wilman Kala</td>
                    <td>Matti Karttunen</td>
                    <td>Keskuskatu 45</td>
                    <td>Helsinki</td>
                    <td>21240</td>
                    <td>Finland</td>
                </tr>
                <tr>
                    <td>91</td>
                    <td>Wolski</td>
                    <td>Zbyszek</td>
                    <td>ul. Filtrowa 68</td>
                    <td>Walla</td>
                    <td>01-012</td>
                    <td>Poland</td>
                </tr>
                <tr>
                    <td>92</td>
                    <td>Cardinal</td>
                    <td>Tom B. Erichsen</td>
                    <td>Skagen 21</td>
                    <td>Stavanger</td>
                    <td>4006</td>
                    <td>Norway</td>
                </tr>
            </tbody>
        </table>
        <ul>
            <ul>Did you notice that we did not insert any number into the CustomerID field?
                The CustomerID column is an auto-increment field and will be generated automatically when a new record is inserted into the table.</ul>
        </ul>
        <h1>Insert Data Only in Specified Columns</h1>
        <p>It is also possible to only insert data in specific columns.</p>
        <p>The following SQL statement will insert a new record, but only insert data in the "CustomerName", "City", and "Country" columns (CustomerID will be updated automatically):</p>
        <pre>Example

<span style="color: blue;">INSERT INTO</span> Customers (CustomerName, City, Country)
<span style="color: blue;">VALUES</span> (<span style="color: red;">'Cardinal'</span>, <span style="color: red;">'Stavanger'</span>, <span style="color: red;">'Norway'</span>);</pre>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>89</td>
                    <td>White Clover Markets</td>
                    <td>Karl Jablonski</td>
                    <td>305 - 14th Ave. S. Suite 3B</td>
                    <td>Seattle</td>
                    <td>98128</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td>90</td>
                    <td>Wilman Kala</td>
                    <td>Matti Karttunen</td>
                    <td>Keskuskatu 45</td>
                    <td>Helsinki</td>
                    <td>21240</td>
                    <td>Finland</td>
                </tr>
                <tr>
                    <td>91</td>
                    <td>Wolski</td>
                    <td>Zbyszek</td>
                    <td>ul. Filtrowa 68</td>
                    <td>Walla</td>
                    <td>01-012</td>
                    <td>Poland</td>
                </tr>
                <tr>
                    <td>92</td>
                    <td>Cardinal</td>
                    <td>null</td>
                    <td>null</td>
                    <td>Stavanger</td>
                    <td>null</td>
                    <td>Norway</td>
                </tr>
            </tbody>
        </table>
    </section>
    <section id="content-null-values" class="content" style="display: none;">
        <h1>What is a NULL Value?</h1>
        <p>A field with a NULL value is a field with no value.</p>
        <p>If a field in a table is optional, it is possible to insert a new record or update a record without adding a value to this field. Then, the field will be saved with a NULL value.</p>
        <p>Note: A NULL value is different from a zero value or a field that contains spaces. A field with a NULL value is one that has been left blank during record creation!</p>
        <h1>How to Test for NULL Values?</h1>
        <p>It is not possible to test for NULL values with comparison operators, such as =, <, or <>.</p>
        <p>We will have to use the <span style="color: red;">IS NULL</span> and <span style="color: red;">IS NOT NULL</span> operators instead.</p>
        <h1>IS NULL Syntax</h1>
        <pre>
<span style="color: blue;">SELECT</span> column_names
<span style="color: blue;">FROM</span> table_name
<span style="color: blue;">WHERE</span> column_name <span style="color: blue;">IS NULL</span>;</pre>
        <h1>IS NOT NULL Syntax</h1>
        <pre>
<span style="color: blue;">SELECT</span> column_names
<span style="color: blue;">FROM</span> table_name
<span style="color: blue;">WHERE</span> column_name <span style="color: blue;">IS NOT NULL</span>;</pre>
        <h1>Demo Database</h1>
        <p>Below is a selection from the "Customers" table in the Northwind sample database:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Obere Str. 57</td>
                    <td>Berlin</td>
                    <td>12209</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ana Trujillo Emparedados y helados</td>
                    <td>Ana Trujillo</td>
                    <td>Avda. de la Constitución 2222</td>
                    <td>México D.F.</td>
                    <td>05021</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Antonio Moreno Taquería</td>
                    <td>Antonio Moreno</td>
                    <td>Mataderos 2312</td>
                    <td>México D.F.</td>
                    <td>05023</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Around the Horn</td>
                    <td>Thomas Hardy</td>
                    <td>120 Hanover Sq.</td>
                    <td>London</td>
                    <td>WA1 1DP</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Berglunds snabbköp</td>
                    <td>Christina Berglund</td>
                    <td>Berguvsvägen 8</td>
                    <td>Luleå</td>
                    <td>S-958 22</td>
                    <td>Sweden</td>
                </tr>
            </tbody>
        </table>
        <h1>The IS NULL Operator</h1>
        <p>The <span style="color: red;">IS NULL</span> operator is used to test for empty values (NULL values).</p>
        <p>The following SQL lists all customers with a NULL value in the "Address" field:</p>
        <pre>Example

<span style="color: blue;">SELECT</span> CustomerName, ContactName, Address
<span style="color: blue;">FROM</span> Customers
<span style="color: blue;">WHERE</span> Address <span style="color: blue;">IS NULL</span>;</pre>
        <ul>
            <ul>Tip: Always use IS NULL to look for NULL values.</ul>
        </ul>
        <h1>The IS NOT NULL Operator</h1>
        <p>The <span style="color: red;">IS NOT NULL</span> operator is used to test for non-empty values (NOT NULL values).</p>
        <p>The following SQL lists all customers with a value in the "Address" field:</p>
        <pre>Example

<span style="color: blue;">SELECT</span> CustomerName, ContactName, Address
<span style="color: blue;">FROM</span> Customers
<span style="color: blue;">WHERE</span> Address <span style="color: blue;">IS NOT NULL</span>;</pre>
    </section>
    <section id="content-update-statement" class="content" style="display: none;">
        <h1>The MySQL UPDATE Statement</h1>
        <p>The <span style="color: red;">UPDATE</span> statement is used to modify the existing records in a table.</p>
        <h1>UPDATE Syntax</h1>
        <pre>
<span style="color: blue;">UPDATE</span> table_name
<span style="color: blue;">SET</span> column1 = value1, column2 = value2, ...
<span style="color: blue;">WHERE</span> condition;</pre>
        <ul>
            <ul>Note: Be careful when updating records in a table! Notice the <span style="color: red;">WHERE</span> clause in the <span style="color: red;">UPDATE</span> statement. The <span style="color: red;">WHERE</span> clause specifies which record(s) that should be updated. If you omit the <span style="color: red;">WHERE</span> clause, all records in the table will be updated!</ul>
        </ul>
        <h1>Demo Database</h1>
        <p>Below is a selection from the "Customers" table in the Northwind sample database:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Obere Str. 57</td>
                    <td>Berlin</td>
                    <td>12209</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ana Trujillo Emparedados y helados</td>
                    <td>Ana Trujillo</td>
                    <td>Avda. de la Constitución 2222</td>
                    <td>México D.F.</td>
                    <td>05021</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Antonio Moreno Taquería</td>
                    <td>Antonio Moreno</td>
                    <td>Mataderos 2312</td>
                    <td>México D.F.</td>
                    <td>05023</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Around the Horn</td>
                    <td>Thomas Hardy</td>
                    <td>120 Hanover Sq.</td>
                    <td>London</td>
                    <td>WA1 1DP</td>
                    <td>UK</td>
                </tr>
            </tbody>
        </table>
        <h1>UPDATE Table</h1>
        <p>The following SQL statement updates the first customer (CustomerID = 1) with a new contact person and a new city.</p>
        <pre>Example

<span style="color: blue;">UPDATE</span> Customers
<span style="color: blue;">SET</span> ContactName = <span style="color: red;">'Alfred Schmidt'</span>, City = <span style="color: red;">'Frankfurt'</span>
<span style="color: blue;">WHERE</span> CustomerID = <span style="color: red;">1</span>;</pre>
        <p>The selection from the "Customers" table will now look like this:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Obere Str. 57</td>
                    <td>Frankfurt</td>
                    <td>12209</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ana Trujillo Emparedados y helados</td>
                    <td>Ana Trujillo</td>
                    <td>Avda. de la Constitución 2222</td>
                    <td>México D.F.</td>
                    <td>05021</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Antonio Moreno Taquería</td>
                    <td>Antonio Moreno</td>
                    <td>Mataderos 2312</td>
                    <td>México D.F.</td>
                    <td>05023</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Around the Horn</td>
                    <td>Thomas Hardy</td>
                    <td>120 Hanover Sq.</td>
                    <td>London</td>
                    <td>WA1 1DP</td>
                    <td>UK</td>
                </tr>
            </tbody>
        </table>
        <h1>UPDATE Multiple Records</h1>
        <p>It is the <span style="color: red;">WHERE</span> clause that determines how many records will be updated.</p>
        <p>The following SQL statement will update the PostalCode to 00000 for all records where country is "Mexico":</p>
        <pre>Example

<span style="color: blue;">UPDATE</span> Customers
<span style="color: blue;">SET</span> PostalCode = 00000
<span style="color: blue;">WHERE</span> Country = <span style="color: red;">'Mexico'</span>;</pre>
        <p>The selection from the "Customers" table will now look like this:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Obere Str. 57</td>
                    <td>Frankfurt</td>
                    <td>12209</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ana Trujillo Emparedados y helados</td>
                    <td>Ana Trujillo</td>
                    <td>Avda. de la Constitución 2222</td>
                    <td>México D.F.</td>
                    <td>00000</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Antonio Moreno Taquería</td>
                    <td>Antonio Moreno</td>
                    <td>Mataderos 2312</td>
                    <td>México D.F.</td>
                    <td>00000</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Around the Horn</td>
                    <td>Thomas Hardy</td>
                    <td>120 Hanover Sq.</td>
                    <td>London</td>
                    <td>WA1 1DP</td>
                    <td>UK</td>
                </tr>
            </tbody>
        </table>
        <h1>Update Warning!</h1>
        <ul>Be careful when updating records. If you omit the <span style="color: red;">WHERE</span> clause, ALL records will be updated!</ul>
        <pre>Example

<span style="color: blue;">UPDATE</span> Customers
<span style="color: blue;">SET</span> PostalCode = <span style="color: red;">00000</span>;</pre>
        <p>The selection from the "Customers" table will now look like this:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Obere Str. 57</td>
                    <td>Frankfurt</td>
                    <td>00000</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ana Trujillo Emparedados y helados</td>
                    <td>Ana Trujillo</td>
                    <td>Avda. de la Constitución 2222</td>
                    <td>México D.F.</td>
                    <td>00000</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Antonio Moreno Taquería</td>
                    <td>Antonio Moreno</td>
                    <td>Mataderos 2312</td>
                    <td>México D.F.</td>
                    <td>00000</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Around the Horn</td>
                    <td>Thomas Hardy</td>
                    <td>120 Hanover Sq.</td>
                    <td>London</td>
                    <td>00000</td>
                    <td>UK</td>
                </tr>
            </tbody>
        </table>
    </section>
    <section id="content-delete-statement" class="content" style="display: none;">
        <h1>The MySQL DELETE Statement</h1>
        <p>The <span style="color: red;">DELETE</span> statement is used to delete existing records in a table.</p>
        <h1>DELETE Syntax</h1>
        <pre>
<span style="color: blue;">DELETE FROM</span> table_name <span style="color: blue;">WHERE</span> condition;</pre>
        <ul>
            <ul>Note: Be careful when deleting records in a table! Notice the <span style="color: red;">WHERE</span> clause in the <span style="color: red;">DELETE</span> statement. The <span style="color: red;">WHERE</span> clause specifies which record(s) should be deleted. If you omit the <span style="color: red;">WHERE</span> clause, all records in the table will be deleted!</ul>
        </ul>
        <h1>Demo Database</h1>
        <p>Below is a selection from the "Customers" table in the Northwind sample database:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Obere Str. 57</td>
                    <td>Berlin</td>
                    <td>12209</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ana Trujillo Emparedados y helados</td>
                    <td>Ana Trujillo</td>
                    <td>Avda. de la Constitución 2222</td>
                    <td>México D.F.</td>
                    <td>05021</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Antonio Moreno Taquería</td>
                    <td>Antonio Moreno</td>
                    <td>Mataderos 2312</td>
                    <td>México D.F.</td>
                    <td>05023</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Around the Horn</td>
                    <td>Thomas Hardy</td>
                    <td>120 Hanover Sq.</td>
                    <td>London</td>
                    <td>WA1 1DP</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Berglunds snabbköp</td>
                    <td>Christina Berglund</td>
                    <td>Berguvsvägen 8</td>
                    <td>Luleå</td>
                    <td>S-958 22</td>
                    <td>Sweden</td>
                </tr>
            </tbody>
        </table>
        <h1>SQL DELETE Example</h1>
        <p>The following SQL statement deletes the customer "Alfreds Futterkiste" from the "Customers" table:</p>
        <pre>Example

<span style="color: blue;">DELETE FROM</span> Customers <span style="color: blue;">WHERE</span> CustomerName=<span style="color: red;">'Alfreds Futterkiste'</span>;</pre>
        <p>The "Customers" table will now look like this:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2</td>
                    <td>Ana Trujillo Emparedados y helados</td>
                    <td>Ana Trujillo</td>
                    <td>Avda. de la Constitución 2222</td>
                    <td>México D.F.</td>
                    <td>05021</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Antonio Moreno Taquería</td>
                    <td>Antonio Moreno</td>
                    <td>Mataderos 2312</td>
                    <td>México D.F.</td>
                    <td>05023</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Around the Horn</td>
                    <td>Thomas Hardy</td>
                    <td>120 Hanover Sq.</td>
                    <td>London</td>
                    <td>WA1 1DP</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Berglunds snabbköp</td>
                    <td>Christina Berglund</td>
                    <td>Berguvsvägen 8</td>
                    <td>Luleå</td>
                    <td>S-958 22</td>
                    <td>Sweden</td>
                </tr>
            </tbody>
        </table>
        <h1>Delete All Records</h1>
        <p>It is possible to delete all rows in a table without deleting the table. This means that the table structure, attributes, and indexes will be intact:</p>
        <pre>
<span style="color: blue;">DELETE FROM</span> table_name;</pre>
        <p>The following SQL statement deletes all rows in the "Customers" table, without deleting the table:</p>
        <pre>Example

<span style="color: blue;">DELETE FROM</span> Customers;</pre>
    </section>
    <section id="content-module1-quiz" class="content" style="display: none;">
        <h1>Module 1 Quiz</h1>
        <form id="quizForm">
            <div class="question" id="q1">
                <p>1. What is MySQL, and what are some of its key features?</p>
                <input type="radio" name="q1" value="A"> A) MySQL is a relational database management system (RDBMS), open-source, and free. It is fast, reliable, scalable, cross-platform, and compliant with the ANSI SQL standard.<br>
                <input type="radio" name="q1" value="B"> B) MySQL is a commercial database management system that is not free and not open-source.<br>
                <input type="radio" name="q1" value="C"> C) MySQL is a document-based database that is used only for small applications.<br>
                <input type="radio" name="q1" value="D"> D) MySQL is a non-relational database management system (NoSQL) used exclusively for e-commerce platforms.<br>
            </div>
            <div class="question" id="q2">
                <p>2. What is an RDBMS?</p>
                <input type="radio" name="q2" value="A"> A) An RDBMS is a program used to maintain a relational database and uses SQL queries to access the data in the database.<br>
                <input type="radio" name="q2" value="B"> B) An RDBMS is a program that manages non-relational data without the use of SQL queries.<br>
                <input type="radio" name="q2" value="C"> C) An RDBMS is a file storage system for managing large data files.<br>
                <input type="radio" name="q2" value="D"> D) An RDBMS is a cloud service for storing and accessing data without SQL.<br>
            </div>
            <div class="question" id="q3">
                <p>3. What does the SELECT DISTINCT statement do in MySQL?</p>
                <input type="radio" name="q3" value="A"> A) It selects only the first row from the table.<br>
                <input type="radio" name="q3" value="B"> B) It selects all rows, including duplicates, from a table.<br>
                <input type="radio" name="q3" value="C"> C) It returns only distinct (different) values from a specified column in a table.<br>
                <input type="radio" name="q3" value="D"> D) It selects all columns from a table, but only for a specific condition.<br>
            </div>
            <div class="question" id="q4">
                <p>4. What does the WHERE clause do in a MySQL query?</p>
                <input type="radio" name="q4" value="A"> A) It selects all records from a table.<br>
                <input type="radio" name="q4" value="B"> B) It filters records based on a specified condition.<br>
                <input type="radio" name="q4" value="C"> C) It updates the values in a specified table.<br>
                <input type="radio" name="q4" value="D"> D) It groups the records based on a column.<br>
            </div>
            <div class="question" id="q5">
                <p>5. Which of the following operators in MySQL's WHERE clause is used to display records when a condition is NOT TRUE?</p>
                <input type="radio" name="q5" value="A"> A) AND<br>
                <input type="radio" name="q5" value="B"> B) OR<br>
                <input type="radio" name="q5" value="C"> C) NOT<br>
                <input type="radio" name="q5" value="D"> D) BETWEEN<br>
            </div>
            <div class="question" id="q6">
                <p>6. Which of the following SQL statements will sort the "Customers" table by the "Country" column in descending order?</p>
                <input type="radio" name="q6" value="A"> A) SELECT * FROM Customers ORDER BY Country;<br>
                <input type="radio" name="q6" value="B"> B) SELECT * FROM Customers ORDER BY Country DESC;<br>
                <input type="radio" name="q6" value="C"> C) SELECT * FROM Customers ORDER BY CustomerName DESC, Country ASC;<br>
                <input type="radio" name="q6" value="D"> D) SELECT * FROM Customers ORDER BY Country ASC, CustomerName DESC;<br>
            </div>
            <div class="question" id="q7">
                <p>7. Which of the following SQL statements inserts a new record into the "Customers" table and only includes values for the "CustomerName", "City", and "Country" columns, while leaving the other columns to be auto-filled (like "CustomerID")?</p>
                <input type="radio" name="q7" value="A"> A) INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country) VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger', '4006', 'Norway');<br>
                <input type="radio" name="q7" value="B"> B) INSERT INTO Customers VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger', '4006', 'Norway');<br>
                <input type="radio" name="q7" value="C"> C) INSERT INTO Customers (CustomerName, City, Country) VALUES ('Cardinal', 'Stavanger', 'Norway');<br>
                <input type="radio" name="q7" value="D"> D) INSERT INTO Customers (CustomerName, ContactName, City, Country) VALUES ('Cardinal', 'Tom B. Erichsen', 'Stavanger', 'Norway');<br>
            </div>
            <div class="question" id="q8">
                <p>8. Which of the following SQL statements lists all customers from the "Customers" table who have a NULL value in the "Address" field?</p>
                <input type="radio" name="q8" value="A"> A) SELECT CustomerName, ContactName, Address FROM Customers WHERE Address = NULL;<br>
                <input type="radio" name="q8" value="B"> B) SELECT CustomerName, ContactName, Address FROM Customers WHERE Address IS NULL;<br>
                <input type="radio" name="q8" value="C"> C) SELECT CustomerName, ContactName, Address FROM Customers WHERE Address <> NULL;<br>
                    <input type="radio" name="q8" value="D"> D) SELECT CustomerName, ContactName, Address FROM Customers WHERE Address IS NOT NULL;<br>
            </div>
            <div class="question" id="q9">
                <p>9. Which SQL statement will update the City column of the customer with CustomerID = 1 to "Frankfurt"?</p>
                <input type="radio" name="q9" value="A"> A) UPDATE Customers SET City = 'Frankfurt' WHERE CustomerID = 1;<br>
                <input type="radio" name="q9" value="B"> B) UPDATE Customers SET City = 'Frankfurt';<br>
                <input type="radio" name="q9" value="C"> C) UPDATE Customers SET PostalCode = '00000' WHERE Country = 'Germany';<br>
                <input type="radio" name="q9" value="D"> D) UPDATE Customers SET City = 'Frankfurt' WHERE CustomerName = 'Alfreds Futterkiste';<br>
            </div>
            <div class="question" id="q10">
                <p>10. Which SQL statement will delete the customer "Alfreds Futterkiste" from the "Customers" table?</p>
                <input type="radio" name="q10" value="A"> A) DELETE FROM Customers WHERE CustomerName='Alfreds Futterkiste';<br>
                <input type="radio" name="q10" value="B"> B) DELETE FROM Customers;<br>
                <input type="radio" name="q10" value="C"> C) DELETE FROM Customers WHERE City='Berlin';<br>
                <input type="radio" name="q10" value="D"> D) DELETE FROM Customers WHERE CustomerID=1;<br>
            </div>
            <button type="button" class="check-button" onclick="checkAnswers()">Check Answers</button>
        </form>
    </section>

    <!-- Content Sections for Module 2 -->
    <section id="content-mysql-joins" class="content" style="display: none;">
        <h1>MySQL Joining Tables</h1>
        <p>A <span style="color: red;">JOIN</span> clause is used to combine rows from two or more tables, based on a related column between them.</p>
        <p>Let's look at a selection from the "Orders" table:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>OrderID</th>
                    <th>CustomerID</th>
                    <th>OrderDate</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>10308</td>
                    <td>2</td>
                    <td>1996-09-18</td>
                </tr>
                <tr>
                    <td>10309</td>
                    <td>37</td>
                    <td>1996-09-19</td>
                </tr>
                <tr>
                    <td>10310</td>
                    <td>77</td>
                    <td>1996-09-20</td>
                </tr>
            </tbody>
        </table>
        <p>Then, look at a selection from the "Customers" table:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Alfreds Futterkiste </td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ana Trujillo Emparedados y helados</td>
                    <td>Ana Trujillo</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Antonio Moreno Taquería</td>
                    <td>Antonio Moreno</td>
                    <td>Mexico</td>
                </tr>
            </tbody>
        </table>
        <p>Notice that the "CustomerID" column in the "Orders" table refers to the "CustomerID" in the "Customers" table. The relationship between the two tables above is the "CustomerID" column.</p>
        <p>Then, we can create the following SQL statement (that contains an <span style="color: red;">INNER JOIN</span>), that selects records that have matching values in both tables:</p>
        <pre>Example

<span style="color: blue;">SELECT</span> Orders.OrderID, Customers.CustomerName, Orders.OrderDate
<span style="color: blue;">FROM</span> Orders
<span style="color: blue;">INNER JOIN</span> Customers <span style="color: blue;">ON</span> Orders.CustomerID=Customers.CustomerID;</pre>
        <p>and it will produce something like this:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>OrderID</th>
                    <th>CustomerName</th>
                    <th>OrderDate</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>10308</td>
                    <td>Ana Trujillo Emparedados y helados</td>
                    <td>9/18/1996</td>
                </tr>
                <tr>
                    <td>10365</td>
                    <td>Antonio Moreno Taquería</td>
                    <td>11/27/1996</td>
                </tr>
                <tr>
                    <td>10383</td>
                    <td>Around the Horn </td>
                    <td>12/16/1996</td>
                </tr>
                <tr>
                    <td>10355</td>
                    <td>Around the Horn</td>
                    <td>11/15/1996</td>
                </tr>
                <tr>
                    <td>10278</td>
                    <td>Berglunds snabbköp</td>
                    <td>8/12/1996</td>
                </tr>
            </tbody>
        </table>
        <h1>Supported Types of Joins in MySQL</h1>
        <ul>
            <li><span style="color: red;">INNER JOIN</span>: Returns records that have matching values in both tables</li>
            <li><span style="color: red;">LEFT JOIN</span>: Returns all records from the left table, and the matched records from the right table</li>
            <li><span style="color: red;">RIGHT JOIN</span>: Returns all records from the right table, and the matched records from the left table</li>
            <li><span style="color: red;">CROSS JOIN</span>: Returns all records from both tables</li>
        </ul>
        <img src="https://www.w3schools.com/mysql/img_inner_join.png" alt="MySQL INNER JOIN Image">
        <img src="https://www.w3schools.com/mysql/img_left_join.png" alt="MySQL LEFT JOIN Image">
        <img src="https://www.w3schools.com/mysql/img_right_join.png" alt="MySQL RIGHT JOIN Image">
        <img src="https://www.w3schools.com/mysql/img_cross_join.png" alt="MySQL CROSS JOIN Image">
    </section>
    <section id="content-inner-join" class="content" style="display: none;">
        <h1>MySQL INNER JOIN Keyword</h1>
        <p>The <span style="color: red;">INNER JOIN</span> keyword selects records that have matching values in both tables.</p>
        <div style="text-align: center;">
            <img src="https://www.w3schools.com/mysql/img_inner_join.png" alt="MySQL INNER JOIN Image">
        </div>
        <h1>INNER JOIN Syntax</h1>
        <pre>
<span style="color: blue;">SELECT</span> column_name(s)
<span style="color: blue;">FROM</span> table1
<span style="color: blue;">INNER JOIN</span> table2
<span style="color: blue;">ON</span> table1.column_name = table2.column_name;</pre>
        <h1>Demo Database</h1>
        <p>In this tutorial we will use the well-known Northwind sample database.</p>
        <p>Below is a selection from the "Orders" table:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>OrderID</th>
                    <th>CustomerID</th>
                    <th>EmployeeID</th>
                    <th>OrderDate</th>
                    <th>ShipperID</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>10308</td>
                    <td>2</td>
                    <td>7</td>
                    <td>1996-09-18</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>10309</td>
                    <td>37</td>
                    <td>3</td>
                    <td>1996-09-19</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>10310</td>
                    <td>77</td>
                    <td>8</td>
                    <td>1996-09-20</td>
                    <td>2</td>
                </tr>
            </tbody>
        </table>
        <p>And a selection from the "Customers" table:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Alfreds Futterkiste </td>
                    <td>Maria Anders</td>
                    <td>Obere Str. 57</td>
                    <td>Berlin</td>
                    <td>12209</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ana Trujillo Emparedados y helados</td>
                    <td>Ana Trujillo</td>
                    <td>Avda. de la Constitución 2222</td>
                    <td>México D.F.</td>
                    <td>05021</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Antonio Moreno Taquería</td>
                    <td>Antonio Moreno</td>
                    <td>Mataderos 2312</td>
                    <td>México D.F.</td>
                    <td>05023</td>
                    <td>Mexico</td>
                </tr>
            </tbody>
        </table>
        <h1>MySQL INNER JOIN Example</h1>
        <p>The following SQL statement selects all orders with customer information:</p>
        <pre>Example

<span style="color: blue;">SELECT</span> Orders.OrderID, Customers.CustomerName
<span style="color: blue;">FROM</span> Orders
<span style="color: blue;">INNER JOIN</span> Customers <span style="color: blue;">ON</span> Orders.CustomerID = Customers.CustomerID;</pre>
        <ul>
            <ul>Note: The <span style="color: red;">INNER JOIN</span> keyword selects all rows from both tables as long as there is a match between the columns. If there are records in the "Orders" table that do not have matches in "Customers", these orders will not be shown!</ul>
        </ul>
        <h1>JOIN Three Tables</h1>
        <p>The following SQL statement selects all orders with customer and shipper information:</p>
        <pre>Example

<span style="color: blue;">SELECT</span> Orders.OrderID, Customers.CustomerName, Shippers.ShipperName
<span style="color: blue;">FROM</span> ((Orders
<span style="color: blue;">INNER JOIN</span> Customers <span style="color: blue;">ON</span> Orders.CustomerID = Customers.CustomerID)
<span style="color: blue;">INNER JOIN</span> Shippers <span style="color: blue;">ON</span> Orders.ShipperID = Shippers.ShipperID);</pre>
    </section>

    <section id="content-left-join" class="content" style="display: none;">
        <h1>MySQL LEFT JOIN Keyword</h1>
        <p>The <span style="color: red;">LEFT JOIN</span> keyword returns all records from the left table (table1), and the matching records (if any) from the right table (table2).</p>
        <div style="text-align: center;">
            <img src="https://www.w3schools.com/mysql/img_left_join.png" alt="MySQL LEFT JOIN Image">
        </div>
        <h1>LEFT JOIN Syntax</h1>
        <pre>
<span style="color: blue;">SELECT</span> column_name(s)
<span style="color: blue;">FROM</span> table1
<span style="color: blue;">LEFT JOIN</span> table2
<span style="color: blue;">ON</span> table1.column_name = table2.column_name;</pre>
        <h1>Demo Database</h1>
        <p>In this tutorial we will use the well-known Northwind sample database.</p>
        <p>Below is a selection from the "Customers" table:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Alfreds Futterkiste </td>
                    <td>Maria Anders</td>
                    <td>Obere Str. 57</td>
                    <td>Berlin</td>
                    <td>12209</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ana Trujillo Emparedados y helados</td>
                    <td>Ana Trujillo</td>
                    <td>Avda. de la Constitución 2222</td>
                    <td>México D.F.</td>
                    <td>05021</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Antonio Moreno Taquería</td>
                    <td>Antonio Moreno</td>
                    <td>Mataderos 2312</td>
                    <td>México D.F.</td>
                    <td>05023</td>
                    <td>Mexico</td>
                </tr>
            </tbody>
        </table>
        <p>And a selection from the "Orders" table:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>OrderID</th>
                    <th>CustomerID</th>
                    <th>EmployeeID</th>
                    <th>OrderDate</th>
                    <th>ShipperID</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>10308</td>
                    <td>2</td>
                    <td>7</td>
                    <td>1996-09-18</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>10309</td>
                    <td>37</td>
                    <td>3</td>
                    <td>1996-09-19</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>10310</td>
                    <td>77</td>
                    <td>8</td>
                    <td>1996-09-20</td>
                    <td>2</td>
                </tr>
            </tbody>
        </table>
        <h1>MySQL LEFT JOIN Example</h1>
        <p>The following SQL statement will select all customers, and any orders they might have:</p>
        <pre>Example

<span style="color: blue;">SELECT</span> Customers.CustomerName, Orders.OrderID
<span style="color: blue;">FROM</span> Customers
<span style="color: blue;">LEFT JOIN</span> Orders <span style="color: blue;">ON</span> Customers.CustomerID = Orders.CustomerID
<span style="color: blue;">ORDER BY</span> Customers.CustomerName;</pre>
        <ul>
            <ul>Note: The <span style="color: red;">LEFT JOIN</span> keyword returns all records from the left table (Customers), even if there are no matches in the right table (Orders).</ul>
        </ul>
    </section>

    <section id="content-right-join" class="content" style="display: none;">
        <h1>MySQL RIGHT JOIN Keyword</h1>
        <p>The <span style="color: red;">RIGHT JOIN</span> keyword returns all records from the right table (table2), and the matching records (if any) from the left table (table1).</p>
        <div style="text-align: center;">
            <img src="https://www.w3schools.com/mysql/img_right_join.png" alt="MySQL RIGHT JOIN Image">
        </div>
        <h1>RIGHT JOIN Syntax</h1>
        <pre>
<span style="color: blue;">SELECT</span> column_name(s)
<span style="color: blue;">FROM</span> table1
<span style="color: blue;">RIGHT JOIN</span> table2
<span style="color: blue;">ON</span> table1.column_name = table2.column_name;</pre>
        <h1>Demo Database</h1>
        <p>In this tutorial we will use the well-known Northwind sample database.</p>
        <p>Below is a selection from the "Orders" table:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>OrderID</th>
                    <th>CustomerID</th>
                    <th>EmployeeID</th>
                    <th>OrderDate</th>
                    <th>ShipperID</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>10308</td>
                    <td>2</td>
                    <td>7</td>
                    <td>1996-09-18</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>10309</td>
                    <td>37</td>
                    <td>3</td>
                    <td>1996-09-19</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>10310</td>
                    <td>77</td>
                    <td>8</td>
                    <td>1996-09-20</td>
                    <td>2</td>
                </tr>
            </tbody>
        </table>
        <p>And a selection from the "Employees" table:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>EmployeeID</th>
                    <th>LastName</th>
                    <th>FirstName</th>
                    <th>BirthDate</th>
                    <th>Photo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Davolio</td>
                    <td>Nancy</td>
                    <td>12/8/1968</td>
                    <td>EmpID1.pic</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Fuller</td>
                    <td>Andrew</td>
                    <td>2/19/1952</td>
                    <td>EmpID2.pic</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Leverling</td>
                    <td>Janet</td>
                    <td>8/30/1963</td>
                    <td>EmpID3.pic</td>
                </tr>
            </tbody>
        </table>
        <h1>MySQL RIGHT JOIN Example</h1>
        <p>The following SQL statement will return all employees, and any orders they might have placed:</p>
        <pre>Example
    
<span style="color: blue;">SELECT</span> Orders.OrderID, Employees.LastName, Employees.FirstName
<span style="color: blue;">FROM</span> Orders
<span style="color: blue;">RIGHT JOIN</span> Employees <span style="color: blue;">ON</span> Orders.EmployeeID = Employees.EmployeeID
<span style="color: blue;">ORDER BY</span> Orders.OrderID;</pre>
        <ul>
            <ul>Note: The <span style="color: red;">RIGHT JOIN</span> keyword returns all records from the right table (Employees), even if there are no matches in the left table (Orders).</ul>
        </ul>
    </section>

    <section id="content-cross-join" class="content" style="display: none;">
        <h1>SQL CROSS JOIN Keyword</h1>
        <p>The <span style="color: red;">CROSS JOIN</span> keyword returns all records from both tables (table1 and table2).</p>
        <div style="text-align: center;">
            <img src="https://www.w3schools.com/mysql/img_cross_join.png" alt="MySQL CROSS JOIN Image">
        </div>
        <h1>CROSS JOIN Syntax</h1>
        <pre>
<span style="color: blue;">SELECT</span> column_name(s)
<span style="color: blue;">FROM</span> table1
<span style="color: blue;">CROSS JOIN</span> table2;</pre>
        <ul>
            <ul>Note: <span style="color: red;">CROSS JOIN</span> can potentially return very large result-sets!</ul>
        </ul>
        <h1>Demo Database</h1>
        <p>In this tutorial we will use the well-known Northwind sample database.</p>
        <p>Below is a selection from the "Customers" table:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Alfreds Futterkiste </td>
                    <td>Maria Anders</td>
                    <td>Obere Str. 57</td>
                    <td>Berlin</td>
                    <td>12209</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ana Trujillo Emparedados y helados</td>
                    <td>Ana Trujillo</td>
                    <td>Avda. de la Constitución 2222</td>
                    <td>México D.F.</td>
                    <td>05021</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Antonio Moreno Taquería</td>
                    <td>Antonio Moreno</td>
                    <td>Mataderos 2312</td>
                    <td>México D.F.</td>
                    <td>05023</td>
                    <td>Mexico</td>
                </tr>
            </tbody>
        </table>
        <p>And a selection from the "Orders" table:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>OrderID</th>
                    <th>CustomerID</th>
                    <th>EmployeeID</th>
                    <th>OrderDate</th>
                    <th>ShipperID</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>10308</td>
                    <td>2</td>
                    <td>7</td>
                    <td>1996-09-18</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>10309</td>
                    <td>37</td>
                    <td>3</td>
                    <td>1996-09-19</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>10310</td>
                    <td>77</td>
                    <td>8</td>
                    <td>1996-09-20</td>
                    <td>2</td>
                </tr>
            </tbody>
        </table>
        <h1>MySQL CROSS JOIN Example</h1>
        <p>The following SQL statement selects all customers, and all orders:</p>
        <pre>Example
    
<span style="color: blue;">SELECT</span> Customers.CustomerName, Orders.OrderID
<span style="color: blue;">FROM</span> Customers
<span style="color: blue;">CROSS JOIN</span> Orders;</pre>
        <ul>
            <ul>Note: The <span style="color: red;">CROSS JOIN</span> keyword returns all matching records from both tables whether the other table matches or not. So, if there are rows in "Customers" that do not have matches in "Orders", or if there are rows in "Orders" that do not have matches in "Customers", those rows will be listed as well.</ul>
        </ul>
        <ul>
            <ul>If you add a <span style="color: red;">WHERE</span> clause (if table1 and table2 has a relationship), the <span style="color: red;">CROSS JOIN</span> will produce the same result as the <span style="color: red;">INNER JOIN</span> clause:</ul>
        </ul>
        <pre>Example

<span style="color: blue;">SELECT</span> Customers.CustomerName, Orders.OrderID
<span style="color: blue;">FROM</span> Customers
<span style="color: blue;">CROSS JOIN</span> Orders
<span style="color: blue;">WHERE</span> Customers.CustomerID=Orders.CustomerID;</pre>
    </section>

    <section id="content-self-join" class="content" style="display: none;">
        <h1>MySQL Self Join</h1>
        <p>A self join is a regular join, but the table is joined with itself.</p>
        <h1>Self Join Syntax</h1>
        <pre>
<span style="color: blue;">SELECT</span> column_name(s)
<span style="color: blue;">FROM</span> table1 T1, table1 T2
<span style="color: blue;">WHERE</span> condition;</pre>
        <p>T1 and T2 are different table aliases for the same table.</p>
        <h1>Demo Database</h1>
        <p>In this tutorial we will use the well-known Northwind sample database.</p>
        <p>Below is a selection from the "Customers" table:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Alfreds Futterkiste </td>
                    <td>Maria Anders</td>
                    <td>Obere Str. 57</td>
                    <td>Berlin</td>
                    <td>12209</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ana Trujillo Emparedados y helados</td>
                    <td>Ana Trujillo</td>
                    <td>Avda. de la Constitución 2222</td>
                    <td>México D.F.</td>
                    <td>05021</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Antonio Moreno Taquería</td>
                    <td>Antonio Moreno</td>
                    <td>Mataderos 2312</td>
                    <td>México D.F.</td>
                    <td>05023</td>
                    <td>Mexico</td>
                </tr>
            </tbody>
        </table>
        <h1>MySQL Self Join Example</h1>
        <p>The following SQL statement matches customers that are from the same city:</p>
        <pre>Example
    
<span style="color: blue;">SELECT</span> A.CustomerName AS CustomerName1, B.CustomerName AS CustomerName2, A.City
<span style="color: blue;">FROM</span> Customers A, Customers B
<span style="color: blue;">WHERE</span> A.CustomerID <> B.CustomerID
<span style="color: blue;">AND</span> A.City = B.City
<span style="color: blue;">ORDER BY</span> A.City;</pre>
    </section>

    <section id="content-union" class="content" style="display: none;">
        <h1>The MySQL UNION Operator</h1>
        <p>The <span style="color: red;">UNION</span> operator is used to combine the result-set of two or more <span style="color: red;">SELECT</span> statements.</p>
        <ul>
            <li>Every <span style="color: red;">SELECT</span> statement within <span style="color: red;">UNION</span> must have the same number of columns</li>
            <li>The columns must also have similar data types</li>
            <li>The columns in every <span style="color: red;">SELECT</span> statement must also be in the same order</li>
        </ul>
        <h1>UNION Syntax</h1>
        <pre>
<span style="color: blue;">SELECT</span> column_name(s) <span style="color: blue;">FROM</span> table1
<span style="color: blue;">UNION</span>
<span style="color: blue;">SELECT</span> column_name(s) <span style="color: blue;">FROM</span> table2;</pre>
        <h1>UNION ALL Syntax</h1>
        <p>The <span style="color: red;">UNION</span> operator selects only distinct values by default. To allow duplicate values, use UNION ALL:</p>
        <pre>
<span style="color: blue;">SELECT</span> column_name(s) <span style="color: blue;">FROM</span> table1
<span style="color: blue;">UNION ALL</span>
<span style="color: blue;">SELECT</span> column_name(s) <span style="color: blue;">FROM</span> table2;</pre>
        <ul>
            <ul>Note: The column names in the result-set are usually equal to the column names in the first SELECT statement.</ul>
        </ul>
        <h1>Demo Database</h1>
        <p>In this tutorial we will use the well-known Northwind sample database.</p>
        <p>Below is a selection from the "Customers" table:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Alfreds Futterkiste </td>
                    <td>Maria Anders</td>
                    <td>Obere Str. 57</td>
                    <td>Berlin</td>
                    <td>12209</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ana Trujillo Emparedados y helados</td>
                    <td>Ana Trujillo</td>
                    <td>Avda. de la Constitución 2222</td>
                    <td>México D.F.</td>
                    <td>05021</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Antonio Moreno Taquería</td>
                    <td>Antonio Moreno</td>
                    <td>Mataderos 2312</td>
                    <td>México D.F.</td>
                    <td>05023</td>
                    <td>Mexico</td>
                </tr>
            </tbody>
        </table>
        <p>And a selection from the "Suppliers" table:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>SupplierID</th>
                    <th>SupplierName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Exotic Liquid</td>
                    <td>Charlotte Cooper</td>
                    <td>49 Gilbert St.</td>
                    <td>London</td>
                    <td>EC1 4SD</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>New Orleans Cajun Delights</td>
                    <td>Shelley Burke</td>
                    <td>P.O. Box 78934</td>
                    <td>New Orleans</td>
                    <td>70117</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Grandma Kelly's Homestead</td>
                    <td>Regina Murphy</td>
                    <td>707 Oxford Rd.</td>
                    <td>Ann Arbor</td>
                    <td>48104</td>
                    <td>USA</td>
                </tr>
            </tbody>
        </table>
        <h1>SQL UNION Example</h1>
        <p>The following SQL statement returns the cities (only distinct values) from both the "Customers" and the "Suppliers" table:</p>
        <pre>Example
    
<span style="color: blue;">SELECT</span> City <span style="color: blue;">FROM</span> Customers
<span style="color: blue;">UNION</span>
<span style="color: blue;">SELECT</span> City <span style="color: blue;">FROM</span> Suppliers
<span style="color: blue;">ORDER BY</span> City</pre>
        <ul>
            <ul>Note: If some customers or suppliers have the same city, each city will only be listed once, because <span style="color: red;">UNION</span> selects only distinct values. Use <span style="color: red;">UNION ALL</span> to also select duplicate values!</ul>
        </ul>
        <h1>SQL UNION ALL Example</h1>
        <p>The following SQL statement returns the cities (duplicate values also) from both the "Customers" and the "Suppliers" table:</p>
        <pre>Example

<span style="color: blue;">SELECT</span> City <span style="color: blue;">FROM</span> Customers
<span style="color: blue;">UNION ALL</span>
<span style="color: blue;">SELECT</span> City <span style="color: blue;">FROM</span> Suppliers
<span style="color: blue;">ORDER BY</span> City;</pre>
        <h1>SQL UNION With WHERE</h1>
        <p>The following SQL statement returns the German cities (only distinct values) from both the "Customers" and the "Suppliers" table:</p>
        <pre>Example

<span style="color: blue;">SELECT</span> City, Country <span style="color: blue;">FROM</span> Customers
<span style="color: blue;">WHERE</span> Country=<span style="color: red;">'Germany'</span>
<span style="color: blue;">UNION</span>
<span style="color: blue;">SELECT</span> City, Country <span style="color: blue;">FROM</span> Suppliers
<span style="color: blue;">WHERE</span> Country=<span style="color: red;">'Germany'</span>
<span style="color: blue;">ORDER BY</span> City;</pre>
        <h1>SQL UNION ALL With WHERE</h1>
        <p>The following SQL statement returns the German cities (duplicate values also) from both the "Customers" and the "Suppliers" table:</p>
        <pre>Example

<span style="color: blue;">SELECT</span> City, Country <span style="color: blue;">FROM</span> Customers
<span style="color: blue;">WHERE</span> Country=<span style="color: red;">'Germany'</span>
<span style="color: blue;">UNION ALL</span>
<span style="color: blue;">SELECT</span> City, Country <span style="color: blue;">FROM</span> Suppliers
<span style="color: blue;">WHERE</span> Country=<span style="color: red;">'Germany'</span>
<span style="color: blue;">ORDER BY</span> City;</pre>
        <h1>Another UNION Example</h1>
        <p>The following SQL statement lists all customers and suppliers:</p>
        <pre>Example

<span style="color: blue;">SELECT</span> <span style="color: red;">'Customer'</span> <span style="color: blue;">AS</span> Type, ContactName, City, Country
<span style="color: blue;">FROM</span> Customers
<span style="color: blue;">UNION</span>
<span style="color: blue;">SELECT</span> <span style="color: red;">'Supplier'</span>, ContactName, City, Country
<span style="color: blue;">FROM</span> Suppliers;</pre>
        <ul>
            <ul>Notice the "AS Type" above - it is an alias. SQL Aliases are used to give a table or a column a temporary name. An alias only exists for the duration of the query. So, here we have created a temporary column named "Type", that list whether the contact person is a "Customer" or a "Supplier".</ul>
        </ul>
    </section>
    <section id="content-module2-quiz" class="content" style="display: none;">
        <h1>Module 2 Quiz</h1>
        <form id="quizForm">
            <div class="question" id="q1">
                <p>1. Consider the following tables:</p>
                <p>Orders Table:</p>
                <table>
                    <thead>
                        <tr>
                            <th>OrderID</th>
                            <th>CustomerID</th>
                            <th>OrderDate</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10308</td>
                            <td>2</td>
                            <td>1996-09-18</td>
                        </tr>
                        <tr>
                            <td>10309</td>
                            <td>37</td>
                            <td>1996-09-19</td>
                        </tr>
                        <tr>
                            <td>10310</td>
                            <td>77</td>
                            <td>1996-09-20</td>
                        </tr>
                    </tbody>
                </table>
                <p>Customers Table:</p>
                <table>
                    <thead>
                        <tr>
                            <th>CustomerID</th>
                            <th>CustomerName</th>
                            <th>ContactName</th>
                            <th>Country</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Alfreds Futterkiste</td>
                            <td>Maria Anders</td>
                            <td>Germany</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ana Trujillo Emparedados y helados</td>
                            <td>Ana Trujillo</td>
                            <td>Mexico</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Antonio Moreno Taquería</td>
                            <td>Antonio Moreno</td>
                            <td>Mexico</td>
                        </tr>
                    </tbody>
                </table>
                <p>Which of the following SQL queries would return the OrderID, CustomerName, and OrderDate for all orders placed by customers from Mexico?</p>
                <input type="radio" name="q1" value="A"> A)
                <pre>SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate
FROM Orders
INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID
WHERE Customers.Country = 'Mexico';</pre><br>
                <input type="radio" name="q1" value="B"> B)
                <pre>SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate
FROM Orders
LEFT JOIN Customers ON Orders.CustomerID = Customers.CustomerID
WHERE Customers.Country = 'Mexico';</pre><br>
                <input type="radio" name="q1" value="C"> C)
                <pre>SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate
FROM Orders
RIGHT JOIN Customers ON Orders.CustomerID = Customers.CustomerID
WHERE Customers.Country = 'Mexico';</pre><br>
                <input type="radio" name="q1" value="D"> D)
                <pre>SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate
FROM Orders
CROSS JOIN Customers
WHERE Customers.Country = 'Mexico';</pre><br>
            </div>
            <div class="question" id="q2">
                <p>2. What will be the output of the following SQL query?</p>
                <pre>SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate
FROM Orders
INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID;</pre>
                <input type="radio" name="q2" value="A"> A) It will display all the orders, including those with no customer information.<br>
                <input type="radio" name="q2" value="B"> B) It will display only the orders that have matching customer records in the Customers table.<br>
                <input type="radio" name="q2" value="C"> C) It will display all customers, including those with no orders.<br>
                <input type="radio" name="q2" value="D"> D) It will display an error because INNER JOIN is not supported<br>
            </div>
            <div class="question" id="q3">
                <p>3. What will be the result of the following SQL query?</p>
                <pre>SELECT Customers.CustomerName, Orders.OrderID
FROM Customers
LEFT JOIN Orders ON Customers.CustomerID = Orders.CustomerID
ORDER BY Customers.CustomerName;</pre>
                <input type="radio" name="q3" value="A"> A) It will display only customers who have placed orders.<br>
                <input type="radio" name="q3" value="B"> B) It will display all customers along with their orders, if any, ordered by customer name.<br>
                <input type="radio" name="q3" value="C"> C) It will display only customers who have not placed any orders.<br>
                <input type="radio" name="q3" value="D"> D) It will display an error because LEFT JOIN cannot be used with the "Orders" table.<br>
            </div>
            <div class="question" id="q4">
                <p>4. What does the LEFT JOIN keyword do in the following SQL query?</p>
                <pre>SELECT Customers.CustomerName, Orders.OrderID
FROM Customers
LEFT JOIN Orders ON Customers.CustomerID = Orders.CustomerID;</pre>
                <input type="radio" name="q4" value="A"> A) It returns only the customers who have orders.<br>
                <input type="radio" name="q4" value="B"> B) It returns all records from the "Customers" table, including those without matching orders.<br>
                <input type="radio" name="q4" value="C"> C) It returns only orders that have a matching customer.<br>
                <input type="radio" name="q4" value="D"> D) It returns all records from the "Orders" table, including those without matching customers.<br>
            </div>
            <div class="question" id="q5">
                <p>5. What does the RIGHT JOIN keyword do in the following SQL query?</p>
                <pre>SELECT Orders.OrderID, Employees.LastName, Employees.FirstName
FROM Orders
RIGHT JOIN Employees ON Orders.EmployeeID = Employees.EmployeeID
ORDER BY Orders.OrderID;</pre>
                <input type="radio" name="q5" value="A"> A) It returns only employees who have placed orders.<br>
                <input type="radio" name="q5" value="B"> B) It returns all records from the "Orders" table, including those without matching employees.<br>
                <input type="radio" name="q5" value="C"> C) It returns all records from the "Employees" table, including those without matching orders.<br>
                <input type="radio" name="q5" value="D"> D) It returns only orders with matching employees.<br>
            </div>
            <div class="question" id="q6">
                <p>6. What does the CROSS JOIN keyword do in the following SQL query?</p>
                <pre>SELECT Customers.CustomerName, Orders.OrderID
FROM Customers
CROSS JOIN Orders;</pre>
                <input type="radio" name="q6" value="A"> A) It returns only records that have matching values between the "Customers" and "Orders" tables.<br>
                <input type="radio" name="q6" value="B"> B) It returns all records from the "Customers" table and all records from the "Orders" table, creating a combination of every row from both tables.<br>
                <input type="radio" name="q6" value="C"> C) It returns only orders placed by each customer.<br>
                <input type="radio" name="q6" value="D"> D) It returns only customers who have placed an order.<br>
            </div>
            <div class="question" id="q7">
                <p>7. What does the following SQL query do?</p>
                <pre>SELECT A.CustomerName AS CustomerName1, B.CustomerName AS CustomerName2, A.City
FROM Customers A, Customers B
WHERE A.CustomerID <> B.CustomerID
AND A.City = B.City
ORDER BY A.City;</pre>
                        <input type="radio" name="q7" value="A"> A) It returns a list of customers who have the same name.<br>
                        <input type="radio" name="q7" value="B"> B) It matches customers who live in the same city and displays pairs of customer names from the same city.<br>
                        <input type="radio" name="q7" value="C"> C) It returns all customers who have placed an order.<br>
                        <input type="radio" name="q7" value="D"> D) It lists customers who live in different cities.<br>
                    </div>
                    <div class="question" id="q8">
                        <p>8. What is the result of a SQL query using the CROSS JOIN keyword?</p>
                        <input type="radio" name="q8" value="A"> A) It returns only the matching records from both tables based on a condition.<br>
                        <input type="radio" name="q8" value="B"> B) It returns all records from both tables, even if there is no match.<br>
                        <input type="radio" name="q8" value="C"> C) It only returns records from the first table.<br>
                        <input type="radio" name="q8" value="D"> D) It returns records where the specified condition is not met.<br>
                    </div>
                    <div class="question" id="q9">
                        <p>9. What is the main difference between the UNION and UNION ALL operators in SQL?</p>
                        <input type="radio" name="q9" value="A"> A) UNION returns only distinct values, while UNION ALL returns all values including duplicates.<br>
                        <input type="radio" name="q9" value="B"> B) UNION returns all values including duplicates, while UNION ALL returns only distinct values.<br>
                        <input type="radio" name="q9" value="C"> C) UNION and UNION ALL are the same, and there is no difference between them.<br>
                        <input type="radio" name="q9" value="D"> D) UNION is used to combine data from two tables, while UNION ALL is used to combine data from three tables.<br>
                    </div>
                    <div class="question" id="q10">
                        <p>10. Which of the following statements is true when using the UNION operator in SQL?</p>
                        <input type="radio" name="q10" value="A"> A) The number of columns in each SELECT statement must be different.<br>
                        <input type="radio" name="q10" value="B"> B) The data types of the columns in each SELECT statement must be different.<br>
                        <input type="radio" name="q10" value="C"> C) The columns in each SELECT statement must be in the same order and have similar data types.<br>
                        <input type="radio" name="q10" value="D"> D) The UNION operator can only be used to combine results from two tables.<br>
                    </div>
                    <button type="button" class="check-button" onclick="checkAnswers()">Check Answers</button>
                </form>
            </section>

    <!-- Content Sections for Module 3 -->
    <section id="content-count-avg-sum" class="content" style="display: none;">
        <h1>MySQL COUNT(), AVG() and SUM() Functions</h1>
        <p>The <span style="color: red;">COUNT()</span> function returns the number of rows that matches a specified criterion.</p>
        <h1>COUNT() Syntax</h1>
        <pre>
<span style="color: blue;">SELECT</span> COUNT(column_name)
<span style="color: blue;">FROM</span> table_name
<span style="color: blue;">WHERE</span> condition;</pre>
        <p>The <span style="color: red;">AVG()</span> function returns the average value of a numeric column. </p>
        <h1>AVG() Syntax</h1>
        <pre>
<span style="color: blue;">SELECT</span> AVG(column_name)
<span style="color: blue;">FROM</span> table_name
<span style="color: blue;">WHERE</span> condition;</pre>
        <p>The <span style="color: red;">SUM()</span> function returns the total sum of a numeric column. </p>
        <h1>SUM() Syntax</h1>
        <pre>
<span style="color: blue;">SELECT</span> SUM(column_name)
<span style="color: blue;">FROM</span> table_name
<span style="color: blue;">WHERE</span> condition;</pre>
        <h1>Demo Database</h1>
        <p>Below is a selection from the "Products" table in the Northwind sample database:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>ProductID</th>
                    <th>ProductName</th>
                    <th>SupplierID</th>
                    <th>CategoryID</th>
                    <th>Unit</th>
                    <th>Pice</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <th>Chais</th>
                    <th>1</th>
                    <th>1</th>
                    <th>10 boxes x 20 bags</th>
                    <th>18</th>
                </tr>
                <tr>
                    <th>2</th>
                    <th>Chang</th>
                    <th>1</th>
                    <th>1</th>
                    <th>24 - 12 oz bottles</th>
                    <th>19</th>
                </tr>
                <tr>
                    <th>3</th>
                    <th>Aniseed Syrup</th>
                    <th>1</th>
                    <th>2</th>
                    <th>12 - 550 ml bottles</th>
                    <th>10</th>
                </tr>
                <tr>
                    <th>4</th>
                    <th>Chef Anton's Cajun Seasoning</th>
                    <th>2</th>
                    <th>2</th>
                    <th>48 - 6 oz jars</th>
                    <th>22</th>
                </tr>
                <tr>
                    <th>5</th>
                    <th>Chef Anton's Gumbo Mix</th>
                    <th>2</th>
                    <th>2</th>
                    <th>36 boxes</th>
                    <th>21.35</th>
                </tr>
            </tbody>
        </table>
        <h1>COUNT() Example</h1>
        <p>The following SQL statement finds the number of products:</p>
        <pre>Example
    
<span style="color: blue;">SELECT COUNT</span> (ProductID)
<span style="color: blue;">FROM</span> Products;</pre>
        <ul>
            <ul>Note: NULL values are not counted.</ul>
        </ul>
        <h1>AVG() Example</h1>
        <p>The following SQL statement finds the average price of all products:</p>
        <pre>Example
    
<span style="color: blue;">SELECT</span> AVG(Price)
<span style="color: blue;">FROM</span> Products;</pre>
        <ul>
            <ul>Note: NULL values are ignored.</ul>
        </ul>
        <h1>Demo Database</h1>
        <p>Below is a selection from the "OrderDetails" table in the Northwind sample database:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>OrderDetailID</th>
                    <th>OrderID</th>
                    <th>ProductID</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <th>10248</th>
                    <th>11</th>
                    <th>12</th>
                </tr>
                <tr>
                    <th>2</th>
                    <th>10248</th>
                    <th>42</th>
                    <th>10</th>
                </tr>
                <tr>
                    <th>3</th>
                    <th>10248</th>
                    <th>72</th>
                    <th>5</th>
                </tr>
                <tr>
                    <th>4</th>
                    <th>10249</th>
                    <th>14</th>
                    <th>9</th>
                </tr>
                <tr>
                    <th>5</th>
                    <th>10249</th>
                    <th>51</th>
                    <th>40</th>
                </tr>
            </tbody>
        </table>
        <h1>SUM() Example</h1>
        <p>The following SQL statement finds the sum of the "Quantity" fields in the "OrderDetails" table:</p>
        <pre>Example

<span style="color: blue;">SELECT</span> SUM(Quantity)
<span style="color: blue;">FROM</span> OrderDetails;</pre>
        <ul>
            <ul>Note: NULL values are ignored.</ul>
        </ul>
    </section>

    <section id="content-min-max" class="content" style="display: none;">
        <h1>MySQL MIN() and MAX() Functions</h1>
        <p>The <span style="color: red;">MIN()</span> function returns the smallest value of the selected column.</p>
        <p>The <span style="color: red;">MAX()</span> function returns the largest value of the selected column.</p>
        <h1>MIN() Syntax</h1>
        <pre>
<span style="color: blue;">SELECT</span> MIN(column_name)
<span style="color: blue;">FROM</span> table_name
<span style="color: blue;">WHERE</span> condition;</pre>
        <h1>MAX() Syntax</h1>
        <pre>
<span style="color: blue;"> MAX(column_name)
<span style="color: blue;">FROM</span> table_name
<span style="color: blue;">WHERE</span> condition;</pre>
        <h1>Demo Database</h1>
        <p>Below is a selection from the "Products" table in the Northwind sample database:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>OrderDetailID</th>
                    <th>OrderID</th>
                    <th>ProductID</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <th>10248</th>
                    <th>11</th>
                    <th>12</th>
                </tr>
                <tr>
                    <th>2</th>
                    <th>10248</th>
                    <th>42</th>
                    <th>10</th>
                </tr>
                <tr>
                    <th>3</th>
                    <th>10248</th>
                    <th>72</th>
                    <th>5</th>
                </tr>
                <tr>
                    <th>4</th>
                    <th>10249</th>
                    <th>14</th>
                    <th>9</th>
                </tr>
                <tr>
                    <th>5</th>
                    <th>10249</th>
                    <th>51</th>
                    <th>40</th>
                </tr>
            </tbody>
        </table>
        <h1>MIN() Example</h1>
        <p>The following SQL statement finds the price of the cheapest product:</p>
        <pre>Example
    
<span style="color: blue;">SELECT</span> MIN(Price) <span style="color: blue;">AS</span> SmallestPrice
<span style="color: blue;">FROM</span> Products;</pre>
        <h1>MAX() Example</h1>
        <p>The following SQL statement finds the price of the most expensive product:</p>
        <pre>Example

<span style="color: blue;">SELECT</span> MAX(Price) <span style="color: blue;">AS</span> LargestPrice
<span style="color: blue;">FROM</span> Products;</pre>

    </section>

    <section id="content-group-by" class="content" style="display: none;">
        <h1>The MySQL GROUP BY Statement</h1>
        <p>The <span style="color: red;">GROUP BY</span> statement groups rows that have the same values into summary rows, like "find the number of customers in each country".</p>
        <p>The <span style="color: red;">GROUP BY</span> statement is often used with aggregate functions (<span style="color: red;">COUNT()</span>, <span style="color: red;">MAX()</span>, <span style="color: red;">MIN()</span>, <span style="color: red;">SUM()</span>, <span style="color: red;">AVG()</span>) to group the result-set by one or more columns.</p>
        <h1>GROUP BY Syntax</h1>
        <pre>
<span style="color: blue;">SELECT</span> column_name(s)
<span style="color: blue;">FROM</span> table_name
<span style="color: blue;">WHERE</span> condition
<span style="color: blue;">GROUP BY</span> column_name(s)
<span style="color: blue;">ORDER BY</span> column_name(s);</pre>
        <h1>Demo Database</h1>
        <p>Below is a selection from the "Customers" table in the Northwind sample database:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Alfreds Futterkiste </td>
                    <td>Maria Anders</td>
                    <td>Obere Str. 57</td>
                    <td>Berlin</td>
                    <td>12209</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ana Trujillo Emparedados y helados</td>
                    <td>Ana Trujillo</td>
                    <td>Avda. de la Constitución 2222</td>
                    <td>México D.F.</td>
                    <td>05021</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Antonio Moreno Taquería</td>
                    <td>Antonio Moreno</td>
                    <td>Mataderos 2312</td>
                    <td>México D.F.</td>
                    <td>05023</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Around the Horn</td>
                    <td>Thomas Hardy</td>
                    <td>120 Hanover Sq.</td>
                    <td>London</td>
                    <td>WA1 1DP</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Berglunds snabbköp</td>
                    <td>Christina Berglund</td>
                    <td>Berguvsvägen 8</td>
                    <td>Luleå</td>
                    <td>S-958 22</td>
                    <td>Sweden</td>
                </tr>
            </tbody>
        </table>
        <h1>MySQL GROUP BY Examples</h1>
        <p>The following SQL statement lists the number of customers in each country:</p>
        <pre>Example
    
<span style="color: blue;">SELECT COUNT</span> (CustomerID), Country
<span style="color: blue;">FROM</span> Customers
<span style="color: blue;">GROUP BY</span> Country;</pre>
        <p>The following SQL statement lists the number of customers in each country, sorted high to low:</p>
        <pre>Example

<span style="color: blue;">SELECT COUNT</span>(CustomerID), Country
<span style="color: blue;">FROM</span> Customers
<span style="color: blue;">GROUP BY</span> Country
<span style="color: blue;">ORDER BY COUNT</span>(CustomerID) <span style="color: blue;">DESC</span>;</pre>
        <h1>Demo Database</h1>
        <p>Below is a selection from the "Orders" table in the Northwind sample database:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>OrderID</th>
                    <th>CustomerID</th>
                    <th>EmployeeID</th>
                    <th>OrderDate</th>
                    <th>ShipperID</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>10248</td>
                    <td>90</td>
                    <td>5</td>
                    <td>1996-07-04</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>10249</td>
                    <td>81</td>
                    <td>6</td>
                    <td>1996-07-05</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>10250</td>
                    <td>34</td>
                    <td>4</td>
                    <td>1996-07-08</td>
                    <td>2</td>
                </tr>
            </tbody>
        </table>
        <p>And a selection from the "Shippers" table:</p>
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>ShipperID</th>
                    <th>ShipperName</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Speedy Express</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>United Package</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Federal Shipping</td>
                </tr>
            </tbody>
        </table>
        <h1>GROUP BY With JOIN Example</h1>
        <p>The following SQL statement lists the number of orders sent by each shipper:</p>
        <pre>Example
    
<span style="color: blue;">SELECT</span> Shippers.ShipperName, <span style="color: blue;">COUNT</span>(Orders.OrderID) <span style="color: blue;">AS</span> NumberOfOrders <span style="color: blue;">FROM</span> Orders
<span style="color: blue;">LEFT JOIN</span> Shippers <span style="color: blue;">ON</span> Orders.ShipperID = Shippers.ShipperID
<span style="color: blue;">GROUP BY</span> ShipperName;</pre>
            </section>
            <section id="content-module3-quiz" class="content" style="display: none;">
                <h1>Module 3 Quiz</h1>
                <form id="quizForm">
                    <div class="question" id="q1">
                        <p>1. Which of the following SQL functions is used to return the number of rows that match a specified condition?</p>
                        <input type="radio" name="q1" value="A"> A) AVG()<br>
                        <input type="radio" name="q1" value="B"> B) SUM()<br>
                        <input type="radio" name="q1" value="C"> C) COUNT()<br>
                        <input type="radio" name="q1" value="D"> D) MAX()<br>
                    </div>
                    <div class="question" id="q2">
                        <p>2. What does the AVG() function in SQL return?</p>
                        <input type="radio" name="q2" value="A"> A) The total sum of a numeric column<br>
                        <input type="radio" name="q2" value="B"> B) The number of rows in a column<br>
                        <input type="radio" name="q2" value="C"> C) The average value of a numeric column<br>
                        <input type="radio" name="q2" value="D"> D) The maximum value in a numeric column<br>
                    </div>
                    <div class="question" id="q3">
                        <p>3. Which of the following statements is true about the SUM() function in SQL?</p>
                        <input type="radio" name="q3" value="A"> A) The SUM() function returns the number of rows that match a condition<br>
                        <input type="radio" name="q3" value="B"> B) The SUM() function returns the total sum of a numeric column, ignoring NULL values.<br>
                        <input type="radio" name="q3" value="C"> C) The SUM() function is used to find the average value of a column.<br>
                        <input type="radio" name="q3" value="D"> D) The SUM() function counts the number of NULL values in a column.<br>
                    </div>
                    <div class="question" id="q4">
                        <p>4. In the SQL statement SELECT COUNT(ProductID) FROM Products;, what does the COUNT() function do?</p>
                        <input type="radio" name="q4" value="A"> A) Counts the number of NULL values in the ProductID column<br>
                        <input type="radio" name="q4" value="B"> B) Counts the total number of rows in the Products table<br>
                        <input type="radio" name="q4" value="C"> C) Counts the total number of products in the ProductID column<br>
                        <input type="radio" name="q4" value="D"> D) Counts the total sum of values in the ProductID column<br>
                    </div>
                    <div class="question" id="q5">
                        <p>5. Which SQL function is used to return the smallest value of a selected column?</p>
                        <input type="radio" name="q5" value="A"> A) MAX()<br>
                        <input type="radio" name="q5" value="B"> B) AVG()<br>
                        <input type="radio" name="q5" value="C"> C) MIN()<br>
                        <input type="radio" name="q5" value="D"> D) COUNT()<br>
                    </div>
                    <div class="question" id="q6">
                        <p>6. What does the MAX() function return in SQL?</p>
                        <input type="radio" name="q6" value="A"> A) The smallest value in a selected column<br>
                        <input type="radio" name="q6" value="B"> B) The number of rows in a table<br>
                        <input type="radio" name="q6" value="C"> C) The largest value in a selected column<br>
                        <input type="radio" name="q6" value="D"> D) The average value of a column<br>
                    </div>
                    <div class="question" id="q7">
                        <p>7. In the SQL statement SELECT MIN(Price) AS SmallestPrice FROM Products;, what does the MIN() function do?</p>
                        <input type="radio" name="q7" value="A"> A) It returns the total sum of the prices in the Products table.<br>
                        <input type="radio" name="q7" value="B"> B) It finds the price of the most expensive product.<br>
                        <input type="radio" name="q7" value="C"> C) It returns the smallest price in the Products table.<br>
                        <input type="radio" name="q7" value="D"> D) It counts the number of rows in the Products table.<br>
                    </div>
                    <div class="question" id="q8">
                        <p>8. Which SQL statement is used to group rows that have the same values into summary rows?</p>
                        <input type="radio" name="q8" value="A"> A) JOIN<br>
                        <input type="radio" name="q8" value="B"> B) ORDER BY<br>
                        <input type="radio" name="q8" value="C"> C) GROUP BY<br>
                        <input type="radio" name="q8" value="D"> D) SELECT<br>
                    </div>
                    <div class="question" id="q9">
                        <p>9. In the SQL query SELECT COUNT(CustomerID), Country FROM Customers GROUP BY Country;, what is being counted?</p>
                        <input type="radio" name="q9" value="A"> A) The number of countries<br>
                        <input type="radio" name="q9" value="B"> B) The number of customers in each country<br>
                        <input type="radio" name="q9" value="C"> C) The number of orders in each country<br>
                        <input type="radio" name="q9" value="D"> D) The total sales by country<br>
                    </div>
                    <div class="question" id="q10">
                        <p>10. In the SQL query SELECT Shippers.ShipperName, COUNT(Orders.OrderID) AS NumberOfOrders FROM Orders LEFT JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID GROUP BY ShipperName;, what is the result being grouped by?</p>
                        <input type="radio" name="q10" value="A"> A) ShipperName<br>
                        <input type="radio" name="q10" value="B"> B) OrderID<br>
                        <input type="radio" name="q10" value="C"> C) Country<br>
                        <input type="radio" name="q10" value="D"> D) EmployeeID<br>
                    </div>
                    <button type="button" class="check-button" onclick="checkAnswers()">Check Answers</button>
                </form>
            </section>

</div>
</div>
</body>
<script>
    function checkAnswers() {
    const correctAnswers = {
        q1: "A",
        q2: "A",
        q3: "C",
        q4: "B",
        q5: "C",
        q6: "B",
        q7: "C",
        q8: "B",
        q9: "A",
        q10: "A"
    };

    let score = 0;

    // Calculate score based on correct answers
    for (const [question, answer] of Object.entries(correctAnswers)) {
        const selectedOption = document.querySelector(`input[name="${question}"]:checked`);
        if (selectedOption && selectedOption.value === answer) {
            score++;
        }
    }

    // Display score to the user
    alert("Your score: " + score);

    // Send score to PHP for saving
    fetch('save_score.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ score: score })
    }).then(response => response.text())
      .then(data => console.log(data))
      .catch(error => console.error('Error:', error));
}
    function checkAnswersModule2() {
        const answers = {
            q1: "A",
            q2: "B",
            q3: "C",
            q4: "B",
            q5: "C",
            q6: "B",
            q7: "C",
            q8: "B",
            q9: "A",
            q10: "A"
        };
    let score = 0;
        let totalQuestions = Object.keys(answers).length;

        for (let question in answers) {
            const selectedAnswer = document.querySelector(`input[name=${question}]:checked`);
            if (selectedAnswer && selectedAnswer.value === answers[question]) {
                score++;
            }
        }

        alert(`Your score is ${score} out of ${totalQuestions}`);
        saveScoreModule2(score);
    }
    function saveScoreModule2(score) {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "save_score.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                console.log(xhr.responseText);
            }
        };
        xhr.send("module=2&score=" + score);
    }
    function checkAnswersModule3() {
        const answers = {
            q1: "A",
            q2: "C",
            q3: "D",
            q4: "B",
            q5: "A",
            q6: "D",
            q7: "C",
            q8: "A",
            q9: "A",
            q10: "A"
        };

        let score = 0;
        let totalQuestions = Object.keys(answers).length;

        for (let question in answers) {
            const selectedAnswer = document.querySelector(`input[name=${question}]:checked`);
            if (selectedAnswer && selectedAnswer.value === answers[question]) {
                score++;
            }
        }

        alert(`Your score is ${score} out of ${totalQuestions}`);
        saveScoreModule3(score);
    }

    function saveScoreModule3(score) {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "save_score.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                console.log(xhr.responseText);
            }
        };
        xhr.send("module=3&score=" + score);
    }

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
                if (module === "module1") {
                    content1.style.display = "block"; // Show Module 1 content
                } else if (module === "module2") {
                    document.getElementById("content-mysql-joins").style.display = "block"; // Show Module 2 content
                } else if (module === "module3") {
                    // Show Module 3 default content (Superglobal Variables)
                    const superglobalContent = document.getElementById("content-count-avg-sum");
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
        }); // Highlight active topic
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
</script>

</html>