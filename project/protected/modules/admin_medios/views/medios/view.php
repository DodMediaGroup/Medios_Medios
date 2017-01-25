
<div class="row" style="margin-top: 60px;">
	<div class="col-sm-3">
		<!-- Begin user profile -->
		<div class="text-center user-profile-2">
			<h4><?php echo $model->nombre; ?></h4>
		</div><!-- End div .box-info -->
		<!-- Begin user profile -->
	</div><!-- End div .col-sm-3 -->
	<div class="col-sm-9">
		<div class="widget widget-tabbed">
			<!-- Nav tab -->
			<ul class="nav nav-tabs nav-justified">
			  <li class="active"><a href="#about" data-toggle="tab"><i class="fa fa-tags"></i> Datos</a></li>
			  <li class=""><a href="#article" data-toggle="tab"><i class="fa fa-tags"></i> Entrada</a></li>
			</ul>
			<!-- End nav tab -->

			<!-- Tab panes -->
			<div class="tab-content">
				
				<!-- Tab about -->
				<div class="tab-pane animated fadeInRight active" id="about">
					<div class="user-profile-content">
						<div class="row">
							<div class="col-sm-12">
								<h2><?php echo $model->nombre; ?></h2>
							</div>
						</div>
					</div><!-- End div .user-profile-content -->
				</div><!-- End div .tab-pane -->
				<!-- Tab about -->
				<div class="tab-pane animated fadeInRight" id="article">
					<div class="user-profile-content">
						<div class="row">
							<div class="col-sm-6">
							<h4><strong>Latitud</strong></h4>
								<?php echo $model->ubicacion_latitud; ?>
							</div>
							<div class="col-sm-6">
							<h4><strong>Longitud</strong></h4>
								<?php echo $model->ubicacion_longitud; ?>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
							<h4><strong>Caracteristicas</strong></h4>
								<?php echo $model->conceptos; ?>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
							<h4><strong>Producto</strong></h4>
								<?php echo $model->producto0->nombre; ?>
							</div>
							<div class="col-sm-6">
							<h4><strong>Zona</strong></h4>
								<?php echo $model->zona0->nombre; ?>
							</div>
						</div>
					</div><!-- End div .user-profile-content -->
				</div><!-- End div .tab-pane -->
				<!-- End Tab about -->
			</div><!-- End div .tab-content -->
		</div><!-- End div .box-info -->
	</div>
</div>