<!--
/********************************************
Baner Básico
*********************************************/
-->

<div class="box box-element" tipo="baner">
	<a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
	<span class="drag label label-default"><i class="glyphicon glyphicon-move"></i></span>
	<span class="configuration">
		<!-- CONFIGURACION -->
        <select tipo="baner_basico">
            <option value="nuevaSeccion">Nueva sección baner</option>
            <?php traeSecciones(); ?>
        </select>
	</span>
	<div class="preview">Baner de imágenes</div>
	<div class="view objeto">
		<div>
            <img class="img-responsive" width="100%" src="http://www.dkreativo.es/fuente/images/logoDkreativo_270x76.jpg" />
		</div>
	</div>
</div>