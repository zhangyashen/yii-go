<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>jQuery File Upload Example</title>
</head>
<body>
<input id="fileupload" type="file" name="image" multiple>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.ui.widget.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.iframe-transport.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.fileupload.js"></script>
<script>
$(function () {
    $('#fileupload').fileupload({
        dataType: 'json',
        url: 'http://localhost/yii_go_part2/index.php?r=upload/getAjax',
        done: function (e, data) {
            $.each(data.result, function (index, file) {
                $('<p/>').text(file.name).appendTo(document.body);
            });
        }
    });
});
</script>
</body> 
</html>