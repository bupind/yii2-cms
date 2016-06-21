
<?php

use yii\bootstrap\ActiveForm;

$this->title = 'Đăng ký';
?>
<section class="content">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-md-offset-3">



                <!-- POST -->
                <div class="post" style="margin-bottom: 150px; margin-top: 100px">
                    <?php $form = ActiveForm::begin(['id' => 'form-signup', 'options' => ['class' => 'form newtopic']]); ?>
                    <div class="postinfotop">
                        <h2>Đăng ký thành viên</h2>
                    </div>

                    <!-- acc section -->
                    <div class="accsection">
                        <div class="topwrap" style="padding: 15px;">

                            <?= $form->field($model, 'firstname')->textInput(['placeholder' => 'Họ'])->label(FALSE) ?>

                            <?= $form->field($model, 'lastname')->textInput(['placeholder' => 'Tên'])->label(FALSE) ?>

                            <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email'])->label(FALSE) ?>

                            <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Mật khẩu'])->label(FALSE) ?>

                            <?= $form->field($model, 'password_repeat')->passwordInput(['placeholder' => 'Nhập lại mật khẩu'])->label(FALSE) ?>

                        </div>
                        <div class="clearfix"></div>
                    </div><!-- acc section END -->




                    <!-- acc section -->
                    <!--                    <div class="accsection networks">
                    
                                            <div class="topwrap" style="padding: 15px;">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <a class="btn btn-fb" href="http://giicms.com/user/signup/auth/?authclient=facebook">Đăng ký bằng Facebook</a>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <a class="btn btn-gp" href="http://giicms.com/user/signup/auth/?authclient=google">Đăng ký bằng Google</a>                                                  
                                                    </div>
                                                </div>
                    
                                            </div>  
                                        </div> acc section END -->





                    <div class="postinfobot">

                        <div class="notechbox pull-left">
                            <input type="checkbox" name="note" id="note" class="form-control" />
                        </div>

                        <div class="pull-left lblfch">
                            <label for="note">Tôi đồng ý với các Điều khoản của trang web này</label>
                        </div>

                        <div class="pull-right postreply">
                            <div class="pull-left"><button type="submit" class="btn btn-primary">Đăng ký</button></div>
                            <div class="clearfix"></div>
                        </div>


                        <div class="clearfix"></div>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div><!-- POST -->






            </div>

        </div>
    </div>



</section>
