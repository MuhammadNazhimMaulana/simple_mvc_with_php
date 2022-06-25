<?php 

class App {

    // Properti penentu untuk yang default
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    
    public function __construct()
    {
       $url = $this->parseUrl();
        
        // Checking if array is null
        if( $url == NULL)
        {
            $url = [$this->controller];
        }

        // Cheking existance of file
        if( file_exists('../app/controllers/' . $url[0] . '.php') )
        {
            $this->controller = $url[0];

            // Deleting from array
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        // Instansiasi
        $this->controller = new $this->controller;

        // Checking Method
        if( isset($url[1]) )
        {
            // Checking existance of method
            if( method_exists($this->controller, $url[1]) )
            {
                $this->method = $url[1];

                // Deleting from array
                unset($url[1]);
            }
        }

        // Parameternya
        if( !empty($url) )
        {
            // Setting value for params
            $this->params = array_values($url);
        }

        // Running controller, method and send params (if exists)
        call_user_func_array([$this->controller, $this->method], $this->params);

    }

    // Parsing URL
    public function parseUrl()
    {
        if( isset($_GET['url']) ){

            // Cleaning url that is got using rtrim
            $url = rtrim($_GET['url'], '/');

            // Cleaning Url from any dangerous character
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // Dividing url
            $url = explode('/', $url);
            return $url;
        }
    }
}
