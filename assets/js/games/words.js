let words = [
    // HTML
    {
        word: "HTML",
        hint: "A markup language used to structure web pages.",
        subject: 2
    },
    {
        word: "Element",
        hint: "A single part of an HTML document, such as a tag.",
        subject: 2
    },
    {
        word: "Attribute",
        hint: "Provides additional information about an HTML element.",
        subject: 2
    },
    {
        word: "Tag",
        hint: "Used to create elements in HTML.",
        subject: 2
    },
    {
        word: "DOCTYPE",
        hint: "Defines the document type for HTML.",
        subject: 2
    },
    {
        word: "Hyperlink",
        hint: "Used to link one page to another in HTML.",
        subject: 2
    },
    {
        word: "Form",
        hint: "Used to collect user input in HTML.",
        subject: 2
    },
    {
        word: "Table",
        hint: "Used to display data in rows and columns in HTML.",
        subject: 2
    },
    {
        word: "Image",
        hint: "Used to embed pictures in an HTML page.",
        subject: 2
    },
    {
        word: "Semantic",
        hint: "HTML tags that provide meaning about the content.",
        subject: 2
    },

    // Java
    {
        word: "Class",
        hint: "Defines a blueprint for objects in Java.",
        subject: 1
    },
    {
        word: "Object",
        hint: "An instance of a class in Java.",
        subject: 1
    },
    {
        word: "Inheritance",
        hint: "A mechanism to acquire properties of another class.",
        subject: 1
    },
    {
        word: "Polymorphism",
        hint: "Allows methods to perform different tasks based on input.",
        subject: 1
    },
    {
        word: "Constructor",
        hint: "A special method to initialize objects.",
        subject: 1
    },
    {
        word: "Interface",
        hint: "A reference type in Java, similar to a class.",
        subject: 1
    },
    {
        word: "Method",
        hint: "A block of code designed to perform a task in Java.",
        subject: 1
    },
    {
        word: "Encapsulation",
        hint: "Wrapping data and code into a single unit.",
        subject: 1
    },
    {
        word: "Package",
        hint: "A namespace for organizing Java classes and interfaces.",
        subject: 1
    },
    {
        word: "Exception",
        hint: "An event that disrupts the normal flow of Java program execution.",
        subject: 1
    },

    // JavaScript
    {
        word: "Variable",
        hint: "A container for storing data in JavaScript.",
        subject: 3
    },
    {
        word: "Function",
        hint: "A reusable block of code in JavaScript.",
        subject: 3
    },
    {
        word: "Array",
        hint: "A collection of elements in JavaScript.",
        subject: 3
    },
    {
        word: "Event",
        hint: "An action that can be detected by JavaScript.",
        subject: 3
    },
    {
        word: "DOM",
        hint: "Document Object Model used to interact with HTML in JavaScript.",
        subject: 3
    },
    {
        word: "Promise",
        hint: "Represents a value that may be available in the future.",
        subject: 3
    },
    {
        word: "Callback",
        hint: "A function passed as an argument to another function.",
        subject: 3
    },
    {
        word: "Async",
        hint: "Allows asynchronous code in JavaScript.",
        subject: 3
    },
    {
        word: "Loop",
        hint: "Used to repeat a block of code in JavaScript.",
        subject: 3
    },
    {
        word: "Closure",
        hint: "A function that retains access to its parent scope.",
        subject: 3
    },

    // Python
    {
        word: "List",
        hint: "A collection of elements in Python.",
        subject: 5
    },
    {
        word: "Tuple",
        hint: "An immutable collection in Python.",
        subject: 5
    },
    {
        word: "Dictionary",
        hint: "A collection of key-value pairs in Python.",
        subject: 5
    },
    {
        word: "Function",
        hint: "A block of reusable code in Python.",
        subject: 5
    },
    {
        word: "Loop",
        hint: "Used to repeat a block of code in Python.",
        subject: 5
    },
    {
        word: "Class",
        hint: "Defines a blueprint for creating objects in Python.",
        subject: 5
    },
    {
        word: "Module",
        hint: "A file containing Python code that can be reused.",
        subject: 5
    },
    {
        word: "Lambda",
        hint: "An anonymous function in Python.",
        subject: 5
    },
    {
        word: "Decorator",
        hint: "A function that modifies another function in Python.",
        subject: 5
    },
    {
        word: "Import",
        hint: "Used to include a module in a Python script.",
        subject: 5
    },

    // SQL
    {
        word: "Query",
        hint: "Used to retrieve or manipulate data in SQL.",
        subject: 6
    },
    {
        word: "Table",
        hint: "A collection of related data in SQL.",
        subject: 6
    },
    {
        word: "Column",
        hint: "Represents a single field in a table in SQL.",
        subject: 6
    },
    {
        word: "Row",
        hint: "Represents a single record in a table in SQL.",
        subject: 6
    },
    {
        word: "Primary Key",
        hint: "A unique identifier for records in a table.",
        subject: 6
    },
    {
        word: "Foreign Key",
        hint: "A key linking one table to another.",
        subject: 6
    },
    {
        word: "Index",
        hint: "Used to speed up data retrieval in SQL.",
        subject: 6
    },
    {
        word: "Join",
        hint: "Combines rows from multiple tables in SQL.",
        subject: 6
    },
    {
        word: "View",
        hint: "A virtual table in SQL based on a query.",
        subject: 6
    },
    {
        word: "Transaction",
        hint: "A sequence of operations performed as a single unit in SQL.",
        subject: 6
    },

    // PHP
    {
        word: "Variable",
        hint: "A container for storing data in PHP.",
        subject: 4
    },
    {
        word: "Array",
        hint: "A collection of values in PHP.",
        subject: 4
    },
    {
        word: "Function",
        hint: "A reusable block of code in PHP.",
        subject: 4
    },
    {
        word: "Echo",
        hint: "Used to output text in PHP.",
        subject: 4
    },
    {
        word: "Include",
        hint: "Used to include files in PHP scripts.",
        subject: 4
    },
    {
        word: "Session",
        hint: "Used to store user information across multiple pages.",
        subject: 4
    },
    {
        word: "Cookie",
        hint: "Used to store small pieces of data on the client side.",
        subject: 4
    },
    {
        word: "Class",
        hint: "Defines a blueprint for objects in PHP.",
        subject: 4
    },
    {
        word: "Method",
        hint: "A block of code designed to perform a task in PHP.",
        subject: 4
    },
    {
        word: "PDO",
        hint: "PHP Data Objects used for database access.",
        subject: 4
    }
];
