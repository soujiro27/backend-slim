<?php 

namespace React\Backend\Routes\Api;

use React\Backend\Controllers\ApiController;

$controller = new ApiController();

 
$app->group('/juridico',function() use($app,$controller){
		
	$app->get('/Api/headerData',function() use ($app,$controller){
		
		$controller->headerData();
		
	});


		$app->get('/Api/Documentos',function() use ($controller){
		
		$controller->get_documentos();
		
	});


});



?>


