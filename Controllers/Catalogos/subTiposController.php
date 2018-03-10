<?php  

namespace React\Backend\Controllers\Catalogos;

use React\Backend\Models\Catalogos\SubTipos;

class SubTiposController {

	private $directory = './react/frontend/templates/Catalogos/SubTipos/';
	private $moduleName = 'Sub-Documentos';

	public function index($app){

		$_SESSION['moduleName'] = $this->moduleName;
		$app->render($this->directory.'index.html');
	}

	public function get_registers($page){

		$registers = SubTipos::skip(8 * ($page - 1))
					->orderBy('idSubTipoDocumento', 'asc')
                    ->take(8)
                    ->get();

		echo json_encode($registers);
	}
	
	public function get_pages(){


		$pagination = ceil(SubTipos::all()->count() / 8);
		$pages = range(0,$pagination-1);
		echo json_encode($pages);

	}
}
