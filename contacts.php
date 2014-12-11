<? require_once 'header.php'; ?>

<content>

    <div class="top_contacts">
        <span>У вас интересный проект? Напишите мне :)</span>
    </div>
    <form_contact>
        <form action="" method="POST">
            <label class="l_one">
                Имя <br />
                <input type="text" name="user" placeholder="Как к Вам обращаться">
            </label>
            <label>
                Email <br />
                <input type="email" name="email" placeholder="Куда мне писать?">
            </label>
            <label>
                Сообщение <br />
                <textarea class="message" placeholder="Кратко, в чем суть" name="message"></textarea>
            </label>
            <label class="l_for">
                Введите код указанный на картинке <br />
                <div class="capcha"></div>
                <input type="text" name="capcha" placeholder="Введите код" class="input-capcha">
            </label>

            <div class="submit_message">
                <input type="submit" name="submit" value="Отправить" class="button_submit">
                <input type="button" name="clear" value="Очистить" class="button_clear">
            </div>
        </form>
    </form_contact>

</content>

<? require_once 'footer.php'; ?>