<?php
class Dbconnect extends PDO
{
    private $dbengine   = 'mysql';
    private $dbhost     = 'localhost';
    private $dbuser     = 'root';
    private $dbpassword = '12345';
    private $dbname     = 'surf';

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
?>