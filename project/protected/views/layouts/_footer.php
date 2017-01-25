<footer class="principal-footer">
  <div class="footer-menu">
  <?php $facebook = GeneralValue::model()->findByPk(2); ?>
  <?php $twitter = GeneralValue::model()->findByPk(3); ?>
  <?php $direccion = GeneralValue::model()->findByPk(4); ?>
  <?php $telefonos = GeneralValue::model()->findByPk(5); ?>
  <?php $email = GeneralValue::model()->findByPk(6); ?>
    <div class="social"><a target="_blank" href="<?php echo $twitter->value; ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon-twitter.png" class="social-icon"/></a><a target="_blank" href="<?php echo $facebook->value; ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon-face.png" class="social-icon"/></a></div>
    <div class="text-footer-menu">
      <p><strong>Direcciónes:</strong></p>
      <p><?php echo $direccion->value; ?></p>
      <p><strong>Teléfonos:</strong></p>
      <p><?php echo $telefonos->value; ?></p>
      <p><strong>Email</strong></p>
      <p><?php echo $email->value; ?></p>
    </div>
  </div>
  <div class="footer bottom-xs">
    <div class="content-footer">
      <div class="head-footer"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon-call.png"/>
        <p>CONTÁCTENOS</p>
      </div>
      <div class="line-footer"></div>
    </div>
    <form class="form">
      <div class="left-form">
        <input type="text" placeholder="Nombre" required="required"/>
        <input type="phone" placeholder="Teléfono" required="required"/>
        <input type="email" placeholder="Correo" required="required"/>
      </div>
      <div class="right-form">
        <textarea type="text" placeholder="Comentario" required="required"></textarea>
      </div>
      <div class="btn-send">
        <button>Enviar</button>
      </div>
    </form>
  </div>
<!--mapa -->
</footer>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/gmap3/gmap3.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/bootstrap.min.js"></script>
<!--main -->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/wow/wow.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/owl-slide/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/medios.js"></script>
</body>
</html>