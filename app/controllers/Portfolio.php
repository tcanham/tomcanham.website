<?php

/*
*Class to display the home page
*/

class Portfolio extends Controller{
    
  //Function to load the model and view
    public function index(){
    //Load the required model by callling the parent model function
        $portfolio_page_data = $this->model('Portfolio_model');
     //Call the required model->function and assign values to the $data variable
        $data['portfolio'] = $portfolio_page_data->get_data();
    //Load the page header and pass $data as parameter
        $this->view('templates/header',$data);
    //Load the required view(page) and pass $data as parameter    
        $this->view('portfolio',$data);
    //Load the page footer and pass $data as parameter
        $this->view('templates/footer',$data);
    }
}