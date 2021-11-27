<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Преподаватель</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />


</head>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0

Template Post Type: post, page
 */

?>
<body class="decoration">


<div class="body">
    <header class="flex-head">
        <a href="index.php"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/image/b1l_KEuYh5E.jpg"  height="178" width="288" alt="Логотип"></a>
        <h1>
            Елена Геннадьевна Бавыкина
        </h1>
    </header>

    <main class="wrap">
        <div class="cart-1 animation-button">
            <a href="index.php"><button type="button" class="button">Главная страница</button></a><br>
            <a href="portfolio.php"><button type="button" class="button">Портфолио</button></a><br>
            <a href="form"><button type="button" class="button">Гостевая книга</button></a><br>
            <a href="students.php"><button type="button" class="button">Обучающимся</button></a><br>
            <a href="blog.php"><button type="button" class="button">Блог</button><br></a>
            <a href="map.php"><button type="button" class="button">Карта сайта</button></a><br>
        </div>

        <div class="cart-3">
            <figure class="figcaption">
                <div class="figure">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/FSPO.png" alt="image" class="image">
                </div>
                <figcaption class="sign text-color"><a href="https://vsuet.ru/obuchenie/faculties/fspo/sotr-ck-it"  class="text-color">Цикловая комиссия</a></figcaption>
            </figure>
            <br>
            <figure class="figcaption margin">
                <div class="figure">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/bavikina.jpg" alt="image" class="image">
                </div>
                <figcaption class="sign"><a href="https://vsuet.ru/obuchenie/faculties/fspo/sotr-ck-it/bavykina-elena-g" class="text-color">Дополнительная информация</a></figcaption>
            </figure>
            <br>
            <figure class="figcaption">
                <div class="figure">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/1dmZjSB6s9eDMBl5IMoSvPfNqGv_JvbdytuYBaLmDLMnp0LiImTUDqGlGFHE57e1N9jAlD6E.jpg" alt="image" class="image">
                </div>
                <figcaption class="sign text-color"><a href="https://vk.com/id48921342"  class="text-color">Страница преподавателя</a></figcaption>
            </figure>
        </div>


        <div class="presentation cart-2">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="https://vsuet.ru/">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/screenshot_5-5.png" height="500" width="1024" class=" w-100" alt="Картинка">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="https://vsuet.ru/obuchenie/faculties/fspo">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/XXL.jpg" height="500" width="1024" class=" w-100" alt="Картинка">
                        </a>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="cart-4 text">
            <?php
            if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
                the_excerpt();
            } else {
                the_content( __( 'Continue reading', 'twentytwenty' ) );
            }
            ?>
        </div>
    </main>
</div>


<footer class="footer">
    <div class="wrap-footer">
        <div class="box-1">
            <p>Елена Геннадьевна Бавыкина</p>
        </div>
        <div class="box-2 end">
            <p>+79564581290<br>
            <address class="end animation">Elena9825@gmail.com</address>
            </p>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>