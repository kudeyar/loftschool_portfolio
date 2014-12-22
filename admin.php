<? $title = "Войти"; ?>
<? require_once 'header.php'; ?>

<div class="block_auth">
    <div class="top_form">
        <span>Авторизуйтесь</span>
    </div>
    <div class="error_message">
        <h4>Пользователя с таким логином/паролем не существует в базе</h4>
    </div>
    <div class="form_auth">
        <form method="POST" id="auth">
            <label class="login tooltips">
                <div>Логин </div>
                <input type="text" name="login" placeholder="Введите логин" class="input_login">
                <span class="tool1">Введите логин</span>
            </label>
            <label class="pass tooltips">
                <div>Пароль </div>
                <input type="password" name="password" placeholder="Введите пароль" class="input_pass">
                <span class="tool3">Введите пароль</span>
            </label>

            <div class="submit_auth">
                <input type="submit" name="submit_auth" value="Войти" class="button_auth">
            </div>
        </form>
    </div>

</div>

<? require_once 'footer.php'; ?>
