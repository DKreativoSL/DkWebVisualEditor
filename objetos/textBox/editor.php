
<!--
ULTIMA NOTICIA
-->
<div class="box box-element">
		<a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
	<span class="drag label label-default"><i class="glyphicon glyphicon-move"></i></span>
	<span class="configuration">
		<!-- CONFIGURACION -->
        <select nombre = "ultima_noticia" tipo = "noticia_basica" campos="1,1,1,1,1,1,1,1">
            <option value="nuevaSeccion">Nueva secci�n noticia</option>
            <?php traeSecciones(); ?>
        </select>

	</span>
	<div class="preview">Caja de texto</div>
	<div class="view objeto">
   		<input type="text" class ="form-control"/>
	</div>
</div>