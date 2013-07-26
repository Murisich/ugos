<?php
	$this->pageTitle=Yii::app()->name . ' - Войти';
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions'=>array('class'=>'userform'),
)); ?>

<fieldset>

	<legend>Войти</legend>
	<?php echo $form->errorSummary($model); ?>
	<table>
		<tr>
			<td>
				<?php echo $form->labelEx($model,'email'); ?>
				<?php echo $form->textField($model,'email'); ?>
			</td>
			<td>
				<?php echo $form->labelEx($model,'password'); ?>
				<?php echo $form->passwordField($model,'password'); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo CHtml::submitButton('Войти', $htmlOptions=array('class'=>'btn')); ?>
			</td>
			<td>
			</td>
		</tr>
	</table>

</fieldset>

<?php $this->endWidget(); ?>