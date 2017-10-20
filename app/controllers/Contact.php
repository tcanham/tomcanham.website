<?php
class Contact extends Controller{
    
    //Function to load the model and view
    public function index(){
    //Load the required model by callling the parent model function
        $contact_page_data = $this->model('Contact_model');
     //Call the required model->function and assign values to the $data variable
        $data['contact'] = $contact_page_data->get_data();
    //Load the page header and pass $data as parameter
        $this->view('templates/header',$data);
    //Load the required view(page) and pass $data as parameter    
        $this->view('contact',$data);
    //Load the page footer and pass $data as parameter
        $this->view('templates/footer',$data);
    }
}