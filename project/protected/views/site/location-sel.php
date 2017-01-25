
<body>
  <div id="wrapper">
    <?php $this->renderPartial('//layouts/_menu-left'); ?>
    <div class="content smart">
      <div class="line-vertical"></div>
       <?php $this->renderPartial('//layouts/_menu'); ?>
      <div class="title-section">
        <h1 class="wow fadeInRight">UBICACIÓN</h1>
        <div class="line-green wow fadeInRight"></div>
      </div>
      <h1 class="title-red">ZONA CENTRO</h1>
      <div class="row around-xs"> 
        <div class="map-boy-location wow fadeIn"><img src="images/map-boy.svg" class="map to-svg"></div>
        <div class="location-options col-xs">
          <div class="location-option-content">
            <p class="wow fadeInRight">Tunja <br> Sector Viaducto</p><a href="product-sel.html" class="view wow fadeInRight"><img src="images/mas.svg">
              <p>Ver</p></a>
          </div>
          <div class="location-option-content">
            <p class="wow fadeInRight">Tunja <br>Av. Circunvalar <br>Calle 17</p><a href="#" class="view wow fadeInRight"><img src="images/mas.svg">
              <p>Ver</p></a>
          </div>
          <div class="location-option-content">
            <p class="wow fadeInRight">Tunja <br> Sector Viaducto <br>Cincunvalar</p><a href="#" class="view wow fadeInRight"><img src="images/mas.svg">
              <p>Ver</p></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $this->renderPartial('//layouts/_footer'); ?>