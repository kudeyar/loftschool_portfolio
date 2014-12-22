<? @session_start(); ?>
<? $title = "Мои работы"; ?>
<? require_once 'header.php'; ?>
<? require_once 'menu.php'; ?>
<? require_once 'functions.php'; ?>
<?

function sub($text)
{
    if (mb_strlen($text) > 75) {
        $text = mb_substr($text, 0, 35, 'utf-8') . '...';
    }
    echo $text;
}

$img_array = array(
    "/img/works/arttrack.png",
    "/img/works/antipin.png",
    "/img/works/bugalter.png",
    "/img/works/subcult.png"
);
?>


<div class="block_content">
    <div class="content_title">
        <div class="content_title_text">Мои работы</div>
    </div>
    <div class="info">
        <?
        $res = viewProject();
        foreach ($res as $work) :
            ?>
            <?
            $i = rand(0, 3);
            $img = $img_array[$i];
            ?>
            <div class="my_work">
                <div class="view second-effect">
                    <img src="<?= $img; ?>" class="works" alt="<?= $work['url']; ?>">
                    <div class="mask">
                        <a href="<?= $work['url']; ?>" class="inform" target="_blank">Посмотреть</a>
                    </div>
                </div>
                <a href="<?= $work['url']; ?>"><?= $work['url']; ?></a>
                <p>
    <?= sub($work['description']); ?>
                </p>
            </div>
        <? endforeach; ?>

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
                <form method="POST" id="add_project" enctype="multipart/form-data">
                    <label class="tooltips">
                        <div>Название проекта</div>
                        <input type="text" name="name_project" class="name_project" placeholder="Введите название" >
                        <span class="tool5">Введите название</span>
                    </label>
                    <label class="file_upload tooltips">    
                        <div>Картинка проекта</div>
                        <input id="file_project" name="file_project" class="b-form-modal_inputs-upload" type="file" placeholder=""/>
                        <div>
                            <div id="file_name" class="b-form-modal_fn-upload">Загрузите изображение</div>
                            <div class="btn-upload"></div>
                        </div>
                        <span class="tool6">Выберите картинку</span>
                    </label>
                    <label class="tooltips">
                        <div>URL проекта </div>
                        <input type="text" name="url_project" class="url_project" placeholder="Добавьте ссылку" >
                        <span class="tool7">Введите URL</span>
                    </label>
                    <label class="tooltips">
                        <div>Описание </div>
                        <textarea class="opisanie" placeholder="Пара слов о Вашем проекте" name="opisanie" ></textarea>
                        <span class="tool8">Введите описание</span>
                    </label>
                    <input type="button" name="submit_project" value="Добавить" class="button_addpr">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModalSuc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog modal_addpr">
        <div class="modal-content">
            <div class="modal-body">
                <div class="success_add">
                    <h3>Ура!</h3>
                    <h5>Ваш проект успешно добавлен</h5>
                    <h6>Картинка к сожалению не грузится, остальное норм</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<? require_once 'footer.php'; ?>
