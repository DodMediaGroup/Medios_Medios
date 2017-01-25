<?php
  $ruta = explode("/",Yii::app()->request->pathInfo);
  $page = strtolower($ruta[0]);
?>
<div class="bar-menu"><a href="<?php echo $this->createUrl('/index') ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo-menu.svg" class="logo"/></a></div>
<input type="checkbox" id="btn-menu"/>
<label for="btn-menu" class="icon-menu"></label>
<ul class="menu">
  <li class="col-xs"><a href="<?php echo $this->createUrl('/quienes_somos') ?>"><span>/</span>
      <p>QUIÉNES SOMOS</p></a></li>
  <li class="col-xs"><a href="<?php echo $this->createUrl('/servicios') ?>"><span>/</span>
      <p>SERVICIOS</p></a></li>
  <li class="col-xs"><a href="<?php echo $this->createUrl('/clientes') ?>"><span>/</span>
      <p>CLIENTES</p></a></li>
  <li class="col-xs"><a href="<?php echo $this->createUrl('/preguntas') ?>"><span>/</span>
      <p>PREGUNTAS FRECUENTES</p></a></li>
  <li class="col-xs"><a href="<?php echo $this->createUrl('/contacto') ?>"><span>/</span>
      <p>CONTACTO</p></a></li>
</ul>