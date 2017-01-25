<div class="page-heading">
    <h1>Administración medios</h1>
</div>

<div class="row">
    <div class="col-md-12">
		<div class="widget">
			<div class="widget-content">
				<div class="widget-header transparent">
					<div class="additional-btn">
						<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
					</div>
				</div>
				<div class="data-table-toolbar">
					<div class="row">
						<div class="col-md-8 col-md-offset-4">
							<div class="toolbar-btn-action">
								<a class="btn btn-success" href="<?php echo $this->createUrl('medios/create'); ?>"><i class="fa fa-plus-circle"></i> Add new</a>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="table-responsive">
					<form class='form-horizontal' role='form'>
						<table class="table table-striped table-bordered js-data-table" cellspacing="0" width="100%">
					        <thead>
					            <tr align="center">
									<th>#</th>
									<th>Estado</th>
									<th>Nombre</th>
									<th>Latitud</th>
									<th>Longitud</th>
									<th>Producto</th>
									<th>Zona</th>
									<th>Estado</th>
								</tr>
					        </thead>
					 
					        <tfoot>
					            <tr>
					               <th>#</th>
					               <th>Estado</th>
									<th>Nombre</th>
									<th>Latitud</th>
									<th>Longitud</th>
									<th>Producto</th>
									<th>Zona</th>
									<th>Estado</th>
					            </tr>
					        </tfoot>
					 
					        <tbody>
					            <?php
					            	foreach ($medios as $key => $medio) { ?>
										<tr>
											<td style="text-align:center;"><?php echo $key+1; ?></td>
											<td style="width:120px;">
												<div class="btn-group btn-group-xs">
													<a href="<?php echo $this->createUrl('medios/'.$medio->id); ?>" data-toggle="tooltip" title="Ver" class="btn btn-default"><i class="fa fa-external-link"></i></a>
													<a href="<?php echo $this->createUrl('medios/update/'.$medio->id); ?>" data-toggle="tooltip" title="Editar" class="btn btn-default"><i class="fa fa-edit"></i></a>
													<?php if($medio->estado == 1){ ?>
														<a href="<?php echo $this->createUrl('medios/estado')."/".$medio->id; ?>" data-toggle="tooltip" title="Ocultar" class="btn btn-default"><i class="fa fa-minus-circle"></i></a>
													<?php } else{ ?>
														<a href="<?php echo $this->createUrl('medios/estado')."/".$medio->id; ?>" data-toggle="tooltip" title="Mostrar" class="btn btn-default"><i class="fa fa-check"></i></a>
													<?php } ?>
													<a data-msj='¿Esta seguro de querer eliminar la entrada "<?php echo $medio->nombre; ?>"? Despues no podra recuperarla, recuerde que otra opción es dejarla oculta.' href="<?php echo $this->createUrl('medios/delete_medio')."/".$medio->id; ?>" data-toggle="tooltip" title="Eliminar" class="js-confirm btn btn-default"><i class="fa fa-power-off"></i></a>
												</div>
											</td>
											<td><?php echo $medio->nombre; ?></td>
											<td><?php echo $medio->ubicacion_latitud; ?></td>
											<td><?php echo $medio->ubicacion_longitud; ?></td>
											<td><?php echo $medio->producto0->nombre; ?></td>
											<td><?php echo $medio->zona0->nombre; ?></td>
											<td><span class="label label-<?php echo($medio->estado == 1)?"success":"warning" ?>"><?php echo ($medio->estado == 1)?'Activo':'Oculto'; ?></span></td>
										</tr>
									<?php }
								?>
					        </tbody>
					    </table>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>