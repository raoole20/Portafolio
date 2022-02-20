<?PHP 
namespace Controllers;

use MVC\Router;

class PaginasControllers {
    
    public static function index( Router $router ){
        
        $router->render('index', [
            
        ]);
    }
}