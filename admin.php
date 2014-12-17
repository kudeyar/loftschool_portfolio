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

<script>
    var params = {};
    $(':input[name=login]').focus(function () {
        $('.tool1').removeClass('active_login');
        $('input[name=login]').removeClass('red_input');
    });
    $(':input[name=password]').focus(function () {
        $('.tool3').removeClass('active_pass');
        $('input[name=password]').removeClass('red_input');
    });

    $('.button_auth').click(function () {

        $form = $('#auth');
        if ($form.find('input[name=login]').val() === '') {
            $('label.tooltips span.tool1').addClass('active_login');
            $('input[name=login]').addClass('red_input');
        } else {
            params.login = $form.find('input[name=login]').val();
        }
        if ($form.find('input[name=password]').val() === '') {
            $('label.tooltips span.tool3').addClass('active_pass');
            $('input[name=password]').addClass('red_input');
        } else {
            params.password = $form.find('input[name=password]').val();
        }
        params.auth = 1;
        $.post('functions.php', params, function (data) {
            console.log(data);
            if (data === 'ok') {
                window.location.replace("/");
            } else if (data === 'no_login') {
                $('.input_login, .input_pass').val('');
                $('.error_message').slideDown();
            }

        });
        return false;
    });
</script>