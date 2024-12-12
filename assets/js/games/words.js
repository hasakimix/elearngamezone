let words = [
    // HTML
    {
        word: "HTML",
        hint: "A markup language used to structure web pages.",
        subject: "html"
    },
    {
        word: "Element",
        hint: "A single part of an HTML document, such as a tag.",
        subject: "html"
    },
    {
        word: "Attribute",
        hint: "Provides additional information about an HTML element.",
        subject: "html"
    },
    {
        word: "Tag",
        hint: "Used to create elements in HTML.",
        subject: "html"
    },
    {
        word: "DOCTYPE",
        hint: "Defines the document type for HTML.",
        subject: "html"
    },
    {
        word: "Hyperlink",
        hint: "Used to link one page to another in HTML.",
        subject: "html"
    },
    {
        word: "Form",
        hint: "Used to collect user input in HTML.",
        subject: "html"
    },
    {
        word: "Table",
        hint: "Used to display data in rows and columns in HTML.",
        subject: "html"
    },
    {
        word: "Image",
        hint: "Used to embed pictures in an HTML page.",
        subject: "html"
    },
    {
        word: "Semantic",
        hint: "HTML tags that provide meaning about the content.",
        subject: "html"
    },

    // Java
    {
        word: "Class",
        hint: "Defines a blueprint for objects in Java.",
        subject: "java"
    },
    {
        word: "Object",
        hint: "An instance of a class in Java.",
        subject: "java"
    },
    {
        word: "Inheritance",
        hint: "A mechanism to acquire properties of another class.",
        subject: "java"
    },
    {
        word: "Polymorphism",
        hint: "Allows methods to perform different tasks based on input.",
        subject: "java"
    },
    {
        word: "Constructor",
        hint: "A special method to initialize objects.",
        subject: "java"
    },
    {
        word: "Interface",
        hint: "A reference type in Java, similar to a class.",
        subject: "java"
    },
    {
        word: "Method",
        hint: "A block of code designed to perform a task in Java.",
        subject: "java"
    },
    {
        word: "Encapsulation",
        hint: "Wrapping data and code into a single unit.",
        subject: "java"
    },
    {
        word: "Package",
        hint: "A namespace for organizing Java classes and interfaces.",
        subject: "java"
    },
    {
        word: "Exception",
        hint: "An event that disrupts the normal flow of Java program execution.",
        subject: "java"
    },

    // JavaScript
    {
        word: "Variable",
        hint: "A container for storing data in JavaScript.",
        subject: "javascript"
    },
    {
        word: "Function",
        hint: "A reusable block of code in JavaScript.",
        subject: "javascript"
    },
    {
        word: "Array",
        hint: "A collection of elements in JavaScript.",
        subject: "javascript"
    },
    {
        word: "Event",
        hint: "An action that can be detected by JavaScript.",
        subject: "javascript"
    },
    {
        word: "DOM",
        hint: "Document Object Model used to interact with HTML in JavaScript.",
        subject: "javascript"
    },
    {
        word: "Promise",
        hint: "Represents a value that may be available in the future.",
        subject: "javascript"
    },
    {
        word: "Callback",
        hint: "A function passed as an argument to another function.",
        subject: "javascript"
    },
    {
        word: "Async",
        hint: "Allows asynchronous code in JavaScript.",
        subject: "javascript"
    },
    {
        word: "Loop",
        hint: "Used to repeat a block of code in JavaScript.",
        subject: "javascript"
    },
    {
        word: "Closure",
        hint: "A function that retains access to its parent scope.",
        subject: "javascript"
    },

    // Python
    {
        word: "List",
        hint: "A collection of elements in Python.",
        subject: "python"
    },
    {
        word: "Tuple",
        hint: "An immutable collection in Python.",
        subject: "python"
    },
    {
        word: "Dictionary",
        hint: "A collection of key-value pairs in Python.",
        subject: "python"
    },
    {
        word: "Function",
        hint: "A block of reusable code in Python.",
        subject: "python"
    },
    {
        word: "Loop",
        hint: "Used to repeat a block of code in Python.",
        subject: "python"
    },
    {
        word: "Class",
        hint: "Defines a blueprint for creating objects in Python.",
        subject: "python"
    },
    {
        word: "Module",
        hint: "A file containing Python code that can be reused.",
        subject: "python"
    },
    {
        word: "Lambda",
        hint: "An anonymous function in Python.",
        subject: "python"
    },
    {
        word: "Decorator",
        hint: "A function that modifies another function in Python.",
        subject: "python"
    },
    {
        word: "Import",
        hint: "Used to include a module in a Python script.",
        subject: "python"
    },

    // SQL
    {
        word: "Query",
        hint: "Used to retrieve or manipulate data in SQL.",
        subject: "sql"
    },
    {
        word: "Table",
        hint: "A collection of related data in SQL.",
        subject: "sql"
    },
    {
        word: "Column",
        hint: "Represents a single field in a table in SQL.",
        subject: "sql"
    },
    {
        word: "Row",
        hint: "Represents a single record in a table in SQL.",
        subject: "sql"
    },
    {
        word: "Primary Key",
        hint: "A unique identifier for records in a table.",
        subject: "sql"
    },
    {
        word: "Foreign Key",
        hint: "A key linking one table to another.",
        subject: "sql"
    },
    {
        word: "Index",
        hint: "Used to speed up data retrieval in SQL.",
        subject: "sql"
    },
    {
        word: "Join",
        hint: "Combines rows from multiple tables in SQL.",
        subject: "sql"
    },
    {
        word: "View",
        hint: "A virtual table in SQL based on a query.",
        subject: "sql"
    },
    {
        word: "Transaction",
        hint: "A sequence of operations performed as a single unit in SQL.",
        subject: "sql"
    },

    // PHP
    {
        word: "Variable",
        hint: "A container for storing data in PHP.",
        subject: "php"
    },
    {
        word: "Array",
        hint: "A collection of values in PHP.",
        subject: "php"
    },
    {
        word: "Function",
        hint: "A reusable block of code in PHP.",
        subject: "php"
    },
    {
        word: "Echo",
        hint: "Used to output text in PHP.",
        subject: "php"
    },
    {
        word: "Include",
        hint: "Used to include files in PHP scripts.",
        subject: "php"
    },
    {
        word: "Session",
        hint: "Used to store user information across multiple pages.",
        subject: "php"
    },
    {
        word: "Cookie",
        hint: "Used to store small pieces of data on the client side.",
        subject: "php"
    },
    {
        word: "Class",
        hint: "Defines a blueprint for objects in PHP.",
        subject: "php"
    },
    {
        word: "Method",
        hint: "A block of code designed to perform a task in PHP.",
        subject: "php"
    },
    {
        word: "PDO",
        hint: "PHP Data Objects used for database access.",
        subject: "php"
    }
];
