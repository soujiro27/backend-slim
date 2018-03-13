<?php  

namespace React\Backend\Controllers\Catalogos;

use React\Backend\Models\Catalogos\Textos;

use React\Backend\Controllers\TwigController;

class TextosController extends TwigController	{

	private $moduleName = 'Textos Juridico';
	private $js = 'textos';

	public function index(){

		$_SESSION['moduleName'] = $this->moduleName;
		echo $this->render('/Catalogos/index.twig',[
			'js' => $this->js
		]);
	}

	public function get_registers($page){

		$registers = Textos::skip(4 * ($page - 1))
					->orderBy('idDocumentoTexto', 'asc')
                    ->take(4)
                    ->get();

		echo json_encode($registers);
	}
	
	public function get_pages(){

		$pagination = ceil(Textos::all()->count() / 4);
		$pages = range(0,$pagination-1);
		echo json_encode($pages);

	}
}
