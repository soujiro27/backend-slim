<?php 

namespace Backend\Routes\Catalogos;

use React\Backend\Controllers\Catalogos\SubTiposController;

$controller = new SubTiposController();

$auth = function(){
	//echo "yes";
};



$app->group('/juridico',$auth,function() use($app,$controller){

	$app->get('/SubTiposDocumentos',function() use ($app,$controller){
		$controller->index($app);
	});

	$app->get('/SubTiposDocumentos/Registers/:page',function($page) use ($controller){
		$controller->get_registers($page);
	});

	$app->get('/SubTiposDocumentos/Pages',function() use ($controller){
		$controller->get_pages();
	});

});



?>