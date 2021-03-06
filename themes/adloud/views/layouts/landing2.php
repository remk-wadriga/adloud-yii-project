<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 08.05.14
 * Time: 11:25
 * @var \application\components\ControllerBase $this
 */
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>

    <?php //$this->partial('_googleSplitTest'); ?>

    <meta charset="utf-8"/>
    <title>Тизерная сеть AdLoud - Повышайте свой доход вместе с нами!</title>

    <?php
    $css = Yii::app()->theme->baseUrl.'/assets/css';
    $js = Yii::app()->theme->baseUrl.'/assets/js';
    $img = Yii::app()->theme->baseUrl.'/assets/images';
    $plugins = Yii::app()->theme->baseUrl.'/assets/plugins';

    $cs = Yii::app()->clientScript;

    $cs
        ->registerMetaTag('тизерная сеть, тизеная реклама, монетизация сайта, монетизация трафика, рекламная сеть', 'keyword')
        ->registerMetaTag('AdLoud Network - новая тизерная сеть. Мы гарантируем высокий доход нашим партнёрам.', 'description')
        ->registerMetaTag('width=device-width, initial-scale=1.0', 'viewport')
        ->registerMetaTag('k7XPBrIyywP4bRHAj4SXWR74KTYmXuCzomcpPLk_8RU', 'google-site-verification');

    $cs
        ->registerCssFile($css.'/bootstrap.css')
        ->registerCssFile($css.'/flat-ui.css')
        ->registerCssFile($css.'/adloud.css')
        ->registerCssFile($css.'/landing.css')
        ->registerCssFile('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic')
        ->registerCssFile('http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');

    $cs
        ->registerScriptFile($js.'/smoothscroll.js', CClientScript::POS_END)
        ->registerScriptFile($js.'/pages/main.js', CClientScript::POS_END)
        ->registerScriptFile($js.'/ajax-adloud.js', CClientScript::POS_END)
        ->registerScriptFile($js.'/pages/landing.js', CClientScript::POS_END);

    $loginFormId = 'login-form';
    $registerFormId = 'registration-form';
    $restoreFormId = 'restore-pass-form';
    $afterRegFormId = 'after-registration';
    $afterRestoreFormId = 'after-restore';
    ?>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <?php $this->partial('_googleAnalytics'); ?>
    <?php $this->partial('_googleadservices'); ?>
    <?php $this->partial('_webMoney'); ?>

</head>

<body>

<div class="landing-page">

<?php $this->partial('_messageBlock'); ?>

<nav role="navigation" class="land-fixed-nav navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="col-sm-2 col-md-2 navbar-brand">
            <div class="row">
                <a href="<?php echo Yii::app()->createAbsoluteUrl('/'); ?>">
                    <img src="<?php echo $img; ?>/adloud/landing/fixed_nav.png">
                </a>
            </div>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="<?php echo Yii::app()->createAbsoluteUrl('index/index'); ?>">Вебмастеру</a>
            </li>
            <li>
                <a href="http://blog.adloud.net">Блог</a>
            </li>
            <li>
                <a href=""<?php echo Yii::app()->createUrl('index/contacts'); ?>">Контакты</a>
            </li>
            <li>
                <span data-id="#<?php echo $loginFormId; ?>" class="btn btn-inverse btn-embossed login-btn form-opener">Войти</span>
            </li>
        </ul>
    </div>
</nav>

<section class="header section">
    <div class="container">
        <div class="col-sm-12">
            <nav class="navbar row">
                <div class="col-sm-2 col-md-2 navbar-brand">
                    <div class="row">
                        <a href="<?php echo Yii::app()->createAbsoluteUrl('/'); ?>">
                            <img src="<?php echo $img; ?>/adloud/landing/logo.png">
                        </a>
                    </div>
                </div>

                <?php $this->renderWidget('NavMenu', ['class' => 'nav navbar-nav']); ?>

                <ul class="nav navbar-nav navbar-right">
                    <li>

                    </li>
                    <li>
                        <span data-id="#<?php echo $loginFormId; ?>" class="login-btn form-opener">Войти</span>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-sm-12">
            <p class="slogan text-center">
                Разместите рекламу на своем сайте
            </p>
            <p class="subslogan text-center">
                Повышайте свой доход вместе с нами!
            </p>
            <div class="col-sm-6 col-sm-offset-3">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="row">
                        <a data-id="#<?php echo $registerFormId; ?>" class="btn btn-block adloud_btn reg-btn form-opener" href="#">
                            Присоединиться
                            <span class="pull-right"><i class="fa fa-angle-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-we section">
    <div class="container">
        <div class="col-sm-12 text-center">
            <div class="row">
                <div class="preview-cr-blocks text-center">
                    <img src="<?php echo $img; ?>/adloud/landing/preview-page.png"/>
                </div>
            </div>
            <h1 class="why-we-title">
                Почему Adloud и зачем вам это нужно?
            </h1>
            <p class="why-we-text">
                Мы создали качественный таргетинг, разработали великолепный дизайн тизерных блоков,<br/>
                подобрали лучшие рекламные материалы, и совместили все это в нашем продукте.<br/>
                Продукте, который позволит вам наслаждаться заработком в сети.
            </p>
        </div>
    </div>
</section>

<section class="creative-blocks section">
    <div class="container">
        <div class="col-sm-12 text-center">
            <span class="cr-blocks-logo">
                <img src="<?php echo $img; ?>/adloud/landing/cr-blocks.png"/>
            </span>
            <h1 class="cr-blocks-title">
                Используйте Creative Blocks
            </h1>
            <p class="cr-blocks-text">
                Простота и удобство в одном инструменте.<br/>
                Создание рекламного блока займёт у вас не более 1 минуты!
            </p>
            <div class="text-center cr-blocks-screen">
                <img src="<?php echo $img; ?>/adloud/landing/cr-blocks-screen.png"/>
            </div>
        </div>
    </div>
</section>

<div class="border-section"></div>

<section class="design section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <img src="<?php echo $img; ?>/adloud/landing/design-logo.png" class="design-logo"/>
                </div>
                <h1 class="design-title text-center">
                    Дизайн
                </h1>
                <p class="design-text text-center">
                    Мы старались создать особенный дизайн тизерных блоков, который не будет похож на нынешний стандарт,<br/>
                    но для любителей классики у нас тоже есть интересное решение.
                </p>
                <div class="text-center design-screen">
                    <img src="<?php echo $img; ?>/adloud/landing/design-screen.png"/>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="border-section profit-border"></div>
<section class="profit section">
    <div class="container">
        <div class="col-sm-12 text-center">
            <div style="text-center">
                <img src="<?php echo $img; ?>/adloud/landing/profit-logo.png"/>
            </div>
            <h1 class="profit-title">
                Доход
            </h1>
            <p class="profit-text">
                Для нашей компании увеличение доходов вебмастеров и рекламодателей является<br/>
                одним из основных приоритетов.
            </p>
        </div>
        <div class="col-sm-12 text-center profit-months">
            <section class="profit-month april text-left">
                <h2 class="month-title">
                    Апрель
                </h2>
                <p class="profit-percent">
                    30%
                </p>
                <img class="profit-month-img" src="<?php echo $img; ?>/adloud/landing/profit-april.png"/>
            </section>
            <section class="profit-month may text-left">
                <h2 class="month-title">
                    Май
                </h2>
                <p class="profit-percent">
                    57%
                </p>
                <img class="profit-month-img" src="<?php echo $img; ?>/adloud/landing/profit-may.png"/>
            </section>
            <section class="profit-month june text-left">
                <h2 class="month-title">
                    Июнь
                </h2>
                <p class="profit-percent">
                    75%
                </p>
                <img class="profit-month-img" src="<?php echo $img; ?>/adloud/landing/profit-june.png"/>
            </section>
        </div>
    </div>
</section>

<div class="border-section profit-border"></div>

<section class="worth section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <section class="col-sm-6">
                    <div class="col-sm-3 text-center">
                        <div class="row">
                            <img src="<?php echo $img; ?>/adloud/landing/worth-service.png"/>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <h2>
                            Высокий уровень сервиса
                        </h2>
                        <p>
                            Мы предоставим вам высокий уровень облуживания и своевременную поддержку. Воспользуйтесь советами наших специалистов, и вы сможете зарабатывать еще больше!
                        </p>
                    </div>
                </section>
                <section class="col-sm-6">
                    <div class="col-sm-3 text-center">
                        <div class="row">
                            <img src="<?php echo $img; ?>/adloud/landing/worth-ad.png"/>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <h2>
                            Тематичность рекламы
                        </h2>
                        <p>
                            Мы обеспечиваем соответствие рекламных материалов тематике сайта, чтобы рекламодатели получали целевой трафик, а вебмастера – более высокий CTR.
                        </p>
                    </div>
                </section>
                <section class="col-sm-6">
                    <div class="col-sm-3 text-center">
                        <div class="row">
                            <img src="<?php echo $img; ?>/adloud/landing/worth-stat.png"/>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <h2>
                            Удобная статистика
                        </h2>
                        <p>
                            Мы создали простой и удобный сервис real-time статистики. Благодаря этому вы получите мгновенный доступ к информации о своем заработке.
                        </p>
                    </div>
                </section>
                <section class="col-sm-6">
                    <div class="col-sm-3 text-center">
                        <div class="row">
                            <img src="<?php echo $img; ?>/adloud/landing/worth-aud.png"/>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <h2>
                            Польза для аудитории
                        </h2>
                        <p>
                            Наши рекламные материалы будут <br/>
                            максимально соответствовать интересам <br/>
                            аудитории ваших площадок.
                        </p>
                    </div>
                </section>
                <section class="col-sm-6">
                    <div class="col-sm-3 text-center">
                        <div class="row">
                            <img src="<?php echo $img; ?>/adloud/landing/worth-target.png"/>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <h2>
                            Географический таргетинг
                        </h2>
                        <p>
                            Мы гарантируем полный охват аудитории в целевых регионах, обеспечивая владельцам сайтов максимальный уровень дохода.
                        </p>
                    </div>
                </section>
                <section class="col-sm-6">
                    <div class="col-sm-3 text-center">
                        <div class="row">
                            <img src="<?php echo $img; ?>/adloud/landing/worth-content.png"/>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <h2>
                            Фильтрация шок-контента
                        </h2>
                        <p>
                            Мы добавили функцию фильтрации шокирующей рекламы, чтобы вы могли тщательнее контролировать содержимое ваших площадок.
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>

<section class="footer section">

    <div class="section-inner">
        <div class="container">
            <div class="col-sm-12 text-center">
                <img src="<?php echo $img; ?>/adloud/landing/logo.png"/>
            </div>
            <div class="col-sm-12 text-center">
                <p class="go-reg-title">
                    Зарегистрируйтесь в нашей системе
                </p>
                <p class="go-reg-subtitle">
                    и зарабатывайте на современной интернет-рекламе!
                </p>
            </div>
            <div class="col-sm-6 col-sm-offset-3 log-reg">
                <div class="col-sm-6 text-center">
                    <span data-id="#<?php echo $loginFormId; ?>" class="login-btn btn-block form-opener">Войти</span>
                </div>
                <div class="col-sm-6 text-center">
                    <a data-id="#<?php echo $registerFormId; ?>" href="#" class="reg-btn btn-block btn adloud_btn form-opener">Регистрация</a>
                </div>
            </div>

            <?php $this->widget('social.widgets.SocialMenu', [
                'class' => 'social_links col-sm-4 col-sm-offset-4',
                'ulClass' => 'col-sm-10 col-sm-offset-1',
            ]); ?>

            <?php $this->renderWidget('NavMenu', [
                'isBottom' => true,
                'class' => 'bottom-links',
                'navMenu' => 'footer-nav bottom-menu col-sm-12',
            ]); ?>

        </div>

</section>
</div>

<!-- Форма регистрации -->
<section id="<?php echo $registerFormId; ?>" class="landing-reg-wrapper text-center form-section">
    <div class="container">
        <div class="close-forms">&times;</div>
        <h1>Зарегистрируйтесь<br/><span>и оцените все достоинства системы!</span></h1>
        <span class="fui-triangle-down"></span>
        <?php $this->partial('_registerForm', [
            'afterRegFormId' => $afterRegFormId,
            'loginFormId' => $loginFormId,
        ]); ?>
    </div>
</section>

<!-- Всплывающее окно после успешной регистрации -->
<section id="<?php echo $afterRegFormId; ?>" class="reg-success text-center form-section">
    <h1>Поздравляем!</h1>
    <div class="reg-success-icon">
        <span>
            <span class="fui-check"></span>
        </span>
    </div>
    <p class="reg-success-msg">Вы успешно зарегистрировались в системе</p>
    <a href="<?php echo Yii::app()->createUrl(Yii::app()->user->accountUrl); ?>" class="btn adloud_btn">Далее</a>
</section>

<!-- Форма входа -->
<section id="<?php echo $loginFormId; ?>" class="landing-login-wrapper text-center form-section">
    <div class="container">
        <div class="close-forms">&times;</div>
        <h1>Войти в систему</h1>
        <span class="fui-triangle-down"></span>
        <?php $this->partial('_loginForm', [
            'registerFormId' => $registerFormId,
            'restoreFormId' => $restoreFormId,
        ]); ?>
    </div>
</section>

<!-- Форма восстановления пароля -->
<section id="<?php echo $restoreFormId; ?>" class="forgot-pass-wrapper text-center form-section">
    <div class="container">
        <div class="close-forms">&times;</div>
        <h1>Восстановление пароля</h1>
        <span class="fui-triangle-down"></span>
        <?php $this->partial('_restorePasswordForm', [
            'loginFormId' => $loginFormId,
            'afterRestoreFormId' => $afterRestoreFormId,
        ]); ?>
    </div>
</section>

<!-- Всплывающее окно после отправки запроса на восстановления пароля -->
<section id="<?php echo $afterRestoreFormId; ?>" class="recover-success text-center form-section">
    <div class="container">
        <h1>Проверьте электронную почту<br/>
            <span>На ваш адрес выслана инструкция по восстановлению пароля</span>
        </h1>
        <div class="recovery-success-icon">
            <span class="fui-mail"><span class="fui-check"></span></span>
        </div>
    </div>
</section>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<?php Yii::app()->clientScript->registerScript('landingPage', '
    Landing.init({});
'); ?>

<?php Yii::app()->clientScript->registerScript('mainScript', '
    Main.init({
        notificationUrl: "'.Yii::app()->createUrl('index/notificationlist').'"
    });
'); ?>


</body>
</html>