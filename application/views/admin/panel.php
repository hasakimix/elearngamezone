<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("/assets/css/admin/panel.css?version=" . uniqid()) ?>" />
</head>
<body>
    <div class="content">
        <h1>Dashboard things</h1>
        <p>Wala pa di pa nagagawa showtime lang to wag ka gagad okay? Yung mga nasa baba chena lang yan wag ka na mag tanong</p>
        <div class="actions">
            <button>Quick Action 1</button>
            <button>Quick Action 2</button>
            <button>Quick Action 3</button>
        </div>
    </div>

    <script>
		document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll(".sidenav a");

    links.forEach(link => {
        link.addEventListener("click", function () {
            // Remove "active" class from all links
            links.forEach(l => l.classList.remove("active"));

            // Add "active" class to the clicked link
            this.classList.add("active");
        });
    });
});

	</script>
</body>
