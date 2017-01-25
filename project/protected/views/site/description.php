<body>
  <div id="wrapper">
    <?php $this->renderPartial('//layouts/_menu-left'); ?>
    <div class="content smart">
      <div class="line-vertical"></div>
      <?php $this->renderPartial('//layouts/_menu'); ?>
      <div class="title-section">
        <h1 class="wow fadeInRight">MEDIOS</h1>
        <div class="line-green wow fadeInRight"> </div>
      </div>
      <div class="image-other"></div>
      <div class="section-content">
        <div class="title">
          <h1 class="red">VALLAS / TUNJA BOGOTÁ<span> Sector viaduto circunvalar</span><a href="product.html">
              <p>Volver</p><img src="images/icon-back.png"></a></h1>
        </div>
        <div class="section-options row around-xs">
          <ul class="col-xs type nav-pills">
            <li> <a data-toggle="pill" href="#option1"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/site.svg" class="js-img-to-svg">
                <p>UBICACIÓN</p></a></li>
            <li> <a data-toggle="pill" href="#option2"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/cash.svg" class="js-img-to-svg">
                <p>TARIFAS</p></a></li>
            <li> <a data-toggle="pill" href="#option3"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/t-cercha.svg" class="js-img-to-svg">
                <p>TIPO CERCHA</p></a></li>
            <li> <a data-toggle="pill" href="#option4"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/info.svg" class="js-img-to-svg info-ico">
                <p>CONCEPTOS</p></a></li>
            <li> <a data-toggle="pill" href="#option5"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/hands.svg" class="js-img-to-svg hands-ico">
                <p>CONDICIONES <br> DE NEGOCIACIÓN</p></a></li>
          </ul>
          <div class="tab-content"> 
            <div id="option1" class="content-ubicacion row tab-pane active">
              <div id="map"></div>
            </div>
            <div id="option2" class="content-ubicacion row tab-pane">
              <div class="location-options col-xs">
                <div class="location-option-content"><strong>PLAN DE UN MES</strong><br><span>1´600.000 + IVA</span></div>
                <div class="location-option-content"><strong>PLAN DE UN MES</strong><br><span>1´600.000 + IVA</span></div>
                <div class="location-option-content"><strong>PLAN DE UN MES</strong><br><span>1´600.000 + IVA</span></div>
              </div>
            </div>
            <div id="option3" class="content-ubicacion row tab-pane">
              <div class="location-options col-xs">
                <div class="location-option-content"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/esp-cercha.svg"></div>
              </div>
            </div>
            <div id="option4" class="content-ubicacion row tab-pane">
              <div class="location-options col-xs">
                <div class="location-option-content"><span> - Instalación <br> - Arrendamiento <br> - Perfecto Mantenimiento mientras la vigencia del contrato</span></div>
              </div>
            </div>
            <div id="option5" class="content-ubicacion row tab-pane">
              <div class="location-options col-xs">
                <div class="location-option-content"><span>- Legalización y firma de Orden de Servicios entre las partes.<br>- Pago mensual anticipado o acuerdo.<br>- Término del contrato 1-3-6-9-12 meses.</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $this->renderPartial('//layouts/_footer'); ?>