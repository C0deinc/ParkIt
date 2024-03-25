<?php
class Database{
    private $host = 'localhost';
    private $username = 'root';
    private $password = ''; 
    private $database = 'parkit';
    protected $connection;

    function connect(){
        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->database", 
                                         $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Log the error or throw exception
            throw new Exception("Database connection error: " . $e->getMessage());
        }
        return $this->connection;
    }

    function process_db($sql, $params = array(), $flag = false) {
        try {
            $stmt = $this->connection->prepare($sql);
            $stmt->execute($params);
            if ($flag) {
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $data;
            }
        } catch (PDOException $e) {
            throw new Exception("Error executing query: " . $e->getMessage());
        }
    }

    function insert_id() {
        return $this->connection->lastInsertId();
    }

    function __destruct() {
        $this->connection = null;
    }
}
?>