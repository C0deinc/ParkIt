<?php
    function fetchUserDetails() {
        try {
            // Assuming you have a method to fetch user details from the database
            $stmt = $this->connection->query("SELECT email, gender, contact, barangay, city, province, zipcode FROM users");
            $results = $stmt->fetch(PDO::FETCH_ASSOC);

            return $results;
        } catch (PDOException $e) {
            throw new Exception("Query error: " . $e->getMessage());
        }
    }

    function fetchUsername() {
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
    function fetchFullNames() {
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
?>