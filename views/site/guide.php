<?php
/**
 * @var yii\web\View $this
 */
$this->title = 'Хост Бот гайд';
$context = $this->context;
?>

<div class="site-guide">
<div class="container">
<div class="row">

<div  class="guide-sidebar docs col-lg-4">

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading"><h3>Основная информация</h3></div>

        <!-- List group -->
        <ul class="list-group">
            <li class="list-group-item"><a href="<?=url(['/site/guide', 'id' => 'basic-info.license'])?>">Лицензионное соглашение</a></li>
            <li class="list-group-item"><a href="<?=url(['/site/guide', 'id' => 'basic-info.changelog'])?>">Лог изменений</a></li>
            <li class="list-group-item"><a href="<?=url(['/site/guide', 'id' => 'basic-info.credits'])?>">Разработчики</a></li>
            <li class="list-group-item"><h4>Установка &amp; Настройка</h4>
                <ul>
                    <li><a href="<?=url(['/site/guide', 'id' => 'basic-info.requirements'])?>">Требования</a></li>
                    <li><a href="<?=url(['/site/guide', 'id' => 'installation.index'])?>">Установка</a></li>
                    <li><a href="<?=url(['/site/guide', 'id' => 'installation.upgrading'])?>">Обновление с предыдущих версий</a></li>
                </ul>
            </li>
            <li class="list-group-item"><h4>Базовые возможности</h4>

                <ul>
                    <li><a href="<?=url(['/site/guide', 'id' => 'general.how-admins-work'])?>">Админы</a></li>
                    <li><a href="<?=url(['/site/guide', 'id' => 'general.how-bans-work'])?>">Баны</a></li>
                    <li><a href="<?=url(['/site/guide', 'id' => 'general.how-reserved-slots-work'])?>">Резервирование слотов</a></li>
                    <li><a href="<?=url(['/site/guide', 'id' => 'general.admin-game'])?>">Админ Игра</a></li>
                    <li><a href="<?=url(['/site/guide', 'id' => 'general.multiple-realms'])?>">Несколько серверов</a></li>
                    <li><a href="<?=url(['/site/guide', 'id' => 'general.autohosting'])?>">Авто хостинг</a></li>
                    <li><a href="<?=url(['/site/guide', 'id' => 'general.savegames'])?>">Сохранение Игр</a></li>
                    <li><a href="<?=url(['/site/guide', 'id' => 'general.replays'])?>">Сохранение Реплеев</a></li>
                    <li><a href="<?=url(['/site/guide', 'id' => 'general.mapcfg'])?>">Конфигурация карт</a></li>
                    <li><a href="<?=url(['/site/guide', 'id' => 'general.use-map-command'])?>">Комманда "map"</a></li>
                    <li><a href="<?=url(['/site/guide', 'id' => 'general.use-mql'])?>">Использование MySQL</a></li>
                    <li><a href="<?=url(['/site/guide', 'id' => 'general.automatic-matchmaking'])?>">Автоматическая организация матчей</a></li>
                    <li><a href="<?=url(['/site/guide', 'id' => 'general.hcl-standard'])?>">HCL (ХостБот Библиотека Комманд) Стандарт</a></li>
                    <li><a href="<?=url(['/site/guide', 'id' => 'general.w3mmd-standard'])?>">W3MMD (Warcraft III Мета Данные Карт) Стандарт</a></li>
                    <li><a href="<?=url(['/site/guide', 'id' => 'general.load-in-game-feature'])?>">Загрузка в Игре</a></li>
                    <li><a href="<?=url(['/site/guide', 'id' => 'general.commands'])?>">Список Комманд</a></li>
                </ul>
            </li>

            <li class="list-group-item"><h4>Сборка</h4>

                <ul>
                    <li><a href="<?=url(['/site/guide', 'id' => 'compile.windows'])?>">под Windows</a></li>
                    <li><a href="<?=url(['/site/guide', 'id' => 'compile.linux'])?>">под Linux</a></li>
                    <li><a href="<?=url(['/site/guide', 'id' => 'compile.osx'])?>">под OS X</a></li>
                </ul>
            </li>

        </ul>
    </div>

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading"><h3>GProxy++</h3></div>
        <ul class="list-group">
            <li class="list-group-item"><a href="<?=url(['/site/guide', 'id' => 'gproxy', '#' => 'general'])?>">Описание</a></li>
            <li class="list-group-item"><a href="<?=url(['/site/guide', 'id' => 'gproxy', '#' => 'configuration'])?>">Настройка</a></li>
            <li class="list-group-item"><a href="<?=url(['/site/guide', 'id' => 'gproxy', '#' => 'commands'])?>">Команды</a></li>
        </ul>
    </div>

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading"><h3>Вклад сообщества</h3></div>
        <div class="panel-body">
            <p>Как вы можете помочь проекту</p>
        </div>
        <ul class="list-group">
            <li class="list-group-item"><a href="<?=url(['/site/guide', 'id' => 'contrib.svn'])?>">GHost++ SVN Репозиторий</a></li>
        </ul>
    </div>
</div>
<div class="guide-content content docs col-lg-8">
    <?=$content?>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <ins class="adsbygoogle"
         style="display:block; text-align:center;"
         data-ad-layout="in-article"
         data-ad-format="fluid"
         data-ad-client="ca-pub-3266780374872008"
         data-ad-slot="8460030480"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>

</div>
</div>
</div>