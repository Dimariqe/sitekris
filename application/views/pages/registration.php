<h2>Регистрация</h2>
<?if(isset($errors)) foreach($errors as $error){?>
    <div class="error">
        <?=$error?>
    </div>
<?}?>
<form class="registration" method="post" action="/auth/registration/">
    <label>Логин: <input name="login"></label>
    <label>Пароль: <input name="password" type="password"></label>
    <label>Повторите пароль: <input name="re-password" type="password"></label>
    <label>Почта: <input name="email"></label>
    <label>ФИО: <input name="name"></label>
    <button type="submit">Регистрация</button>
</form>