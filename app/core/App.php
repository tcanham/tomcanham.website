<?php
/*
*This class is responsible for loading the required controller and method
*
*/

class App{
    
    //Create the default variables
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    
    public function __construct(){
        
        $url = $this->parseUrl();
    //Check for class and if true assign the value from $url to $controller, else use default
        if(file_exists('app/controllers/' . $url[0] . '.php')){ 
            $this->controller = $url[0];
            unset($url[0]); //Remove the value 0 from the array
        }
    //Load the required controller class
        require_once 'app/controllers/' . $this->controller . '.php';
    //Create a new instance of the controller class 
        $this->controller = new $this->controller;
       
    //Check for a method in the url if true assign value from $url to $method, else use default
        if(isset($url[1])){
           if(method_exists($this->controller, $url[1])){
               $this->method = $url[1];
               unset($url[1]);//Remove the value 1 from the array
               
           }
        }
    //Check for values in $url if true assign values to $param, else assign an empty array   
        $this->params = $url ? array_values($url) : [];
        
    //Use Php function to call the class function with out known amount parameters
        call_user_func_array([$this->controller, $this->method],$this->params);
        
    }//End of Constructor
    
    
    //Function to trim and clean the string and explode it by /
    protected function parseUrl(){
        
      if(isset($_GET['url'])){
          $url = $_GET['url'];
          return $url = explode('/',filter_var(rtrim($url, '/'),FILTER_SANITIZE_URL));
      }
    
    }//End of parseUrl
}