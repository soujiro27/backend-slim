<?php 
namespace Backend\Routes\Catalogos;

use React\Backend\Controllers\Catalogos\TextosController;
$controller = new TextosController();


$auth = function(){
	//echo "yes";
};



$app->group('/juridico',$auth,function() use($app,$controller){

	$app->get('/DoctosTextos',function() use ($controller){
		$controller->index();
	});

	$app->get('/DoctosTextos/Registers/:page',function($page) use ($controller){
		$controller->get_registers($page);
	});

	$app->get('/DoctosTextos/Pages',function() use ($controller){
		$controller->get_pages();
	});

});



?>