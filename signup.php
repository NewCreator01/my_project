<?php

$title = 'Регистрация';

include 'vendor/header.php';
include 'vendor/navigation.php';
include 'vendor/main.php';

echo '<form class="form">
                <h2 class="form-title">Регистрация</h2>
                <input type="text" name="email" placeholder="Введите E-mail" />
                <input type="password" name="password" placeholder="Введите пароль" />
                <input type="password" name="password_confirm" placeholder="Повторите пароль" />
                <input type="button" name="next" class="next action-button" value="Зарегистрироваться"/>
            </form>';

include 'vendor/footer.php';

?>