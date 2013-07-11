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
			<td width=100><?php echo $form->labelEx($model,'Имя'); ?></td>
			<td><?php echo $form->textField($model,'name',array('size'=>20,'maxlength'=>20)); ?></td>
			<td><?php echo $form->error($model,'name'); ?></td>
		</tr>
		<tr>
			<td width=100><?php echo $form->labelEx($model,'Фамилия'); ?></td>
			<td><?php echo $form->textField($model,'surname',array('size'=>20,'maxlength'=>20)); ?></td>
			<td><?php echo $form->error($model,'surname'); ?></td>
		</tr>
		<tr>
			<td width=100><?php echo $form->labelEx($model,'Пароль'); ?></td>
			<td><?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>128)); ?></td>
			<td><?php echo $form->error($model,'password'); ?></td>
		</tr>
		<tr>
			<td width=100><?php echo $form->labelEx($model,'Почта'); ?></td>
			<td><?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?></td>
			<td><?php echo $form->error($model,'email'); ?></td>
		</tr>
		<tr>
			<td width=100></td>
			<td><?php echo CHtml::submitButton('Регистрация', $htmlOptions=array('class'=>'btn')); ?></td>
			<td></td>
		</tr>
	</table>

</fieldset>

<?php $this->endWidget(); ?>