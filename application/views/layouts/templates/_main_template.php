<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>eLearnGameZone</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url("/assets/img/elogo.png?version=".uniqid()) ?>">
    <link rel="stylesheet" href="<?= base_url("/assets/css/main.css?version=".uniqid()) ?>" />

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
    <script src="<?= base_url("assets/js/sweetalert.js?version=".uniqid()) ?>"></script>

  </head>
  <body>
     
    <?php $this->load->view("layouts/partials/_main_header"); ?> 


    <?php $this->load->view($primary_view); ?>


  </body>

  <script src="<?= base_url("assets/js/main.js?version=".uniqid()) ?>"></script>

</html>