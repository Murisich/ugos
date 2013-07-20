<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'userform'),
)); ?>

<fieldset>

	<legend>Регистрация</legend>

	<?php echo $form->errorSummary($model); ?>

	<table>
		<tr>
			<td width=150><?php echo $form->labelEx($model,'name'); ?></td>
			<td><?php echo $form->textField($model,'name',array('size'=>20,'maxlength'=>20)); ?></td>
			<td width=150><?php echo $form->labelEx($model,'birthday'); ?>
			<td><?php echo $form->dateField($model,'birthday'); ?></td>
		</tr>
		<tr>
			<td width=150><?php echo $form->labelEx($model,'surname'); ?></td>
			<td><?php echo $form->textField($model,'surname',array('size'=>20,'maxlength'=>20)); ?></td>
			<td width=150><?php echo $form->labelEx($model,'sex'); ?></td>
			<td><?php echo $form->dropDownList($model, 'sex',
              array("1" => 'Мужчина', "2" => 'Женщина')) ?></td>
		</tr>
		<tr>
			<td width=150><?php echo $form->labelEx($model,'email'); ?></td>
			<td><?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?></td>
			<td width=150><?php echo $form->labelEx($model,'country'); ?></td>
			<td><?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>128)); ?></td>
		</tr>
		<tr>
			<td width=150><?php echo $form->labelEx($model,'password'); ?></td>
			<td><?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>128)); ?></td>
			<td width=150><?php echo $form->labelEx($model,'city'); ?></td>
			<td><?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>128)); ?></td>
		</tr>
		<tr>
			<td width=150></td>
			<td></td>
			<td width=150><?php echo $form->labelEx($model,'mobtel'); ?></td>
			<td><?php echo $form->textField($model,'mobtel',array('size'=>60,'maxlength'=>128)); ?></td>
		</tr>
		<tr>
			<td width=150></td>
			<td><?php echo CHtml::submitButton('Регистрация', $htmlOptions=array('class'=>'btn')); ?></td>
			<td></td>
			<td></td>
		</tr>
	</table>

</fieldset>

<?php $this->endWidget(); ?>