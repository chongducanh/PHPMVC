<?php 
class BaseController
{
    protected $controller = "Game";
    protected $method="GameList";
    protected $params = [];
    function __construct()
    {
        $arr = $this->ProcessUrl();
        if (file_exists("/src/Controller/" . $arr[0] . ".php")) {
            $this->controller = $arr[0];
            unset($arr[0]);
            require_once "/src/Controller/" . $this->controller . ".php";
            // require_once "/src/View/OriginView.php";
            $this->controller = new $this->controller;

            if (isset($arr[1])) {
                if (method_exists($this->controller, $arr[1])) {
                    $this->method = $arr[1];
                }
                unset($arr[1]);
            }
            $this->params = $arr ? array_values($arr) : [];
            // print_r( $this->params);
            call_user_func_array([$this->controller, $this->method], $this->params);
        }
        else{
            require "/src/PNF.php";
        }
        
    }

    function ProcessUrl()
    {
        if (isset($_GET['url'])) {
            return explode("/", filter_var(trim($_GET['url'], "/")));
        }
    }
}


?>