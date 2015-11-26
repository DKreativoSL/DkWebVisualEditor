				<div class="sidebar-nav">
					<ul class="nav nav-list accordion-group">
						<li class="nav-header">
 							<div class="pull-right popover-info">
 								<i class="glyphicon glyphicon-question-sign"></i> 
 								<div class="popover fade right">
 									<div class="arrow"></div> 
 									<h3 class="popover-title">Ayuda</h3> 
									<div class="popover-content">
	 									Puedes cambiar la configuración de las columnas cambiando el valor<br>
	 									Debe sumar 12 en total<br>
	 									Ejemplo 12x1: 1 1 1 1 1 1 1 1 1 1 1 1<br>
	 									Ejemplo 3x4: 4 4 4<br>
	 									Ejemplo 2x6: 6 6<br>
	 									Ejemplo 1x12: 12<br>
	 								</div>
 								</div> 
 							</div> 
							<i class="glyphicon-plus glyphicon"></i>  Maquetación
						</li>
						<li class="rows" id="estRows">
                        	<select id="selectColumnas">
                                <option id="">12</option>
	                            <option id="">6 6</option>
                                <option id="">8 4</option>
                                <option id="">4 8</option>
                                <option id="">4 4 4</option>
                                <option id="">6 3 3</option>
                                <option id="">3 3 6</option>
                                <option id="">3 3 3 3</option>
                            	<option id="">2 2 2 2 2 2</option>
                            </select>                        
							<div class="lyrow">
								<a href="#close" class="remove label label-danger"><i class="glyphicon-remove glyphicon"></i></a>
								<span class="drag label label-default "><i class="glyphicon glyphicon-move"></i></span>
								<div class="preview"><input id="nColumnas" type="text" value="12" placeholder="Numero de columnas" class="form-control"></div>
								<div class="view">
									<div class="row">
										<div class="col-md-12 column"></div>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<ul class="nav nav-list accordion-group">
						<li class="nav-header">
							<i class="glyphicon glyphicon-plus"></i> Modulos
 							<div class="pull-right popover-info">
 								<i class="glyphicon glyphicon-question-sign "></i> 
 								<div class="popover fade right"><div class="arrow"></div> 
 									<h3 class="popover-title">Ayuda</h3> 
 									<div class="popover-content">
 										Listado de modulos disponibles<br>
 										Arrastrar a una columna
									</div>
								</div> 
 							</div>
						</li>
						<li class="boxes" id="elmBase">
							<?php include('objetos.php'); ?>
						</li>
					</ul>
				</div>