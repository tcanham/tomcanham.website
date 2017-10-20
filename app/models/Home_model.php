<?php
/*
* Class to connect to a database and fetch the data for the home page
*/
class Home_model extends Main_model {
     public function get_news(){
        $conn = new Database(); // Create new Database object
        $conn =  $this->connect(); // Create connection to database
        $sql = 'SELECT * FROM news_items ORDER BY id desc'; // Write sql query
        $stmt = $conn -> prepare( $sql ); // Prepare statement
        $stmt-> execute(); // Execute statement
        $data =$stmt->fetchall(); // Assign the fetched data to a variable
       return $data; // Return data
     }
    
      public function get_projects(){
        $conn = new Database(); // Create new Database object
        $conn =  $this->connect(); // Create connection to database
        $sql = 'SELECT * FROM projects'; // Write sql query
        $stmt = $conn -> prepare( $sql ); // Prepare statement
        $stmt-> execute(); // Execute statement
        $data =$stmt->fetchall(); // Assign the fetched data to a variable
       return $data; // Return data
    }
}