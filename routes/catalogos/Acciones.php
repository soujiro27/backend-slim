<?php 

namespace Backend\Routes\Catalogos;

use React\Backend\Controllers\Catalogos\AccionesController;

$controller = new AccionesController();

 /*use App\Controllers\AuthController;


$security = new AuthController();


$auth = function() use ($security,$app) {
	//$security->sesion($app);
	//$security->rol('CAT-ACCIONES',$app);
};
*/

$app->group('/juridico',function() use($app, $controller){
		
	$app->get('/Acciones',function() use ($controller){
		$controller->index();
	});

	$app->get('/Acciones/Registers',function() use ($controller){
		$controller->get_registers();
	});

});



?>