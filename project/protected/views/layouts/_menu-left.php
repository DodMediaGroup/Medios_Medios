<?php
    $ruta = explode("/",Yii::app()->request->pathInfo);
    $page = strtolower($ruta[0]);
?>
<div class="menu-left"> <a href="<?php echo $this->createUrl('index/') ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png"/></a>
  <ul>  
    <li class="item-menu"><a href="<?php echo $this->createUrl('/quienes_somos') ?>">
        <p class="text-item">QUIÉNES SOMOS</p></a><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon-msm.svg" class="icon-item"/></li>
    <li class="item-menu"><a href="<?php echo $this->createUrl('/servicios') ?>">
        <p class="text-item">SERVICIOS</p></a><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon-medios.svg" class="icon-item"/></li>
    <li class="item-menu"><a href="<?php echo $this->createUrl('/clientes') ?>">
        <p class="text-item">CLIENTES</p></a><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon-clients.svg" class="icon-item"/></li>
    <li class="item-menu"><a href="<?php echo $this->createUrl('/preguntas') ?>">
        <p class="text-item">PREGUNTAS FRECUENTES</p></a><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon-question.svg" class="icon-item"/></li>
    <li class="item-menu"><a href="<?php echo $this->createUrl('/contacto') ?>">
        <p class="text-item">CONTACTO</p></a><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon-contact.svg" class="icon-item"/></li>
  </ul>
</div>