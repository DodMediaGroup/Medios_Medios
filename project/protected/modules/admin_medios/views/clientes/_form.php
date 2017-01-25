<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'servicios-form',
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array(
        'role'=>'form',
        'enctype'=>"multipart/form-data",
    )
)); ?>
	<div class="row">
		<?php if($form->errorSummary($model) != ""){ ?>
			<div class="col-sm-12">
	            <div class="alert alert-danger">
	                <?php echo $form->errorSummary($model); ?>
	            </div>
	        </div>
        <?php } ?>
		<div class="col-sm-6">
			<div class="widget">
				<div class="widget-header transparent">
					<h2><strong>Entrada</strong></h2>
					<div class="additional-btn">
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					</div>
				</div>
				<div class="widget-content padding">
					<div class="form-group">
						<?php echo $form->labelEx($model,'nombre'); ?>
        				<?php echo $form->textField($model,'nombre',array('class'=>'form-control','maxlength'=>255,'placeholder'=>'Nombre','required'=>true)); ?>
					</div>
					<div class="form-group">
						<?php echo $form->labelEx($model,'ubicacion'); ?>
        				<?php echo $form->textField($model,'ubicacion',array('class'=>'form-control','maxlength'=>255,'placeholder'=>'Ubicacion','required'=>true)); ?>
					</div>
					<div class="form-group">
						<div class="imag-before-upload" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/clientes/default.jpg);">
							<?php if(!$model->isNewRecord && $model->imagen != ""){ ?>
								<div class="img" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/clientes/450x330/<?php echo $model->imagen; ?>)"></div>
							<?php } ?>
						</div>
						<input type="file" accept="imagen/*" class="btn btn-default js-show-before" name="logo" data-before=".imag-before-upload" title="<?php echo ($model->isNewRecord)?'Agregar Imagen':'Cambiar Imagen' ?>">
						<p class="help-block"><strong>Nota: </strong> Dimensiones recomendadas de 250x250. Peso maximo 200Kb.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="form-group">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class'=>'btn btn-success')); ?>
                <a href="<?php echo $this->createUrl('clientes/admin'); ?>" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</div>
<?php $this->endWidget(); ?>