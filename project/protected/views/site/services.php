  <div id="wrapper">
  <?php $this->renderPartial('//layouts/_menu-left'); ?>
    <div class="content">
      <div class="line-vertical"></div>
     <?php $this->renderPartial('//layouts/_menu'); ?>
      <div class="title-section">
        <h2 class="wow fadeInRight"><?php echo $pagina->titulo; ?></h2>
      </div>
      <div class="title-section-about"> 

        <div class="wow fadeInRight line-green-red">
          <div class="line-red"></div>
          <div class="line-green"></div>
        </div>
      <h1><?php echo $pagina->contenido; ?></h1>
          
        <div class="wow fadeInRight line-green-red-down">
          <div class="line-green"></div>
          <div class="line-red"></div>
        </div>
        <p>En otras palabras la central tiene alianzas estratégicas con todos los medios lo cual no solo representa un ahorro de dinero para su empresa, sino que gana tiempo y tiene auditoría premanente sobre el cumplimiento de la pauta.</p>
      </div>
        <div class="row center-xs content__service">
        <?php foreach ($productos as $key => $producto) {?>
                <?php if ($producto->id == 1) { ?>
                    <div class="col-xs-12 col-md-6 col-lg-4 cnt__img__service">
                    <a href="<?php echo $this->createUrl('/producto/'.MyMethods::normalizarUrl($producto->id.'_'.$producto->nombre)); ?>">
                    <div style="background: url(images/servicios/250x250/valla.png)no-repeat center; background-size: cover;" class="image__services"></div></a>
                      <h2><?php echo MyMethods::myStrtoupper($producto->nombre); ?></h2>
                    <div class="view row center-xs"><a href="<?php echo $this->createUrl('/producto/'.MyMethods::normalizarUrl($producto->id.'_'.$producto->nombre)); ?>"><img src="images/mas.svg" class="to-svg">
                        <p>Ver</p></a></div>
                </div>
                <?php } ?>

                <?php if ($producto->id == 2) { ?>
                    <div class="col-xs-12 col-md-6 col-lg-4 cnt__img__service">
                    <a href="<?php echo $this->createUrl('/producto/'.MyMethods::normalizarUrl($producto->id.'_'.$producto->nombre)); ?>">
                    <div style="background: url(images/servicios/250x250/paradero.png)no-repeat center; background-size: cover;" class="image__services"></div></a>
                      <h2><?php echo MyMethods::myStrtoupper($producto->nombre); ?></h2>
                    <div class="view row center-xs"><a href="<?php echo $this->createUrl('/producto/'.MyMethods::normalizarUrl($producto->id.'_'.$producto->nombre)); ?>"><img src="images/mas.svg" class="to-svg">
                        <p>Ver</p></a></div>
                </div>
                <?php } ?>

                
        <?php } ?>
        <?php foreach ($servicios as $key => $servicio) {?>
                <div class="col-xs-12 col-md-6 col-lg-4 cnt__img__service">
                <a href="<?php echo $this->createUrl('servicio/'.$servicio->id_servicios.'_'.MyMethods::normalizarUrl($servicio->nombre)); ?>">
                    <div style="background: url(images/servicios/250x250/<?php echo $servicio->imagen ?>) no-repeat center; background-size: cover;" class="image__services"></div></a>
                      <h2><?php echo $servicio->nombre ?></h2>
                    <div class="view row center-xs"><a href="<?php echo $this->createUrl('servicio/'.$servicio->id_servicios.'_'.MyMethods::normalizarUrl($servicio->nombre)); ?>"><img src="images/mas.svg" class="to-svg">
                        <p>Ver</p></a></div>
                </div>
        <?php
        } ?>         
        </div>
      </div>
    </div>
  <?php $this->renderPartial('//layouts/_footer'); ?>