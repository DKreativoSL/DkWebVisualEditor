	function removeElm() {
		$(".demo").on("click", ".remove", function(t) {
			t.preventDefault();
			$(this).parent().remove();
			!$(".demo .lyrow").length > 0 && clearDemo();
		});
	}
	
	function clearDemo() {
		$(".demo").empty();
	}
	
	function configurationElm(t, e) {
		
		$(".demo").on("click", ".configuration > a", function(t) {
			t.preventDefault();
			var e = $(this).parent().next().next().children();
			$(this).toggleClass("active");
			e.toggleClass($(this).attr("rel"));
		});
		
		$(".demo").on("click", ".configuration .dropdown-menu a", function(t) {
			t.preventDefault();
			var e = $(this).parent().parent();
			var i = e.parent().parent().next().next().children();
			e.find("li").removeClass("active"), $(this).parent().addClass("active");
			var n = "";
			e.find("a").each(function() {
				n += $(this).attr("rel") + " ";
			});
			e.parent().removeClass("open");
			i.removeClass(n);
			i.addClass($(this).attr("rel"));
		});
	}
	
	function gridSystemGenerator() {
		var t = 0;
		var e = "";
		var i = !1;
		var n = $("#nColumnas").val().split(" ", 12);
		$.each(n, function(n, s) {
			i || (parseInt(s) <= 0 && (i = !0), t += parseInt(s), e += '<div class="col-md-' + s + ' column"></div>');
		}), 12 != t || i ? $("#nColumnas").parent().prev().hide() : ($("#nColumnas").parent().next().children().html(e), $("#nColumnas").parent().prev().show());
	}
	
	function muestraPrevio(){	
			$("body").removeClass("edit");
			$("body").addClass("devpreview sourcepreview");
			removeMenuClasses();
			$(this).addClass("active");
			return;
		}
	
	function removeMenuClasses() {
		$("#menu-layoutit li button").removeClass("active");
	}
	var estructura;
	//var html ="";
	//var selectes = 0;
	
	function saveHtml() {
		estructura = "";
		recorreObjetoHtml($("#contenido"))

		//busco las llaves que se unen para separarlas por una , 
		estructura = estructura.replace(new RegExp("}{","g"), "},{");
		estructura = estructura.replace(new RegExp("column","g"), "");
		estructura = estructura.replace(new RegExp("ui-sortable","g"), "");		
		estructura = estructura.replace(new RegExp("  ","g"), " ");				
		
		console.log(estructura);
		}


	function recorreObjetoHtml(objeto)
	{		
		$(objeto).children().each(function (index) 
		{
			//console.log(" Elemento > "+ $(this).prop('tagName') + " - " + $(this).prop("class"));
			//console.log($(this).prop("tagName"));
			//si algún hijo tiene la clase row, column vuelvo a i
			
			if ($(this).hasClass("row"))			
			{
				estructura += '<div class="row">';
				recorreObjetoHtml(this);
				estructura += '</div>';
			}else if ($(this).hasClass("column"))
			{
				estructura += '<div class="'+ $(this).prop("class") + '">';
				recorreObjetoHtml(this);
				estructura += '</div>';
			}else if ($(this).hasClass("objeto"))
			{
				estructura += $(this).html();
			}else if ($(this).prop('tagName') == "DIV" || $(this).prop('tagName') == "SPAN")
			{
				recorreObjetoHtml(this);
				//console.log($(this).prop("class"));
			}				
		})
 	}
	
	function saveDkWeb() {
		//html ="";
		//selectes = 0;
		//columna = 0;
		//fila = 0;
		//arbol = 0;
		
		estructura = '{"clase":"contenido", "contenido":[';

		//Recorro todos los hijos
		recorreObjeto($("#contenido"));

		estructura += ']}';

		//busco las llaves que se unen para separarlas por una , 
		estructura = estructura.replace(new RegExp("}{","g"), "},{");
		estructura = estructura.replace(new RegExp("column","g"), "");
		estructura = estructura.replace(new RegExp("ui-sortable","g"), "");		
		
		console.log(estructura);
	}

	function recorreObjeto(objeto)
	{		
		$(objeto).children().each(function (index) 
		{
			//console.log(" Elemento > "+ $(this).prop('tagName') + " - " + $(this).prop("class"));
			//console.log($(this).prop("tagName"));
			//si algún hijo tiene la clase row, column vuelvo a i
			if ($(this).hasClass("row"))
			{   				
				estructura += '{"clase":"row", "contenido":[';
				recorreObjeto(this);
				estructura += ']}';
			}else
			if ($(this).hasClass("column"))
			{
				estructura += '{"clase":"'+ $(this).prop("class") + '", "contenido":[';
				recorreObjeto(this);
				estructura += ']}';
				
			}else if ($(this).prop("tagName") == "SELECT")
			{
				estructura += '{"tipo":"'+ $(this).attr('tipo') + '", "nombre":"' + $(this).attr('nombre') + '", "valor":" ' + $(this).val() + '", "campos":"'+ $(this).attr('campos') + '"}';
				
			}else if ($(this).prop('tagName') == "DIV" || $(this).prop('tagName') == "SPAN")
			{
				recorreObjeto(this);
				//console.log($(this).prop("class"));
			}				
		})
 	}

	$(document).ready(function() {
		
		$("#selectColumnas").change(function(e) {
			$("#nColumnas").val($("#selectColumnas").val());
			gridSystemGenerator();
		});
		$("#nColumnas").keyup(function(e) {
			gridSystemGenerator();        
		});
	
		$("h3").on('click',function() {
			alert('clickH3');
			if ($(this).attr("contentEditable") == "true") {
				alert('hola');
			}
		});
		
		$("body").css("min-height", $(window).height() - 90);
		$(".demo").css("min-height", $(window).height() - 130);
		
		//Creamos el sortable de las columnas
		$(".demo, .demo .column").sortable({
			connectWith: ".column",
			opacity: .35,
			handle: ".drag"
		});
		
		//Drag maquetacion
		$(".sidebar-nav .lyrow").draggable({
			connectToSortable: ".demo",
			helper: "clone",
			handle: ".drag",
			drag: function(t, e) {
				e.helper.width(600);
			},
			stop: function(t, e) {
				$(".demo .column").sortable({				
					opacity: .35,
					connectWith: ".column",				
				});
				
			}
		});
		
		//Drag Modulos
		$(".sidebar-nav .box").draggable({		
			connectToSortable: ".column",
			helper: "clone",
			handle: ".drag",
			drag: function(t, e) {
				e.helper.width(500);
			}
		});
		$("#edit").click(function() {
			$("body").removeClass("devpreview sourcepreview");
			$("body").addClass("edit");
			removeMenuClasses();
			$(this).addClass("active");
			return;
		});
		$("#clear").click(function(t) {
			t.preventDefault();
			clearDemo();
		});
		$("#saveDkWeb").click(function(t) {
			t.preventDefault();
			saveDkWeb();
		});
		$("#saveHtml").click(function(t) {
			t.preventDefault();
			saveHtml();
		});		
		$("#devpreview").click(function() {
			$("body").removeClass("edit sourcepreview");
			$("body").addClass("devpreview");
			removeMenuClasses();
			$(this).addClass("active");
			return
		});
		
		$("#sourcepreview").click(function() {
			muestraPrevio();
		});
		
		$(document).on("hidden.bs.modal", function(t) {
			$(t.target).removeData("bs.modal");
		});
		$(".btn-hire-header-builder").click(function() {
			ga("send", "event", "hire", "builder-header");
		});
		$(".nav-header").click(function() {
			$(".sidebar-nav .boxes, .sidebar-nav .rows").hide();
			$(this).next().slideDown();
		});
		
		removeElm();
		configurationElm();
		gridSystemGenerator();
	});