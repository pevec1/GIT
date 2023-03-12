<?php
ini_set('session.use_cookies', 1);
ini_set('session.use_only_cookies', 1);
session_start();
//require_once "config_local.php";
if (!isset($_POST['login']) && !isset($_POST['password']) && !isset($_SESSION['login']) && !isset($_SESSION['password'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Подключение normalize.css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Подключение Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?v.0.0.2" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css?v.0.0.2" rel="stylesheet">

    <!-- Подключение пользовательских стилей -->
    <link rel="stylesheet" href="css/styles.css?v.0.0.3" />
    <title>Document</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <ul class="logos">
                    <li>
                        <a href="index.php">
                            <p class="logo">АХА Code</p>
                        </a>
                    </li>
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="works.php">Работы</a></li>
                    <li><a href="creative.php">Творчество</a></li>
                    <li><a href="photos.php">Фотогалерея</a></li>
                    <li><a href="aboutus.php">Контакты</a></li>
                    <li style="margin-top: 20px"></li>
                    <?php
                    if (!isset($_POST['login']) && !isset($_POST['password']) && !isset($_SESSION['login']) && !isset($_SESSION['password'])) {
                        echo "";
                    } else {
                        echo "<a href='index.php' class='btn logout'>Выход</a>";
                    }
                    ?>
                    <!-- <a href="index.php" class="btn logout">Выход</a> -->

                </ul>
            </div>
        </div>
        <div class="nav-mobile">
            <div class="header">
                <div class="menu">
                    <a class="menu-triger" href="#"></a>
                    <div class="menu-popup">
                        <a class="menu-close" href="#"></a>
                        <ul>
                            <li>
                                <a href="index.php">
                                    <p class="logo">АХА Code</p>
                                </a>
                            </li>
                            <li><a href="index.php">Главная</a></li>
                            <li><a href="works.php">Работы</a></li>
                            <li><a href="creative.php">Творчество</a></li>
                            <li><a href="photos.php">Фотогалерея</a></li>
                            <li><a href="aboutus.php">Контакты</a></li>
                            <li style="margin-top: 20px"></li>
                            <?php
                            if (!isset($_POST['login']) && !isset($_POST['password']) && !isset($_SESSION['login']) && !isset($_SESSION['password'])) {
                                echo "";
                            } else {
                                echo "<a href='index.php' class='btn logout'>Выход</a>";
                            }
                            ?>
                            <!-- <a href="index.php" class="btn logout">Выход</a> -->
                            </li>
                        </ul>
                    </div>
                </div>
                <p class="logo">АХА Code</p>
            </div>


            <section>
                <div class="container-offer">
                    <div class="row">
                        <div class="business-offer col-12 col-md-5 col-xl-5">
                            <h1>
                                Вы вошли в
                                <span style="color: #7bc0e3">личный кабинет</span>
                            </h1>
                            <p>
                                Мы давно работаем на рынке услуг по созданию сайтов. Мы делаем с
                                нуля как маленькие, так и крупные. С Вас дизайн - с нас готовый
                                сайт.
                            </p>
                            <div>
                                <a class="btn" href="#">Начать</a>
                                <a class="btn-disabled" href="#">Контакты</a>
                                <!-- <div class="circles"> -->
                                <img class="circles" src="img/Group56.svg" alt="" />
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="col-12 col-md-2 col-xl-2">
                            <canvas id="canvas" class="canvas"><img id="logos" class="img-rotate" src="ima/logo.png" alt="" /></canvas>
                        </div>
                        <div class="business-offer col-12 col-md-5 col-xl-5">
                            <img class="analyse" src="img/analyse1.png" />
                        </div>
                    </div>
            </section>
        </div>
    </header>
    <main>

        <section class="work-as work">
            <div class="container">
                <h2>Заинтересованы в работе с нами ?</h2>
                <p>Отправьте письмо здесь и ждите ответа.</p>
                <div>
                    <a href="mailto:pevec1@yandex.ru" rel="nofollow" class="btn-black">Напишите нам</a>
                </div>
            </div>
        </section>
        <section class="our-blog">
            <div class="container">
                <div>
                    <div class="about-blog">
                        <h2>Наш блог</h2>
                        <p>
                            В AXA Code блоге мы расскажем как мы черпаем идеи из фильмов.
                        </p>
                    </div>
                    <a class="btn-disabled" href="#">Смотреть</a>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <h3>AXA Code 2021</h3>
            <div>Контакты</div>

            <div class="buttons">
                <a class="btns btn-vk" href="#" target="_self"> </a>
                <a class="btns btn-fb" href="#" target="_self"> </a>
                <a class="btns btn-google" href="#" target="_self"> </a>
                <a class="btns btn-qr" href="#" target="_self"> </a>
                <a class="btns btn-more" href="#" target="_self"> </a>
            </div>
        </div>
    </footer>

    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js?v.0.0.2"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="js/menu.js"></script>
    <script src="js/signin.js"></script>
    <script src="js/signout.js"></script>
    <script src="js/scripts_rotate.js"></script>

</body>

</html>