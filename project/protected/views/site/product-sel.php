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
      <div class="section-content row">
        <div class="search">
          <ul>
            <li>Buscar por zona</li>
            <li class="options-rbtn">
              <input id="r1" type="radio" name="group1" value="todos">
              <label for="r1"><span></span></label>
              <p>Todos</p>
              <input id="r2" type="radio" name="group1" value="centro">
              <label for="r2"><span></span></label>
              <p>Centro</p>
              <input id="r3" type="radio" name="group1" value="occidente">
              <label for="r3"><span></span></label>
              <p>Occidente</p>
              <input id="r4" type="radio" name="group1" value="sugamuxi">
              <label for="r4"><span></span></label>
              <p>Sugauxi</p>
              <input id="r5" type="radio" name="group1" value="tundama">
              <label for="r5"><span></span></label>
              <p>Tundama</p>
              <input id="r6" type="radio" name="group1" value="ricaurte">
              <label for="r6"><span></span></label>
              <p>Ricaurte</p>
            </li>
            <li><a href="product-sel.html" class="btn-search">Buscar</a></li>
            <li><a href="product.html" class="btn-back">
                <p>Volver</p><img src="images/icon-back.png"></a></li>
          </ul>
        </div>
        <div class="col-md-6 col-xs-12">
          <div class="map-boy-location"><img src="images/map-boy-center.svg"></div>
        </div>
        <div class="col-md-6 col-xs-12">
          <div class="data-products">
            <h1>ZONA CENTRO</h1>
            <ul>
              <li>
                <p>Tunja  Sector Viaducto Circunvalar</p><a href="#"> <span>Ver mas +</span></a>
              </li>
              <li>
                p Tunja  Sector Viaducto Circunvalar
                a(href="#") 
                    span Ver mas +
              </li>
              <li>
                <p>Tunja  Sector Viaducto Circunvalar</p><a href="#"> <span>Ver mas +</span></a>
              </li>
              <li> 
                <p>Tunja  Sector Viaducto Circunvalar</p><a href="#"> <span>Ver mas +</span></a>
              </li>
              <li>
                <p>Tunja  Sector Viaducto Circunvalar</p><a href="#"> <span>Ver mas +</span></a>
              </li>
              <li> 
                <p>Tunja  Sector Viaducto Circunvalar</p><a href="#"> <span>Ver mas +</span></a>
              </li>
              <li>
                <p>Tunja  Sector Viaducto Circunvalar</p><a href="#"> <span>Ver mas +</span></a>
              </li>
              <li> 
                <p>Tunja  Sector Viaducto Circunvalar</p><a href="#"> <span>Ver mas +</span></a>
              </li>
              <li>
                <p>Tunja  Sector Viaducto Circunvalar</p><a href="#"> <span>Ver mas +</span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $this->renderPartial('//layouts/_footer'); ?>