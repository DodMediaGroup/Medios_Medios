<div class="page-heading">
    <h1>Editar <?php echo $model->titulo; ?></h1>
</div>

<?php $this->renderPartial('_form', array(
	'model'=>$model
)); ?>