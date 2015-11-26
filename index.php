<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="title" content="editor" />
		<meta name="keywords" content="" />
		<meta name="language" content="sp" />
		<title>editor</title>

		<!-- Fav and touch icons -->
		<meta name="theme-color" content="#ffffff">			    

		<link href="css/builder.css" rel="stylesheet">
		<script type="text/javascript" src="js/jQuery-2.1.4.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.10.3.min.js"></script>
		<script type="text/javascript" src="js/jquery-touch.js"></script>
  		<script type="text/javascript" src="js/builder.js"></script>
	</head>
	<body class="edit builder">
		<?php include('headerMenu.php'); ?>
		<div class="container-fluid">
			<div class="row">
				<?php include('sidebar.php'); ?>
                <div id="contenido" class="demo ui-sortable" style="min-height: 218px;">
                    <div  class="lyrow ui-draggable" style="display: block;">
                        <a href="#close" class="remove label label-danger"><i class="glyphicon-remove glyphicon"></i></a>
                        <span class="drag label label-default "><i class="glyphicon glyphicon-move"></i></span>
                        <div  class="preview"><input id="nColumnas" type="text" value="12" placeholder="Numero de columnas" class="form-control"></div>
                        <div  class="view">
                            <div class="row">
                           		<div class="col-md-12 column ui-sortable">
                                    <div class="lyrow ui-draggable" style="display: block;">
                                        <a href="#close" class="remove label label-danger"><i class="glyphicon-remove glyphicon"></i></a>
                                        <span class="drag label label-default "><i class="glyphicon glyphicon-move"></i></span>
                                        <div class="preview"><input type="text" value="12" placeholder="Numero de columnas" class="form-control"></div>
                                        <div class="view">
                                            <div class="row"><div class="col-md-12 column ui-sortable"></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>  		
	</body>
</html>
