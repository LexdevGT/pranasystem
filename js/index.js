//alert('hola');

$('#ingreso').click(function(){
	revisarIngreso();
});

function revisarIngreso(){
	var u = $('#user').val();
	var p = $('#pass').val();

	alert('Usuario: ' + u + ' Contra: ' + p);
}