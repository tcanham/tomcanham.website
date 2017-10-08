<?php

/*
*Class to display the home page
*/

class Portfolio extends Controller{
    
    //Function to load the model and view
    public function index(){
  
        $data['home'] = '';
    //Load the page header and pass $data as parameter
        $this->view('templates/header',$data);
    //Load the required view(page) and pass $data as parameter    
        $this->view('home',$data);
    //Load the page footer and pass $data as parameter
        $this->view('templates/footer',$data);
    }
}