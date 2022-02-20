<?PHP

namespace MVC;

use ArrayObject;

class Router{

    public $urlGET  = [];
    public $urlPOST = [];

    public function get( String $url, $fn ){
        $this->urlGET[$url] = $fn;
    }
    public function post( String $url, $fn ){
        $this->urlPOST[$url] = $fn;
    }

    public function comprobarRutas(){


        $rutaActual = $_SERVER['REQUEST_URI'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];

        if( $method === "GET"){
            $fn = $this->urlGET[$rutaActual] ?? false;
        }else { 
            $fn = $this->urlPOST[$rutaActual] ?? false;
        }

        if( $fn ){
            // Exist url
            call_user_func($fn, $this);
            return;
        }else{
            echo 'Ruta no encontrada';
            return;
        }
        
    }

    public function render( $dir, $arg = []){

        foreach( $arg as $key => $value){
            $$key = $value;
        }

        // ob_start(); // Inicio guardar memoria
        include __DIR__ .  "/views/$dir.php";
        // $contenido =  ob_get_clean();
   
    }
}