<?php

/*
*
*/

class About extends Controller{
	
	public function index(){
	
		$data  =  'About Page';
		
		
	//Load the page header and pass $data as parameter
        $this->view('templates/header',$data);
    //Load the required view(page) and pass $data as parameter    
        $this->view('about',$data);
    //Load the page footer and pass $data as parameter
        $this->view('templates/footer',$data);
	}
}