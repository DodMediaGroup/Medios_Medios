<body>
  <div id="fb-root"></div>
  <?php $this->renderPartial('//layouts/_menu-left'); ?>
  <div class="content smart">
    <div class="line-vertical"></div>
    <?php $this->renderPartial('//layouts/_menu'); ?>
    <div id="owl-demo" class="owl-carousel owl-theme">
    <?php foreach ($slide->images as $key => $imagen) {?>
      
         <div class="item"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/galleries/<?php echo $slide->id_gallery ?>/<?php echo $imagen->name ?>">
           <div class="row center-xs">
            <div class="ver-mas"><a href="<?php echo $imagen->link; ?>">VER MAS</a></div>
          </div>
         </div>
        
      <?php
    } ?>
     
    </div>
    <div class="title-section">
      <h1 class="wow fadeInRight">CONOCE NUESTRA OFERTA DE MEDIOS PROPIOS</h1>
      <div class="line-green wow fadeInRight"> </div>
    </div>
    <div class="options row center-xs">
      <?php foreach ($productos as $key => $producto) { ?>
    <div class="image-option col-xs-12 col-md-4"><a href="<?php echo $this->createUrl('/producto/'.MyMethods::normalizarUrl($producto->id.'_'.$producto->nombre)); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/productos/<?php echo $producto->imagen; ?>" class="img__service">
        <p><?php echo MyMethods::myStrtoupper($producto->nombre); ?></p>
        <div class="view"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/mas.svg" class="to-svg">
          <p>Ver</p>
        </div></a></div>

  <?php } ?>
    <div class="image-option col-xs-12 col-md-4">
        <div data-href="https://www.facebook.com/enespanol/?fref=ts" data-width="310px" data-tabs="timeline" data-height="400" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true" class="fb-page">
          <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/enespanol/?fref=ts"><a href="https://www.facebook.com/enespanol/?fref=ts"></a></blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $this->renderPartial('//layouts/_footer'); ?>