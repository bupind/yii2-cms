<?php

use yii\bootstrap\ActiveForm;
?>

<?php
$form = ActiveForm::begin([
            'options' => ['class' => 'form newtopic'],
        ]);
?>  
<div class="postinfotop">
    <h2><?= $this->title ?></h2>
</div>

<!-- acc section -->

<div class="col-lg-8">
    <div class="post">
        <div class="accsection">
            <div class="topwrap" style="padding: 15px;">
                <?= $form->field($model, 'title')->textInput() ?>
                <?= $form->field($model, 'description')->textArea() ?>
                <?= $form->field($model, 'content')->textArea() ?>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4">
    <div class="post">
        <div class="accsection">
            <div class="topwrap" style="padding: 15px;">
                <?= $form->field($model, 'status')->dropDownList($model->postStatus) ?>
            </div>
        </div>
    </div>
    <div class="post">
        <div class="accsection">
            <div class="topwrap" style="padding: 15px;">
                <?=
                        $form->field($model, 'category_id')
                        ->radioList($model->getCategories('post'), [
                            'item' => function($index, $label, $name, $checked, $value) {
                                $check = $label['checked'] == 1 ? ' checked="checked"' : '';
                                $return = '<div class="radio"><label><input type="radio" name="' . $name . '" ' . $check . ' value="' . $label['id'] . '" >' . $label['title'] . '</label></div>';
                                return $return;
                            }
                        ])->label();
                ?>
            </div>
        </div>
    </div>
    <div class="post">
        <div class="row">       
            <div class="col-md-10 col-sm-10 col-xs-9 input-avatar">
                <?= $form->field($model, 'image')->textInput(['id' => 'fieldID'])->label(false) ?>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-3 btn-upload">
                <a href="/filemanager/dialog.php?type=1&field_id=fieldID&akey=vinh" class="btn iframe-btn btn-success" type="button"><i class="fa fa-upload"></i></a>
            </div>
        </div>
    </div>
    <div class="pull-right postreply">
        <button class="btn btn-primary book" data-toggle="modal">Trigger Modal in iFrame</button>
        <div class="test"></div>

        <div class="pull-left"><button type="submit" class="btn btn-primary">Đăng bài</button></div>
        <div class="clearfix"></div>
    </div>

</div><!-- acc section END -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Hình ảnh</h4>
            </div>
            <div class="modal-body">
                    <iframe id="iframe-gallery" class="row" src="/gallery" style="height: 450px; width: 100%" frameborder="0" allowtransparency="true"></iframe>  
      
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary save">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php ActiveForm::end(); ?>
<?= $this->registerJsFile(Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/js/tinymce/tinymce.min.js'), ['depends' => [\yii\web\JqueryAsset::className()]]); ?>
<?= $this->registerJsFile(Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/fancybox/jquery.fancybox.js'), ['depends' => [\yii\web\JqueryAsset::className()]]); ?>
<?= $this->registerJsFile(Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/js/jquery.observe_field.js'), ['depends' => [\yii\web\JqueryAsset::className()]]); ?>
<?= $this->registerCssFile(Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/fancybox/jquery.fancybox.css'), ['depends' => [\yii\web\JqueryAsset::className()]]); ?>
<?= $this->registerCssFile(Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/css/pgwmodal.min.css'), ['depends' => [\yii\web\JqueryAsset::className()]]); ?>
<?= $this->registerJs("
        tinyMCE.init({
         selector: '#post-content',
        height: 500,
        width:'99,5%',
        plugins: [
            'advlist autolink autosave autoresize link image lists charmap print preview hr anchor pagebreak spellchecker',
            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'table contextmenu directionality emoticons template textcolor paste fullpage textcolor colorpicker responsivefilemanager textpattern'
        ],
        toolbar1: 'newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect',
        toolbar2: 'cut copy paste | outdent indent blockquote | undo redo | responsivefilemanager | insertdatetime preview | forecolor backcolor | table ',
        menubar: false,
        toolbar_items_size: 'small',
        content_css: [
            '//www.tinymce.com/css/codepen.min.css'
        ],
             external_filemanager_path: '/filemanager/',
        filemanager_title: 'Responsive Filemanager',
        external_plugins: {'filemanager': '/filemanager/plugin.min.js'},
        filemanager_access_key:'12222222222' ,
});
");
?>
<?= $this->registerJs("
	$('.iframe-btn').fancybox({
	  'width'	: 880,
	  'height'	: 570,
	  'type'	: 'iframe',
	  'autoScale'   : false
      });
	$(function() {
		$('#fieldID').observe_field(1, function( ) {
			$('#image_preview').html('<img src='+this.value+'>');
		});
	});
$('.fancybox').fancybox({
	width    : '650', 
height   : '550', 
autoSize    : false, 
closeClick  : true, 
fitToView   : false, 
openEffect  : 'none', 
closeEffect : 'none', 
type : 'iframe' 
});


"); ?>
<?= $this->registerJs("$(document).on('click', '.book', function (event){
        event.preventDefault();
        $('#myModal').find('.modal-dialog').css('width', '780px');
        $('#myModal').modal('show');

})") ?>
