<body>
  <div id="wrapper" style="height: 100%;">
    <?php $this->renderPartial('//layouts/_menu-left'); ?>
    <div class="content ">
      <div class="line-vertical"></div>
      <?php $this->renderPartial('//layouts/_menu'); ?>
      <div class="title-section">
        <h1 class="wow fadeInRight">MEDIOS</h1>
        <div class="line-green wow fadeInRight"> </div>
      </div>
      <div class="image-other" style="background: url(../images/medios/<?php echo $medio->imagen; ?>) no-repeat center;
        background-size: cover;"></div>
      <div class="section-content">
        <div class="title">
          <h1 class="red"><?php echo MyMethods::myStrtoupper($medio->producto0->nombre); ?> / ZONA <?php echo MyMethods::myStrtoupper($medio->zona0->nombre); ?><span> <?php echo $medio->nombre ?></span><a href="<?php echo $this->createUrl('/producto/'.MyMethods::normalizarUrl($medio->producto0->id.'_'.$medio->producto0->nombre)); ?>">
              <p>Volver</p><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon-back.png"></a></h1>
        </div>
        <div class="section-options row around-xs">
          <ul class="col-xs type nav-pills">
            <li> <a data-toggle="pill" href="#option1"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/site.svg" class="to-svg">
                <p>UBICACIÓN</p></a></li>
            <li> <a data-toggle="pill" href="#option4"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/info.svg" class="to-svg info-ico">
                <p>CARACTERISTICAS</p></a></li>
            <!--<li> <a data-toggle="pill" href="#option2"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/cash.svg" class="to-svg">
                <p>TARIFAS</p></a></li>
             <li> <a data-toggle="pill" href="#option3"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/t-cercha.svg" class="to-svg">
                <p>TIPO CERCHA</p></a></li>
            <li> <a data-toggle="pill" href="#option5"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/hands.svg" class="to-svg hands-ico">
                <p>CONDICIONES <br> DE NEGOCIACIÓN</p></a></li>
                -->
          </ul>
          <div class="tab-content"> 
            <div id="option1" class="content-ubicacion row tab-pane active">
              <div id="map" class="medio__mapa" data-map-lat="<?php echo $medio->ubicacion_latitud; ?>" data-map-lon="<?php echo $medio->ubicacion_longitud; ?>" data-map-img="<?php echo Yii::app()->request->baseUrl; ?>/images/site.png"></div>
            </div>
            <div id="option2" class="content-ubicacion row tab-pane">
              <div class="location-options col-xs">
                <?php echo $medio->tarifas; ?>
              </div>
            </div>
            <div id="option3" class="content-ubicacion row tab-pane">
              <div class="location-options col-xs">
                <?php echo $medio->tipo; ?>
              </div>
            </div>
            <div id="option4" class="content-ubicacion row tab-pane">
              <div class="location-options col-xs">
                <?php echo $medio->conceptos; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
      <?php $this->renderPartial('//layouts/_footer'); ?>