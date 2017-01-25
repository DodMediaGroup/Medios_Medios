<body>
  <div id="wrapper" style="height: 100%;">
    <?php $this->renderPartial('//layouts/_menu-left'); ?>
    <div class="content smart">
      <div class="line-vertical"></div>
      <?php $this->renderPartial('//layouts/_menu'); ?>
<div class="title-section">
  <h1 class="wow fadeInRight">MEDIOS PROPIOS</h1>
  <div class="line-green wow fadeInRight"></div>
</div>
<div class="options row center-xs">
  <?php foreach ($productos as $key => $producto) { ?>
    <div class="image-option col-xs-4"><a href="<?php echo $this->createUrl('/producto/'.MyMethods::normalizarUrl($producto->id.'_'.$producto->nombre)); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/productos/<?php echo $producto->imagen; ?>" class="img__service">
        <p><?php echo MyMethods::myStrtoupper($producto->nombre); ?></p>
        <div class="view"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/mas.svg" class="to-svg">
          <p>Ver</p>
        </div></a></div>
  <?php } ?>
</div>
</div>
</div>
<?php $this->renderPartial('//layouts/_footer'); ?>