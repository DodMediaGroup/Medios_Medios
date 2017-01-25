<body>
  <div id="wrapper" style="height: 100%;">
    <?php $this->renderPartial('//layouts/_menu-left'); ?>
    <div class="content">
      <div class="line-vertical"></div>
      <?php $this->renderPartial('//layouts/_menu'); ?>
      <div class="title-section">
        <h1 class="wow fadeInRight"><?php echo $producto->nombre ?></h1>
        <div class="line-green wow fadeInRight"> </div>
      </div>
      <div class="section-content row">
        <div class="search">
          <form action="" method="POST">
            <ul class="row center-xs col-xs-11">
              <li class="title_search_zone">Buscar por zona</li>
              <li class="options-rbtn">
                <input id="r0" type="radio" name="zona" value="0" <?php echo ($zonaSelect == 0)?'checked="checked"':'' ?>>
                <label for="r0" class="icon-select-product"><span></span></label>
                <p>Todos</p>
              </li>
              <?php foreach ($zonas as $key => $zona) { ?>
                <li class="options-rbtn">
                  <input id="r<?php echo $key+1; ?>" type="radio" name="zona" value="<?php echo $zona->id; ?>" <?php echo ($zonaSelect == $zona->id)?'checked="checked"':'' ?>>
                  <label for="r<?php echo $key+1; ?>" class="icon-select-product"><span></span></label>
                  <p><?php echo $zona->nombre; ?></p>
                </li>
              <?php } ?>
              <li>
                <button type="submit" class="btn-search">
                  Buscar
                </button></li>
              <li><a href="<?php echo $this->createUrl('/servicios') ?>" class="btn-back">
                  <p>Volver</p><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon-back.png"></a></li>
            </ul>
          </form>
        </div>
        <div class="col-lg-6 col-sm-12 col-xs-12 row center-xs">
          <div class="col-xs-10 map-boy-location"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/map-boy.svg" class="to-svg"></div>
        </div>
        <div class="col-lg-6 col-sm-12 col-xs-12 row center-xs">
          <div class="col-xs-10 data-products">
            <?php foreach ($medios as $key => $itemZona) { ?>
              <?php if(count($itemZona['medios']) > 0){ ?>
                <h1><?php echo MyMethods::myStrtoupper($itemZona['zona']->nombre); ?></h1>
                <ul>
                  <?php foreach ($itemZona['medios'] as $key => $medio) { ?>
                    <li class="row between-xs middle-xs"> 
                      <p class="col-xs-8"><?php echo $medio->nombre ?></p>
                      <a class="col-xs-4" href="<?php echo $this->createUrl('/medio/'.MyMethods::normalizarUrl($medio->id.'_'.$medio->nombre)); ?>"> <span>Ver mas +</span></a>
                    </li>
                  <?php } ?>
                </ul>
              <?php } ?>
            <?php } ?>
          </div>
        </div>
      </div>

      <?php if($zonaMap != null){ ?>
        <style>
          .map-boy-location #<?php echo $zonaMap->map; ?>{
            fill: #ED3136 !important;
          }
        </style>
      <?php } ?>
      </div>
    </div>
<?php $this->renderPartial('//layouts/_footer'); ?>
