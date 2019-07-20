<?php 
// require("../model/UserModel.php");
require("../model/UserModel.php");

$data = new UserModel();

$name = "";
$email = "";
$username = "";
$password = "";


// $data->name="rabee";
// $data->email="rabee@g.com";
// $data->username="rabmoree";
// $data->password="123";
// echo "Unit Test Case #1: ".$data->insert()."<br>";

// $data->password2="rio";
// $data->userID="1";
// echo "Unit Test Case #2: ".$data->updateData()."<br>";

// echo "Unit Test Case #3: ".$data->extractData()."<br>";

$data->userID="26";
// echo "Unit Test Case #4: ".$data->deleteData()."<br>";   

$data->name;
echo "Unit Test Case #1: ".$data->insert()."<br>";

?>