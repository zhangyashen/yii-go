<?php echo CHtml::form('','post',array('enctype'=>'multipart/form-data')); ?>
<?php echo CHtml::activeFileField($model, 'image'); ?>
<?php echo CHtml::submitButton('SubMit');?>
<?php echo CHtml::endForm(); ?>