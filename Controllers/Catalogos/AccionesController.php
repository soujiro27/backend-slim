<?php  

namespace React\Backend\Controllers\Catalogos;


class AccionesController {

	private $directory = './react/frontend/templates/Catalogos/Acciones/';
	private $moduleName = 'Acciones';

	public function index($app){

		$_SESSION['moduleName'] = $this->moduleName;
		$app->render($this->directory.'index.html');
	}
}
