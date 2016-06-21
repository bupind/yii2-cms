<style>
    .img{
        float: left;
        text-align: center;
        border: 1px solid #ccc;
        margin-right: 10px;
        list-style: none;
    }

</style>
<div class="gallery-default-index row">
    <a href="#" class="uploadFile"><span class="fix">Uploads</span></a>
</div>

    <input type="hidden" id="img_id" value="123">

    <ul style="margin:0; padding: 0; width: 100%;">
        <?php
        if (!empty($media)) {
            foreach ($media as $value) {
                ?>
                <li class="img">
                    <img src="<?= Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl) ?>/webroot/uploads/thumbnails/<?= $value->url ?>">
                </li>
                <?php
            }
        }
        ?>
    </ul>
<?= $this->registerJsFile(Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/js/jquery.uploadfile.min.js'), ['depends' => [\yii\web\JqueryAsset::className()]]); ?>
<?=
$this->registerJs('$(document).ready(function ()
{
    var upload = {
        url: "' . Yii::$app->urlManager->createAbsoluteUrl(["gallery/upload"]) . '",
        method: "POST",
        allowedTypes: "jpg,png,jpeg,gif",
        fileName: "myfile",
        multiple: true,
        maxSize: 100000,
        onBeforeSend: function () {
            $(".loading").html("Đang tải...");
        },
        onSuccess: function (files, data, xhr)
        {
            $.each(data, function (index, value) {
                window.location.href = "/gallery/crop";          
            });
        },
        onError: function (files, status, errMsg)
        {
            $(".resultFile").html("Không đúng định dạng hoặc size không quá 2 MB");
        }
    };
        $(".uploadFile").uploadFile(upload);

})');
?>
<?=
$this->registerJs("$(document).on('click', '.save', function (event){
    var data = $('#img_id').val();
    alert(data);
})")?>