<?php
/*
* Class to create a connection to the database for use by child model classes
* The constants are included via the config file in the core folder
*/
class Database{
     public function connect(){
            try {
            $conn = new PDO("mysql:host=".HOST.";dbname=".NAME, USER, PASS); // Make the connection to the database
            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set the PDO error mode to exception
            }
        catch(PDOException $e) // Catch error
            {
            echo "Connection failed: " . $e->getMessage(); // Echo error message
            }
         return $conn; // Return the connection
    } 

}