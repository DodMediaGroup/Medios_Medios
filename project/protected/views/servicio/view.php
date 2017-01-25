  <div id="wrapper" style="height: 100%;">
    <?php $this->renderPartial('//layouts/_menu-left'); ?>
    <div class="content smart">
      <div class="line-vertical"></div>
      <?php $this->renderPartial('//layouts/_menu'); ?>
      <div class="img-via wow fadeIn"><img style="height: 300px;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/imagen-valla-1.png" class="map to-svg"></div>
      <div class="title-section-about">
        <div class="wow fadeInRight line-green-red">
          <div class="line-red"></div>
          <div class="line-green"></div>
        </div>
        <h1 class="wow fadeIn"><?php echo $servicios->nombre ?></h1>
        <div class="wow fadeInRight line-green-red-down">
          <div class="line-green"></div>
          <div class="line-red"> </div>
        </div>
      </div>
      <div class="row start-xs metropolis-text middle-xs" style="margin-top: 20px">    
        <div class="col-xs-12 col-md-5 row center-xs"><img style="width: 50%;" src="../images/servicios/<?php echo $servicios->imagen ?>" alt=""></div>
    
        <div class="col-xs-12 col-md-7">
          <p><?php echo $servicios->descripcion ?></p>
          <div class="lines-title wow fadeInRight lines-aling">
            <div class="line-green"></div>
            <div class="line-red"> </div>
          </div>
        </div>
        <h1 style="margin-top: -125px;"><a style="right: 15px; position: absolute;" href="<?php echo $this->createUrl('/servicios') ?>" class="btn-back">
                <p style="color: #ed3136;font-size: 16px;">Volver</p><img style="height: 20px;width: 20px; padding: 0; position: absolute;top: 15px;left: -25px;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon-back.png"></a></h1>
      </div>
    </div>
  </div>
  <?php $this->renderPartial('//layouts/_footer'); ?>