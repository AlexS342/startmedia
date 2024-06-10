<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/table.css">
    <link rel="stylesheet" href="./css/footer.css">

    <title>Результаты соревнований</title>
</head>

<body class="body">
<div class="wrp">
    <header class="header">
        <div class="header__logo">
            <h1 class="header__logoName">RTC lightning</h1>
            <p class="header__logoText">В наших венах течёт бензин</p>
            <p class="header__logoText">Мы дышим N2O</p>
        </div>
        <div class="header__info">
            <h3 class="header__infoHeader">Мы и наши машины - одно целое!</h3>
            <p class="header__infoText">Мы и есть автоспорт! Мы организуем соревнования любого уровня и всех видов!</p>
            <p class="header__infoText">Нам не важно, на каких машинах и по каким правила гонять! Нам важно, чтобы это
                были машины, а трассу и условия мы подберем!</p>
            <p class="header__infoText">Любишь скорость - присоединяйся к нашему сообществу и участвую в любых гонках,
                которые мы устраиваем на регулярной основе!</p>
        </div>
        <div class="header__login">
            <p class="header__loginItem"><a class="heater__loginItemLink" href="#">Вход</a></p>
            <p class="header__loginItem"><a class="heater__loginItemLink" href="#">Регистрация</a></p>
        </div>
    </header>
    <main>
        <nav class="nav">
            <ol class="nav__list">
                <li class="nav__listItem"><a class="nav__listItemLink main__listDisable" href="#">Правила</a></li>
                <li class="nav__listItem"><a class="nav__listItemLink main__listDisable" href="#">Регистрация</a></li>
                <li class="nav__listItem"><a class="nav__listItemLink main__listDisable" href="#">Соревнования</a></li>
                <li class="nav__listItem"><a class="nav__listItemLink" href="#">Результаты</a></li>
                <li class="nav__listItem"><a class="nav__listItemLink main__listDisable" href="#">Программа</a></li>
            </ol>
        </nav>

        <?php include 'components/table.php' ?>

    </main>
</div>
<footer class="footer">
    <div class="footer__copy">
        <p class="footer__copyText">RTC lightning&#174; — зарегистрированная 1927</p>
        <p class="footer__copyText">RTC lightning&#169; - все права защищены 1928 - 2201</p>
    </div>
    <div class="footer__nav">
        <ol class="footer__navList">
            <li class="footer__navListItem"><a class="footer__navListItemLink" href="#">Правила</a></li>
            <li class="footer__navListItem"><a class="footer__navListItemLink" href="#">Регистрация</a></li>
            <li class="footer__navListItem"><a class="footer__navListItemLink" href="#">Соревнования</a></li>
            <li class="footer__navListItem"><a class="footer__navListItemLink" href="#">Результаты</a></li>
            <li class="footer__navListItem"><a class="footer__navListItemLink" href="#">Программа</a></li>
        </ol>
    </div>
    <div class="footer__authors">
        <p class="footer__authorsText">Егорович Н.А.</p>
        <p class="footer__authorsText">Матросов П.А.</p>
        <p class="footer__authorsText">Шумихина Е.У.</p>
    </div>
</footer>
</body>
</html>