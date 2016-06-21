<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/css/site.css') ?>" media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/css/style.css') ?>" media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/css/animate.css') ?>" media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/css/style-magnific-popup.css') ?>" media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/css/layerslider.css') ?>" media="screen,projection"/>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => 'GII CMS',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Trang chủ', 'url' => ['/site/index']],
                ['label' => 'Giới thiệu', 'url' => ['/site/about']],
                ['label' => 'Liên hệ', 'url' => ['/site/contact']],
            ];
//            if (Yii::$app->user->isGuest) {
//                $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
//                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
//            } else {
//                $menuItems[] = [
//                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
//                    'url' => ['/site/logout'],
//                    'linkOptions' => ['data-method' => 'post']
//                ];
//            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
            ?>

            <div class="container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; GII CMS <?= date('Y') ?></p>

                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
        <script src="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/js') ?>/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/js') ?>/jquery.nav.js"></script>
        <script src="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/js') ?>/jquery.scrollTo-min.js"></script>
        <script src="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/js') ?>/SmoothScroll.js"></script>
        <script src="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/js') ?>/wow.js"></script>

        <!-- begin layerslider script-->
        <script src="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/js') ?>/greensock.js"></script>
        <script src="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/js') ?>/layerslider.transitions.js"></script>
        <script src="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/js') ?>/layerslider.kreaturamedia.jquery.js"></script>

        <!-- begin custom script-->
        <script src="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/js') ?>/custom.js"></script>
        <script src="<?php echo Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/js') ?>/plugins.js"></script>
    </body>
</html>
<?php $this->endPage() ?>

        <!--begin features -->
<!--        <section class="section-dark no-padding-bottom">

            begin container
            <div class="container">

                begin row
                <div class="row margin-bottom-30">

                    begin col-md-12
                    <div class="col-md-10 col-md-offset-1 text-center">
                        <h2 class="section-title grey">Powerful Features</h2>

                        <div class="separator_wrapper_white">
                            <i class="icon icon-star-two grey"></i>
                        </div>

                        <p class="section-subtitle grey">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>
                    </div>
                    end col-md-12

                </div>
                end row

                begin section_features 
                <div class="section_features">

                    begin layerslider2 
                    <div id="layerslider2" style="margin: 0px auto; width: 1140px; height: 657px; visibility: visible;" class="ls-container ls-v5">

                        begin slide 
                        <div class="ls-inner" style="width: 1140px; height: 657px; background-color: transparent;"><div class="ls-slide ls-slide-1 ls-animating" data-ls="slidedelay: 4000; transition2d: 2,7,9;" style="width: 1140px; height: 657px; visibility: visible; display: none; left: auto; right: 0px; top: 0px; bottom: auto;"><div class="ls-gpuhack" style="width: auto; height: auto; padding: 0px; border-width: 0px; left: 0px; top: 0px;"></div>

                                 image layer 
                                <img src="./Spectrum - Responsive Landing Page Template_files/graphic.png" class="ls-l ls-preloaded" data-ls="parallaxlevel: 5;" alt="Image layer" style="width: 1140px; height: 657px; padding: 0px; border-width: 0px; left: 0px; top: 0px; visibility: visible; margin-left: 0px; margin-top: 0px; transform-origin: 50% 50% 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); opacity: 1;">

                                 text layers 
                                <p class="ls-l" data-ls="parallaxlevel: -1;" style="top: 60.27px; left: 49px; color: rgb(255, 255, 255); font-size: 18px; font-weight: 300; font-style: italic; width: auto; height: auto; padding: 0px; border-width: 0px; visibility: visible; margin-left: 0px; margin-top: 0px; transform-origin: 50% 50% 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); opacity: 1;">E-mail Marketing</p>

                                <img class="ls-l ls-preloaded" data-ls="parallaxlevel: -1;" style="top: 69.98px; left: 184.9px; white-space: nowrap; width: 109px; height: 44px; padding: 0px; border-width: 0px; visibility: visible; margin-left: 0px; margin-top: 0px; transform-origin: 50% 50% 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); opacity: 1;" src="./Spectrum - Responsive Landing Page Template_files/arrow2.png" alt="Arrow">

                                <p class="ls-l" data-ls="parallaxlevel: -1;" style="top: 428.19px; left: 110.5px; color: rgb(255, 255, 255); font-size: 18px; font-weight: 300; font-style: italic; width: auto; height: auto; padding: 0px; border-width: 0px; visibility: visible; margin-left: 0px; margin-top: 0px; transform-origin: 50% 50% 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); opacity: 1;">Marketing Campaign / Analysis</p>

                                <img class="ls-l ls-preloaded" data-ls="parallaxlevel: -1;" style="top: 405.05px; left: 355.9px; white-space: nowrap; width: 109px; height: 44px; padding: 0px; border-width: 0px; visibility: visible; margin-left: 0px; margin-top: 0px; transform-origin: 50% 50% 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); opacity: 1;" src="./Spectrum - Responsive Landing Page Template_files/arrow3.png" alt="Arrow">

                                <p class="ls-l" data-ls="parallaxlevel: -1;" style="top: 14.28px; left: 637.8px; color: rgb(255, 255, 255); font-size: 18px; font-weight: 300; font-style: italic; width: auto; height: auto; padding: 0px; border-width: 0px; visibility: visible; margin-left: 0px; margin-top: 0px; transform-origin: 50% 50% 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); opacity: 1;">New Media Center</p>

                                <img class="ls-l ls-preloaded" data-ls="parallaxlevel: -1;" style="top: 23.99px; left: 526.9px; white-space: nowrap; width: 109px; height: 44px; padding: 0px; border-width: 0px; visibility: visible; margin-left: 0px; margin-top: 0px; transform-origin: 50% 50% 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); opacity: 1;" src="./Spectrum - Responsive Landing Page Template_files/arrow1.png" alt="Arrow">

                                <p class="ls-l" data-ls="parallaxlevel: -1;" style="top: 93.12px; left: 784.7px; color: rgb(255, 255, 255); font-size: 18px; font-weight: 300; font-style: italic; width: auto; height: auto; padding: 0px; border-width: 0px; visibility: visible; margin-left: 0px; margin-top: 0px; transform-origin: 50% 50% 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); opacity: 1;">Web Design &amp; Development</p>

                                <img class="ls-l ls-preloaded" data-ls="parallaxlevel: -1;" style="top: 102.83px; left: 675.1px; white-space: nowrap; width: 109px; height: 44px; padding: 0px; border-width: 0px; visibility: visible; margin-left: 0px; margin-top: 0px; transform-origin: 50% 50% 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); opacity: 1;" src="./Spectrum - Responsive Landing Page Template_files/arrow1.png" alt="Arrow">

                                <p class="ls-l" data-ls="parallaxlevel: -1;" style="top: 178.53px; left: 961px; color: rgb(255, 255, 255); font-size: 18px; font-weight: 300; font-style: italic; width: auto; height: auto; padding: 0px; border-width: 0px; visibility: visible; margin-left: 0px; margin-top: 0px; transform-origin: 50% 50% 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); opacity: 1;">SEO Infographics</p>

                                <img class="ls-l ls-preloaded" data-ls="parallaxlevel: -1;" style="top: 188.24px; left: 846.1px; white-space: nowrap; width: 109px; height: 44px; padding: 0px; border-width: 0px; visibility: visible; margin-left: 0px; margin-top: 0px; transform-origin: 50% 50% 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); opacity: 1;" src="./Spectrum - Responsive Landing Page Template_files/arrow1.png" alt="Arrow">

                                <p class="ls-l" data-ls="parallaxlevel: -1;" style="top: 441.33px; left: 991.4px; color: rgb(255, 255, 255); font-size: 18px; font-weight: 300; font-style: italic; width: auto; height: auto; padding: 0px; border-width: 0px; visibility: visible; margin-left: 0px; margin-top: 0px; transform-origin: 50% 50% 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); opacity: 1;">Logo Design</p>

                                <img class="ls-l ls-preloaded" data-ls="parallaxlevel: -1;" style="top: 418.19px; left: 880.3px; white-space: nowrap; width: 109px; height: 44px; padding: 0px; border-width: 0px; visibility: visible; margin-left: 0px; margin-top: 0px; transform-origin: 50% 50% 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); opacity: 1;" src="./Spectrum - Responsive Landing Page Template_files/arrow4.png" alt="Arrow">

                            </div><div class="ls-circle-timer"><div class="ls-ct-left"><div class="ls-ct-rotate"><div class="ls-ct-hider"><div class="ls-ct-half"></div></div></div></div><div class="ls-ct-right"><div class="ls-ct-rotate"><div class="ls-ct-hider"><div class="ls-ct-half"></div></div></div></div><div class="ls-ct-center"></div></div></div>
                        end slide 

                        <div class="ls-loading-container" style="z-index: -1; display: none;"><div class="ls-loading-indicator"></div></div><div class="ls-shadow"></div></div>
                    end layerslider2 

                </div>
                end section_features 

            </div>
            end container

        </section>-->
        <!--end features -->

        <!--begin testimonials -->
        <div class="section-testimonials">

            <!--begin container-->
            <div class="container testimonials-wrapper">

                <!--begin row-->
                <div class="row">

                    <!--begin col-md-5 -->
                    <div class="col-md-5">

                        <!--begin testimonials-info-->
                        <div class="testimonials-info">

                            <img src="./Spectrum - Responsive Landing Page Template_files/team4.jpg" class="author-pic" alt="John Doe">

                            <p class="author-name">Richard Stevenson<br><span>Founder Freelancer</span></p>

                        </div>
                        <!--end testimonials-info-->

                    </div>
                    <!--end col-md-5 -->

                    <!--begin col-md-7 -->
                    <div class="col-md-7">

                        <p class="testimonials-text">"Your time is limited, so do not waste it living someone else's life. Don't be trapped by dogma - which is living with the results of other people's thinking."</p>

                    </div>
                    <!--end col-md-7 -->

                </div>
                <!--end row-->

            </div>
            <!--end container-->

        </div>
        <!--end testimonials-->    

        <!--begin section-white -->
        <section class="section-white medium-padding">

            <!--begin container-->
            <div class="container">

                <!--begin row-->
                <div class="row">

                    <!--begin col-md-6-->
                    <div class="col-md-6 margin-top-30 margin-bottom-30">

                        <img src="./Spectrum - Responsive Landing Page Template_files/pic3.png" class="width-100" alt="imac">

                    </div>
                    <!--end col-sm-6-->

                    <!--begin col-md-6-->
                    <div class="col-md-6 margin-top-50 margin-bottom-30">

                        <h3 class="medium-title">Design &amp; style should always work toward making you feel good.</h3>

                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur netsum lorem fugit, sed quia magni dolores eos qui ratione sequi nesciunt. Neque poris ratione sequi enim ipsam voluptatem quia volupti sed nets quia magni.</p>

                        <ul class="features-list">
                            <li><img src="./Spectrum - Responsive Landing Page Template_files/icon7.png" alt="picture"> Tendis tempor ante acu ipsum finibus, atimus etims urna netsumiteda qui ratione lorem nets et sequi tempor.</li>
                            <li><img src="./Spectrum - Responsive Landing Page Template_files/icon8.png" alt="picture"> Neque tempor ante acu ipsum finibus, atime quiamis ets netsumiteda qui tempor magni ets ipsum finibus.</li>
                            <li><img src="./Spectrum - Responsive Landing Page Template_files/icon9.png" alt="picture"> Etiam tempor ante acu ipsum finibus, atimus veilite nis netsumitedas qui tempor ratione estimat ipsum.</li>
                        </ul>

                    </div>
                    <!--end col-sm-6-->

                </div>
                <!--end row-->

            </div>
            <!--end container-->

        </section>
        <!--end section-white-->

        <!--begin portfolio -->
        <section class="section-dark portfolio-padding" id="portfolio">

            <!--begin container-->
            <div class="container">

                <!--begin row-->
                <div class="row margin-bottom-50">

                    <!--begin col-md-12-->
                    <div class="col-md-12 text-center">
                        <h2 class="section-title grey">Our Latest Work</h2>

                        <div class="separator_wrapper_white">
                            <i class="icon icon-star-two grey"></i>
                        </div>

                        <p class="section-subtitle grey">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>
                    </div>
                    <!--end col-md-12-->

                </div>
                <!--end row-->

                <!--begin row-->
                <div class="row">

                    <!--begin col-md-4-->
                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeIn;">

                        <!--begin popup-gallery-->
                        <div class="popup-gallery first-gallery portfolio-pic">
                            <a class="popup2" href="./Spectrum - Responsive Landing Page Template_files/p1.jpg"><img src="./Spectrum - Responsive Landing Page Template_files/p1.jpg" class="width-100" alt="pic"><span class="eye-wrapper"><i class="icon icon-cursor-move eye-icon" style="font-size: 38px;"></i></span></a>
                        </div>
                        <!--end popup-gallery-->

                    </div>
                    <!--end col-md-4-->

                    <!--begin col-md-4-->
                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.30s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">

                        <!--begin popup-gallery-->
                        <div class="popup-gallery first-gallery portfolio-pic">
                            <a class="popup2" href="./Spectrum - Responsive Landing Page Template_files/p3.jpg"><img src="./Spectrum - Responsive Landing Page Template_files/p2.jpg" class="width-100" alt="pic"><span class="eye-wrapper"><i class="icon icon-cursor-move eye-icon" style="font-size: 38px;"></i></span></a>
                        </div>
                        <!--end popup-gallery-->

                    </div>
                    <!--end col-md-4-->

                    <!--begin col-md-4-->
                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.45s" style="visibility: visible; animation-delay: 0.45s; animation-name: fadeIn;">

                        <!--begin popup-gallery-->
                        <div class="popup-gallery first-gallery portfolio-pic">
                            <a class="popup2" href="./Spectrum - Responsive Landing Page Template_files/p2.jpg"><img src="./Spectrum - Responsive Landing Page Template_files/p3.jpg" class="width-100" alt="pic"><span class="eye-wrapper"><i class="icon icon-cursor-move eye-icon" style="font-size: 38px;"></i></span></a>
                        </div>
                        <!--end popup-gallery-->

                    </div>
                    <!--end col-md-4-->

                </div>
                <!--end row-->

                <!--begin row-->
                <div class="row">

                    <!--begin col-md-4-->
                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.60s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">

                        <!--begin popup-gallery-->
                        <div class="popup-gallery first-gallery portfolio-pic">
                            <a class="popup2" href="./Spectrum - Responsive Landing Page Template_files/p4.jpg"><img src="./Spectrum - Responsive Landing Page Template_files/p4.jpg" class="width-100" alt="pic"><span class="eye-wrapper"><i class="icon icon-cursor-move eye-icon" style="font-size: 38px;"></i></span></a>
                        </div>
                        <!--end popup-gallery-->

                    </div>
                    <!--end col-md-4-->

                    <!--begin col-md-4-->
                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.75s" style="visibility: visible; animation-delay: 0.75s; animation-name: fadeIn;">

                        <!--begin popup-gallery-->
                        <div class="popup-gallery first-gallery portfolio-pic">
                            <a class="popup2" href="./Spectrum - Responsive Landing Page Template_files/p5.jpg"><img src="./Spectrum - Responsive Landing Page Template_files/p5.jpg" class="width-100" alt="pic"><span class="eye-wrapper"><i class="icon icon-cursor-move eye-icon" style="font-size: 38px;"></i></span></a>

                        </div>
                        <!--end popup-gallery-->

                    </div>
                    <!--end col-md-4-->

                    <!--begin col-md-4-->
                    <div class="col-md-4 wow fadeIn" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeIn;">


                        <!--begin popup-gallery-->
                        <div class="popup-gallery first-gallery portfolio-pic">
                            <a class="popup2" href="./Spectrum - Responsive Landing Page Template_files/p6.jpg"><img src="./Spectrum - Responsive Landing Page Template_files/p6.jpg" class="width-100" alt="pic"><span class="eye-wrapper"><i class="icon icon-cursor-move eye-icon" style="font-size: 38px;"></i></span></a>
                        </div>
                        <!--end popup-gallery-->

                    </div>
                    <!--end col-md-4-->

                </div>
                <!--end row-->

            </div>
            <!--end container-->

        </section>
        <!--end portfolio-->

        <!--begin newsletter_wrapper-->
        <div class="newsletter_wrapper" id="newsletter">

            <!--begin container-->
            <div class="container">

                <!--begin newsletter_box-->
                <div class="newsletter_box">

                    <!--begin row-->
                    <div class="row">

                        <!--begin col-md-3-->
                        <div class="col-md-3">

                            <img src="./Spectrum - Responsive Landing Page Template_files/email.png" alt="picture" class="padding-top-25">

                        </div>
                        <!--end col-md-3 -->

                        <!--begin col-md-9 -->
                        <div class="col-md-9">

                            <!--begin newsletter_info -->
                            <div class="newsletter_info">

                                <h2>Seen enough? We are currently in the closed beta.<br>
                                    Please enter your email to join the waiting list.</h2>

                                <!--begin success_box -->
                                <p class="newsletter_success_box" style="display:none;">We received your message and you'll hear from us soon. Thank You!</p>
                                <!--end success_box -->

                                <!--begin newsletter-form -->
                                <form id="newsletter-form" class="newsletter_form" action="http://bogdanpreda.com/themes/tf-spectrum/v4/php/newsletter.php" method="post">
                                    <input id="email_newsletter" name="nf_email" placeholder="Enter Your Email Address" type="email">  
                                    <input value="GET STARTED!" id="submit-button-newsletter" type="submit">
                                </form>
                                <!--end newsletter-form -->

                            </div>
                            <!--end newsletter_info -->

                        </div>
                        <!--end col-md-9 -->

                    </div>
                    <!--end row -->

                </div>
                <!--end newsletter_box -->

            </div>
            <!--begin container-->

        </div>
        <!--begin newsletter_wrapper-->

        <!--begin section-white -->
        <section class="section-white medium-padding">

            <!--begin container-->
            <div class="container">

                <!--begin row-->
                <div class="row">

                    <!--begin col-md-6-->
                    <div class="col-md-6 margin-top-35 margin-bottom-30">

                        <h3 class="medium-title">Watch the video presentation.</h3>

                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia magni dolores eos qui ratione sequi nesciunt. Neque porro quisquam est, qui ipsum quiaim netsum. Consequuntur sequimagni.</p>

                        <p>Consequuntur magni netsum es qui ratione sequi nesciunt. Neque vetim quisquat, quia voluptas quistri ipsum quiaim  magni eti ratione.</p>

                        <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#" class="btn btn-lg btn-blue small margin-top-10">Discover More</a>

                    </div>
                    <!--end col-sm-6-->

                    <!--begin col-md-6-->
                    <div class="col-md-6 margin-top-30 margin-bottom-30">

                        <iframe src="./Spectrum - Responsive Landing Page Template_files/125804170.html" height="312" width="555"></iframe>

                    </div>
                    <!--end col-sm-6-->

                </div>
                <!--end row-->

            </div>
            <!--end container-->

        </section>

        <!--begin section-grey-->
        <div class="section-grey sponsors-padding">

            <!--begin container-->
            <div class="container">

                <!--begin row-->
                <div class="row text-center">

                    <!--begin col-sm-12-->
                    <div class="col-sm-12 sponsors">
                        <img src="./Spectrum - Responsive Landing Page Template_files/partner2.png" class="sponsor" alt="image">
                        <img src="./Spectrum - Responsive Landing Page Template_files/partner1.png" class="sponsor" alt="image">
                        <img src="./Spectrum - Responsive Landing Page Template_files/partner3.png" class="sponsor" alt="image">
                        <img src="./Spectrum - Responsive Landing Page Template_files/partner5.png" class="sponsor" alt="image">
                        <img src="./Spectrum - Responsive Landing Page Template_files/partner4.png" class="sponsor" alt="image">
                    </div>
                    <!--end col-sm-12-->

                </div>
                <!--end row-->

            </div>
            <!--end container-->

        </div> 
        <!--end section-grey-->

        <!--begin team -->
        <section class="team-section" id="team">

            <!--begin container-->
            <div class="container">

                <!--begin row-->
                <div class="row margin-bottom-50">

                    <!--begin col-md-12-->
                    <div class="col-md-10 col-md-offset-1 text-center">
                        <h2 class="section-title white">Meet Our Amazing Team</h2>

                        <div class="separator_wrapper_white">
                            <i class="icon icon-star-two grey"></i>
                        </div>

                        <p class="section-subtitle white">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>
                    </div>
                    <!--end col-md-12-->

                </div>
                <!--end row-->

                <!--begin row-->
                <div class="row">

                    <div id="myCarousel" class="carousel carousel1 slide margin-bottom-40" data-interval="false">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">

                            <div class="item active">

                                <!--begin team-item -->
                                <div class="col-md-4 team-item">

                                    <!--begin team-popup -->
                                    <div class="team-popup">

                                        <img src="./Spectrum - Responsive Landing Page Template_files/team2.jpg" class="width-100" alt="pic">

                                        <div class="team-popup-overlay">

                                            <div class="team-icon">

                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">
                                                    <i class="icon icon-twitter"></i>
                                                </a>

                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">
                                                    <i class="icon icon-facebook"></i>
                                                </a>

                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">
                                                    <i class="icon icon-pinterest"></i>
                                                </a>

                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">
                                                    <i class="icon icon-youtube"></i>
                                                </a>

                                            </div>

                                        </div>

                                    </div>
                                    <!--end team-popup -->

                                    <!--begin team_box -->
                                    <div class="team-box">

                                        <h3>Johnathan Hawkins</h3>

                                        <p class="team-info">Graphic Designer</p>

                                    </div>
                                    <!--end team_box -->

                                </div>
                                <!--end team-item -->

                                <!--begin team-item -->
                                <div class="col-md-4 team-item">

                                    <!--begin team-popup -->
                                    <div class="team-popup">

                                        <img src="./Spectrum - Responsive Landing Page Template_files/team3.jpg" class="width-100" alt="pic">

                                        <div class="team-popup-overlay">

                                            <div class="team-icon">

                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">
                                                    <i class="icon icon-twitter"></i>
                                                </a>

                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">
                                                    <i class="icon icon-facebook"></i>
                                                </a>

                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">
                                                    <i class="icon icon-pinterest"></i>
                                                </a>

                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">
                                                    <i class="icon icon-youtube"></i>
                                                </a>

                                            </div>

                                        </div>

                                    </div>
                                    <!--end team-popup -->

                                    <!--begin team_box -->
                                    <div class="team-box">

                                        <h3>Alexandra Smiths</h3>

                                        <p class="team-info">SEO Specialist</p>

                                    </div>
                                    <!--end team_box -->

                                </div>
                                <!--end team-item -->

                                <!--begin team-item -->
                                <div class="col-md-4 team-item">

                                    <!--begin team-popup -->
                                    <div class="team-popup">

                                        <img src="./Spectrum - Responsive Landing Page Template_files/team5.jpg" class="width-100" alt="pic">

                                        <div class="team-popup-overlay">

                                            <div class="team-icon">

                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">
                                                    <i class="icon icon-twitter"></i>
                                                </a>

                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">
                                                    <i class="icon icon-facebook"></i>
                                                </a>

                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">
                                                    <i class="icon icon-pinterest"></i>
                                                </a>

                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">
                                                    <i class="icon icon-youtube"></i>
                                                </a>

                                            </div>

                                        </div>

                                    </div>
                                    <!--end team-popup -->

                                    <!--begin team_box -->
                                    <div class="team-box">

                                        <h3>Richard Johanson</h3>

                                        <p class="team-info">Web Developer</p>

                                    </div>
                                    <!--end team_box -->

                                </div>
                                <!--end team-item -->

                            </div>

                            <div class="item">

                                <!--begin team-item -->
                                <div class="col-md-4 team-item">

                                    <!--begin team-popup -->
                                    <div class="team-popup">

                                        <img src="./Spectrum - Responsive Landing Page Template_files/team2.jpg" class="width-100" alt="pic">

                                        <div class="team-popup-overlay">

                                            <div class="team-icon">

                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">
                                                    <i class="icon icon-twitter"></i>
                                                </a>

                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">
                                                    <i class="icon icon-facebook"></i>
                                                </a>

                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">
                                                    <i class="icon icon-pinterest"></i>
                                                </a>

                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">
                                                    <i class="icon icon-youtube"></i>
                                                </a>

                                            </div>

                                        </div>

                                    </div>
                                    <!--end team-popup -->

                                    <!--begin team_box -->
                                    <div class="team-box">

                                        <h3>Christina Hawkins</h3>

                                        <p class="team-info">Graphic Designer</p>

                                    </div>
                                    <!--end team_box -->

                                </div>
                                <!--end team-item -->

                                <!--begin team-item -->
                                <div class="col-md-4 team-item">

                                    <!--begin team-popup -->
                                    <div class="team-popup">

                                        <img src="./Spectrum - Responsive Landing Page Template_files/team3.jpg" class="width-100" alt="pic">

                                        <div class="team-popup-overlay">

                                            <div class="team-icon">

                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">
                                                    <i class="icon icon-twitter"></i>
                                                </a>

                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">
                                                    <i class="icon icon-facebook"></i>
                                                </a>

                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">
                                                    <i class="icon icon-pinterest"></i>
                                                </a>

                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">
                                                    <i class="icon icon-youtube"></i>
                                                </a>

                                            </div>

                                        </div>

                                    </div>
                                    <!--end team-popup -->

                                    <!--begin team_box -->
                                    <div class="team-box">

                                        <h3>Richard S. Johanson</h3>

                                        <p class="team-info">SEO Specialist</p>

                                    </div>
                                    <!--end team_box -->

                                </div>
                                <!--end team-item -->

                                <!--begin team-item -->
                                <div class="col-md-4 team-item">

                                    <!--begin team-popup -->
                                    <div class="team-popup">

                                        <img src="./Spectrum - Responsive Landing Page Template_files/team5.jpg" class="width-100" alt="pic">

                                        <div class="team-popup-overlay">

                                            <div class="team-icon">

                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">
                                                    <i class="icon icon-twitter"></i>
                                                </a>

                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">
                                                    <i class="icon icon-facebook"></i>
                                                </a>

                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">
                                                    <i class="icon icon-pinterest"></i>
                                                </a>

                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">
                                                    <i class="icon icon-youtube"></i>
                                                </a>

                                            </div>

                                        </div>

                                    </div>
                                    <!--end team-popup -->

                                    <!--begin team_box -->

                                    <div class="team-box">

                                        <h3>Alexandra Smiths</h3>

                                        <p class="team-info">Web Developer</p>

                                    </div>
                                    <!--end team_box -->

                                </div>
                                <!--end team-item -->

                            </div>

                        </div>

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>

                    </div>

                </div>
                <!--end row-->

            </div>
            <!--end container-->

        </section>
        <!--end team-->

        <!--begin partners-->
        <section id="partners">

            <!--begin section-white-->
            <div class="section-white"> 

                <!--begin container-->
                <div class="container"> 

                    <!--begin row-->
                    <div class="row margin-bottom-50">

                        <!--begin col-md-10-->
                        <div class="col-md-10 col-md-offset-1 text-center">
                            <h2 class="section-title">Our Partners</h2>

                            <div class="separator_wrapper">
                                <i class="icon icon-star-two red"></i>
                            </div>

                            <p class="section-subtitle">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>
                        </div>
                        <!--end col-md-10-->

                    </div>
                    <!--end row-->

                    <!--begin row-->
                    <div class="row">

                        <!--begin partners-wrapper-->
                        <div class="partners-wrapper">

                            <!--begin col-md-3-->
                            <div class="col-md-3 partners-item">

                                <img src="./Spectrum - Responsive Landing Page Template_files/partner1.png" alt="partner">

                            </div>
                            <!--end col-md-3-->

                            <!--begin col-md-3-->
                            <div class="col-md-3 partners-item">

                                <img src="./Spectrum - Responsive Landing Page Template_files/partner2.png" alt="partner">

                            </div>
                            <!--end col-md-3-->

                            <!--begin col-md-3-->
                            <div class="col-md-3 partners-item">

                                <img src="./Spectrum - Responsive Landing Page Template_files/partner3.png" alt="partner">

                            </div>
                            <!--end col-md-3-->

                            <!--begin col-md-3-->
                            <div class="col-md-3 partners-item last">

                                <img src="./Spectrum - Responsive Landing Page Template_files/partner4.png" alt="partner">

                            </div>
                            <!--end col-md-3-->

                            <!--begin col-md-3-->
                            <div class="col-md-3 partners-item no-border-bottom">

                                <img src="./Spectrum - Responsive Landing Page Template_files/partner5.png" alt="partner">

                            </div>
                            <!--end col-md-3-->

                            <!--begin col-md-3-->
                            <div class="col-md-3 partners-item no-border-bottom">

                                <img src="./Spectrum - Responsive Landing Page Template_files/partner4.png" alt="partner">

                            </div>
                            <!--end col-md-3-->

                            <!--begin col-md-3-->
                            <div class="col-md-3 partners-item no-border-bottom">

                                <img src="./Spectrum - Responsive Landing Page Template_files/partner1.png" alt="partner">

                            </div>
                            <!--end col-md-3-->

                            <!--begin col-md-3-->
                            <div class="col-md-3 partners-item no-border-bottom last">

                                <img src="./Spectrum - Responsive Landing Page Template_files/partner2.png" alt="partner">

                            </div>
                            <!--end col-md-3-->

                        </div>
                        <!--end partners-wrapper-->

                    </div>
                    <!--end row-->

                </div>
                <!--end container-->

            </div>
            <!--end section-white-->

        </section>
        <!--end partners-->

        <!--begin section-dark -->
        <section class="section-dark medium-padding">

            <!--begin container-->
            <div class="container">

                <!--begin row-->
                <div class="row">

                    <!--begin col-md-6-->
                    <div class="col-md-6 margin-top-30 margin-bottom-30">

                        <img src="./Spectrum - Responsive Landing Page Template_files/pic2.png" class="width-100" alt="imac">

                    </div>
                    <!--end col-sm-6-->

                    <!--begin col-md-6-->
                    <div class="col-md-6 margin-top-50 margin-bottom-30">

                        <h3 class="medium-title white">Design &amp; style should always work toward making you feel good.</h3>

                        <p class="white">Nemo enim ipsam voluptatem quia voluptas sit aspernatur netsum lorem fugit, sed quia magni dolores eos qui ratione sequi nesciunt. Neque poris ratione sequi  enim ipsam voluptatem quia volupti sed quia magni.</p>

                        <ul class="features-list-dark">
                            <li class="white"><i class="icon icon-check-mark"></i> Netsum est, qui ipsum quiaim netsum sequi net tempor.</li>
                            <li class="white"><i class="icon icon-check-mark"></i> Etiam tempor ante acu ipsum finibus, atimus urnas.</li>
                            <li class="white"><i class="icon icon-check-mark"></i> Atimus urnas netsudat, qui ipsum quiaim netsum.</li>
                            <li class="white"><i class="icon icon-check-mark"></i> Etiam tempor ante acum ipsum et finibus.</li>
                        </ul>

                        <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#" class="btn btn-lg btn-blue small">Discover More</a>

                    </div>
                    <!--end col-sm-6-->

                </div>
                <!--end row-->

            </div>
            <!--end container-->

        </section>
        <!--end section-dark-->

        <!--begin story-->
        <section class="section-grey small-padding-bottom story" id="features">

            <!--begin container-->
            <div class="container">

                <!--begin row-->
                <div class="row margin-bottom-50">

                    <!--begin col-md-12-->
                    <div class="col-md-12 text-center">
                        <h2 class="section-title">Amazing Features</h2>

                        <div class="separator_wrapper">
                            <i class="icon icon-star-two red"></i>
                        </div>

                        <p class="section-subtitle">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>
                    </div>
                    <!--end col-md-12-->

                </div>
                <!--end row-->

                <!--begin row-->
                <div class="row">

                    <!--begin col-md-6 col-sm-12-->
                    <div class="col-md-6 col-sm-12">

                        <!--begin story-block-->
                        <div class="story-block story-left">

                            <!--begin story-text-->
                            <div class="story-text">

                                <h4>Flat Modern Design</h4>

                                <p>Lorem ipsum dolor sita amet, consectetur elitum suspendise rutrum eleifend arcu situm net amet magni sequi tempor.</p>

                            </div>
                            <!--end story-text-->

                            <!--begin story-image-->
                            <div class="story-image">

                                <img src="./Spectrum - Responsive Landing Page Template_files/icon2.png" alt=""> 

                            </div>
                            <!--end story-image-->

                            <span class="story-arrow"></span>

                            <span class="h-line"></span>

                        </div>
                        <!--end story-block-->

                    </div>
                    <!--end col-md-6 col-sm-12-->

                    <!--begin col-md-6 col-sm-12-->
                    <div class="col-md-6 col-sm-12">

                        <!--begin story-block-->
                        <div class="story-block story-right">

                            <!--begin story-text-->
                            <div class="story-text">

                                <h4>Multipurpose Template</h4>

                                <p>Lorem ipsum dolor sita amet, consectetur elitum suspendise rutrum eleifend arcu situm net amet magni sequi tempor.</p>

                            </div>
                            <!--end story-text-->

                            <!--begin story-image-->
                            <div class="story-image">

                                <img src="./Spectrum - Responsive Landing Page Template_files/icon3.png" alt=""> 

                            </div>
                            <!--end story-image-->

                            <span class="story-arrow"></span>

                            <span class="h-line"></span>

                        </div>
                        <!--end story-block-->

                    </div>
                    <!--end col-md-6 col-sm-12-->

                </div>
                <!--end row-->

                <!--begin row-->
                <div class="row">

                    <!--begin col-md-6 col-sm-12-->
                    <div class="col-md-6 col-sm-12">

                        <!--begin story-block-->
                        <div class="story-block story-left">

                            <!--begin story-text-->
                            <div class="story-text">

                                <h4>Documentation Included</h4>

                                <p>Lorem ipsum dolor sita amet, consectetur elitum suspendise rutrum eleifend arcu situm net amet magni sequi tempor.</p>

                            </div>
                            <!--end story-text-->

                            <!--begin story-image-->
                            <div class="story-image">

                                <img src="./Spectrum - Responsive Landing Page Template_files/icon8.png" alt=""> 

                            </div>
                            <!--end story-image-->

                            <span class="story-arrow"></span>

                            <span class="h-line"></span>

                        </div>
                        <!--end story-block-->

                    </div>
                    <!--end col-md-6 col-sm-12-->

                    <!--begin col-md-6 col-sm-12-->
                    <div class="col-md-6 col-sm-12">

                        <!--begin story-block-->
                        <div class="story-block story-right">

                            <!--begin story-text-->
                            <div class="story-text">

                                <h4>Working Newsletter</h4>

                                <p>Lorem ipsum dolor sita amet, consectetur elitum suspendise rutrum eleifend arcu situm net amet magni sequi tempor.</p>

                            </div>
                            <!--end story-text-->

                            <!--begin story-image-->
                            <div class="story-image">

                                <img src="./Spectrum - Responsive Landing Page Template_files/icon4.png" alt=""> 

                            </div>
                            <!--end story-image-->

                            <span class="story-arrow"></span>

                            <span class="h-line"></span>

                        </div>
                        <!--end story-block-->

                    </div>
                    <!--end col-md-6 col-sm-12-->

                </div>
                <!--end row-->

                <!--begin row-->
                <div class="row">

                    <!--begin col-md-6 col-sm-12-->
                    <div class="col-md-6 col-sm-12">

                        <!--begin story-block-->
                        <div class="story-block story-left last">

                            <!--begin story-text-->
                            <div class="story-text">

                                <h4>Well Explained Code</h4>

                                <p>Lorem ipsum dolor sita amet, consectetur elitum suspendise rutrum eleifend arcu situm net amet magni sequi tempor.</p>

                            </div>
                            <!--end story-text-->

                            <!--begin story-image-->
                            <div class="story-image">

                                <img src="./Spectrum - Responsive Landing Page Template_files/icon9.png" alt=""> 

                            </div>
                            <!--end story-image-->

                            <span class="story-arrow"></span>

                            <span class="h-line"></span>

                        </div>
                        <!--end story-block-->

                    </div>
                    <!--end col-md-6 col-sm-12-->

                    <!--begin col-md-6 col-sm-12-->
                    <div class="col-md-6 col-sm-12">

                        <!--begin story-block-->
                        <div class="story-block story-right last">

                            <!--begin story-text-->
                            <div class="story-text">

                                <h4>24/7 Support</h4>

                                <p>Lorem ipsum dolor sita amet, consectetur elitum suspendise rutrum eleifend arcu situm net amet magni sequi tempor.</p>

                            </div>
                            <!--end story-text-->

                            <!--begin story-image-->
                            <div class="story-image">

                                <img src="./Spectrum - Responsive Landing Page Template_files/icon0.png" alt=""> 

                            </div>
                            <!--end story-image-->

                            <span class="story-arrow"></span>

                            <span class="h-line"></span>

                        </div>
                        <!--end story-block-->

                    </div>
                    <!--end col-md-6 col-sm-12-->

                </div>
                <!--end row-->

            </div>
            <!--end container-->

        </section> 
        <!--end story-->

        <!--begin blog -->
        <section class="section-dark" id="blog">

            <!--begin container-->
            <div class="container">

                <!--begin row-->
                <div class="row margin-bottom-50">

                    <!--begin col-md-12-->
                    <div class="col-md-10 col-md-offset-1 text-center">
                        <h2 class="section-title white">Our Latest News</h2>

                        <div class="separator_wrapper_white">
                            <i class="icon icon-star-two white"></i>
                        </div>

                        <p class="section-subtitle white">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>
                    </div>
                    <!--end col-md-12-->

                </div>
                <!--end row-->

                <!--begin row-->
                <div class="row">

                    <div id="myCarousel3" class="carousel carousel3 slide" data-interval="false">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">

                            <div class="item active">

                                <!--begin col-md-4 -->
                                <div class="col-md-4">

                                    <!--begin blog-item -->
                                    <div class="blog-item">

                                        <!--begin popup image -->
                                        <div class="popup-wrapper">
                                            <div class="popup-gallery">
                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#"><img src="./Spectrum - Responsive Landing Page Template_files/p2.jpg" class="width-100" alt="pic"><span class="eye-wrapper2"><i class="icon icon-link eye-icon"></i></span></a>
                                            </div>
                                        </div>
                                        <!--begin popup image -->

                                        <!--begin blog-item_inner -->
                                        <div class="blog-item-inner">

                                            <h3 class="blog-title"><a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">Affinity Designer Quick Start</a></h3>

                                            <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#" class="blog-icons"><i class="icon icon-user"></i> Paul Smith</a>

                                            <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#" class="blog-icons last"><i class="icon icon-tags"></i> SEO, WordPress</a>

                                            <p>Quis autem velis etis reprehender etims quiste voluptate velite esse quam nihil etsa illum sedit consequatur quias.</p>

                                        </div>
                                        <!--end blog-item-inner -->

                                    </div>
                                    <!--end blog-item -->

                                </div>
                                <!--end col-md-4-->

                                <!--begin col-md-4 -->
                                <div class="col-md-4">

                                    <!--begin blog-item -->
                                    <div class="blog-item">

                                        <!--begin popup image -->
                                        <div class="popup-wrapper">
                                            <div class="popup-gallery">
                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#"><img src="./Spectrum - Responsive Landing Page Template_files/p3.jpg" class="width-100" alt="pic"><span class="eye-wrapper2"><i class="icon icon-link eye-icon"></i></span></a>
                                            </div>
                                        </div>
                                        <!--begin popup image -->

                                        <!--begin blog-item_inner -->
                                        <div class="blog-item-inner">

                                            <h3 class="blog-title"><a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">Solid HTML Form Structure</a></h3>

                                            <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#" class="blog-icons"><i class="icon icon-user"></i> By John Doe</a>

                                            <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#" class="blog-icons last"><i class="icon icon-tags"></i> Marketing, Design</a>

                                            <p>Quis autem velis etis reprehender etims quiste voluptate velite esse quam nihil etsa illum sedit consequatur quias.</p>

                                        </div>
                                        <!--end blog-item-inner -->

                                    </div>
                                    <!--end blog-item -->

                                </div>
                                <!--end col-md-4-->

                                <!--begin col-md-4 -->
                                <div class="col-md-4">

                                    <!--begin blog-item -->
                                    <div class="blog-item">

                                        <!--begin popup image -->
                                        <div class="popup-wrapper">
                                            <div class="popup-gallery">
                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#"><img src="./Spectrum - Responsive Landing Page Template_files/p6.jpg" class="width-100" alt="pic"><span class="eye-wrapper2"><i class="icon icon-link eye-icon"></i></span></a>
                                            </div>
                                        </div>
                                        <!--begin popup image -->

                                        <!--begin blog-item_inner -->
                                        <div class="blog-item-inner">

                                            <h3 class="blog-title"><a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">New WordPress Theme</a></h3>

                                            <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#" class="blog-icons"><i class="icon icon-user"></i> By John Doe</a>

                                            <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#" class="blog-icons last"><i class="icon icon-tags"></i> Marketing, Design</a>

                                            <p>Quis autem velis etis reprehender etims quiste voluptate velite esse quam nihil etsa illum sedit consequatur quias.</p>

                                        </div>
                                        <!--end blog-item-inner -->

                                    </div>
                                    <!--end blog-item -->

                                </div>
                                <!--end col-md-4-->

                            </div>

                            <div class="item">

                                <!--begin col-md-4 -->
                                <div class="col-md-4">

                                    <!--begin blog-item -->
                                    <div class="blog-item">

                                        <!--begin popup image -->
                                        <div class="popup-wrapper">
                                            <div class="popup-gallery">
                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#"><img src="./Spectrum - Responsive Landing Page Template_files/p5.jpg" class="width-100" alt="pic"><span class="eye-wrapper2"><i class="icon icon-link eye-icon"></i></span></a>
                                            </div>
                                        </div>
                                        <!--begin popup image -->

                                        <!--begin blog-item_inner -->
                                        <div class="blog-item-inner">

                                            <h3 class="blog-title"><a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">Affinity Designer Quick Start</a></h3>

                                            <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#" class="blog-icons"><i class="icon icon-user"></i> Paul Smith</a>

                                            <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#" class="blog-icons last"><i class="icon icon-tags"></i> SEO, WordPress</a>

                                            <p>Quis autem velis etis reprehender etims quiste voluptate velite esse quam nihil etsa illum sedit consequatur quias.</p>

                                        </div>
                                        <!--end blog-item-inner -->

                                    </div>
                                    <!--end blog-item -->

                                </div>
                                <!--end col-md-4-->

                                <!--begin col-md-4 -->
                                <div class="col-md-4">

                                    <!--begin blog-item -->
                                    <div class="blog-item">

                                        <!--begin popup image -->
                                        <div class="popup-wrapper">
                                            <div class="popup-gallery">
                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#"><img src="./Spectrum - Responsive Landing Page Template_files/p4.jpg" class="width-100" alt="pic"><span class="eye-wrapper2"><i class="icon icon-link eye-icon"></i></span></a>
                                            </div>
                                        </div>
                                        <!--begin popup image -->

                                        <!--begin blog-item_inner -->
                                        <div class="blog-item-inner">

                                            <h3 class="blog-title"><a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#">Solid HTML Form Structure</a></h3>

                                            <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#" class="blog-icons"><i class="icon icon-user"></i> By John Doe</a>

                                            <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#" class="blog-icons last"><i class="icon icon-tags"></i> Marketing, Design</a>

                                            <p>Quis autem velis etis reprehender etims quiste voluptate velite esse quam nihil etsa illum sedit consequatur quias.</p>

                                        </div>
                                        <!--end blog-item-inner -->

                                    </div>
                                    <!--end blog-item -->

                                </div>
                                <!--end col-md-4-->

                                <!--begin col-md-4 -->
                                <div class="col-md-4">

                                    <!--begin blog-item -->
                                    <div class="blog-item">

                                        <!--begin popup image -->
                                        <div class="popup-wrapper">
                                            <div class="popup-gallery">
                                                <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#"><img src="./Spectrum - Responsive Landing Page Template_files/p1.jpg" class="width-100" alt="pic"><span class="eye-wrapper2"><i class="icon icon-link eye-icon"></i></span></a>
                                            </div>
                                        </div>
                                        <!--begin popup image -->

                                        <!--begin blog-item_inner -->
                                        <div class="blog-item-inner">

                                            <h3 class="blog-title"><a href="">WordPress Customization</a></h3>

                                            <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#" class="blog-icons"><i class="icon icon-user"></i> By John Doe</a>

                                            <a href="http://bogdanpreda.com/themes/tf-spectrum/v4/#" class="blog-icons last"><i class="icon icon-tags"></i> Marketing, Design</a>

                                            <p>Quis autem velis etis reprehender etims quiste voluptate velite esse quam nihil etsa illum sedit consequatur quias.</p>

                                        </div>
                                        <!--end blog-item-inner -->

                                    </div>
                                    <!--end blog-item -->

                                </div>
                                <!--end col-md-4-->

                            </div>

                        </div>

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel3" data-slide-to="1"></li>
                        </ol>

                    </div>

                </div>
                <!--end row-->

            </div>
            <!--end container-->

        </section>
        <!--end blog -->

        <!--begin col-md-4 -->
        <section class="section-white" id="pricing">

            <!--begin container-->
            <div class="container">

                <!--begin row-->
                <div class="row margin-bottom-50">

                    <!--begin col-md-12-->
                    <div class="col-md-12 text-center">
                        <h2 class="section-title">Choose Your Pricing Plan</h2>

                        <div class="separator_wrapper">
                            <i class="icon icon-star-two red"></i>
                        </div>

                        <p class="section-subtitle">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>
                    </div>
                    <!--end col-md-12-->

                </div>
                <!--end row-->

                <!--begin row-->
                <div class="row">

                    <!--begin col-md-4 -->
                    <div class="col-md-4">

                        <!--begin pricing-box -->
                        <div class="pricing-box-green">

                            <!--begin pricing-top -->
                            <div class="pricing-top">

                                <h3>Starter</h3>

                                <p class="price"><span class="currency white">$</span> <span class="number white">99</span> <span class="month white">p/month</span></p>

                            </div>
                            <!--end pricing-top -->

                            <!--begin pricing-bottom -->
                            <div class="pricing-bottom">

                                <ul>
                                    <li>1 GB of space</li>
                                    <li>200 messages</li>
                                    <li>unlimited updates</li>
                                    <li>1 user acounts</li>
                                    <li>2 databases</li>
                                </ul>

                                <a href="" class="btn btn-md btn-block btn-pricing-green">SUBSCRIBE TODAY</a>

                            </div>
                            <!--end pricing-bottom -->

                        </div>
                        <!--end pricing-box -->

                    </div>
                    <!--end col-md-4 -->

                    <!--begin col-md-4 -->
                    <div class="col-md-4">

                        <!--begin pricing-box -->
                        <div class="pricing-box-red">

                            <!--begin pricing-top -->
                            <div class="pricing-top">

                                <h3>Advanced</h3>

                                <p class="price"><span class="currency white">$</span> <span class="number white">199</span> <span class="month white">p/month</span></p>

                            </div>
                            <!--end pricing-top -->

                            <!--begin pricing-bottom -->
                            <div class="pricing-bottom">

                                <ul>
                                    <li>1 GB of space</li>
                                    <li>200 messages</li>
                                    <li>unlimited updates</li>
                                    <li>1 user acounts</li>
                                    <li>2 databases</li>
                                </ul>

                                <a href="" class="btn btn-md btn-block btn-pricing-red">SUBSCRIBE TODAY</a>

                            </div>
                            <!--end pricing-bottom -->

                        </div>
                        <!--end pricing-box -->

                    </div>
                    <!--end col-md-4 -->

                    <!--begin col-md-4 -->
                    <div class="col-md-4">

                        <!--begin pricing-box -->
                        <div class="pricing-box-blue">

                            <!--begin pricing-top -->
                            <div class="pricing-top">

                                <h3>Intermediate</h3>

                                <p class="price"><span class="currency white">$</span> <span class="number white">299</span> <span class="month white">p/month</span></p>

                            </div>
                            <!--end pricing-top -->

                            <!--begin pricing-bottom -->
                            <div class="pricing-bottom">

                                <ul>
                                    <li>1 GB of space</li>
                                    <li>200 messages</li>
                                    <li>unlimited updates</li>
                                    <li>1 user acounts</li>
                                    <li>2 databases</li>
                                </ul>

                                <a href="" class="btn btn-md btn-block btn-pricing-blue">SUBSCRIBE TODAY</a>

                            </div>
                            <!--end pricing-bottom -->

                        </div>
                        <!--end pricing-box -->

                    </div>
                    <!--end col-md-4 -->

                </div>
                <!--end row-->

                <!--begin row-->
                <div class="row">

                    <!--begin col-md-12-->
                    <div class="col-md-12 text-center">
                        <p>*With more than <span class="bold">25078 clients</span>, we aim to offer premium <span class="bold">marketing solutions</span> for your business.</p>
                    </div>
                    <!--end col-md-12-->

                </div>
                <!--end row-->

            </div>
            <!--end container-->

        </section>
        <!--end section-white-->

        <!--begin contact -->
        <section class="section-dark" id="contact">

            <!--begin container-->
            <div class="container">

                <!--begin row-->
                <div class="row margin-bottom-50">

                    <!--begin col-md-10-->
                    <div class="col-md-10 col-md-offset-1 text-center">
                        <h2 class="section-title grey">Get In Touch</h2>

                        <div class="separator_wrapper_white">
                            <i class="icon icon-star-two grey"></i>
                        </div>

                        <p class="section-subtitle grey">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>
                    </div>
                    <!--end col-md-10-->

                </div>
                <!--end row-->

                <!--begin row-->
                <div class="row">

                    <!--begin success message -->
                    <p class="contact_success_box" style="display:none;">We received your message and you'll hear from us soon. Thank You!</p>
                    <!--end success message -->

                    <!--begin contact form -->
                    <form id="contact-form" class="contact" action="" method="post">

                        <!--begin col-md-6-->
                        <div class="col-md-6">
                            <input class="contact-input white-input" required="" name="contact_names" placeholder="Full Name*" type="text">
                            <input class="contact-input white-input" required="" name="contact_email" placeholder="Email Adress*" type="email">
                            <input class="contact-input white-input" required="" name="contact_phone" placeholder="Phone Number*" type="text">
                        </div>
                        <!--end col-md-6-->

                        <!--begin col-md-6-->
                        <div class="col-md-6">
                            <textarea class="contact-commnent white-input" rows="2" cols="20" name="contact_message" placeholder="Your Message..."></textarea>
                        </div>
                        <!--end col-md-6-->

                        <!--begin col-md-12-->
                        <div class="col-md-12">
                            <input value="Send Message" id="submit-button" class="contact-submit" type="submit">
                        </div>
                        <!--end col-md-12-->

                    </form>
                    <!--end contact form -->

                </div>
                <!--end row-->

            </div>
            <!--end container-->

        </section>
        <!--end contact-->