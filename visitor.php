<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Гостевая книга</title>
    <link rel="stylesheet" href="CSS/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
    <script src="script.js"></script>
</head>
<body class="decoration">



<div class="body">
    <header class="flex-head">
        <a href="index.php"><img class="logo" src="image/b1l_KEuYh5E.jpg"  height="178" width="288" alt="Логотип"></a>
        <h1>
            Елена Геннадьевна Бавыкина
        </h1>
    </header>

    <main class="wrap">
        <div class="cart-1 animation-button">
            <a href="index.php"><button type="button" class="button">Главная страница</button></a><br>
            <a href="portfolio.php"><button type="button" class="button">Портфолио</button></a><br>
            <a href="visitor.php"><button type="button" class="button">Гостевая книга</button></a><br>
            <a href="students.php"><button type="button" class="button">Обучающимся</button></a><br>
            <a href="blog.php"><button type="button" class="button">Блог</button><br></a>
            <a href="map.php"><button type="button" class="button">Карта сайта</button></a><br>
        </div>

        <div class="cart-3">
            <figure class="figcaption">
                <div class="figure">
                    <img src="image/FSPO.png" alt="image" class="image">
                </div>
                <figcaption class="sign text-color"><a href="https://vsuet.ru/obuchenie/faculties/fspo/sotr-ck-it"  class="text-color">Цикловая комиссия</a></figcaption>
            </figure>
            <br>
            <figure class="figcaption margin">
                <div class="figure">
                    <img src="image/bavikina.jpg" alt="image" class="image">
                </div>
                <figcaption class="sign"><a href="https://vsuet.ru/obuchenie/faculties/fspo/sotr-ck-it/bavykina-elena-g" class="text-color">Дополнительная информация</a></figcaption>
            </figure>
            <br>
            <figure class="figcaption">
                <div class="figure">
                    <img src="image/1dmZjSB6s9eDMBl5IMoSvPfNqGv_JvbdytuYBaLmDLMnp0LiImTUDqGlGFHE57e1N9jAlD6E.jpg" alt="image" class="image">
                </div>
                <figcaption class="sign text-color"><a href="https://vk.com/id48921342"  class="text-color">Страница преподавателя</a></figcaption>
            </figure>
        </div>


        <div class="presentation cart-2">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="https://vsuet.ru/">
                            <img src="image/screenshot_5-5.png" height="500" width="1024" class=" w-100" alt="Картинка">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="https://vsuet.ru/obuchenie/faculties/fspo">
                            <img src="image/XXL.jpg" height="500" width="1024" class=" w-100" alt="Картинка">
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

        <div class="cart-4 animation">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>" name="myForm">
                    <fieldset class="flex">
                        <legend>Персональные данные</legend>
                        <p>Имя<br>
                            <input pattern="^[А-Яа-яЁё\s]+$" required title="Только кириллические буквы." type="text" name="name" class="text-border">
                        </p>
                        <p>Фамилия<br>
                            <input type="text" pattern="^[А-Яа-яЁё\s]+$" required title="Только кириллические буквы." name="surname" class="text-border">
                        </p>
                        <p>Отчество<br>
                            <input type="text" pattern="^[А-Яа-яЁё\s]+$" required title="Только кириллические буквы." name="patronymic" class="text-border">
                        </p>
                        <p>E-mail<br>
                            <input name="E-mail" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required class="text-border">
                        </p>
                        <p>Пароль<br>
                            <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required title="Должно содержать по крайней мере одну цифру и одну прописную и строчную букву, а также не менее 8 символов" name="password" class="text-border">
                        </p>
                    </fieldset>
                <div class="flex-button">
                    <button type="submit" class="button-type">Добавить</button>
                    <button type="reset" class="button-type">Очистить</button>
                </div>

                <div class="cart-4 text">
                    <div class="text-1">
                        <p class="animation">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consequatur dolor fuga inventore quae quis soluta tempore voluptates. Atque deserunt doloribus error numquam quam quibusdam voluptate. Aspernatur ducimus enim sint?
                        </p>
                    </div>

                    <div class="text-2">
                        <p class="animation">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consequatur dolor fuga inventore quae quis soluta tempore voluptates.
                        </p>
                    </div>

                    <div class="text-3">
                        <p class="animation">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consequatur dolor fuga inventore quae quis soluta tempore voluptates.
                        </p>
                    </div>
                </div>
            </form>
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