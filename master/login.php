<?php require_once "./PHP/Idioma.php";
require_once "./controller/Controller.php";
$_POST['username'] = "";
$_POST['pass'] = "";?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $lang['titulo'] ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->

    <!-- Header Section Begin -->
    <?php include "./PHP/nav.php"?>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index"><i class="fa fa-home"></i><?php echo $lang['Inicio'] ?></a>
                        <span><?php echo $lang['login'] ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->

    <div class="register-login-section spad">
        <div class="container">
            <div id="Alert"></div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2><?php echo $lang['login'] ?></h2>
                        <form name="form" action="./PHP/login_form" method="post">
                            <div class="group-input">
                                <label for="username"><?php echo $lang['Email'] ?> *</label>
                                <input type="text" name="username" id="username">

                            </div>
                            <div class="group-input">
                                <label for="pass"><?php echo $lang['Password'] ?> *</label>
                                <input type="password" name="pass" id="pass">
                            </div>
                            <div class="group-input gi-check">
                                <div class="gi-more">
                                    <a href="lostPassword" class="forget-pass"><?php echo $lang['Lost Password'] ?></a>
                                </div>
                            </div>
                            <button type="submit" class="site-btn login-btn"><?php echo $lang['login'] ?></button>
                        </form>

                        <form name="cerrar" action="./PHP/Cerrar_Sesion" method="post">
                            <button type="submit" class="site-btn login-btn"><?php echo $lang['cerrar']; ?></button>
                        </form>

                        <?php
                        if(isset($_SESSION['Usuario']) != false)
                        {
                        echo '  <form name="cerrar" action="./Area_Usuario.php" method="post">' . '<button type="submit" class="site-btn login-btn">' . $lang["Panel"]. '</button></form>';
                        }
                        ?>

                        <div class="switch-login">
                            <a href="./register" class="or-login"><?php echo $lang['Or Create An Account'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->

    <?php include './PHP/Footer.php';?>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>