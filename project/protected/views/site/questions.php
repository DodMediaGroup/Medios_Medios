<body>
  <div id="wrapper">
    <?php $this->renderPartial('//layouts/_menu-left'); ?>
    <div class="content">
      <div class="line-vertical"></div>
     <?php $this->renderPartial('//layouts/_menu'); ?>
      <div class="title-section">
        <h1 class="wow fadeInRight">PREGUNTAS FRECUENTES</h1>
        <div class="line-green wow fadeInRight"></div>
      </div>
      <div class="content-question">
        <ol>
        <?php foreach ($preguntas as $key => $pregunta) {?>
               <li class="wow fadeIn">
                <?php echo  $pregunta->descripcion?>
          </li>
          <?php
        } ?>
        </ol>
      </div>
    </div>
  </div>
  <?php $this->renderPartial('//layouts/_footer'); ?>