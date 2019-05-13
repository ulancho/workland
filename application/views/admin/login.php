<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Админ панель</title>

    <!-- Fontfaces CSS-->
    <link href="<?=base_url()?>public/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>public/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>public/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>public/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="<?=base_url()?>public/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="<?=base_url()?>public/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>public/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>public/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>public/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>public/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>public/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>public/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?=base_url()?>public/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
<div class="page-content--bge5">
    <div class="container">
        <div class="login-wrap">
            <?php if($this->session->flashdata('flash_message')):?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('flash_message');?>
                </div>
            <?php endif ?>
            <div class="login-content">
                <div class="login-logo">
                    <a href="#">
                        <img src="<?=base_url()?>public/images/icon/logo.png" alt="CoolAdmin">
                    </a>
                </div>
                <div class="login-form">
                    <form action="<?=base_url()?>admin/Admin_page/login" method="post">
                        <div class="form-group">
                            <label>Логин</label>
                            <input class="au-input au-input--full" type="text" name="login" placeholder="Логин">
                        </div>
                        <div class="form-group">
                            <label>Пароль</label>
                            <input class="au-input au-input--full" type="password" name="password" placeholder="Пароль">
                        </div>
                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Вход</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- END PAGE CONTAINER-->
</div>


<!-- Jquery JS-->
<script src="<?=base_url()?>public/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="<?=base_url()?>public/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="<?=base_url()?>public/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="<?=base_url()?>public/vendor/slick/slick.min.js">
</script>
<script src="<?=base_url()?>public/vendor/wow/wow.min.js"></script>
<script src="<?=base_url()?>public/vendor/animsition/animsition.min.js"></script>
<script src="<?=base_url()?>public/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="<?=base_url()?>public/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="<?=base_url()?>public/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="<?=base_url()?>public/vendor/circle-progress/circle-progress.min.js"></script>
<script src="<?=base_url()?>public/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?=base_url()?>public/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="<?=base_url()?>public/vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="<?=base_url()?>public/js/main.js"></script>

</body>

</html>
<!-- end document-->
