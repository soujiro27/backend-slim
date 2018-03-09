<?php  
namespace React\Backend\Controllers;

use React\Backend\Models\Api\Notificaciones;


class ApiController {

	
	#Regresa todos los datos del Header
	public function headerData(){

		$notificaciones = $this->get_user_notification($_SESSION['idUsuario']);



		$response = array(
			'cuentaPublica' => $_SESSION['sCuentaActual'],
			'modulo' => $_SESSION['moduleName'],
			'notificaciones' => $notificaciones->count(),
			'usuario' => $_SESSION['sUsuario'],
			'idCuentaActual' => $_SESSION['idCuentaActual']
		);

		echo json_encode($response);
	}

	
	#Pide las Notificaciones por el idUsuario
	public function get_user_notification($idUsuario){

		$notificaciones = Notificaciones::where('idUsuario',"$idUsuario")->get();
		return $notificaciones;

	}

}