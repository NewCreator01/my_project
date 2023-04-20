<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Регистрация</title>
</head>
<body>
<div class="wrapper">

    <header>
        <img src="img/logo.png" alt="logotype">
    </header>

    <div class="container">
        <nav class="nav">
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="news.php">Новости</a></li>
            </ul>
            <ul>
                <li><a href="login.php">Авторизация</a></li>|
                <li><a href="signup.php">Регистрация</a></li>
            </ul>
        </nav>
    </div>

    <div class="container">
        <main>
            <form class="form">
                <h2 class="form-title">Регистрация</h2>
                <input type="text" name="email" placeholder="Введите E-mail" />
                <input type="password" name="password" placeholder="Введите пароль" />
                <input type="password" name="password_confirm" placeholder="Повторите пароль" />
                <input type="button" name="next" class="next action-button" value="Зарегистрироваться"/>
            </form>
        </main>
    </div>

</div>

<footer>
    <p>Футер сайта</p>
</footer>
</body>
</html>