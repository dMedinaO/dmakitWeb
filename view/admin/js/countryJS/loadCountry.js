$(window).on('load', function() {

	listar();
	eliminar();
	//editar();
});

$.fn.DataTable.ext.pager.numbers_length = 5;

var listar = function(){
	var t = $('#users').DataTable({
		"responsive": true,
		"destroy":true,
		"ajax":{
			"method":"POST",
			"url": "../php/country/showData.php"
		},
		"columns":[
			{"data":"idcountry"},
			{"data":"name"},
			{"data":"createdCountry"},
			{"data":"modifiedCountry"},
			{"defaultContent": "<button type='button' class='editar btn btn-primary' data-toggle='modal' data-target='#myModalEditar'><i class='fa fa-pencil-square-o'></i></button>	<button type='button' class='eliminar btn btn-danger'><i class='fa fa-trash-o'></i></button>"}
		]
	});

	obtener_id_eliminar("#users tbody", table);
	//obtener_data_editar("#users tbody", table);
}

var obtener_id_eliminar = function(tbody, table){
	$(tbody).on("click", "button.eliminar", function(){
		var data = table.row( $(this).parents("tr") ).data();
		var idcategoryReport = $("#frmEliminar #idcountry").val( data.idcountry );
	});
}


var obtener_data_editar = function(tbody, table){
	$(tbody).on("click", "button.editar", function(){
		var data = table.row( $(this).parents("tr") ).data();
		var name = $("#frmEditar #name").val(data.nameCategory);
		var description = $("#frmEditar #desc").val(data.descriptionCategory);
		var idcategoryReport = $("#frmEditar #idcategoryReport").val( data.idcategoryReport );

	});
}
