//alert('hola');

$('#ingreso').click(function(){
	revisarIngreso();
});

function revisarIngreso(){
	var u = $('#user').val();
	var p = $('#pass').val();

	$.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "services.php",
        data: ({
            option: 'saber_si_entra',
            putito: u,
            clave: p                   
        }),
        dataType: "json",        
        success: function(r) {                                                       
            if(r.error == ''){
            	alert(r.message);
            }else{
            	alert(r.error);
            }
        }    
    }); 
	//alert('Usuario: ' + u + ' Contra: ' + p);
}