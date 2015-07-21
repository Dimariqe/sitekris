<h2>Авторизация</h2>
<?if(isset($errors)) foreach($errors as $error){?>
<div class="error">
    <?=$error?>
</div>
<?}?>
<form class="auth" action="/auth/auth/" method="post">
    <label>Логин: <input name="login"></label>
    <label>Пароль: <input type="password" name="password"></label>
    <button type="submit" name="act" value="auth">Авторизация</button>
</form>
<p>Нет аккаунта? Можете <a href="/auth/registration/">зарегистрироваться</a>!</p>