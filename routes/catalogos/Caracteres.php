<?php 
namespace Backend\Routes\Catalogos;

use React\Backend\Controllers\Catalogos\CaracteresController;

$controller = new CaracteresController();

$auth = function(){
	//echo "yes";
};



$app->group('/juridico',$auth,function() use($app,$controller){

	$app->get('/Caracteres',function() use ($controller){
		$controller->index();
	});

	$app->get('/Caracteres/Registers',function() use ($controller){
		$controller->get_registers();
	});

});



?>