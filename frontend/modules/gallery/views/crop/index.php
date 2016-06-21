<div class="row-item">
    <div class="cropbox" style="margin: 0 auto">
        <img id="cropbox" src="<?= Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/uploads') . '/ff79d511999ffcff9880ed6e5ba3b719.jpg' ?>">
    </div>
</div>
<input type="hidden" id="avatar" name="img" value="<?= Yii::$app->session->getFlash('img') ?>"/>
<input type="hidden" size="4" id="x1" name="x1" />
<input type="hidden" size="4" id="y1" name="y1" />
<input type="hidden" size="4" id="x2" name="x2" />
<input type="hidden" size="4" id="y2" name="y2" />
<input type="hidden" size="4" id="w" name="w" />
<input type="hidden" size="4" id="h" name="h" />

<div class="row-item text-right">
    <button type="submit" class="btn btn-blue" style="padding: 6px 12px; text-transform: none">Lưu</button>
    <a type="submit" class="btn btn-default modal-cancel">Hủy</a>
</div>
<?= $this->registerJsFile(Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/js/jquery-ui.min.js'), ['depends' => [\yii\web\JqueryAsset::className()]]); ?>
<?= $this->registerJsFile(Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/js/jquery.Jcrop.js'), ['depends' => [\yii\web\JqueryAsset::className()]]); ?>
<?= $this->registerCssFile(Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/css/jquery.Jcrop.css'), ['depends' => [\yii\web\JqueryAsset::className()]]); ?>
<?=
$this->registerJs("$(document).ready(function(){
   
				jQuery('#cropbox').Jcrop({
					onChange: showCoords,
					onSelect: showCoords,
                                        minSize: [150,150],
                                        setSelect:[50, 50, 200, 200 ],
                                        aspectRatio: 1/1,

				});

			});

			// Simple event handler, called from onChange and onSelect
			// event handlers, as per the Jcrop invocation above
			function showCoords(c)
			{
				jQuery('#x1').val(c.x);
				jQuery('#y1').val(c.y);
				jQuery('#x2').val(c.x2);
				jQuery('#y2').val(c.y2);
				jQuery('#w').val(c.w);
				jQuery('#h').val(c.h);
			};")
?>