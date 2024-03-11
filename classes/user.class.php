<?php

require_once 'database.php';

Class Account{
    //attributes

    public $id ;
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
    public $companyname;
    public $contactpersonname;
    public $contactpersonposition;
    public $first_login;
    public $profile_pic;


    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    //Methods

    function add(){
        $sql = "INSERT INTO userdetails (username, email, password, fname, lname, contact, gender) VALUES 
        (:username, email, :password, :fname, :lname, :contact, :gender);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':username', $this->username);
        $query->bindParam('email', $this->email);
        $query->bindParam(':password', $this->password);
        $query->bindParam(':fname', $this->fname);
        $query->bindParam(':lname', $this->lname);
        $query->bindParam(':contact', $this->contact);
        $query->bindParam(':gender', $this->gender);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    function edit(){
        $sql = "UPDATE account SET firstname=:firstname, middlename=middlename, lastname=:lastname, email=:email, sex=:sex, contactnumber=:contactnumber WHERE id = :id;";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam('middlename', $this->middlename);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':sex', $this->sex);
        $query->bindParam(':contactnumber', $this->contactnumber);
        $query->bindParam(':id', $this->id);

        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    function fetch($id){
        $sql = "SELECT * FROM account WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $id );
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function show(){
        $sql = "SELECT * FROM account ORDER BY firstname ASC;";
        $query=$this->db->connect()->prepare($sql);
        $data = null;
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

}

?>