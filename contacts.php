<? require_once 'header.php'; ?>

<content>

    <div class="top_contacts">
        <span>У вас интересный проект? Напишите мне :)</span>
    </div>
    <form_contact>
        <form method="POST" id="send_message">
            <label class="l_one">
                Имя <br />
                <input type="text" name="user" placeholder="Как к Вам обращаться" required>
            </label>
            <label>
                Email <br />
                <input type="email" name="email" placeholder="Куда мне писать?" required>
            </label>
            <label>
                Сообщение <br />
                <textarea class="message" placeholder="Кратко, в чем суть" name="message" required></textarea>
            </label>
            <label class="l_for">
                Введите код указанный на картинке <br />
                <div class="capcha"></div>
                <input type="text" name="capcha" placeholder="Введите код" class="input-capcha" required>
            </label>

            <div class="submit_message">
                <input type="submit" name="submit_contact" value="Отправить" class="button_submit">
                <input type="button" name="clear" value="Очистить" class="button_clear">
            </div>
        </form>
    </form_contact>

</content>

<? require_once 'footer.php'; ?>

<script>
    var params = {};
    $('.button_submit').click(function () {

        $form = $('#send_message');
        if ($form.find('input[name=user]').val() == '') {
            alert('Введите имя');
            return false;
        } else {
            params.user = $form.find('input[name=user]').val();
        }
        if ($form.find('input[name=email]').val() == '') {
            alert('Введите email');
            return false;
        } else {
            params.email = $form.find('input[name=email]').val();
        }
        if ($form.find('.message').val() == '') {
            alert('Введите message');
            return false;
        } else {
            params.message = $form.find('.message').val();
        }
        params.send = 1;
        $.post('functions.php', params, function (data) {
            if (data === 'ok') {
                $form.find('[name=user], [name=email]').val('');
//            $form.find('[name=email]').val('');
                $form.find('.message').val('');
                alert('Спасибо за письмо');
            } else if (data === 'no') {
                alert ("no");
            }

        });
        return false;
    })
</script>