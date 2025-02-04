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

.swal2-confirm{
    display: block;
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    color: #fff;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
    </style>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
    <script src="<?= base_url("assets/js/sweetalert.js?version=".uniqid()) ?>"></script>

</head>
<body>
<div class="sidenav">
    <h2>Admin Panel</h2>
    <div class="divider"></div>
        <!-- <a href="<?= base_url("admin/panel")?>" >Dashboard</a> -->
        <button class="collapsible">Manage Users</button>
        <div class="collapsible-content">
            <a href="<?= base_url("admin/manage/users")?>">Users</a>
            <a href="<?= base_url("admin/manage/admins")?>">Admins</a>
        </div>
        <a href="<?= base_url("admin/library")?>" >Subjects</a>
        <a href="<?= base_url("admin/modules")?>" >Modules</a>
        <a href="<?= base_url("admin/quizzes")?>">Quizzes</a>
        <a href="<?= base_url("admin/flashcards")?>">Flashcards</a>
        <a href="<?= base_url("admin/videos")?>">Videos</a>
        <a href="<?= base_url('admin/authentication/end_sessions') ?>">Log Out</a>
    </div>
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

        const _this_swal_loader = (doing) => {
            swal.fire({
                html: `<h2>${doing}...</h2>
                <h1><img src="<?= base_url("assets/img/waiting-7579_256.gif") ?>" class="img-fluid"></h1>`,
                showConfirmButton: false
            });
        };

        const _this_swal_response = (title, message, response) => {
            swal.fire({
                title: title,
                text: message,
                icon: response,
                buttonsStyling: false,
                confirmButtonClass: "bg-gradient-success swal2-confirm btn bg-gradient-success",
                confirmButtonText: 'OK',
                allowOutsideClick: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    swal.close();
                }
            });
        };
	</script>

    <?php if(isset($_SESSION["error"])): ?>
        <script>
            $(document).ready(function(){
                _this_swal_response("Something Went Wrong!", "<?= $_SESSION["error"] ?>", "error");
            });
        </script>
        <?php unset($_SESSION["error"]) ?>
    <?php endif; ?>
    <?php if(isset($_SESSION["success"])): ?>
        <script>
            $(document).ready(function(){
                _this_swal_response("Success!", "<?= $_SESSION["success"] ?>", "success");
            });
        </script>
        <?php unset($_SESSION["success"]) ?>
    <?php endif; ?>
</html>
