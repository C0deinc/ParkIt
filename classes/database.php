<?php

class Database
{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'parkit';
    protected $connection;

    public function connect()
    {
        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->connection;
        } catch (PDOException $e) {
            throw new Exception("Connection error: " . $e->getMessage());
        }
    }

    public function executeQuery($query, $params = [])
    {
        try {
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        } catch (PDOException $e) {
            throw new Exception("Query execution error: " . $e->getMessage());
        }
    }

    public function fetchAll($query, $params = [])
    {
        $statement = $this->executeQuery($query, $params);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetchOne($query, $params = [])
    {
        $statement = $this->executeQuery($query, $params);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function fetchUsername() {
        try {
            // Assuming 'username' is the column you want to fetch
            $stmt = $this->connection->query("SELECT username FROM account LIMIT 1");
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            // Return the username
            return isset($result['username']) ? $result['username'] : null;
        } catch (PDOException $e) {
            throw new Exception("Query error: " . $e->getMessage());
        }
    }
    public function fetchFullNames() {
        try {
            // Assuming you have a method to fetch full names from the database
            $stmt = $this->connection->query("SELECT firstname, middlename, lastname FROM account");
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            $fullNames = [];
            foreach ($results as $result) {
                // Concatenate first name, middle name, and last name
                $fullName = $result['firstname'] . ' ' . $result['middlename'] . ' ' . $result['lastname'];
                $fullNames[] = $fullName;
            }
    
            // Concatenate all full names into a single string
            $fullNamesString = implode(', ', $fullNames);
    
            return $fullNamesString;
        } catch (PDOException $e) {
            throw new Exception("Query error: " . $e->getMessage());
        }
    }
        function fetchUserDetails() {
        try {
            // Assuming you have a method to fetch user details from the database
            $stmt = $this->connection->query("SELECT email, sex, contactnumber, barangay, city, province, zipcode FROM account");
            $results = $stmt->fetch(PDO::FETCH_ASSOC);

            return $results;
        } catch (PDOException $e) {
            throw new Exception("Query error: " . $e->getMessage());
        }
    }
}
?>