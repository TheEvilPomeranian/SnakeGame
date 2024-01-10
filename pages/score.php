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
    <link rel="stylesheet" href="/css/menuStyle.css">
    <title>Score</title>
</head>
<body>
    <div class="wrapepr">
        <div class="body">
            <h2>Счет</h2>
            <div class="body_row">
                <a href="/index.php" class="body__button">Назад</a></a>
                <span class="body__button" id="myScoreButton">Мой счет</span>
            </div>
            <table class="body_table">
                <thead>
                    <tr>
                        <th>Имя</th>
                        <th>Размер поля</th>
                        <th>Скорость</th>
                        <th>Счет</th>
                        <th>Время</th>
                    </tr>
                </thead>
                <tbody id="userTableBody">

                </tbody>
            </table> 
        </div>
    </div>
    <script src="../js/scoreList.js"></script>
</body>
</html>