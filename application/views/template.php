<!DOCTYPE html>
<html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Conference Helper</title>
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/calendar.css" rel="stylesheet">
    <script src="/assets/js/jquery-2.1.4.min.js"></script>
</head>
<body>
<div class="head">
    <?if(Model_Users::isLogin()){?>
    <div class="auth">Вы авторизованы, <a href="/auth/logout/">выйти</a>?</div>
    <?} else {?>
    <div class="auth"><a href="/auth/">Вход\Регистрация</a></div>
    <?}?>
    <div class="logo"></div>
    <div class="clear-fix"></div>
    <div class="button article"><a href="/news/">Новости</a></div>
    <div class="button calendar"><a href="/calendar/">Календарь</a></div>
    <div class="button conference"><a href="/conference/">Конференции</a></div>
    <div class="button form"><a href="/register/">Регистрация</a></div>
    <div class="button feedback"><a href="/contacts/">Контакты</a></div>
</div>
<div class="content">
    <?=$content?>
</div>
</body>
</html>