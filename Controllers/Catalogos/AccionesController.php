<?php  

namespace React\Backend\Controllers\Catalogos;

use React\Backend\Models\Catalogos\Acciones;

use React\Backend\Controllers\TwigController;

class AccionesController extends TwigController{

	private $moduleName = 'Acciones';
	private $js = 'acciones';


	public function index(){

		$_SESSION['moduleName'] = $this->moduleName;
		echo $this->render('/Catalogos/index.twig',[
			'js' => $this->js
		]);
	}

	public function get_registers(){

		echo json_encode(Acciones::all());
	}
}
