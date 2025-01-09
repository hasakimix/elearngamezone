<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>

    <title>E-Learn Admin</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    <style>
body {
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
	display: flex;
	min-height: 100vh;
	background: #f4f4f9;
	color: #333;
}
.sidenav {
	width: 250px;
	background: #2c3e50;
	color: white;
	display: flex;
	flex-direction: column;
	padding-top: 20px;
	box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
}

.sidenav a.active {
    background: white; 
    color: black;             
    border-left-color: white;
}

.sidenav a:hover {
    background: white;       
    color: black;            
    border-left-color: white;
}



.sidenav h2 {
	text-align: center;
	font-size: 1.5rem;
	margin-bottom: 15px;
	font-weight: bold;
}

.sidenav .divider {
	height: 1px;
	background: #1e1e1e;
	margin: 5px 0;
	width: 80%;
	align-self: center;
}

.sidenav a {
	padding: 15px 20px;
	text-decoration: none;
	color: white;
	font-size: 1.1rem;
	display: block;
	border-left: 4px solid transparent;
	transition: background 0.3s, border-left-color 0.3s;
}

.collapsible {
    cursor: pointer;
    padding: 15px 20px;
    font-size: 1.1rem;
    color: white;
    text-align: left;
    background: #2c3e50;
    border: none;
    outline: none;
    width: 100%;
    border-left: 4px solid transparent;
    transition: background 0.3s, border-left-color 0.3s;
}

.collapsible:hover {
    background: white;
    color: black;
    border-left-color: white;
}

.collapsible:after {
    content: '\25BC'; /* Downward arrow */
    color: white;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

.collapsible.active:after {
    content: '\25B2'; /* Upward arrow */
}

.collapsible-content {
    display: none; /* Initially hidden */
    background-color: #34495e;
    overflow: hidden;
    padding-left: 20px;
}

.collapsible-content a {
    padding: 10px 20px;
    font-size: 1rem;
    color: white;
}

.collapsible-content a:hover {
    background: white;
    color: black;
}
    </style>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

</head>
<body>
<div class="sidenav">
        <h2>Admin Panel</h2>
        <div class="divider"></div>
        <a href="<?= base_url("admin/panel")?>" >Dashboard</a>
        <button class="collapsible">Crude</button>
			<div class="collapsible-content">
				<a href="library">Library</a>
				<a href="#">Modules</a>
				<a href="#">Quizzes</a>
				<a href="#">Flashcards</a>
				<a href="#">Videos</a>
			</div>
        <a href="<?= base_url("admin/")?>">Admins</a>
        <a href="<?= base_url("admin/")?>">Subjects</a>
        <!-- <a href="#">Log Out</a> -->
    </div>
<main class="main-content mt-0 ps">
        <?php $this->load->view($primary_view); ?>
</main>
</body>
	<script>
		document.addEventListener("DOMContentLoaded", function () {
    const collapsibles = document.querySelectorAll(".collapsible");

    collapsibles.forEach(collapsible => {
        collapsible.addEventListener("click", function () {
            this.classList.toggle("active");

            const content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    });
});
	</script>
</html>
