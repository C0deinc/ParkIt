<?php
require_once 'database.php';

class Signin {

    public $id;
    public $username;
    public $email;
    public $password;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function sign_in(){
        $sql = "SELECT * FROM account WHERE (username = :username OR email = :email);";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':username', $this->username);
        $query->bindParam(':email', $this->email);
        if ($query->execute()) {
            $accountData = $query->fetch(PDO::FETCH_ASSOC);
            if ($accountData && password_verify($this->password, $accountData['password'])) {
                $this->id = $accountData['id'];
                
                // Check if it's the user's first time logging in
                if ($accountData['first_login'] == 1) {
                    // Set first_login to 0 to indicate that the user has logged in before
                    $sqlUpdate = "UPDATE account SET first_login = 0 WHERE id = :id";
                    $queryUpdate = $this->db->connect()->prepare($sqlUpdate);
                    $queryUpdate->bindParam(':id', $this->id);
                    $queryUpdate->execute();
                    
                    return true; // Return true to indicate successful login for the first time
                }
                
                return true; // Return true for subsequent logins
            }
        }
        return false;
    }

    function is_first_login() {

        $sql = "SELECT first_login FROM account WHERE id = :id";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':id', $this->id);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return ($result['first_login'] == 1); // Return true if it's the first login, false otherwise
    } 

    function id(){
        $sql = "SELECT * FROM account WHERE id = :id;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':id', $this->id);
    
        if ($query->execute()) {
            $accountData = $query->fetch(PDO::FETCH_ASSOC);
    
            if ($accountData && password_verify($this->password, $accountData['password'])) {
                $this->id = $accountData['id'];
                return true;
            }
        }
    
        return false;
    }
}

?>
