<?php
	$this->pageTitle=Yii::app()->name . " - $model->name" . " $model->surname";
	$age = $this->age($model->birthday);
	$sex = $this->sex($model->sex);
?>

<div class='user-view'>
	<div class='user-photo'><img src='/assets/img/avatar-man.png'></div>
	<div class='user-info'>
		<h1><?php echo "$model->name"." $model->surname" ?></h1>
		<?php echo "$age лет" ?><br>
		<?php echo "$sex" ?>
	</div>
</div>