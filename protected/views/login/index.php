<?php 

	$form=$this->beginWidget('CActiveForm',
		array('id'=>'frmlogin',
			'enableClientValidation'=>true,
			'clientOptions'=>array('validateOnSubmit'=>true,
			),
		)
	);

?>
				
<center><h2 class="form-signin-heading">.:LOGIN SIPD:.</h2></center><hr>

<!-- pesan error -->
<center><?php echo $form -> error($model,'username',array('class'=>'alert alert-warning')); ?></center>
<center><?php echo $form -> error($model,'password',array('class'=>'alert alert-warning')); ?></center>
<center><?php echo $form -> error($model, 'rememberMe',array('class'=>'alert alert-warning')); ?></center>
<!-- /end pesan error -->

<!-- username -->
<?php echo $form -> textField($model,'username',array('class'=>'form-control','placeholder'=>'Username')); ?><br />
				
<!-- password -->
<?php echo $form -> passwordField($model,'password',array('class'=>'form-control','placeholder'=>'Password')); ?>

<!-- remember me -->
<div class="checkbox-inline">
<?php echo $form -> checkBox($model, 'rememberMe'); ?>
<?php echo $form -> label($model, 'rememberMe'); ?>
</div>
				
<!-- button -->
<?php echo CHtml::submitButton('LOGIN',array('class'=>'btn btn-primary btn-block')); ?>

<?php $this->endWidget(); ?>