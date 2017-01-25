<body>
  <?php $this->renderPartial('//layouts/_menu-left'); ?>
  <div class="content">
    <div class="line-vertical"></div>
    <?php $this->renderPartial('//layouts/_menu'); ?>
    <div class="title-section wow fadeInRight">
      <h1>CONTACTO</h1>
      <div class="line-green"></div>
    </div>
    <div class="text-section">
      <p>Nos encantaría trabajar con usted. Déjenos sus datos y en breve un asesor se pondrá en contacto.</p>
    </div>
    <div class="contact">
      <div class="content-footer">
        <div class="head-footer"><img src="images/icon-call.png">
          <p>CONTÁCTENOS</p>
        </div>
        <div class="line-footer"></div>
      </div>
      <form class="form-2">
        <div class="top-form">
          <input type="text" placeholder="Nombre" required>
          <input type="phone" placeholder="Teléfono" required>
          <input type="email" placeholder="Correo" required>
        </div>
        <div class="bottom-form">
          <textarea type="text" placeholder="Comentario" required></textarea>
        </div>
        <div class="btn-send">
          <button>Enviar</button>
        </div>
      </form>
    </div>
    <div class="content-social row center-xs middle-xs">
      <div class="social-contact col-xs"><a href="#"><img src="images/icon-twitter.png" class="social-icon-contact"></a><a href="#"><img src="images/icon-face.png" class="social-icon-contact"></a></div>
    </div>
    <div class="row center-xs middle-xs content-social">
      <div class="text-contact col-xs"><strong>Correos</strong>
        <p>mediossobremedios@hotmail.com <br> metropolisequipamientosltda@hotmail.com</p><strong>Teléfonos</strong>
        <p>310 4568732 - 3456233 </p>
        <p>Boyacá, Colombia</p>
      </div>
    </div>
  </div>