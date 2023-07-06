<!DOCTYPE html>

<html lang="ru">

<head>
    <title>Визитка</title>
    <meta charset = "UTF-8">
    <link rel = "stylesheet" href = "style.css">
</head>

<body>
    <div class = "flex-container">
        <div class = "head-menu">
            <img src="img/phpimage.jpeg" width = "300" alt = "Картинка PHP">
            <nav>
                <a>Главная</a>
                <a>Мое портфолио</a>
                <a href="https://skillfactory.ru" style = "color : green">Партнер</a>
                <a>Контакты</a>
            </nav>
        </div>

        <div class = "main-page">
            <div class = "img-skills">
                <?php include 'imgskills.inc.php'; ?>
            </div>

            <div class = "text-skills">
                <h1>Приветствую вас на моей странице-визитке!</h1>
                <p>Меня зовут
                <?php
                    echo "$mySurname $myName <br>";
                    echo "Мне $myAge лет <br>";
                    echo "Я из города $myCity"; 
                ?>
                </p>
                <p>Мы обучились базовым основам веб-программирования: <br>
                    <?php echo 'HTML, CSS, JS, PHP'; ?>
                </p>

                <div class = "example-skills">
                    <p id = "addition">Дополнительный JS-элемент: 
                        <button type="submit" id="colorButton">Пасхалка</button>
                        <script src = "script.js"></script>
                    </p>
                    <p>
                        <?php 
                        include 'knowledge.inc.php';
                        $x = 10;
                        $y = 1000; 
                        $z = $x*$y/$b;
                        echo "$a $z $c <br>";
                        echo "$result";
                        ?>
                    </p>
                </div>
                <q id = "quote">
                    Vae victis - условия всегда диктуют победители
                </q>
            </div>
        </div>

        <div class = "footer-page">
            <?php include 'footer.inc.php' ?>
        </div>
    </div>
</body>