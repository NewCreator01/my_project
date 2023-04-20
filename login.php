<?php

$title = 'Вход в профиль';

include 'vendor/header.php';
include 'vendor/navigation.php';
include 'vendor/main.php';

echo '<form class="form">
                    <h2 class="form-title">Вход в профиль</h2>
                    <input type="text" name="email" placeholder="Введите E-mail" />
                    <input type="password" name="pass" placeholder="Введите пароль" />
                    <input type="button" name="next" class="next action-button" value="Войти"/>
      </form>';

include 'vendor/footer.php';

?>