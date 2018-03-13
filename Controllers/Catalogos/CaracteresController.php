<?php  

namespace React\Backend\Controllers\Catalogos;

use React\Backend\Models\Catalogos\Caracteres;

use React\Backend\Controllers\TwigController;


class CaracteresController extends TwigController{

	private $moduleName = 'Caracteres';
	private $js = 'caracteres';

	public function index(){

		$_SESSION['moduleName'] = $this->moduleName;
		echo $this->render('/Catalogos/index.twig',[
			'js' => $this->js
		]);
	}

	public function get_registers(){

		echo json_encode(Caracteres::all());
	}
}
