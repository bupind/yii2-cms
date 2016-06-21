<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\web\themes\giicms\widgets\TestWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/css/site.css') ?>" media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/css/style.css') ?>" media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/css/animate.css') ?>" media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/css/style-magnific-popup.css') ?>" media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/css/layerslider.css') ?>" media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/css/skin.css') ?>" media="screen,projection"/>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-75361345-1', 'auto');
            ga('send', 'pageview');

        </script>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <!--begin loader -->
        <div id="loader" style="display: none;">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>
        <!--end loader -->

        <!--begin header -->
        <header class="header">

            <!--begin nav -->
            <nav class="navbar navbar-default navbar-fixed-top">

                <!--begin container -->
                <div class="container">

                    <!--begin navbar -->
                    <div class="navbar-header">
                        <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a href="http://giicms.com" class="navbar-brand brand scrool">GIICMS</a>
                    </div>

                    <div id="navbar-collapse-02" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">			      
                            <li class="current"><a href="#home_wrapper">Home</a></li>
                            <li class=""><a href="#services">Services</a></li>
                            <li class=""><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#team">Team</a></li>
                            <li class=""><a href="#features">Features</a></li>
                            <li class=""><a href="#blog">Blog</a></li>
                            <li class=""><a href="#pricing">Pricing</a></li>
                            <li class=""><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                    <!--end navbar -->

                </div>
                <!--end container -->

            </nav>
            <!--end nav -->

        </header>
        <!--end header -->

        <!--begin home_wrapper -->
        <?= $content ?>
        <!--begin footer -->
        <div class="footer">

            <!--begin container -->
            <div class="container">

                <!--begin row -->
                <div class="row">

                    <!--begin col-md-12 -->
                    <div class="col-md-12 text-center">

                        <!--begin copyright -->
                        <div class="copyright">
                            <p>Copyright © 2016</p>

                        </div>
                        <!--end copyright -->

                        <!--begin footer_social -->
                        <ul class="footer_social">
                            <li>
                                <a href="#">
                                    <i class="icon icon-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon icon-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon icon-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon icon-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon icon-skype"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon icon-dribble"></i>
                                </a>
                            </li>
                        </ul>
                        <!--end footer_social -->

                    </div>
                    <!--end col-md-6 -->

                </div>
                <!--end row -->

            </div>
            <!--end container -->

        </div>
        <!--end footer -->

        <?php $this->endBody() ?>
        <script src="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/js') ?>/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/js') ?>/jquery.nav.js"></script>
        <script src="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/js') ?>/jquery.scrollTo-min.js"></script>
        <script src="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/js') ?>/SmoothScroll.js"></script>
        <script src="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/js') ?>/wow.js"></script>

        <!-- begin layerslider script-->
        <script src="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/js') ?>/greensock.js"></script>

        <!-- begin custom script-->
        <script src="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/js') ?>/custom.js"></script>
        <script src="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/js') ?>/plugins.js"></script>
        <script>
            window.fbAsyncInit = function () {
                FB.init({
                    appId: '502205273320053',
                    xfbml: true,
                    version: 'v2.5'
                });
            };

            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

    </body>
</html>
<?php $this->endPage() ?>
