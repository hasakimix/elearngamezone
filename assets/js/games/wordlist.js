const wordList = [
    {
        word: "scripting",
        hint: "JavaScript is a programming language used primarily for creating interactive effects within web browsers."
    },
    {
        word: "values",
        hint: "Variables in JavaScript are used to store ."
    },
    {
        word: "equality",
        hint: "The "==" operator in JavaScript is used for comparison"
    },
    {
        word: "strict equality",
        hint: "The "===" operator in JavaScript is used for  comparison."
    },
    {
        word: "function",
        hint: "In JavaScript, a function can be defined using the keyword."
    },
    {
        word: "for",
        hint: "Thestatement in JavaScript is used to iterate over a block of code a specified number of times."
    },
    {
        word: "language",
        hint: "HTML stands for HyperText Markup "
    },
    {
        word: "angle",
        hint: "Tags in HTML are enclosed in brackets."
    },
    {
        word: "content",
        hint: "The <body> tag in HTML is used to define the document's."
    },
    {
        word: "links",
        hint: "The <a> tag in HTML is used to create to other web pages or files."
    },
    {
        word: "images",
        hint: "The <img> tag in HTML is used to insert into a web page."
    },
    {
        word: "tables",
        hint: "The <table> tag in HTML is used to create."
    },
    {
        word: "bulleted",
        hint: "The <ul> tag in HTML is used to create a list."
    },
    {
        word: "input",
        hint: "The <input> tag in HTML is used to create elements."
    },
    {
        word: "headings",
        hint: "The <h1> to <h6> tags in HTML are used to define."
    },
    {
        word: "document",
        hint: "The <!DOCTYPE> declaration in HTML is used to specify the version of HTML being used."
    },
    {
        word: "structure",
        hint: "The dailyThe <html> tag in HTML is used to define the of a web page.disappearance of the sun below the horizon."
    },
    {
        word: "metadata",
        hint: "The <meta> tag in HTML is used to provide about the document."
    },
    {
        word: "emmbeddedresource",
        hint: "The <iframe> tag in HTML is used to insert a(n) into a web page."
    },
    {
        word: "inputform",
        hint: "The <form> tag in HTML is used to create an for user input."
    },
    {
        word: "line",
        hint: "The <br> tag in HTML is used to insert a break."
    },
    {
        word: "title",
        hint: "The <title> tag in HTML is used to define the of the document, which is displayed in the browser's title bar."
    },
    {
        word: "head",
        hint: "The <head> tag in HTML is used to define the of the document, which contains meta-information about the document."
    },
    {
        word: "dropdown",
        hint: "The <select> tag in HTML is used to create a list."
    },
    {
        word: "text",
        hint: "The <textarea> tag in HTML is used to create a input field."
    },
    {
        word: "stylesheet",
        hint: "The <link> tag in HTML is used to link to an external."
    },
    {
        word: "container",
        hint: "The <div> tag in HTML is used to create sections or divisions in a web page."
    },
    {
        word: "styling",
        hint: "The <span> tag in HTML is used to applyto a part of a text."
    },
    {
        word: "resource",
        hint: "The <link> tag in HTML is used to link to an external "
    },
    {
        word: "audio",
        hint: "The <audio> tag in HTML is used to embed content in a web page."
    },
    {
        word: "video",
        hint: "The <video> tag in HTML is used to embed content in a web page."
    },
    {
        word: "navigation",
        hint: "The <nav> tag in HTML is used to define navigation links."
    },
    {
        word: "footer",
        hint: "The <footer> tag in HTML is used to define the of a web page"
    },
    {
        word: "work",
        hint: "he <cite> tag in HTML is used to define the title of a ___________."
    },
    {
        word: "piece",
        hint: "The <code> tag in HTML is used to define a of computer code."
    },
    {
        word: "superscript",
        hint: "The <sup> tag in HTML is used to define text."
    },
    {
        word: "telephone",
        hint: "A device used to transmit sound over long distances."
    },
    {
        word: "introduction",
        hint: "The <header> tag in HTML is used to define the of a section or a page."
    },
    {
        word: "caption",
        hint: "The <figcaption> tag in HTML is used to define a for a <figure> element."
    },
    {
        word: "tangential",
        hint: "The <aside> tag in HTML is used to define content."
    },
    {
        word: "dynamic",
        hint: "The <canvas> tag in HTML is used to draw graphics."
    },
    {
        word: "selfcontained",
        hint: "The <figure> tag in HTML is used to define content."
    },
    {
        word: "principal",
        hint: "The <main> tag in HTML is used to specify the content of a document."
    },
    {
        word: "highlighted",
        hint: "The <mark> tag in HTML is used to highlight content."
    },
    {
        word: "task",
        hint: "The <progress> tag in HTML is used to represent the progress of a ___________."
    },
    {
        word: "ruby",
        hint: "The <ruby> tag in HTML is used to define a annotation for East Asian typography."
    },
    {
        word: "calculation",
        hint: "The <output> tag in HTML is used to represent the result of a ___________."
    },
    {
        word: "Sample",
        hint: "The <samp> tag in HTML is used to define text."
    },
    {
        word: "cascading",
        hint: "CSS stands for Style Sheets."
    },
    {
        word: "style",
        hint: "CSS is used to define the _____ of HTML elements."
    },
    {
        word: "selectors",
        hint: "CSS can be applied to HTML documents using ________."
    },
    {
        word: "style",
        hint: "Inline CSS is applied using the ________ attribute within an HTML tag."
    },
    {
        word: "color",
        hint: "The ________ property is used to set the text color of an element."
    },
    {
        word: "width",
        hint: "The ________ property is used to set the width of an element."
    },
    {
        word: "position",
        hint: "The ________ property is used to set the position of an element."
    },
    {
        word: "height",
        hint: "The ________ property is used to set the height of an element."
    },
    {
        word: "visibility",
        hint: "The ________ property is used to control the visibility of an element."
    },
    {
        word: "opacity",
        hint: "The ________ property is used to set the opacity of an element."
    },
    {
        word: "padding",
        hint: "The ________ property is used to set the padding around an element."
    },
    {
        word: "margin",
        hint: "The ________ property is used to set the margin around an element."
    },
    {
        word: "border",
        hint: "The ________ property is used to set the border of an element."
    },
    {
        word: "table",
        hint: "The ________ tag is used to create a table."
    },
    {
        word: "title",
        hint: "The ________ tag is used to define the title of an HTML document."
    },
    {
        word: "target",
        hint: "The ________ attribute is used to specify the target of a hyperlink."
    },
    {
        word: "button",
        hint: "The ________ tag is used to create a button."
    },
];