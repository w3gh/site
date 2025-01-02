<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/**
 * @var \yii\web\View $this
 * @var string $content
 */
AppAsset::register($this);

/** @var \yii\web\Controller $context */
$context = $this->context;
$params = Yii::$app->params;
$base = Yii::$app->request->baseUrl;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="GHost++,Ghost One,Скачать,Dota,Настройка,Карты,Хост бот,Garena Хост бот,brtGhost,Хост бот гайд" />
    <meta name="revisit-after" content="1 day" />
    <meta name='yandex-verification' content='617166b8e1010730' />
    <meta name="google-site-verification" content="igiSDwEKaT-wC6bv47MOv4PSyZjsKUYP8NfvdC-oyGc" />
    <meta name="mailru-verification" content="87b0ee5240ff81d9" />
	<title><?= Html::encode($this->title) ?> - GHost++ Warcraft 3 Хост бот Русское Сообщество</title>
	<?php $this->head() ?>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-3266780374872008",
            enable_page_level_ads: true
        });
    </script>
</head>
<body>

<?php $this->beginBody() ?>

<!--[if lt IE 7]><p class="chromeframe">Ваш браузер <em>устарел!</em> <a href="http://browsehappy.com/">Обновитесь до другой версии браузера</a> или <a href="http://www.google.com/chromeframe/?redirect=true">установите Google Chrome Frame</a> чтобы сайт отображался лучше.</p><![endif]-->

<div class="layout">

    <div class="layout-inner">

        <section class="shortcuts">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <a href="<?=$params['community.login']?>">Вход</a> <a href="<?=$params['community.register']?>">Регистрация</a>
                    </div>
                </div>
            </div>
        </section>

        <header class="branding">
            <div class="branding-inner container">
                <div class="row">

                    <div class="col-lg-5">
                        <a id="logo" href="<?=url(['/site/index'])?>" style="background-image:url('<?=$base?>/img/logo.png')">
                            <h1>GHost++ Русское Сообщество</h1>
                        </a>
                    </div>

                    <div class="col-lg-7">
                        <nav class="primary">
                            <?=Menu::widget([
                                'items' => [
                                    ['label' => 'Главная', 'url' => ['/site/index']],
                                    ['label' => 'Скачать', 'url' => ['/site/download']],
                                    ['label' => 'Документация', 'url' => ['/site/guide']],
                                    ['label' => 'Видео Уроки', 'url' => $params['community.videos']],
                                    ['label' => 'Сообщество', 'url' => $params['community.home']]
                                ],
                            ]);
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <div class="main clearfix">
            <div class="page-content">
                <div class="container">
                    <?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : array()]) ?>
                </div>
                <?= $content ?>
            </div>
        </div>

    </div>

</div>
<footer class="footer">
    <div class="footer-inner container">
    <div class="copyright">
        <?php if (!YII_ENV_DEV): ?>
        <!-- Yandex.Metrika -->
        <script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript"></script>
        <div style="display:none;"><script type="text/javascript">
                try { var yaCounter860218 = new Ya.Metrika(860218); } catch(e){}
            </script></div>
        <noscript><div style="position:absolute"><img src="//mc.yandex.ru/watch/860218"  alt="" /></div></noscript>
        <!-- /Yandex.Metrika -->

        <!--Rating@Mail.ru counter-->
        <script language="javascript" type="text/javascript">//<![CDATA[
            d=document;var a='';a+=';r='+escape(d.referrer);js=10;//]]></script>

        <script language="javascript1.1" type="text/javascript">//<![CDATA[
            a+=';j='+navigator.javaEnabled();js=11;//]]></script>

        <script language="javascript1.2" type="text/javascript">//<![CDATA[
            s=screen;a+=';s='+s.width+'*'+s.height;
            a+=';d='+(s.colorDepth?s.colorDepth:s.pixelDepth);js=12;//]]></script>

        <script language="javascript1.3" type="text/javascript">//<![CDATA[
            js=13;//]]></script>

        <script language="javascript" type="text/javascript">//<![CDATA[
            d.write('<a href="http://top.mail.ru/jump?from=1615526" target="_top">'+
                '<img src="http://d6.ca.b8.a1.top.mail.ru/counter?id=1615526;t=82;js='+js+
                a+';rand='+Math.random()+'" alt="Рейтинг@Mail.ru" border="0" '+
                'height="18" width="88" \/><\/a>');if(11<js)d.write('<'+'!-- ');//]]></script>

        <noscript><a target="_top" href="http://top.mail.ru/jump?from=1615526">
                <img src="http://d6.ca.b8.a1.top.mail.ru/counter?js=na;id=1615526;t=82"
                     height="18" width="88" border="0" alt="Рейтинг@Mail.ru" /></a></noscript>

        <script language="javascript" type="text/javascript">//<![CDATA[
            if(11<js)d.write('--'+'&#062');//]]></script>
        <!--// Rating@Mail.ru counter-->

        <!--LiveInternet counter-->
        <script type="text/javascript">//<![CDATA[
            document.write("<a href='http://www.liveinternet.ru/click' "+
                "target=_blank><img src='http://counter.yadro.ru/hit?t26.6;r"+
                escape(document.referrer)+((typeof(screen)=="undefined")?"":
                ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
                    screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
                ";h"+escape(document.title.substring(0,80))+";"+Math.random()+
                "' alt='' title='LiveInternet: показано число посетителей за"+
                " сегодня' "+
                "border='0' width='88' height='15'><\/a>")
            //]]></script>
        <!--/LiveInternet-->

        <!-- begin of Top100 code -->
        <script id="top100Counter" type="text/javascript" src="http://counter.rambler.ru/top100.jcn?1650726"></script><noscript><img src="http://counter.rambler.ru/top100.cnt?1650726" alt="" width="1" height="1" border="0"></noscript>
        <!-- end of Top100 code -->

        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-7549514-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

        </script>

        <?php endif; ?>
        <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-nd/3.0/80x15.png" /></a>

    </div>
    <div id="license">
        Материалы этого сайта находятся под лицензией <a rel="license" href="http://w3gh.ru/index.php?page=10">Creative Commons Attribution-Noncommercial-No Derivative Works 3.0 Unported License</a>.
    </div>


    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
