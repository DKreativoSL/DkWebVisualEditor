<!--
	contenido estático, selección de una publicación
-->
<div class="box box-element">
	<a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
	<span class="drag label label-default"><i class="glyphicon glyphicon-move"></i></span>
	<span class="configuration">
		<!-- CONFIGURACION -->
		<select nombre = "contenido_estatico" tipo = "publicacion">
            <option value="nuevaPublicacion">Nueva publicacion</option>
            <?php traePublicaciones(); ?>
        </select>
	</span>
	<div class="preview">Ejemplo HTML</div>
	<div class="view objeto">
		<div class="jumbotron" contenteditable="true">
			<h2>Hello, world!</h2>
			<p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
			<p><a class="btn btn-primary btn-large" href="#">Learn more</a></p>
		</div>
	</div>
</div>