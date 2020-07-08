<?php
    
        /**
        * DB Connection class
        */
        class Dbconnect extends PDO
        {
        	// Change the database setting with yours accordingly
            private $dbengine   = 'mysql';
            private $dbhost     = 'localhost';
            private $dbuser     = 'root'; // Set your database username
            private $dbpassword = 'roma1488chne'; //Set your database password
            private $dbname     = 'surf'; // This can be changed too into yours

        	// Set the database handler to null
        	public $dbh = null;

        	function __construct()
        	{
        		try{

        			// Connect to the database and save the DB instance in $dbh
	                $this->dbh = new PDO("".$this->dbengine.":host=$this->dbhost; dbname=$this->dbname", $this->dbuser, $this->dbpassword);

	               	// This will allow me to have objects format of my data everytime i fetch from my database
	               	// Or we'll have to do it in each function in which we query data from database
	                $this->dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

	            }
	            catch (PDOException $e){
	            	// if any error throw an exception
	                $e->getMessage();
	            }
        	}


        }
