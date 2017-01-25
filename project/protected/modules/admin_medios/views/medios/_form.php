<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'medios-form',
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
		<div class="col-sm-6" style="margin-top: 70px;">
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
				</div>
			</div>
		</div>
		<div class="col-sm-6" style="margin-top: 70px;">
			<div class="widget">
				<div class="widget-header transparent">
					<h2><strong>Ubicación</strong></h2>
					<div class="additional-btn">
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					</div>
				</div>
				<div class="widget-content padding">
					<div class="form-group">
						<?php echo $form->labelEx($model,'ubicacion_latitud'); ?>
        				<?php echo $form->textField($model,'ubicacion_latitud',array('class'=>'form-control','maxlength'=>255,'placeholder'=>'Latitud','required'=>true)); ?>
					</div>
				</div>
				<div class="widget-content padding">
					<div class="form-group">
						<?php echo $form->labelEx($model,'	ubicacion_longitud'); ?>
        				<?php echo $form->textField($model,'ubicacion_longitud',array('class'=>'form-control','maxlength'=>255,'placeholder'=>'Longitud','required'=>true)); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="form-group ">
						<?php echo $form->labelEx($model,'imagen'); ?>
						<div class="imag-before-upload" style="height: 300px !important; width: 100% !important; max-width: 100% !important; background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/medios/default.jpg);">
							<?php if(!$model->isNewRecord){ ?>
								<div class="img" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/medios/<?php echo $model->imagen; ?>)"></div>
							<?php } ?>
						</div>
						<input type="file" accept="imagen/*" class="btn btn-default js-show-before" name="logo" data-before=".imag-before-upload" title="<?php echo ($model->isNewRecord)?'Agregar Imagen':'Cambiar Imagen' ?>">
						<p class="help-block"><strong>Nota: </strong> Dimensiones recomendadas de 1200x400. Peso maximo 400Kb.</p>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="widget">
				<div class="widget-header">
					<h2><strong>Caracteristicas</strong></h2>
					<div class="additional-btn">
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					</div>
				</div>
				<div class="widget-content padding">
					<div class="form-group">
						<?php echo $form->textArea($model,'conceptos',array('class'=>'js-ckeditor')); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="widget">
				<div class="widget-header">
					<h2><strong>Producto</strong></h2>
					<div class="additional-btn">
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					</div>
				</div>
				<div class="widget-content padding">
					<div class="form-group">
								<label for="">Producto</label>
						</div>
						<div class="form-group">
        				<?php echo $form->dropDownList($model,'producto', MyMethods::getListSelect('Productos', 'id', 'nombre'), array('class'=>'form-control')); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="widget">
				<div class="widget-header">
					<h2><strong>Zona</strong></h2>
					<div class="additional-btn">
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					</div>
				</div>
				<div class="widget-content padding">
					<div class="form-group">
								<label for="">Zona</label>
						</div>
						<div class="form-group">
        				<?php echo $form->dropDownList($model,'zona', MyMethods::getListSelect('Zonas', 'id', 'nombre'), array('class'=>'form-control')); ?>
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="form-group">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class'=>'btn btn-success')); ?>
                <a href="<?php echo $this->createUrl('medios/admin'); ?>" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</div>
<?php $this->endWidget(); ?>