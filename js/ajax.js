function __ajax_BP(_url,_data,_loadarea){
	$.ajax({
		type: 'POST',
		url: _url,
		data: _data
	})
	.done(function(response) {
		//alert('cargando respuesta \n'+response);
		$(_loadarea).html(response);
	})
	.fail(function() {
		alert('js-error: hubo un error al intentar cargar los datos');
	});
}
function load_views(view_name, load_area_id) {
	$(load_area_id).empty();
	$(load_area_id).load(view_name);
}