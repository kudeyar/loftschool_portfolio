<? require_once 'header.php'; ?>

<?

function sub($text)
{
    if (mb_strlen($text) > 75) {
        $text = mb_substr($text, 0, 35, 'utf-8') . '...';
    }
    echo $text;
}
?>

<content>
    <content_title>
        <div class="content_title">Мои работы</div>
    </content_title>
    <infa>
        <work>
            <div class="view second-effect">
                <img src="/img/works/arttrack.png" class="works">
                <div class="mask">
                    <a href="http://art-track.ru/" class="info" target="_blank">Посмотреть</a>
                </div>
            </div>
            <a href="http://art-track.ru/">art-track.ru</a>
            <p>
                <?
                $text = "Сайт фирмы по предоставлению ГЛОНАСС отслеживания транспорта и контроля расхода топлива";
                sub($text);
                ?>
            </p>
        </work>
        <work>
            <div class="view second-effect">
                <img src="/img/works/antipin.png" class="works">
                <div class="mask">
                    <a href="http://psiholog-antipin.ru/" class="info" target="_blank">Посмотреть</a>
                </div>
            </div>
            <a href="http://psiholog-antipin.ru/">psiholog-antipin.ru</a>
            <p>
                <?
                $text = "Сайт визитка психолога";
                sub($text);
                ?>
            </p>
        </work>
        <work>
            <div class="view second-effect">
                <img src="/img/works/arttrack.png" class="works">
                <div class="mask">
                    <a href="http://art-track.ru/" class="info" target="_blank">Посмотреть</a>
                </div>
            </div>
            <a href="http://art-track.ru/">art-track.ru</a>
            <p>
                <?
                $text = "Сайт фирмы по предоставлению ГЛОНАСС отслеживания транспорта и контроля расхода топлива";
                sub($text);
                ?>
            </p>
        </work>
        <work>
            <div class="view second-effect">
                <img src="/img/works/antipin.png" class="works">
                <div class="mask">
                    <a href="http://psiholog-antipin.ru/" class="info" target="_blank">Посмотреть</a>
                </div>
            </div>
            <a href="http://psiholog-antipin.ru/">psiholog-antipin.ru</a>
            <p>
                <?
                $text = "Сайт визитка психолога";
                sub($text);
                ?>
            </p>
        </work>

        <work class="link_add">
            <a href="#">
                <div class="add_project">
                    <img src="/img/add_project.png"><br />
                    Добавить проект
                </div>
            </a>
        </work>
    </infa>
</content>

<? require_once 'footer.php'; ?>