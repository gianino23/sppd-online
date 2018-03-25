<?php
/* @var $this PegawaiController */
/* @var $model Pegawai */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pegawai-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<p class="note">Kolom Yang Bertanda <span class="required">*</span>Wajib Di Isi</p>
<div class="col-md-2">
</div>
<div class="col-md-12">
<table id="example1" class="table table-striped responsive-utilities jambo_table">

<tbody>

	<tr class="even pointer">
		<td><?php echo $form->labelEx($model,'nip'); ?></td>
		<td><?php echo $form->textField($model,'nip',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'nip'); ?>
		</td>
		<td style="width:5%;">
		<a href="#" id="generate" class="btn btn-success">Generate</a>
		</td>
	</tr>
	<tr class="even pointer">
		<td><?php echo $form->labelEx($model,'nama'); ?></td>
		<td><?php echo $form->textField($model,'nama',array('class'=>'form-control','id'=>'nama','name'=>'nama-form')); ?>
		<?php echo $form->error($model,'nama'); ?>
		</td>
	</tr>

</tbody>

</table>
</div>
</br>
<center><?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Simpan',array('class'=>'btn btn-success')); ?>
<?php $this->endWidget(); ?>
</div><!-- form -->