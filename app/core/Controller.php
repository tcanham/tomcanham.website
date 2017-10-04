<?php
/*
*This is the parent class it contains the functions to load the models and views required by the child classes
*/

class Controller{
    //Function to load a model
    public function model($model){
        require_once 'app/models/' . $model . '.php';
        return new $model();
    }
    //Function to load a view
    public function view($view, $data){
        require_once 'app/views/' . $view . '.php';
        
    }
    
}
//Still To Do try/catch and /or file check!!