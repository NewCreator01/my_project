<?php

$title = 'Новости';
include 'posts.php';
include 'vendor/header.php';
include 'vendor/navigation.php';
include 'vendor/main.php';
echo '<h1 class="news__title">Новости</h1>
            <div class="news">';

foreach ($post as $value) {

        echo '<div class="card">
                    <img src="https://discuss.dev.twitch.tv/uploads/default/original/2X/4/40cfa8ca1f24ac29cfebcb1460b5cafb213b6105.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">' . $value . '</p>
                    </div>
                </div>';
}
echo '</div>';

include 'vendor/footer.php';
?>