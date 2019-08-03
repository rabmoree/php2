<?php
require("../model/UserModel.php");
$data = new UserModel();
class UserController{
    private $userModel;

    public function __construct(){
        $this->userModel = new UserModel();
    }

    public function addUser($name, $email,$username, $password){
        //perform data validation
        if(empty($name) || empty($email) || empty($username) || empty($password)) {
            return "Please fill up required fields";
        }
        else {
            $this->userModel->name = $name;
            $this->userModel->email = $email;
            $this->userModel->username = $username;
            $this->userModel->password = $password;
            $this->userModel->insert();
            return true;
        }
    }

    public function updateUser($id, $password2){
        $test = $this->userModel->userID = $id;
        $res = $this->userModel->readData2();
        $rows = mysqli_num_rows($res);

        if(empty($id) || empty($password2)){
            return "Connot update with empty value";
        }
        else if($rows == 0 ) {
            return "Connot update! User does not exist";
        }
        else {
            $this->userModel->userID = $id;
            $this->userModel->password2 = $password2;
            $this->userModel->updateData();
            return true;
        }
    }

    public function getAllUser(){
        return $this->userModel->readData();
    }

    public function deleteUser($id){
        $test = $this->userModel->userID = $id;
        $res = $this->userModel->readData2();
        $rows = mysqli_num_rows($res);

        if(empty($id)){
            return "Connot update with empty value";
        }
        else if($rows == 0 ) {
            return "Connot update! User does not exist";
        }
        else {
            $this->userModel->userID = $id;
            $this->userModel->deleteData();
            return true;
        }

        // global $data;
        // $res = $data->readData();
        // while($info = mysqli_fetch_assoc($res)){
        //     if($info['id'] != $id){
        //         return "Connot delete! User does not exist!";
        //     }
        //     else {
        //         $this->userModel->userID = $id;
        //         $this->userModel->deleteData();
        //         return true;
        //     }

        // }
    }

    public function __destruct(){
        unset($this->userModel);
    }
}
?>