<?PHP 

require __DIR__ . "/../includes/app.php";

use Controllers\PaginasControllers;
use MVC\router;

$router = new Router();
// router$router
$router->get('/', [PaginasControllers::class, 'index']);




$router->comprobarRutas();