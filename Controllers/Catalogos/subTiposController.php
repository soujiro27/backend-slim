<?php  

namespace React\Backend\Controllers\Catalogos;


use React\Backend\Controllers\TwigController;


use React\Backend\Models\Catalogos\SubTipos;

class SubTiposController  extends TwigController{

	private $moduleName = 'Sub-Documentos';
	private $js = 'subtipos';

	public function index(){

		$_SESSION['moduleName'] = $this->moduleName;
		echo $this->render('/Catalogos/index.twig',[
			'js' => $this->js
		]);
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

	public function render_new_register(){
		
		$_SESSION['moduleName'] = $this->moduleName;
		echo $this->render('/Catalogos/subTipos/create.twig',[
			'js' => $this->js
		]);
	}
}
