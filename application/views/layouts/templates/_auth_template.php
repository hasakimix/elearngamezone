<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>

    <title>E-Learn Game Zone</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    <style>
        body {
            font-family: "Lato", sans-serif;
        }
        .main-head{
            height: 150px;
            background: #FFF;
        
        }
        .sidenav {
            height: 100%;
            background-color: #000;
            overflow-x: hidden;
            padding-top: 20px;
        }
        .main {
            padding: 0px 10px;
        }
        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
        }
        @media screen and (max-width: 450px) {
            .login-form{
                margin-top: 10%;
            }

            .register-form{
                margin-top: 10%;
            }
        }
        @media screen and (min-width: 768px){
            .main{
                margin-left: 40%; 
            }

            .sidenav{
                width: 40%;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
            }

            .login-form{
                margin-top: 80%;
            }

            .register-form{
                margin-top: 20%;
            }
        }
        .login-main-text{
            margin-top: 20%;
            padding: 60px;
            color: #fff;
        }

        .login-main-text h2{
            font-weight: 300;
        }

        .btn-black{
            background-color: #000 !important;
            color: #fff;
        }
    </style>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

</head>
<body>
<main class="main-content mt-0 ps">
        <?php $this->load->view($primary_view); ?>
</main>
</body>
</html>
