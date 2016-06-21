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
$path = Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/');
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
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/forum/custom.css') ?>"/>
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/forum/style.css') ?>"/>
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/forum/settings.css') ?>"/>
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/font_awesome/css/font-awesome.min.css') ?>"/>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="container-fluid">

            <div class="headernav">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-xs-3 col-sm-2 col-md-5 logo "><a href="<?php echo Yii::$app->urlManager->createAbsoluteUrl('forum')?>"><img src="<?= $path ?>/images/logo.jpg" alt=""></a></div>
                        
                        <div class="col-lg-4 search hidden-xs hidden-sm col-md-3">
                            <div class="wrap">
                                <form action="http://forum.azyrusthemes.com/index.html#" method="post" class="form">
                                    <div class="pull-left txt"><input type="text" class="form-control" placeholder="Search Topics"></div>
                                    <div class="pull-right"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-12 col-sm-5 col-md-4">
                            <div class=" avt pull-right">
                                <?php
                                if (Yii::$app->user->isGuest) {
                                    ?>
                                    <div class="pull-right">
                                        <a href="<?php echo Yii::$app->urlManager->createAbsoluteUrl('/user/signup') ?>" class="btn btn-info" style="padding:10px 15px; border-radius:2px; border: none">Đăng ký</a>
                                        <a href="<?php echo Yii::$app->urlManager->createAbsoluteUrl('/user/login') ?>" class="btn btn-primary">Đăng nhập</a>
                                    </div>
                                    <?php
                                } else {
                                    ?>
                                    <div class="stnt pull-left">                            
                                        <a class="btn btn-primary">Đăng bài</a>
                                    </div>
                                    <div class="env pull-left"><i class="fa fa-envelope"></i></div>

                                    <div class="avatar pull-left dropdown">
                                        <a data-toggle="dropdown" href="http://forum.azyrusthemes.com/index.html#"><img src="<?= $path ?>/images/avatar.jpg" alt=""></a> <b class="caret"></b>
                                        <div class="status green">&nbsp;</div>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo Yii::$app->urlManager->createAbsoluteUrl('/user/profile') ?>">Quản lý tài khoản</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo Yii::$app->urlManager->createAbsoluteUrl('/post') ?>">Quản lý bài viết</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-3" href="<?php echo Yii::$app->urlManager->createAbsoluteUrl('/user/logout') ?>">Thoát</a></li>
                                        </ul>
                                    </div>
                                    <?php
                                }
                                ?>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?= $content ?>

            <div class="footer" style="background-color: #ecf0f1;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-md-offset-3">Copyright @ 2016</div>
                    </div>
                </div>
            </div>
        </div>


        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
