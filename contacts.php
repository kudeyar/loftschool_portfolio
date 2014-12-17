<? session_start(); ?>
<? require_once 'header.php'; ?>
<? require_once 'menu.php'; ?>

<?
if ($_SESSION["capcha"] == "") {
    $_SESSION["capcha"] = "LOFTSCHOOL";
}
?>

<div class="block_content">
    <div class="top_contacts">
        <span>У вас интересный проект? Напишите мне :)</span>
    </div>

    <div class="success_message">
        <h3>Спасибо! Ваше письмо успешно отправлено!</h3>
    </div>
    
    <div class="error_message">
        <h3>Упс!</h3>
        <h4>Что то пошло не так. Попробуйте еще раз</h4>
    </div>

    <div class="form_contact">
        <form method="POST" id="send_message">
            <label class="l_one tooltips">
                <div>Имя </div>
                <input type="text" name="user" placeholder="Как к Вам обращаться" class="name">
                <span class="tool1">Введите имя</span>
            </label>
            <label class="tooltips">
                <div>Email </div>
                <input type="email" name="email" placeholder="Куда мне писать?" class="email">
                <span class="tool2">Введите email</span>
            </label>
            <label class="tooltips">
                <div>Сообщение </div>
                <textarea class="message" placeholder="Кратко, в чем суть" name="message" ></textarea>
                <span class="tool3">Введите сообщение</span>
            </label>
            <label class="l_for tooltips">
                <div>Введите код указанный на картинке</div>
                <div class="capcha"><img src="capcha/captcha.php"></div>
                <input type="text" name="capcha" placeholder="Введите код" class="input-capcha" >
                <span class="tool4">Неверный код</span>
            </label>

            <div class="submit_message">
                <input type="submit" name="submit_contact" value="Отправить" class="button_submit">
                <input type="button" name="clear" value="Очистить" class="button_clear">
            </div>
        </form>
    </div>

</div>

<? require_once 'footer.php'; ?>

<script>
    var params = {};

    function clear_form() {
        $(':input[name=user]').focus(function () {
            $('.tool1').removeClass('active_name');
            $('input[name=user]').removeClass('red_input');
        });
        if (($(':input').val() !== '') || ($($('.message').val() !== ''))) {
            $('.email, .message, .input-capcha, .name').val('');
            $('.email, .input-capcha, .message, .name').focus().blur();

        }
        $(':input[name=email]').focus(function () {
            $('.tool2').removeClass('active_email');
            $('input[name=email]').removeClass('red_input');
        });
        $(':input[name=capcha]').focus(function () {
            $('.tool4').removeClass('active_capcha');
            $('input[name=capcha]').removeClass('red_input');
        });
        $('.message:input').focus(function () {
            $('.tool3').removeClass('active_message');
            $('.message:input').removeClass('red_input');
        });
        $('.success_message').slideUp();
        $('.error_message').slideUp();
    }
    clear_form();
    $('.button_submit').click(function () {

        $form = $('#send_message');
        if ($form.find('input[name=user]').val() === '') {
            $('label.tooltips span.tool1').addClass('active_name');
            $('input[name=user]').addClass('red_input');
        } else {
            params.user = $form.find('input[name=user]').val();
        }
        if ($form.find('input[name=email]').val() === '') {
            $('label.tooltips span.tool2').addClass('active_email');
            $('input[name=email]').addClass('red_input');
        } else {
            params.email = $form.find('input[name=email]').val();
        }
        if ($form.find('.message').val() === '') {
            $('label.tooltips span.tool3').addClass('active_message');
            $('.message').addClass('red_input');
        } else {
            params.message = $form.find('.message').val();
        }
        if ($form.find('input[name=capcha]').val() === '') {
            $('label.tooltips span.tool4').addClass('active_capcha');
            $('input[name=capcha]').addClass('red_input');
        } else {
            params.capcha = $form.find('input[name=capcha]').val();
        }
        params.send = 1;
        $.post('functions.php', params, function (data) {
            console.log(data);
            if (data === 'ok') {
                clear_form();
                $('.success_message').slideToggle();
            } else if (data === 'no') {
                clear_form();
                $('.error_message').slideToggle();
            } else if (data === 'capcha_no') {
                $('label.tooltips span.tool4').addClass('active_capcha');
                $('input[name=capcha]').addClass('red_input');
            } else if (data === 'email_no') {
                $('label.tooltips span.tool2').addClass('active_email');
                $('input[name=email]').addClass('red_input');
            }

        });
        return false;
    });

    $('.button_clear').click(function () {
        clear_form();
    })
    $('body,html').animate({scrollTop: 0}, 0);
</script>