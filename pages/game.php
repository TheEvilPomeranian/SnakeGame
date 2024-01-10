<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
    <link rel="manifest" href="/icons/site.webmanifest">
    <link rel="mask-icon" href="/icons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#cf1111">
    <meta name="theme-color" content="#cf1111">

    <link rel="stylesheet" href="/css/gameStyle.css">
    <title>Snake</title>
</head>
<body>
    <div class="wrapper">
        <div class="body">
            <?php
            if(!empty($_SESSION["user"]["name"])) : ?>
                <a class="body__username">Привет, <?php echo($_SESSION["user"]["name"]) ?></a>
            <?php endif; ?>
            <div class="body__row">
                <div class="body__inscription">
                    <span>Счет: </span>
                    <span id="score"></span>
                </div>
                <div id="speed" class="body__inscription">
                    <span></span>
                </div>
            </div>
            <canvas id="mainCanvas" class="canvas" width="320" height="320"></canvas>
            <div id = "restartMenu" class="body__menu hide">
                <a href="/pages/game.php" class="body__restart button ">Заново</a>
                <a href="/index.php" class="body__back button">Назад</a>
            </div>
        </div>
    </div>
    <script type="module" src="/js/game.js"></script>
</body>
</html>