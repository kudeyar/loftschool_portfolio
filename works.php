<? require_once 'header.php'; ?>
<? require_once 'menu.php'; ?>
<? @session_start(); ?>
<?

function sub($text)
{
    if (mb_strlen($text) > 75) {
        $text = mb_substr($text, 0, 35, 'utf-8') . '...';
    }
    echo $text;
}
?>


<div class="block_content">
    <div class="content_title">
        <div class="content_title_text">Мои работы</div>
    </div>
    <div class="info">
        <div class="my_work">
            <div class="view second-effect">
                <img src="/img/works/arttrack.png" class="works" alt="http://art-track.ru/">
                <div class="mask">
                    <a href="http://art-track.ru/" class="inform" target="_blank">Посмотреть</a>
                </div>
            </div>
            <a href="http://art-track.ru/">art-track.ru</a>
            <p>
                <?
                $text = "Сайт фирмы по предоставлению ГЛОНАСС отслеживания транспорта и контроля расхода топлива";
                sub($text);
                ?>
            </p>
        </div>
        <div class="my_work">
            <div class="view second-effect">
                <img src="/img/works/antipin.png" class="works" alt="http://psiholog-antipin.ru/">
                <div class="mask">
                    <a href="http://psiholog-antipin.ru/" class="inform" target="_blank">Посмотреть</a>
                </div>
            </div>
            <a href="http://psiholog-antipin.ru/">psiholog-antipin.ru</a>
            <p>
                <?
                $text = "Сайт визитка психолога";
                sub($text);
                ?>
            </p>
        </div>
        <div class="my_work">
            <div class="view second-effect">
                <img src="/img/works/bugalter.png" class="works" alt="http://bugalter.96.lt/">
                <div class="mask">
                    <a href="http://bugalter.96.lt/" class="inform" target="_blank">Посмотреть</a>
                </div>
            </div>
            <a href="http://bugalter.96.lt/">bugalter.96.lt</a>
            <p>
                <?
                $text = "Просто тренировка верстки, недоделанный";
                sub($text);
                ?>
            </p>
        </div>
        <div class="my_work">
            <div class="view second-effect">
                <img src="/img/works/subcult.png" class="works" alt="http://sergey-loft.zz.mu/">
                <div class="mask">
                    <a href="http://sergey-loft.zz.mu/" class="inform" target="_blank">Посмотреть</a>
                </div>
            </div>
            <a href="http://sergey-loft.zz.mu/">sergey-loft.zz.mu</a>
            <p>
                <?
                $text = "Мой самый первый сайт. Ностальгия...)";
                sub($text);
                ?>
            </p>
        </div>
        <? if (isset($_SESSION['auth'])) : ?>
            <div class="my_work link_add">
                <a href="#" class="add" data-toggle="modal" data-target="#myModal">
                    <div class="add_project">
                        <img src="/img/add_project.png" alt="add project">
                        <div>Добавить проект</div>
                    </div>
                </a>
            </div>
        <? endif; ?>
    </div>
</div>

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
                        <div>Название проекта</div>
                        <input type="text" name="name_project" placeholder="Введите название" required>
                    </label>
                    <label class="file_upload">    
                        <div>Картинка проекта</div>
                        <input id = 'project_load' type="file" class="project__input"  accept="image/jpeg,image/png,image/gif">
                        <input id = 'project_img' type="text" class="project__input required-field input-img" placeholder='Загрузите изображение'>
                    </label>
                    <label>
                        <div>URL проекта </div>
                        <input type="text" name="url_project" placeholder="Добавьте ссылку" required>
                    </label>
                    <label>
                        <div>Описание </div>
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

        $('.add').click(function () {
            $('#myModal').modal('show');
            return false;
        });
    });
</script>       
