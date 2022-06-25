<?php 

class App {

    public function __construct()
    {
       $url = $this->parseUrl();
       var_dump(($url));
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
