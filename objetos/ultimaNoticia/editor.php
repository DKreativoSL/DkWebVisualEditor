
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
	<div class="preview">Ejemplo Noticia</div>
	<div class="view objeto">
		<div>
		    <h1>titulo</h1>
		    <p style="text-indent: 30px; padding-top: 15px;">
				Ejemplo de noticia<br />
                y aqu� va m�s texto blablabla. y aqu� va m�s texto blablabla. y aqu� va m�s texto blablabla. y aqu� va m�s texto blablabla. y aqu� va m�s texto blablabla. y aqu� va m�s texto blablabla. 
		    </p>
		</div>
	</div>
</div>