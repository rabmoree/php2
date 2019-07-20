<?php
require("../database/Database.php");
class UserModel{
    public $name;
    public $email;
    public $username,$userID;
    public $password,$password2;
    private $db;
    private $tablename = "tableuser";

    public function __construct(){
        $this->db = new Database();
    }
    public function insert(){
        $sql = "INSERT INTO $this->tablename (name, email,username,password) VALUES('$this->name','$this->email','$this->username', '$this->password')";
        if ($this->db->execute($sql)) {
            return true;
        }
        else {
            return false ;
        }
    }

    public function updateData() {
        $sql = "UPDATE tableuser SET password = '$this->password2' where id = $this->userID";
        if($this->db->execute($sql)) {
            return true;
        }
        else {
            return false;
        }
    }

    public function extractData(){
        $sql = "SELECT * FROM $this->tablename";
        return $this->db->execute($sql);
    }

    public function deleteData() { 
        $sql = "DELETE from $this->tablename where id = $this->userID";
        if($this->db->execute($sql)) {
            return true;
        }
        else {
            return false;
        }
    }

    public function __destruct(){
        unset($this->db);
    }
}
// $userModel = new UserModel();
// $userModel->name = "Art";
// $userModel->email = "a@y.ocm";
// $userModel->username = "art123";
// $userModel->password = "testpassword";
// $userModel->insert();
?>