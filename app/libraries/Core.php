<?php

/**
 *  App Core class
 * Creates URL and loads controller 
 * URL FORMAT  /controller/method/params
 */
class Core
{
    protected $currentController = 'Home';
    protected $currentMethod = 'index';
    protected $params = [];
    
    public function __construct()
    {
        $url = $this->geturl();

        // Look for controllers
        if (false === file_exists('../app/controllers/' . ucwords($url[0] ?? '') . '.php')) {
            echo 'URL não encontrada!';
            return;
        }

        // Set controller variables
        $this->currentController = ucwords($url[0] ?? '');
        // unset 0 index
        unset($url[0]);

        // Require controllers
        require_once '../app/controllers/' . $this->currentController . '.php';
        $this->currentController = new $this->currentController;

        // Check
        if (isset($url[1])) {
            // Check if method exists in controller
            if (false === method_exists($this->currentController, $url[1] ?? '')) {
                echo 'Ação da URL não encontrada!';
                return;
            }

            $this->currentMethod = $url[1] ?? '';
            unset($url[1]);
        }

        // Get Params
        $this->params = $url ? array_values($url) : [];

        // Call a callback with array of params
        call_user_func_array([
            $this->currentController,
            $this->currentMethod
        ], $this->params);
    }

    public function geturl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
