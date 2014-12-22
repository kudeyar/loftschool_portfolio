<? session_start(); ?>
<? $title = "Связаться со мной"; ?>
<? require_once 'header.php'; ?>
<? require_once 'menu.php'; ?>

<?
if (isset($_SESSION["capcha"])) {
    if ($_SESSION["capcha"] == "") {
        $_SESSION["capcha"] = "LOFTSCHOOL";
    }
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
