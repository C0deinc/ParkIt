<?php

require_once 'database.php';

    Class Personal{
        //attributes

        public $id;
        public $firstname;
        public $middlename;
        public $lastname;
        public $birthday;
        public $sex;
        public $barangay;
        public $city;
        public $province;
        public $zipcode;
        public $contactnumber;
        public $email;
        public $username;
        public $password;
        public $confirmpassword;


        protected $db;

        function __construct()
        {
            $this->db = new Database();
        }

        //Methods

        function add(){
            $sql = "INSERT INTO account (firstname, middlename, lastname, birthday, sex, barangay, city, province, zipcode, contactnumber, email, username, password, confirmpassword, first_login) VALUES 
            (:firstname, :middlename, :lastname, :birthday, :sex, :barangay, :city, :province, :zipcode, :contactnumber, :email, :username, :password, :confirmpassword, 1);";

            $query=$this->db->connect()->prepare($sql);
            $query->bindParam(':firstname', $this->firstname);
            $query->bindParam(':middlename', $this->middlename);
            $query->bindParam(':lastname', $this->lastname);
            $query->bindParam(':birthday', $this->birthday);
            $query->bindParam(':sex', $this->sex);
            $query->bindParam(':barangay', $this->barangay);
            $query->bindParam(':city', $this->city);
            $query->bindParam(':province', $this->province);
            $query->bindParam(':zipcode', $this->zipcode);
            $query->bindParam(':contactnumber', $this->contactnumber);
            $query->bindParam(':email', $this->email);
            $query->bindParam(':username', $this->username);
            // Hash the password securely using password_hash
            $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
            $query->bindParam(':password', $hashedPassword);
            // Hash the password securely using password_hash
            $hashedConfirmPassword = password_hash($this->confirmpassword, PASSWORD_DEFAULT);
            $query->bindParam(':confirmpassword', $hashedConfirmPassword);
            
            try {
                if($query->execute()){
                    return true;
                } else {
                    echo "Error inserting data: " . $query->errorInfo()[2];
                    return false;
                }
            } catch (PDOException $e) {
                // Log the error or throw exception
                throw new Exception("Database error: " . $e->getMessage());
            }	
        }

        function is_email_exist(){
            $sql = "SELECT * FROM account WHERE email = :email;";
            $query=$this->db->connect()->prepare($sql);
            $query->bindParam(':email', $this->email);
            if($query->execute()){
                if($query->rowCount()>0){
                    return true;
                }
            }
            return false;
        }
    }

?>