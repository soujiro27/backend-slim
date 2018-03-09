<?php  

namespace React\Backend\Controllers\Catalogos;

use React\Backend\Models\Catalogos\Caracteres;

class CaracteresController {

	private $directory = './react/frontend/templates/Catalogos/Caracteres/';
	private $moduleName = 'Caracteres';

	public function index($app){

		$_SESSION['moduleName'] = $this->moduleName;
		$app->render($this->directory.'index.html');
	}

	public function get_registers(){

		echo json_encode(Caracteres::all());
	}
}
