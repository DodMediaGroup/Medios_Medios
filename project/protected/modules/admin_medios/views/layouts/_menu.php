<?php $path = explode("/",Yii::app()->request->pathInfo); ?>
<li>
	<a href='<?php echo $this->createUrl('index/') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'index')?'active':''):'active'; ?>">
		<i class='icon-home-3'></i>
		<span>Dashboard</span>
	</a>
</li>
<!--<li class='has_sub'>
	<a href='#'>
		<i class='icon-picture-2'></i>
		<span>Paginas</span>
		<span class="pull-right">
			<i class="fa fa-angle-down"></i>
		</span>
	</a>
	<ul>
		<li>
			<a href='<?php echo $this->createUrl('paginas/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'paginas')?'active':''):''; ?>">
				<i class='icon-layout'></i>
				<span>Paginas</span>
			</a>
		</li>
		<li>
			<a href='<?php echo $this->createUrl('items/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'items')?'active':''):''; ?>">
				<i class='icon-layout'></i>
				<span>Items Quíenes Somos</span>
			</a>
		</li>
	</ul>
</li>
-->
<li>
	<a href='<?php echo $this->createUrl('productos/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'productos')?'active':''):''; ?>">
		<i class='glyphicon glyphicon-shopping-cart'></i>
		<span>Productos</span>
	</a>
</li>
<li>
	<a href='<?php echo $this->createUrl('servicios/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'servicios')?'active':''):''; ?>">
		<i class='icon-bell-1'></i>
		<span>Servicios</span>
	</a>
</li>
<li>
	<a href='<?php echo $this->createUrl('medios/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'medios')?'active':''):''; ?>">
		<i class='icon-videocam-1'></i>
		<span>Medios</span>
	</a>
</li>

<li>
	<a href='<?php echo $this->createUrl('clientes/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'clientes')?'active':''):''; ?>">
		<i class='icon-users'></i>
		<span>Clientes</span>
	</a>
</li>
<li>
	<a href='<?php echo $this->createUrl('preguntas/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'preguntas')?'active':''):''; ?>">
		<i class='glyphicon glyphicon-question-sign'></i>
		<span>Preguntas Frecuentes</span>
	</a>
</li>
<li class='has_sub'>
	<a href='#'>
		<i class='icon-picture-2'></i>
		<span>Multimedia</span>
		<span class="pull-right">
			<i class="fa fa-angle-down"></i>
		</span>
	</a>
	<ul>
		<li>
			<a href='<?php echo $this->createUrl('galleries/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'galleries')?'active':''):''; ?>">
				<span>Galerias</span>
			</a>
		</li>
		<li>
			<a href='<?php echo $this->createUrl('imagesbank/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'imagesbank')?'active':''):''; ?>">
				<span>Banco de Imagenes</span>
			</a>
		</li>
	</ul>
</li>