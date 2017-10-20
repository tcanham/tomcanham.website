<?php
/*
* Class to fetch the home page data (via a model) from the database and load it into the home page view.
*/
class Home extends Controller{

    public function index(){
        
        $data['page_title'] = 'Tom Canham Web development/Home';//Set the page title
        $data['heading'] = 'Latest News';//Set the page heading
        /*Load models*/
        $home_page_data = $this->model('Home_model'); // Create new instance of the home model
        /*Fetch data*/
        $data['news'] = $home_page_data->get_news(); // Call the function to fetch the news 
        $data['projects'] = $home_page_data->get_projects(); // Call the function to fetch the projects
       
        
        /* Call methods to load required views*/
        $this->view('templates/landing-page-header',$data);
       $this->view('home',$data); 
        $this->view('templates/footer',$data);
    }  
}