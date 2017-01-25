<body>
<?php $this->renderPartial('//layouts/_menu-left'); ?>
  <div id="wrapper">
     <div class="content">
      <div class="line-vertical"></div>
      <?php $this->renderPartial('//layouts/_menu'); ?>
      <div class="title-section">
        <h1 class="wow fadeInRight">CLIENTES</h1>
        <div class="line-green wow fadeInRight"></div>
      </div>
      <div class="options row center-xs container_image_clients">
      <?php foreach ($clientes as $key => $cliente) {?>
        
           <a href="<?php echo Yii::app()->request->baseUrl; ?>/images/clientes/<?php echo $cliente->imagen ?>" data-fancybox-group="gallery" title="Cliente: <?php echo $cliente->nombre ?> / Ubicación: <?php echo $cliente->ubicacion ?>" class="fancybox">

          <div style="background: url(images/clientes/450x330/<?php echo $cliente->imagen ?>) no-repeat center; background-size: cover" class="col-xs-4 content_image_clients">
            <div class="row middle-xs start-xs hover_clients">
              <div class="col-xs-12 description_item_clients">Cliente: <?php echo $cliente->nombre ?> Ubicación: <?php echo $cliente->ubicacion ?></div><span class="col-xs-12 lupa"></span>
            </div>
          </div></a>

        <?php
      }

       ?>
      <!--<div class="row center-xs">
        <div class="col-xs-2 row middle-xs center-xs btn-clients">
        <a href="#">
            <p>CARGAR MÁS FOTOS</p></a></div>
      </div>-->
    </div>
  </div>
<?php $this->renderPartial('//layouts/_footer'); ?>