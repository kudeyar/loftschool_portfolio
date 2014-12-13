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
                <img src="/img/works/bugalter.png" class="works">
                <div class="mask">
                    <a href="http://bugalter.96.lt/" class="info" target="_blank">Посмотреть</a>
                </div>
            </div>
            <a href="http://bugalter.96.lt/">bugalter.96.lt</a>
            <p>
                <?
                $text = "Просто тренировка верстки, недоделанный";
                sub($text);
                ?>
            </p>
        </work>
        <work>
            <div class="view second-effect">
                <img src="/img/works/subcult.png" class="works">
                <div class="mask">
                    <a href="http://sergey-loft.zz.mu/" class="info" target="_blank">Посмотреть</a>
                </div>
            </div>
            <a href="http://sergey-loft.zz.mu/">sergey-loft.zz.mu</a>
            <p>
                <?
                $text = "Мой самый первый сайт. Ностальгия...)";
                sub($text);
                ?>
            </p>
        </work>

        <work class="link_add">
            <a href="#" class="add" data-toggle="modal">
                <div class="add_project">
                    <img src="/img/add_project.png"><br />
                    Добавить проект
                </div>
            </a>
        </work>
    </infa>
</content>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog modal_addpr">
        <div class="modal-content">
            <div class="modal-header modal_add_head">
                <div class="close" data-dismiss="modal" aria-hidden="true"><img src="/img/close.png"></div>
                <h3 id="myModalLabel">Добавление проекта</h3>
            </div>
            <div class="modal-body">
                <form method="POST" id="add_project" action="functions.php">
                    <label>
                        Название проекта <br />
                        <input type="text" name="name_project" placeholder="Введите название" required>
                    </label>
                    <label class="file_upload">    
                        Картинка проекта<br />
                        <input id = 'project_load' type="file" class="project__input"  accept="image/jpeg,image/png,image/gif">
                        <input id = 'project_img' type="text" class="project__input required-field input-img" placeholder='Загрузите изображение'>
                    </label>
                    <label>
                        URL проекта <br />
                        <input type="text" name="url_project" placeholder="Добавьте ссылку" required>
                    </label>
                    <label>
                        Описание <br />
                        <textarea class="opisanie" placeholder="Пара слов о Вашем проекте" name="opisanie" required></textarea>
                    </label>
                    <input type="submit" name="submit_project" value="Добавить" class="button_addpr">
                </form>
            </div>
        </div>
    </div>
</div>

<? require_once 'footer.php'; ?>


<script>
    $(document).ready(function () {
        $('#myModal').modal({
            keyboard: false
        });
        $('#myModal').modal('toggle');
        $('#myModal').modal('show');
        $('#myModal').modal('hide');

        $('.add').click(function () {
            $('#myModal').modal('show');
            return false;
        });
    });
</script>       
