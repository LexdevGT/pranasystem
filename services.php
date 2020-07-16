<?php
	session_start();
	date_default_timezone_set('America/Guatemala');
	require_once('connect.php');

	if(isset($_POST['option'])){
		$option = $_POST['option'];

		switch ($option) {
			case 'saber_si_entra':
				saberSiEntra();
				break;
		}
	}

	function saberSiEntra(){
		global $conn;
		$jsondata = array();
		$error 	  = '';
		$message  = '';
		$usuario  = $_POST['putito'];
		$c 		  = $_POST['clave'];
		
		$query = "SELECT count(*) c
					FROM users
					WHERE email = '$usuario'
					AND pass = MD5('$c')
					";

		$resultado = $conn -> query($query);
		$row_resultado = $resultado -> fetch_array();
		if($row_resultado['c'] > 0){
			$message = 'Bienvenido putito!';
		}else{
			$error = 'La andas cagando!';
		}



		$jsondata['message'] 	= $message;
		$jsondata['error'] 		= $error;
		echo json_encode($jsondata);
	}
?>